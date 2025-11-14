<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\Extension\Lib\PlantillasPDF;

use Closure;

/**
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
class BaseTemplate
{
    public function qrImageHeader(): Closure
    {
        return function () {
            // si no hay modelo o
            // el modelo no es una factura de cliente o
            // la factura no está dada de alta en Veri*Factu o
            // la factura está anulada, no añadimos el QR
            if (empty($this->headerModel)
                || $this->headerModel->modelClassName() !== 'FacturaCliente'
                || false === $this->headerModel->verifactuCheckAlta()
                || $this->headerModel->verifactuCheckAnulacion()) {
                return;
            }

            // se descomentará cuando el plugin trabaje en modo producción
            // si la empresa está en modo pruebas y el modo debug no está activado, no añadimos el QR
            /*if ($this->headerModel->getCompany()->vf_debug_mode && !Tools::config('debug')) {
                return;
            }*/

            return $this->headerModel->verifactuGetQr();
        };
    }

    public function qrTitleHeader(): Closure
    {
        return function () {
            // si no hay modelo o
            // el modelo no es una factura de cliente o
            // la factura no está dada de alta en Veri*Factu o
            // la factura está anulada, no añadimos el QR
            if (empty($this->headerModel)
                || $this->headerModel->modelClassName() !== 'FacturaCliente'
                || false === $this->headerModel->verifactuCheckAlta()
                || $this->headerModel->verifactuCheckAnulacion()) {
                return;
            }

            // se descomentará cuando el plugin trabaje en modo producción
            // si la empresa está en modo pruebas y el modo debug no está activado, no añadimos el QR
            /*if ($this->headerModel->getCompany()->vf_debug_mode && !Tools::config('debug')) {
                return;
            }*/

            return 'QR tributario';
        };
    }

    public function qrSubtitleHeader(): Closure
    {
        return function () {
            // si no hay modelo o
            // el modelo no es una factura de cliente o
            // la factura no está dada de alta en Veri*Factu o
            // la factura está anulada o
            // el ejercicio no está en modo verifactu, no añadimos el título
            if (empty($this->headerModel)
                || $this->headerModel->modelClassName() !== 'FacturaCliente'
                || false === $this->headerModel->verifactuCheckAlta()
                || $this->headerModel->verifactuCheckAnulacion()
                || $this->headerModel->getExercise()->vf_mode !== 'verifactu') {
                return;
            }

            // se descomentará cuando el plugin trabaje en modo producción
            // si la empresa está en modo pruebas y el modo debug no está activado, no añadimos el QR
            /*if ($this->headerModel->getCompany()->vf_debug_mode && !Tools::config('debug')) {
                return;
            }*/

            return 'VERI*FACTU';
        };
    }
}