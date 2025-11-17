<?php
/**
 * Lib/Invoice2DataService.php
 * Servicio para comunicarse con el servidor Flask de invoice2data
 */

namespace FacturaScripts\Plugins\ParseaFacturas\Lib;

class Invoice2DataService
{
    private $baseUrl;
    private $timeout;

    public function __construct()
    {
        // Configura la URL de tu servicio Flask
        $this->baseUrl = 'http://172.19.0.7:5500';
        //$this->baseUrl = 'http://localhost:5500';
        //$this->baseUrl = 'http://192.168.1.45:5500';
        $this->timeout = 30; // segundos
    }

/**
 * Parsea una factura PDF usando invoice2data
 * 
 * @param string $filePath Ruta del archivo PDF
 * @param string $provider Proveedor de la factura (vodafone, movistar, etc.)
 * @return array Resultado con 'success' y 'data' o 'error'
 */
public function parseInvoice(string $filePath, string $provider = ''): array
{
    if (!file_exists($filePath)) {
        return [
            'success' => false,
            'error' => 'File not found'
        ];
    }

    if (empty($provider)) {
        return [
            'success' => false,
            'error' => 'Provider is required'
        ];
    }

    try {
        $ch = curl_init();
        
        $cFile = new \CURLFile($filePath, 'application/pdf', basename($filePath));
        
        $postData = [
            'file' => $cFile,
            'provider' => $provider  // Añadimos el proveedor
        ];

        curl_setopt_array($ch, [
            CURLOPT_URL => $this->baseUrl . '/api/extract',
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_HTTPHEADER => [
                'Accept: application/json'
            ]
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        
        curl_close($ch);

        if ($error) {
            return [
                'success' => false,
                'error' => 'CURL Error: ' . $error
            ];
        }

        if ($httpCode !== 200) {
            return [
                'success' => false,
                'error' => 'HTTP Error: ' . $httpCode
            ];
        }

        $data = json_decode($response, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'Invalid JSON response'
            ];
        }

        return [
            'success' => true,
            'data' => $data
        ];

    } catch (\Exception $e) {
        return [
            'success' => false,
            'error' => $e->getMessage()
        ];
    }
}
    /**
     * Verifica si el servicio está disponible
     * 
     * @return bool
     */
    public function isServiceAvailable(): bool
    {
        try {
            $ch = curl_init();
            
            curl_setopt_array($ch, [
                CURLOPT_URL => $this->baseUrl . '/health',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 5,
                CURLOPT_NOBODY => true
            ]);

            curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            return $httpCode === 200;

        } catch (\Exception $e) {
            return false;
        }
    }
}
