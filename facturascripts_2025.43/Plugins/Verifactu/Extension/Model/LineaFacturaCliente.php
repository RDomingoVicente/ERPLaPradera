<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\Extension\Model;

use Closure;
use FacturaScripts\Core\Tools;

/**
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
class LineaFacturaCliente
{
    public function clear(): Closure
    {
        return function () {
            $this->vf_send = true;
        };
    }

    public function deleteBefore(): Closure
    {
        return function () {
            // si la factura está dada de alta o anulada en verifactu, no se pueden eliminar líneas
            $invoice = $this->getDocument();
            if (!empty($invoice->id()) && ($invoice->verifactuCheckAlta() || $invoice->verifactuCheckAnulacion())) {
                Tools::log()->warning('verifactu-invoice-has-events', [
                    'model-code' => $this->id(),
                    'model-class' => $this->modelClassName(),
                ]);
                return false;
            }
        };
    }

    public function saveBefore(): Closure
    {
        return function () {
            // si no hay cambios, no hacemos nada
            if (empty($this->getDirty())) {
                return;
            }

            // si la factura está dada de alta o anulada en verifactu, no se pueden añadir o editar líneas
            $invoice = $this->getDocument();
            if (!empty($invoice->id()) && ($invoice->verifactuCheckAlta() || $invoice->verifactuCheckAnulacion())) {
                Tools::log()->warning('verifactu-invoice-has-events', [
                    'model-code' => $this->id(),
                    'model-class' => $this->modelClassName(),
                ]);
                return false;
            }
        };
    }
}
