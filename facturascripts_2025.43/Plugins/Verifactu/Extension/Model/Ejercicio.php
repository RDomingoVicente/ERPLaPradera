<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\Extension\Model;

use Closure;
use FacturaScripts\Core\Tools;
use FacturaScripts\Core\Where;
use FacturaScripts\Plugins\Verifactu\Lib\Verifactu\RegistroEvento\JsonFinNoVerifactu;
use FacturaScripts\Plugins\Verifactu\Lib\Verifactu\RegistroEvento\JsonInicioNoVerifactu;
use FacturaScripts\Plugins\Verifactu\Model\VerifactuRegistroFactura;
use FacturaScripts\Dinamic\Model\Empresa as DinEmpresa;

/**
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
class Ejercicio
{
    public function deleteBefore(): Closure
    {
        return function () {
            // si el ejercicio tiene registros de factura, no se puede eliminar
            if (count($this->verifactuGetRegistroFactura()) > 0) {
                Tools::log()->warning('verifactu-exercise-has-events', [
                    'model-code' => $this->id(),
                    'model-class' => $this->modelClassName(),
                ]);
                return false;
            }
        };
    }

    public function getCompany(): Closure
    {
        return function (): DinEmpresa {
            $company = new DinEmpresa();
            $company->load($this->idempresa);
            return $company;
        };
    }

    public function saveUpdateBefore(): Closure
    {
        return function () {
            // si se cambió la columna vf_mode y no estaba vacía, no se puede cambiar
            if ($this->isDirty('vf_mode') && !empty($this->getOriginal('vf_mode'))) {
                Tools::log()->warning('verifactu-exercise-mode-change', [
                    'model-code' => $this->id(),
                    'model-class' => $this->modelClassName(),
                ]);
                return false;
            }

            // si se cambió la columna vf_mode, antes estaba vacía y ahora no, y el modo es no-verifactu, registramos evento
            if ($this->isDirty('vf_mode') && empty($this->getOriginal('vf_mode')) && $this->vf_mode === 'no-verifactu') {
                JsonInicioNoVerifactu::generate($this);
            }
        };
    }

    public function saveInsertBefore(): Closure
    {
        return function () {
            // si el modo ya está relleno, no hacemos nada
            if (!empty($this->vf_mode)) {
                return;
            }

            // restamos a la fecha de inicio y fin del ejercicio un año
            $yearStart = date(Tools::DATE_STYLE, strtotime('-1 year', strtotime($this->fechainicio)));
            $yearEnd = date(Tools::DATE_STYLE, strtotime('-1 year', strtotime($this->fechafin)));

            // buscamos un ejercicio de la misma empresa del año anterior
            $where = [
                Where::column('idempresa', $this->idempresa),
                Where::column('fechainicio', $yearStart, '>='),
                Where::column('fechafin', $yearEnd, '<='),
            ];

            // si no existe o el nuevo ejercicio ya tiene modo, no hacemos nada
            $previousExercise = new self();
            if (!$previousExercise->loadWhere($where) || !empty($this->vf_mode)) {
                return;
            }

            // usamos el mismo modo de verifactu que el ejercicio anterior
            $this->vf_mode = $previousExercise->vf_mode;
        };
    }

    public function saveInsert(): Closure
    {
        return function () {
            // restamos a la fecha de inicio y fin del ejercicio un año
            $yearStart = date(Tools::DATE_STYLE, strtotime('-1 year', strtotime($this->fechainicio)));
            $yearEnd = date(Tools::DATE_STYLE, strtotime('-1 year', strtotime($this->fechafin)));

            // buscamos un ejercicio de la misma empresa del año anterior
            $where = [
                Where::column('idempresa', $this->idempresa),
                Where::column('fechainicio', $yearStart, '>='),
                Where::column('fechafin', $yearEnd, '<='),
            ];

            // si no existe ejercicio anterior y el modo es no-verifactu, registramos el evento de inicio
            $previousExercise = new self();
            if (!$previousExercise->loadWhere($where) && $this->vf_mode === 'no-verifactu') {
                JsonInicioNoVerifactu::generate($this);
                return;
            }

            // si existe ejercicio anterior y el modo es no-verifactu, y el nuevo modo es verifactu, registramos el evento de fin
            if (!empty($previousExercise->id()) && $previousExercise->vf_mode === 'no-verifactu' && $this->vf_mode === 'verifactu') {
                JsonFinNoVerifactu::generate($previousExercise);
                return;
            }

            // si existe ejercicio anterior y el modo es verifactu, y el nuevo modo es no-verifactu, registramos el evento de fin e inicio
            if (!empty($previousExercise->id()) && $previousExercise->vf_mode === 'verifactu' && $this->vf_mode === 'no-verifactu') {
                JsonFinNoVerifactu::generate($previousExercise);
                JsonInicioNoVerifactu::generate($this);
            }
        };
    }

    public function verifactuGetRegistroFactura(): Closure
    {
        return function (string $mode = ''): array {
            $where = [Where::column('codejercicio', $this->codejercicio)];

            if (!empty($mode)) {
                $where[] = Where::column('mode', $mode);
            }

            return VerifactuRegistroFactura::all($where, ['id' => 'ASC']);
        };
    }
}
