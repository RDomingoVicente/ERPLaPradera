<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\CronJob;

use FacturaScripts\Core\Template\CronJobClass;
use FacturaScripts\Core\Where;
use FacturaScripts\Dinamic\Model\Empresa;
use FacturaScripts\Plugins\Verifactu\Lib\Verifactu\JsonTrait;
use FacturaScripts\Plugins\Verifactu\Lib\Verifactu\RegistroFactura\Hash;
use FacturaScripts\Plugins\Verifactu\Lib\Verifactu\RegistroFactura\Signature;
use FacturaScripts\Plugins\Verifactu\Model\VerifactuRegistroFactura as ModelVerifactuRegistroFactura;

/**
 * Clase para generar el hash y firma de los registros de facturas de Verifactu.
 *
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
final class VerifactuRegistroFacturaHashSignature extends CronJobClass
{
    use JsonTrait;

    const JOB_NAME = 'verifactu-invoice-hash-signature';

    public static function run(): void
    {
        self::echo("\n\n* JOB: " . self::JOB_NAME . ' ...');

        // recorremos las empresas de Verifactu
        foreach (self::getCompanies() as $company) {
            self::echo("\n- Empresa: " . $company->nombrecorto);

            // si la empresa no está configurada, saltamos
            if (false === $company->verifactuIsConfigured(false)) {
                self::echo("\n-- Empresa no configurada");
                continue;
            }

            foreach (self::getRegInvoices($company) as $regInvoice) {
                // generamos la huella del JSON
                if (false === Hash::generate($regInvoice)) {
                    self::echo("\n-- Error al generar la huella en el JSON: " . $regInvoice->file_json);
                    break;
                } elseif (false === Signature::generate($regInvoice)) {
                    // generamos la firma del JSON
                    self::echo("\n-- Error al generar la firma en el JSON: " . $regInvoice->file_json);
                    break;
                }
            }
        }

        self::saveEcho();
    }

    private static function getCompanies(): array
    {
        $where = [
            Where::column('vf_certificate', null, 'IS NOT'),
            Where::column('vf_password', null, 'IS NOT'),
        ];
        return Empresa::all($where);
    }

    private static function getRegInvoices(Empresa $company): array
    {
        $where = [
            Where::column('idempresa', $company->idempresa),
            Where::column('hash', null),
        ];
        return ModelVerifactuRegistroFactura::all($where, ['id' => 'ASC']);
    }
}