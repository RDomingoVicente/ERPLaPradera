<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\CronJob;

use DateTime;
use FacturaScripts\Core\Template\CronJobClass;
use FacturaScripts\Core\Tools;
use FacturaScripts\Core\Where;
use FacturaScripts\Dinamic\Lib\Email\NewMail;
use FacturaScripts\Dinamic\Model\Empresa;
use FacturaScripts\Dinamic\Model\User;

/**
 * Clase para comprobar la expiración del certificado digital de Verifactu.
 *
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
class VerifactuCertificateExpiration extends CronJobClass
{
    const JOB_NAME = 'verifactu-certificate-expiration';

    public static function run(): void
    {
        self::echo("\n\n* JOB: " . self::JOB_NAME . ' ...');

        // comprobamos si hay empresas con certificado próximo a expirar
        $companies = self::getCompanies();
        if (empty($companies)) {
            self::echo("\n- No hay certificados digitales de Verifactu próximos a expirar.");
            self::saveEcho();
            return;
        }

        // obtenemos los administradores
        $admins = self::getAdmin();
        if (empty($admins)) {
            self::echo("\n- No hay administradores para notificar la expiración de certificados digitales de Verifactu.");
            self::saveEcho();
            return;
        }

        // recorremos las empresas y notificamos a los administradores
        foreach ($companies as $company) {
            // comprobamos si al certificado caduca en 14 días, 7 días o mañana, si no es así, no notificamos
            $daysToExpiration = (new DateTime($company->vf_certificate_expiration))->diff(new DateTime(Tools::date()))->days;
            if (false === in_array($daysToExpiration, [1, 7, 14])) {
                continue;
            }

            self::echo("\n- El certificado digital de Verifactu de la empresa '{$company->nombrecorto}' expira el {$company->vf_certificate_expiration}.");

            foreach ($admins as $admin) {
                $newMail = NewMail::create()
                    ->subject('Certificado digital de Verifactu próximo a expirar')
                    ->body("El certificado digital de Verifactu de la empresa '{$company->nombrecorto}' expira el {$company->vf_certificate_expiration}. Por favor, renueve el certificado para evitar interrupciones en el servicio.")
                    ->to($admin->email, $admin->nick);

                if ($newMail->send()) {
                    self::echo("\n  - Notificación enviada a {$admin->email}.");
                    continue;
                }

                self::echo("\n  - Error al enviar la notificación a {$admin->email}.");
            }
        }

        self::saveEcho();
    }

    private static function getCompanies(): array
    {
        $where = [
            Where::isNotNull('vf_certificate'),
            Where::isNotNull('vf_certificate_expiration'),
            Where::gt('vf_certificate_expiration', Tools::date()),
            Where::lte('vf_certificate_expiration', Tools::date('+14 days')),
        ];
        return Empresa::all($where);
    }

    private static function getAdmin(): array
    {
        $where = [Where::eq('admin', 1)];
        return User::all($where);
    }
}
