<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\Lib\Verifactu;

use Exception;
use FacturaScripts\Core\Tools;
use FacturaScripts\Core\UploadedFile;
use FacturaScripts\Dinamic\Model\Empresa;

/**
 * Clase para manejar el certificado de VeriFactu guardado en la empresa.
 *
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
final class Certificate
{
    public static function checkCertificate(Empresa $company): void
    {
        // si no tiene certificado o ya tiene fecha de expiración, no hacemos nada
        if (empty($company->vf_certificate) || false === is_null($company->vf_certificate_expiration)) {
            return;
        }

        // validamos que el certificado
        if (self::validateCertificate(self::getCertificateP12($company), $company)) {
            $company->save();
        }
    }

    public static function getCertificateP12(Empresa $company): string
    {
        if (empty($company->vf_certificate)) {
            return '';
        }

        // cargamos la ruta de destino
        $destiny = self::getCertificateRoute($company);

        // creamos la ruta del archivo
        $filePath = $destiny . '/' . $company->vf_certificate;

        // devolvemos la ruta completa del archivo
        return file_exists($filePath)
            ? $filePath
            : '';
    }

    public static function getCertificatePem(Empresa $company): string
    {
        if (empty($company->vf_certificate)) {
            return '';
        }

        // cargamos la ruta de destino
        $destiny = self::getCertificateRoute($company);

        // creamos la ruta del archivo
        $filePath = $destiny . '/' . str_replace('.p12', '.pem', $company->vf_certificate);

        // devolvemos la ruta completa del archivo
        return file_exists($filePath)
            ? $filePath
            : '';
    }

    public static function setCertificateModal(Empresa $company, UploadedFile $uploadFile): bool
    {
        // copiamos el archivo en MyFiles
        if (!$uploadFile->move(Tools::folder('MyFiles'), $uploadFile->getClientOriginalName())) {
            Tools::log()->warning('error-moving-file', [
                '%file%' => $uploadFile->getClientOriginalName(),
                '%folder%' => Tools::folder('MyFiles'),
            ]);
            return false;
        }

        // guardamos el nombre del archivo en la empresa
        $company->vf_certificate = $uploadFile->getClientOriginalName();
        return self::setCertificateMyFiles($company);
    }

    public static function setCertificateMyFiles(Empresa $company): bool
    {
        // creamos la ruta de destino
        $destiny = self::getCertificateRoute($company);

        // si la carpeta no existe o no podemos crearla, terminamos
        if (false === Tools::folderCheckOrCreate($destiny)) {
            return false;
        }

        if (empty($company->vf_certificate)) {
            return true;
        }

        // comprobamos si el archivo está en MyFiles, si no está, terminamos
        $filePath = Tools::folder('MyFiles', $company->vf_certificate);
        if (false === file_exists($filePath)) {
            return false;
        }

        // formateamos el nombre del archivo manteniendo la extensión
        $newFileName = self::getFormatName($company->vf_certificate);
        $newFilePath = $destiny . '/' . $newFileName;

        // lo movemos a la carpeta de Verifactu, si no podemos renombrarlo, devolvemos vacío
        if (false === rename($filePath, $newFilePath)) {
            Tools::log()->warning('verifactu-company-has-events', [
                '%file%' => $company->vf_certificate,
                '%folder%' => $destiny,
            ]);
            return false;
        }

        if (false === self::validateCertificate($newFilePath, $company)) {
            self::cleanupTempFiles([$newFilePath]);
            $company->vf_certificate = null;
            $company->vf_password = null;
            $company->vf_certificate_representative_cif = null;
            $company->vf_certificate_representative_name = null;
            $company->vf_certificate_seal = false;
            $company->vf_certificate_expiration = null;
            $company->save();
            return false;
        }

        // creamos el archivo .pem con el certificado y la clave privada
        if (false === self::createCertificatePem($newFilePath, $newFileName, $company)) {
            self::cleanupTempFiles([$newFilePath]);
            $company->vf_certificate = null;
            $company->vf_password = null;
            $company->vf_certificate_representative_cif = null;
            $company->vf_certificate_representative_name = null;
            $company->vf_certificate_seal = false;
            $company->vf_certificate_expiration = null;
            $company->save();
            return false;
        }

        // actualizamos el nombre del archivo en la empresa
        $company->vf_certificate = $newFileName;
        if (false === $company->save()) {
            self::cleanupTempFiles([$newFilePath]);
            Tools::log()->warning('error-saving-certificate', [
                '%file%' => $newFileName,
                '%folder%' => $destiny,
            ]);
        }

        return true;
    }

    /**
     * Limpia los archivos temporales
     *
     * @param array $files Array de rutas de archivos a eliminar
     */
    private static function cleanupTempFiles(array $files): void
    {
        foreach ($files as $file) {
            if (file_exists($file)) {
                @unlink($file);
            }
        }
    }

    /**
     * Convierte certificado P12 legacy (Windows/RC2) a formato compatible con OpenSSL 3
     *
     * @param string $certPath Ruta al certificado P12
     * @param string $password Contraseña del certificado
     * @return string Ruta al certificado (original o temporal convertido), cadena vacía en caso de error
     */
    private static function convertLegacyP12(string $certPath, string $password): string
    {
        if (!file_exists($certPath)) {
            Tools::log()->warning('certificate-file-not-found: ' . $certPath);
            return '';
        }

        $certContent = file_get_contents($certPath);
        if ($certContent === false) {
            Tools::log()->warning('cannot-read-certificate-file');
            return '';
        }

        // Intentar leer el certificado directamente primero
        $parsed = [];
        if (@openssl_pkcs12_read($certContent, $parsed, $password)) {
            // El certificado ya es compatible, devolver la ruta original
            return $certPath;
        }

        // Si falla, intentar con provider legacy usando openssl command
        // Esto es necesario para certificados P12 exportados de Windows con RC2-40-CBC
        $tempDir = dirname($certPath);
        $tempPem = $tempDir . '/temp_cert_' . uniqid() . '.pem';
        $tempKey = $tempDir . '/temp_key_' . uniqid() . '.pem';
        $tempP12New = $tempDir . '/temp_cert_new_' . uniqid() . '.p12';

        try {
            // Exportar certificado y clave, intentando primero con -legacy (OpenSSL 3.x)
            // y luego sin él para compatibilidad con versiones anteriores
            $legacyFlag = '-legacy';
            $exportCmd = sprintf(
                'openssl pkcs12 -in %s -passin pass:%s %s -nodes -out %s 2>&1',
                escapeshellarg($certPath),
                escapeshellarg($password),
                $legacyFlag,
                escapeshellarg($tempPem)
            );

            exec($exportCmd, $output, $returnCode);

            // Si falla con -legacy, intentar sin él
            if ($returnCode !== 0 || !file_exists($tempPem)) {
                $legacyFlag = '';
                $exportCmd = sprintf(
                    'openssl pkcs12 -in %s -passin pass:%s -nodes -out %s 2>&1',
                    escapeshellarg($certPath),
                    escapeshellarg($password),
                    escapeshellarg($tempPem)
                );

                exec($exportCmd, $output, $returnCode);

                if ($returnCode !== 0 || !file_exists($tempPem)) {
                    Tools::log()->warning('failed-to-export-certificate: ' . implode(' ', $output));
                    self::cleanupTempFiles([$tempPem, $tempKey, $tempP12New]);
                    return '';
                }
            }

            // Extraer solo la clave privada con el mismo flag que funcionó
            $keyCmd = sprintf(
                'openssl pkcs12 -in %s -passin pass:%s %s -nocerts -nodes -out %s 2>&1',
                escapeshellarg($certPath),
                escapeshellarg($password),
                $legacyFlag,
                escapeshellarg($tempKey)
            );

            exec($keyCmd, $keyOutput, $keyReturnCode);

            if ($keyReturnCode !== 0 || !file_exists($tempKey)) {
                Tools::log()->warning('failed-to-extract-private-key: ' . implode(' ', $keyOutput));
                self::cleanupTempFiles([$tempPem, $tempKey, $tempP12New]);
                return '';
            }

            // Crear nuevo P12 con algoritmo moderno (sin -legacy)
            $createCmd = sprintf(
                'openssl pkcs12 -export -in %s -inkey %s -out %s -passout pass:%s -keypbe PBE-SHA1-3DES -certpbe PBE-SHA1-3DES 2>&1',
                escapeshellarg($tempPem),
                escapeshellarg($tempKey),
                escapeshellarg($tempP12New),
                escapeshellarg($password)
            );

            exec($createCmd, $createOutput, $createReturnCode);

            if ($createReturnCode !== 0 || !file_exists($tempP12New)) {
                Tools::log()->warning('failed-to-create-modern-certificate: ' . implode(' ', $createOutput));
                self::cleanupTempFiles([$tempPem, $tempKey, $tempP12New]);
                return '';
            }

            // Verificar que el nuevo certificado funciona
            $newCertContent = file_get_contents($tempP12New);
            if ($newCertContent === false || !@openssl_pkcs12_read($newCertContent, $testParsed, $password)) {
                Tools::log()->warning('converted-certificate-validation-failed');
                self::cleanupTempFiles([$tempPem, $tempKey, $tempP12New]);
                return '';
            }

            // Limpiar archivos intermedios
            self::cleanupTempFiles([$tempPem, $tempKey]);

            // Reemplazar el certificado original con el convertido
            if (!@rename($tempP12New, $certPath)) {
                Tools::log()->warning('failed-to-replace-original-certificate');
                self::cleanupTempFiles([$tempP12New]);
                return '';
            }

            // Devolver la ruta al certificado original (ahora convertido)
            return $certPath;

        } catch (Exception $e) {
            Tools::log()->warning('exception-converting-certificate: ' . $e->getMessage());
            self::cleanupTempFiles([$tempPem, $tempKey, $tempP12New]);
            return '';
        }
    }

    private static function createCertificatePem(string $filePath, string $fileName, Empresa $company): bool
    {
        // cargamos la ruta de destino
        $destiny = self::getCertificateRoute($company);

        // creamos la ruta del archivo pem
        $filePathPem = $destiny . '/' . str_replace('.p12', '.pem', $fileName);

        // extraemos la información del certificado p12
        if (false === openssl_pkcs12_read(file_get_contents($filePath), $certs, $company->vf_password)) {
            Tools::log()->error('error-read-cert', [
                '%file%' => $filePath,
            ]);
            return false;
        }

        // creamos el archivo pem con el certificado y la clave privada en una sola operación
        $pemContent = $certs['cert'] . $certs['pkey'];
        if (false === file_put_contents($filePathPem, $pemContent)) {
            Tools::log()->error('error-write-cert', [
                '%file%' => $filePathPem,
            ]);
            return false;
        }

        return true;
    }

    private static function getCertificateRoute(Empresa $company): string
    {
        return Tools::folder('MyFiles', 'Verifactu', $company->id());
    }

    private static function getFormatName(string $fileName): string
    {
        return preg_replace('/[^a-zA-Z0-9\.\_\-]/', '', $fileName);
    }

    /**
     * Comprueba si el certificado ha expirado, si no, guardamos la fecha de expiración.
     *
     * @param Empresa $company
     * @param array $certInfo
     * @param string $filePath
     * @return bool
     */
    private static function isExpiredCertificate(Empresa &$company, array $certInfo, string $filePath): bool
    {
        $currentTime = time();
        if ($currentTime < $certInfo['validFrom_time_t'] || $currentTime > $certInfo['validTo_time_t']) {
            Tools::log()->warning('error-cert-expired', [
                '%file%' => $filePath,
                '%valid_from%' => date('Y-m-d H:i:s', $certInfo['validFrom_time_t']),
                '%valid_to%' => date('Y-m-d H:i:s', $certInfo['validTo_time_t']),
            ]);
            return false;
        }

        // guardamos la fecha de expiración en la empresa, está como timestamp la pasamos a date
        $company->vf_certificate_expiration = date(Tools::DATE_STYLE, $certInfo['validTo_time_t']);
        return true;
    }

    /**
     * Comprueba si un certificado es de tipo sello electrónico.
     *
     * @param array $certInfo
     * @return bool True si el certificado es de sello, false en caso contrario
     */
    private static function isSealCertificate(array $certInfo): bool
    {
        // OIDs específicos para certificados de sello electrónico
        $sealOIDs = [
            '0.4.0.1862.1.4',   // QCP-l: Policy for EU qualified certificate for electronic seals
            '0.4.0.1862.1.5',   // QCP-l-qscd: Policy for EU qualified certificate for electronic seals on QSCD
            '1.3.6.1.4.1.5734.3.5', // FNMT Certificado de Sello Electrónico
        ];

        // Verificar si el certificado tiene algún OID de sello electrónico
        if (isset($certInfo['extensions']['certificatePolicies'])) {
            $policies = $certInfo['extensions']['certificatePolicies'];
            foreach ($sealOIDs as $oid) {
                if (str_contains($policies, $oid)) {
                    return true;
                }
            }
        }

        // Verificar en el subject o subject alternative name si contiene "SELLO ELECTRONICO" o similar
        $subjectFields = ['CN', 'OU', 'O', 'description'];
        foreach ($subjectFields as $field) {
            if (isset($certInfo['subject'][$field])) {
                $value = strtoupper($certInfo['subject'][$field]);
                if (str_contains($value, 'SELLO ELECTRONICO') ||
                    str_contains($value, 'SELLO ELECTRÓNICO') ||
                    str_contains($value, 'ELECTRONIC SEAL')) {
                    return true;
                }
            }
        }

        // Comprobar en extensiones específicas
        if (isset($certInfo['extensions']['subjectAltName'])) {
            $altName = strtoupper($certInfo['extensions']['subjectAltName']);
            if (str_contains($altName, 'SELLO ELECTRONICO') ||
                str_contains($altName, 'SELLO ELECTRÓNICO') ||
                str_contains($altName, 'ELECTRONIC SEAL')) {
                return true;
            }
        }

        return false;
    }

    /**
     * Comprueba si el emisor del certificado está en la lista de proveedores cualificados.
     *
     * @param array $certInfo Información del certificado
     * @return bool True si el emisor es un proveedor cualificado
     */
    private static function isQualifiedProvider(array $certInfo): bool
    {
        // Lista de OIDs de políticas de certificados cualificados según el reglamento eIDAS
        $qualifiedOIDs = [
            // OIDs para certificados cualificados según eIDAS
            '0.4.0.1862.1.1', // QCP: Qualified Certificate Policy
            '0.4.0.1862.1.2', // QCP+SSCD: Policy for EU qualified certificate issued on SSCD
            '0.4.0.1862.1.3', // QCP-w: Policy for EU qualified website authentication certificates
            '0.4.0.1862.1.4', // QCP-l: Policy for EU qualified certificate for electronic seals
            '0.4.0.1862.1.5', // QCP-l-qscd: Policy for EU qualified certificate for electronic seals on QSCD
            '0.4.0.1862.1.6', // QCP-n: Policy for EU qualified certificate for natural persons
            '0.4.0.1862.1.7', // QCP-n-qscd: Policy for EU qualified certificate for natural persons on QSCD

            // OIDs específicos de la FNMT-RCM (España)
            '1.3.6.1.4.1.5734.3.1', // FNMT Certificado Cualificado
            '1.3.6.1.4.1.5734.3.2', // FNMT Certificado AAPP
            '1.3.6.1.4.1.5734.3.3', // FNMT Certificado de Representante
            '1.3.6.1.4.1.5734.3.4', // FNMT Certificado de Sede Electrónica
            '1.3.6.1.4.1.5734.3.5', // FNMT Certificado de Sello Electrónico

            // OIDs específicos de la ACCV (España)
            '1.3.6.1.4.1.8149.2.1.1', // ACCV Certificado Cualificado

            // OIDs específicos de CamerFirma (España)
            '1.3.6.1.4.1.17326.10.1.1', // CamerFirma Certificado Cualificado

            // OIDs específicos de Firmaprofesional (España)
            '1.3.6.1.4.1.13177.10.1.1', // Firmaprofesional Certificado Cualificado
        ];

        // Verificar si el certificado tiene alguna política OID cualificada
        if (isset($certInfo['extensions']['certificatePolicies'])) {
            $policies = $certInfo['extensions']['certificatePolicies'];
            foreach ($qualifiedOIDs as $oid) {
                if (str_contains($policies, $oid)) {
                    return true;
                }
            }
        }

        // Verificar el emisor contra la lista de emisores conocidos (TSL)
        $issuer = $certInfo['issuer'];

        // Emisores conocidos de España incluidos en la TSL
        $knownIssuers = [
            'FNMT', 'Fábrica Nacional de Moneda y Timbre',
            'ACCV', 'Agencia de Tecnología y Certificación Electrónica',
            'Firmaprofesional', 'ANF', 'AC Camerfirma',
            'Agencia Notarial de Certificación', 'Izenpe',
            'Autoridad de Certificación de la Abogacía', 'Banesto CA',
            'Consejo General de la Abogacía', 'Dirección General de la Policía',
            'Servicio de Certificación del Colegio de Registradores'
        ];

        foreach ($knownIssuers as $knownIssuer) {
            // Comprobar si el emisor contiene el nombre de algún proveedor conocido
            if (isset($issuer['CN']) && str_contains($issuer['CN'], $knownIssuer)) {
                return true;
            }
            if (isset($issuer['O']) && str_contains($issuer['O'], $knownIssuer)) {
                return true;
            }
        }

        // Para una validación más exhaustiva, se podría implementar una conexión
        // a las APIs de la lista de confianza de la UE o de España para verificar
        // en tiempo real, pero eso puede requerir más recursos.
        Tools::log()->warning('error-cert-not-qualified', [
            '%issuer%' => $certInfo['issuer']['CN'] ?? 'Desconocido',
        ]);

        return false;
    }

    /**
     * Comprueba si un certificado es de tipo representante.
     *
     * @param Empresa $company La empresa propietaria del certificado
     * @param array $certInfo
     * @return bool
     */
    private static function isRepresentativeCertificate(Empresa &$company, array $certInfo): bool
    {
        $nameRepresentative = null;
        $nifRepresentative = null;

        // Extraer nombre y NIF del representante ---
        if (false === empty($certInfo['subject']['CN'])) {
            // Ejemplo: 99999910G PRUEBAS CERTIFICADO (R: A39200019)
            if (preg_match('/^([A-Z0-9]+)\s+(.+?)\s*\(R:/', $certInfo['subject']['CN'], $matches)) {
                $nifRepresentative = $matches[1];
                $nameRepresentative = trim($matches[2]);
            }
        } elseif (false === empty($certInfo['subject']['serialNumber'])) {
            // Si no está en el CN, intentar usar serialNumber (por ejemplo: IDCES-99999910G)
            if (preg_match('/([0-9]{8,}[A-Z])/', $certInfo['subject']['serialNumber'], $matches)) {
                $nifRepresentative = $matches[1];
            }
        }

        $company->vf_certificate_representative_cif = $nifRepresentative;
        $company->vf_certificate_representative_name = $nameRepresentative;
        return true;
    }

    /**
     * Válida si el certificado cumple con los requisitos de la normativa española y europea.
     * Comprueba si el certificado ha sido emitido por un proveedor cualificado en la lista TSL.
     *
     * @param string $filePath Ruta al archivo del certificado
     * @param Empresa $company
     * @return bool True si el certificado es válido, false en caso contrario
     */
    private static function validateCertificate(string $filePath, Empresa &$company): bool
    {
        $filePath = self::convertLegacyP12($filePath, $company->vf_password);
        if (empty($filePath)) {
            Tools::log()->warning('error-convert-legacy-cert', [
                '%file%' => $filePath,
            ]);
            return false;
        }

        // Extraer la información del certificado
        $certData = [];
        if (false === openssl_pkcs12_read(file_get_contents($filePath), $certData, $company->vf_password)) {
            Tools::log()->warning('error-read-cert', [
                '%file%' => $filePath,
            ]);
            return false;
        }

        // Verificar el formato del certificado
        if (empty($certData['cert'])) {
            Tools::log()->warning('error-cert-no-data', [
                '%file%' => $filePath,
            ]);
            return false;
        }

        // Obtener los detalles del certificado
        $certInfo = openssl_x509_parse($certData['cert']);
        if (false === $certInfo) {
            Tools::log()->warning('error-parse-cert', [
                '%file%' => $filePath,
            ]);
            return false;
        }

        // Validar el período de validez
        if (false === self::isExpiredCertificate($company, $certInfo, $filePath)) {
            return false;
        }

        // Verificar el emisor del certificado
        if (false === self::isQualifiedProvider($certInfo)) {
            return false;
        }

        // Comprobamos si es un certificado de sello electrónico
        $company->vf_certificate_seal = self::isSealCertificate($certInfo);

        // Comprobamos si es un certificado de representante
        if (false === self::isRepresentativeCertificate($company, $certInfo)) {
            return false;
        }

        return true;
    }
}
