<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\Extension\Lib\Tickets;

use Closure;
use FacturaScripts\Plugins\Verifactu\Lib\Verifactu\RegistroFactura\QR;
use Mike42\Escpos\Printer;

/**
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
class Normal
{
    public function setBodyAfter(): Closure
    {
        return function ($model, $printer) {
            // si no hay modelo o
            // el modelo no es una factura de cliente o
            // la factura no está dada de alta en Veri*Factu o
            // la factura está anulada, no añadimos nada
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

            static::$escpos->setJustification(Printer::JUSTIFY_CENTER);
            static::$escpos->text("\nQR tributario\n");
            static::$escpos->qrCode(QR::generate($model, true), Printer::QR_ECLEVEL_M, 7);

            // si el ejercicio es modo verifactu, añadimos el texto de verifactu
            if ($model->getExercise()->vf_mode === 'verifactu') {
                static::$escpos->text("\nVERI*FACTU\n");
            }

            static::$escpos->setJustification();
        };
    }
}