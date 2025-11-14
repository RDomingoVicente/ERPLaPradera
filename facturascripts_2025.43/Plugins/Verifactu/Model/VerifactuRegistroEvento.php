<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu\Model;

use FacturaScripts\Core\Session;
use FacturaScripts\Core\Template\ModelClass;
use FacturaScripts\Core\Template\ModelTrait;
use FacturaScripts\Core\Tools;
use FacturaScripts\Dinamic\Model\Ejercicio;
use FacturaScripts\Dinamic\Model\Empresa;
use FacturaScripts\Dinamic\Model\User;

/**
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
class VerifactuRegistroEvento extends ModelClass
{
    use ModelTrait;

    /** @var string */
    public $codejercicio;

    /** @var string */
    public $creation_date;

    /** @var string */
    public $file_json;

    /** @var string */
    public $hash;

    /** @var int */
    public $id;

    /** @var int */
    public $idempresa;

    /** @var string */
    public $nick;

    /** @var string */
    public $type;

    /** @var string */
    public $type_name;

    public function delete(): bool
    {
        Tools::log()->error('not-permitted-delete');
        return false;
    }

    public function getCompany(): Empresa
    {
        $company = new Empresa();
        $company->load($this->idempresa);
        return $company;
    }

    public function getExercise(): Ejercicio
    {
        $exercise = new Ejercicio();
        $exercise->load($this->codejercicio);
        return $exercise;
    }

    public function install(): string
    {
        // dependencias
        new Ejercicio();
        new User();

        return parent::install();
    }

    public static function tableName(): string
    {
        return 'verifactu_registros_eventos';
    }

    public function test(): bool
    {
        $this->creation_date = $this->creation_date ?? Tools::dateTime();
        $this->file_json = Tools::noHtml($this->file_json);
        $this->hash = Tools::noHtml($this->hash);
        $this->nick = $this->nick ?? Session::user()->nick;
        $this->type = Tools::noHtml($this->type);
        $this->type_name = Tools::noHtml($this->type_name);

        return parent::test();
    }
}
