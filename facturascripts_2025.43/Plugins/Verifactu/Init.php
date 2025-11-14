<?php
/**
 * Copyright (C) 2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\Verifactu;

use FacturaScripts\Core\Controller\ApiRoot;
use FacturaScripts\Core\DataSrc\Empresas;
use FacturaScripts\Core\Kernel;
use FacturaScripts\Core\Lib\AjaxForms\SalesLineHTML;
use FacturaScripts\Core\Plugins;
use FacturaScripts\Core\Template\InitClass;
use FacturaScripts\Dinamic\Model\Base\BusinessDocument;
use FacturaScripts\Plugins\Verifactu\Lib\Verifactu\Certificate;

/**
 * @author Daniel Fernández Giménez <hola@danielfg.es>
 */
final class Init extends InitClass
{
    public function init(): void
    {
        // cargamos las extensiones
        $this->loadExtension(new Extension\Controller\DocumentSticher());
        $this->loadExtension(new Extension\Controller\EditEmpresa());
        $this->loadExtension(new Extension\Controller\EditEstadoDocumento());
        $this->loadExtension(new Extension\Controller\EditFacturaCliente());
        $this->loadExtension(new Extension\Controller\ListFacturaCliente());
        $this->loadExtension(new Extension\Lib\PDF\PDFDocument());
        $this->loadExtension(new Extension\Lib\PlantillasPDF\BaseTemplate());
        $this->loadExtension(new Extension\Model\Ejercicio());
        $this->loadExtension(new Extension\Model\Empresa());
        $this->loadExtension(new Extension\Model\FacturaCliente());
        $this->loadExtension(new Extension\Model\LineaAlbaranCliente());
        $this->loadExtension(new Extension\Model\LineaFacturaCliente());
        $this->loadExtension(new Extension\Model\LineaPedidoCliente());
        $this->loadExtension(new Extension\Model\LineaPresupuestoCliente());

        // cargamos los Mods
        SalesLineHTML::addMod(new Mod\SalesLineMod());

        // evitamos copiar estás columnas de la factura al copiar, duplicar o rectificar la factura
        BusinessDocument::dontCopyField('vf_intents_alta');
        BusinessDocument::dontCopyField('vf_intents_anulacion');
        BusinessDocument::dontCopyField('vf_intents_subsanacion');
        BusinessDocument::dontCopyField('vf_manual_alta');
        BusinessDocument::dontCopyField('vf_manual_anulacion');
        BusinessDocument::dontCopyField('vf_sent');

        // cargamos los endpoints de la API
        Kernel::addRoute('/api/3/verifactu', 'ApiControllerVerifactu', -1);
        ApiRoot::addCustomResource('verifactu');

        // Tickets
        if (Plugins::isEnabled('Tickets')) {
            $this->loadExtension(new Extension\Lib\Tickets\Gift());
            $this->loadExtension(new Extension\Lib\Tickets\Normal());
        }
    }

    public function uninstall(): void
    {
    }

    public function update(): void
    {
        $this->checkCertificate();
    }

    // TODO: eliminar en la versión 1.0
    private function checkCertificate(): void
    {
        foreach (Empresas::all() as $company) {
            Certificate::checkCertificate($company);
        }
    }
}
