<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\Model;

use FacturaScripts\Core\Template\ModelClass;
use FacturaScripts\Core\Template\ModelTrait;
use FacturaScripts\Core\Tools;
use FacturaScripts\Dinamic\Model\FacturaCliente;

/**
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
class VerifactuRequerimientoLine extends ModelClass
{
    use ModelTrait;

    /** @var int */
    public $id;

    /** @var int */
    public $id_requerimiento;

    /** @var int */
    public $id_registro_factura;

    /** @var string */
    public $status;

    public function __get(string $name)
    {
        $registroFactura = $this->getRegistroFactura();
        return match ($name) {
            'get_exercise' => $registroFactura->getExercise()->nombre,
            'get_invoice' => $registroFactura->getInvoice()->codigo,
            default => parent::__get($name),
        };
    }

    public function delete(): bool
    {
        // si el requerimiento se está procesando o está completado, no se puede eliminar la línea
        $requirement = $this->getRequirement();
        if (in_array($requirement->status, [VerifactuRequerimiento::STATUS_PROCESSING, VerifactuRequerimiento::STATUS_COMPLETED])) {
            return false;
        }

        return parent::delete();
    }

    public function getInvoice(): FacturaCliente
    {
        $invoice = new FacturaCliente();
        $invoice->load($this->getRegistroFactura()->idfactura);
        return $invoice;
    }

    public function getRegistroFactura(): VerifactuRegistroFactura
    {
        $registroFactura = new VerifactuRegistroFactura();
        $registroFactura->load($this->id_registro_factura);
        return $registroFactura;
    }

    public function getRequirement(): VerifactuRequerimiento
    {
        $requirement = new VerifactuRequerimiento();
        $requirement->load($this->id_requerimiento);
        return $requirement;
    }

    public function install(): string
    {
        // dependencias
        new VerifactuRequerimiento();

        return parent::install();
    }

    public static function tableName(): string
    {
        return 'verifactu_requerimientos_lines';
    }

    public function test(): bool
    {
        $this->status = Tools::noHtml($this->status);

        return parent::test();
    }
}
