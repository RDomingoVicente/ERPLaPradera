<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\Extension\Lib\PDF;

use Closure;
use FacturaScripts\Core\Tools;

/**
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
class PDFDocument
{
    public function qrImageHeader(): Closure
    {
        return function ($model) {
            // si no hay modelo o
            // el modelo no es una factura de cliente o
            // la factura no está dada de alta en Veri*Factu o
            // la factura está anulada, no añadimos el QR
            if (empty($model)
                || $model->modelClassName() !== 'FacturaCliente'
                || false === $model->verifactuCheckAlta()
                || $model->verifactuCheckAnulacion()) {
                return;
            }

            // se descomentará cuando el plugin trabaje en modo producción
            // si la empresa está en modo pruebas y el modo debug no está activado, no añadimos el QR
            /*if ($model->getCompany()->vf_debug_mode && !Tools::config('debug')) {
                return;
            }*/

            return $model->verifactuGetQr();
        };
    }

    public function qrTitleHeader(): Closure
    {
        return function ($model) {
            // si no hay modelo o
            // el modelo no es una factura de cliente o
            // la factura no está dada de alta en Veri*Factu o
            // la factura está anulada, no añadimos el QR
            if (empty($model)
                || $model->modelClassName() !== 'FacturaCliente'
                || false === $model->verifactuCheckAlta()
                || $model->verifactuCheckAnulacion()) {
                return;
            }

            // se descomentará cuando el plugin trabaje en modo producción
            // si la empresa está en modo pruebas y el modo debug no está activado, no añadimos el QR
            /*if ($model->getCompany()->vf_debug_mode && !Tools::config('debug')) {
                return;
            }*/

            return 'QR tributario';
        };
    }

    public function qrSubtitleHeader(): Closure
    {
        return function ($model) {
            // si no hay modelo o
            // el modelo no es una factura de cliente o
            // la factura no está dada de alta en Veri*Factu o
            // la factura está anulada o
            // el ejercicio no está en modo verifactu, no añadimos el título
            if (empty($model)
                || $model->modelClassName() !== 'FacturaCliente'
                || false === $model->verifactuCheckAlta()
                || $model->verifactuCheckAnulacion()
                || $model->getExercise()->vf_mode !== 'verifactu') {
                return;
            }

            // se descomentará cuando el plugin trabaje en modo producción
            // si la empresa está en modo pruebas y el modo debug no está activado, no añadimos el QR
            /*if ($model->getCompany()->vf_debug_mode && !Tools::config('debug')) {
                return;
            }*/

            return 'VERI*FACTU';
        };
    }
}