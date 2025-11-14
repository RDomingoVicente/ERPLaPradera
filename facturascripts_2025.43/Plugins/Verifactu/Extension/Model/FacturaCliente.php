<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\Extension\Model;

use Closure;
use FacturaScripts\Core\Tools;
use FacturaScripts\Core\Where;
use FacturaScripts\Dinamic\Model\EstadoDocumento;
use FacturaScripts\Plugins\Verifactu\Lib\Verifactu\RegistroFactura\QR;
use FacturaScripts\Plugins\Verifactu\Lib\Verifactu\RegistroFactura\JsonAltaSubsanacion;
use FacturaScripts\Plugins\Verifactu\Lib\Verifactu\RegistroFactura\JsonAnulacion;
use FacturaScripts\Plugins\Verifactu\Model\VerifactuRegistroFactura;

/**
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
class FacturaCliente
{
    public function clear(): Closure
    {
        return function () {
            $this->vf_intents_alta = 0;
            $this->vf_intents_anulacion = 0;
            $this->vf_intents_subsanacion = 0;
            $this->vf_manual_alta = false;
            $this->vf_manual_anulacion = false;
            $this->vf_sent = false;
        };
    }

    public function deleteBefore(): Closure
    {
        return function () {
            // si la factura está dada de alta o anulada en verifactu, no se puede eliminar
            if ($this->verifactuCheckAlta() || $this->verifactuCheckAnulacion()) {
                Tools::log()->warning('verifactu-invoice-has-events', [
                    'model-code' => $this->id(),
                    'model-class' => $this->modelClassName(),
                ]);
                return false;
            }
        };
    }

    public function onUpdate(): Closure
    {
        return function () {
            // comprobamos si cambió el campo de estado
            if (!$this->isDirty('idestado')) {
                return;
            }

            // obtenemos el estado actual de la factura
            $status = new EstadoDocumento();
            if (!$status->load($this->idestado)) {
                return;
            }

            // si no tiene marcado el estado de mandar a verifactu, no hacemos nada
            if (!$status->vf_send) {
                return;
            }

            // enviamos la factura a verifactu
            $this->verifactuAlta();
        };
    }

    public function saveUpdateBefore(): Closure
    {
        return function () {
            // obtenemos los cambios
            $dirty = $this->getDirty();

            // si no hay cambios, no hacemos nada
            if (empty($dirty)) {
                return;
            }

            // si la factura no está dada de alta y baja en verifactu, permitimos guardar
            if (!$this->verifactuCheckAlta() && !$this->verifactuCheckAnulacion()) {
                return;
            }

            // si la factura no está dada de alta en verifactu, permitimos guardar
            if (!$this->verifactuCheckAlta()) {
                return;
            }

            // si la factura está dada de baja en verifactu, no permitimos guardar
            if ($this->verifactuCheckAnulacion()) {
                Tools::log()->warning('verifactu-invoice-has-events', [
                    'model-code' => $this->id(),
                    'model-class' => $this->modelClassName(),
                ]);
                return false;
            }

            // para depurar cambios en las columnas
            //var_dump($this->netosindto, $this->getOriginal('netosindto'), $this->isDirty('netosindto'), $dirty);

            // campos que puede modificar cualquier usuario
            $fieldsUserPermitted = ['cifnif', 'nombrecliente', 'direccion', 'apartado', 'codpostal', 'ciudad',
                'provincia', 'codpais', 'idestado', 'idcontactofact', 'idcontactoenv', 'fechaenvio', 'codagente',
                'codtrans', 'codigoenv', 'codcliente'];

            // campos que solo puede modificar el sistema
            $fieldsSystemPermitted = ['editable', 'idasiento', 'femail', 'vf_manual_alta', 'vf_sent'];

            // unimos ambos arrays
            $fieldsPermitted = array_merge($fieldsUserPermitted, $fieldsSystemPermitted);

            // comprobamos que los campos modificados son los permitidos
            foreach ($dirty as $field => $value) {
                if (!in_array($field, $fieldsPermitted)) {
                    Tools::log()->warning('verifactu-invoice-edit-not-permitted', [
                        'model-code' => $this->id(),
                        'model-class' => $this->modelClassName(),
                        '%field%' => $field,
                        '%permitted%' => implode(', ', $fieldsUserPermitted),
                    ]);
                    return false;
                }
            }
        };
    }

    public function verifactuGetRegistroFactura(): Closure
    {
        return function (string $mode = ''): array {
            $where = [Where::column('idfactura', $this->idfactura)];

            if (!empty($mode)) {
                $where[] = Where::column('mode', $mode);
            }

            return VerifactuRegistroFactura::all($where, ['id' => 'ASC']);
        };
    }

    public function verifactuCheckAlta(): Closure
    {
        return function (): bool {
            if ($this->vf_manual_alta) {
                return true;
            }

            foreach ($this->verifactuGetRegistroFactura() as $log) {
                if ($log->event === VerifactuRegistroFactura::EVENT_ALTA) {
                    return true;
                }
            }

            return false;
        };
    }

    public function verifactuCheckAnulacion(): Closure
    {
        return function (): bool {
            if ($this->vf_manual_anulacion) {
                return true;
            }

            foreach ($this->verifactuGetRegistroFactura() as $log) {
                if ($log->event === VerifactuRegistroFactura::EVENT_ANULACION) {
                    return true;
                }
            }

            return false;
        };
    }

    public function verifactuAlta(): Closure
    {
        return function (): bool {
            return JsonAltaSubsanacion::generate($this, VerifactuRegistroFactura::EVENT_ALTA);
        };
    }

    public function verifactuAnulacion(): Closure
    {
        return function (): bool {
            return JsonAnulacion::generate($this);
        };
    }

    public function verifactuSubsanacion(): Closure
    {
        return function (): bool {
            return JsonAltaSubsanacion::generate($this, VerifactuRegistroFactura::EVENT_SUBSANACION);
        };
    }

    public function verifactuGetQr(): Closure
    {
        return function (): string {
            return QR::generate($this);
        };
    }

    public function verifactuGetQrLink(): Closure
    {
        return function (bool $json = false): string {
            $link = QR::generate($this, true);
            return $json ? $link . '&formato=json' : $link;
        };
    }
}
