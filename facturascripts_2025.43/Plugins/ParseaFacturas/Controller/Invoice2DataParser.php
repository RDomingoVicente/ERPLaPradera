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
    public $providers;

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
            case 'clear':
                $this->clearAction();
                break;
        }

        // Preparamos los datos para la vista
        $this->invoiceData = $this->getInvoiceData();
        $this->selectedProvider = $this->getSelectedProvider();
        $this->providers = $this->getProviders();
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
                    // Asegurar que la sesión está iniciada
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                // Guardar los datos y el proveedor en sesión
                Session::set('invoice_data', $result['data']);
                Session::set('selected_provider', $provider);

    /*                // DEPURACIÓN: Verificar que se guardaron
    Tools::log()->error('Datos guardados en sesión', [
        'invoice_data_saved' => Session::get('invoice_data') !== null,
        'provider_saved' => Session::get('selected_provider') !== null,
        'session_id' => session_id()
    ]);*/
              // Al inicio del método, ANTES de procesar el formulario
              // Redirigir para limpiar el estado POST y recargar la página
              // $this->redirect($this->url());
    
            } else {
                Tools::log()->error($result['error'] ?? 'parse-error');
            }
        } catch (\Exception $e) {
            Tools::log()->error($e->getMessage());
        }
    }

    private function clearAction()
    {
        Session::clear('invoice_data');
        Session::clear('selected_provider');
    
        // Redirigir para limpiar la URL de parámetros
        $this->redirect($this->url());
    }

    public function getInvoiceData(): ?array
    {
        return Session::get('invoice_data');
    }

    public function getSelectedProvider(): ?string
    {
        return Session::get('selected_provider');
    }

    private function getProviders(): array
    {
        $providers = [];
        $filePath = __DIR__ . '/../Config/providers.conf';

        if (file_exists($filePath)) {
            $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                $parts = explode(':', $line);
                if (count($parts) === 3) {
                    $providers[] = [
                        'display_name' => $parts[0],
                        'internal_name' => $parts[1],
                        'internal_code' => $parts[2]
                    ];
                }
            }
        }

        return $providers;
    }
}