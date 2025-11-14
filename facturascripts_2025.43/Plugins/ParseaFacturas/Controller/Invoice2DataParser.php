<?php
namespace FacturaScripts\Plugins\ParseaFacturas\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Base\ControllerPermissions;
use FacturaScripts\Plugins\ParseaFacturas\Lib\Invoice2DataService;
use FacturaScripts\Core\Tools;
use FacturaScripts\Core\Session;

class Invoice2DataParser extends Controller
{
    private $invoice2dataService;
    public $invoiceData;
    public $selectedProvider;

    public function __construct(string $className = '', string $url = '')
    {
        parent::__construct($className ?: __CLASS__, $url);
        $this->invoice2dataService = new Invoice2DataService();
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['title'] = 'Parsea facturas en formato PDF';
        $pageData['menu'] = 'admin';
        $pageData['icon'] = 'fas fa-file-invoice';
        return $pageData;
    }

    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);

        $action = $this->request->get('action', '');
        
        switch ($action) {
            case 'upload':
                $this->uploadAction();
                break;
        }
        // Preparamos los datos para la vista
        $this->invoiceData = $this->getInvoiceData();
        $this->selectedProvider = $this->getSelectedProvider();     
    }

    private function uploadAction()
    {
        // Obtener el proveedor seleccionado
        $provider = $this->request->request->get('provider', '');
        
        // Validar que se seleccionó un proveedor
        if (empty($provider)) {
            Tools::log()->error('no-provider-selected');
            return;
        }
        
        if (!isset($_FILES['pdf_file'])) {
            Tools::log()->error('no-file-uploaded');
            return;
        }

        $file = $_FILES['pdf_file'];
        
        if ($file['type'] !== 'application/pdf') {
            Tools::log()->error('invalid-file-type');
            return;
        }

        if ($file['size'] > 10 * 1024 * 1024) {
            Tools::log()->error('file-too-large');
            return;
        }

        try {
            // Pasar el proveedor al servicio
            $result = $this->invoice2dataService->parseInvoice($file['tmp_name'], $provider);
            
            if ($result['success']) {
                Tools::log()->notice('invoice-parsed-successfully');
                // Guardar los datos y el proveedor en sesión
                Session::set('invoice_data', $result['data']);
                Session::set('selected_provider', $provider);
            } else {
                Tools::log()->error($result['error'] ?? 'parse-error');
            }
        } catch (\Exception $e) {
            Tools::log()->error($e->getMessage());
        }
    }

    public function getInvoiceData(): ?array
    {
        // Usar Session de forma estática
        $data = Session::get('invoice_data');
        if ($data) {
            Session::clear('invoice_data');
        }
        return $data;
    }
    public function getSelectedProvider(): ?string
    {
    $provider = Session::get('selected_provider');
    if ($provider) {
        Session::clear('selected_provider');
    }
    return $provider;
    }
}