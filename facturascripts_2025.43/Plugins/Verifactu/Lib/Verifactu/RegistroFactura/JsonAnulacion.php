<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\Lib\Verifactu\RegistroFactura;

use Exception;
use FacturaScripts\Core\Tools;
use FacturaScripts\Dinamic\Model\FacturaCliente;
use FacturaScripts\Plugins\Verifactu\Lib\FiscalNumberValidator;
use FacturaScripts\Plugins\Verifactu\Lib\Verifactu\JsonTrait;
use FacturaScripts\Plugins\Verifactu\Model\VerifactuRegistroFactura;

/**
 * Clase para generar el XML de anulación de una factura en Verifactu.
 *
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
final class JsonAnulacion
{
    use JsonTrait;
    use JsonRegistroFacturaTrait;

    public static function generate(FacturaCliente $invoice): bool
    {
        try {
            // comprobamos que la factura existe
            if (empty($invoice->id())) {
                Tools::log()->warning('record-not-found');
                return false;
            }

            // comprobamos que la empresa está configurada
            self::$company = $invoice->getCompany();
            if (false === self::$company->verifactuIsConfigured()) {
                return false;
            }

            // comprobamos si la factura no está dada de alta
            if (false === $invoice->verifactuCheckAlta()) {
                Tools::log()->warning('verifactu-invoice-not-high', [
                    'model-code' => $invoice->id(),
                    'model-class' => $invoice->modelClassName(),
                ]);
                return false;
            }

            // comprobamos si la factura ya está anulada
            if ($invoice->verifactuCheckAnulacion()) {
                Tools::log()->warning('verifactu-invoice-already-annulled', [
                    'model-code' => $invoice->id(),
                    'model-class' => $invoice->modelClassName(),
                ]);
                return false;
            }

            // cargamos los datos generales
            self::loadData($invoice);

            if (false === self::jsonIDVersion()) {
                return false;
            } elseif (false === self::jsonIDFactura()) {
                return false;
            } elseif (false === self::jsonRefExterna()) {
                return false;
            } elseif (false === self::jsonSinRegistroPrevio()) {
                return false;
            } elseif (false === self::jsonRechazoPrevio()) {
                return false;
            } elseif (false === self::jsonSistemaInformatico()) {
                return false;
            } elseif (false === self::jsonFechaHoraHusoGenRegistro()) {
                return false;
            }

            // creamos el array JSON
            $data = self::$json;
            self::$json = [];
            self::$json['RegistroAnulacion'] = $data;

            // Validamos el JSON
            if (!JsonValidate::validate(self::$json)) {
                return false;
            }

            // creamos el archivo JSON
            if (false === self::createFile(VerifactuRegistroFactura::EVENT_ANULACION)) {
                return false;
            }

            // creamos el evento de registro de factura
            if (false === self::createEvent(VerifactuRegistroFactura::EVENT_ANULACION)) {
                return false;
            }

            return true;
        } catch (Exception $e) {
            Tools::log()->error('xml-annulment-error', [
                '%error%' => $e->getMessage(),
                'model-code' => self::$invoice->id(),
                'model-class' => self::$invoice->modelClassName(),
            ]);
            return false;
        }
    }

    private static function jsonIDFactura(): bool
    {
        self::$json['IDFactura']['IDEmisorFacturaAnulada'] = FiscalNumberValidator::normaliceCifNif(self::$company->cifnif, '/^[A-Z0-9]{1,9}$/');
        self::$json['IDFactura']['NumSerieFacturaAnulada'] = Tools::textBreak(self::$invoice->codigo, 60, '');
        self::$json['IDFactura']['FechaExpedicionFacturaAnulada'] = date('d-m-Y', strtotime(self::$invoice->fecha));
        return true;
    }

    private static function jsonRechazoPrevio(): bool
    {
        // si el ejercicio de la factura está en modo no-vertifactu, terminamos
        if (self::$exercise->vf_mode === 'no-verifactu') {
            return true;
        }

        self::$json['RechazoPrevio'] = self::$invoice->vf_intents_anulacion > 0 ? 'S' : 'N';
        return true;
    }

    private static function jsonSinRegistroPrevio(): bool
    {
        self::$json['SinRegistroPrevio'] = self::$invoice->verifactuCheckAlta() ? 'N' : 'S';
        return true;
    }
}