<?php
/**
 * Esta es una modificación de Facturascripts\Lib\PDF\PDFDocument.php,
 * para simplificar ligeramente la información mostrada por el modelo de impresión
 * de factura original de FacturaScripts, dejar algo más espacio para las líneas
 * de detalle de factura y añadir varias opciones de personalización.
 *
 * Puede usarse libremente y modificar al gusto de cada uno.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace FacturaScripts\Plugins\FacturaPDF1\Lib\PDF;

use Exception;   // core v2025
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Model\Base\BusinessDocument;
use FacturaScripts\Core\Template\ExtensionsTrait;   // core v2025
use FacturaScripts\Core\Tools;
use FacturaScripts\Dinamic\Model\AgenciaTransporte;
use FacturaScripts\Dinamic\Model\AttachedFile;
use FacturaScripts\Dinamic\Model\Cliente;
use FacturaScripts\Dinamic\Model\Contacto;
use FacturaScripts\Dinamic\Model\CuentaBanco;
use FacturaScripts\Dinamic\Model\CuentaBancoCliente;
use FacturaScripts\Dinamic\Model\Divisa;
use FacturaScripts\Dinamic\Model\Empresa;
use FacturaScripts\Dinamic\Model\FacturaCliente;
use FacturaScripts\Dinamic\Model\Almacen;
use FacturaScripts\Dinamic\Model\FormaPago;
use FacturaScripts\Dinamic\Model\FormatoDocumento;
use FacturaScripts\Dinamic\Model\Impuesto;
use FacturaScripts\Dinamic\Model\Pais;
use FacturaScripts\Dinamic\Model\Proveedor;
use FacturaScripts\Dinamic\Model\ReciboCliente;
use Cezpdf;

/**
 * PDF document data.
 *
 * @author Cristo M. Estévez Hernández  <cristom.estevez@gmail.com>
 * @author Carlos García Gómez          <carlos@facturascripts.com>
 * Modificaciones: Robert Gargallo Prat
 */
use FacturaScripts\Core\Lib\PDF\PDFDocument as PDFDocumentOrig;
abstract class PDFDocument extends PDFDocumentOrig
{
    use ExtensionsTrait;   // core v2025

    const FOOTER_Y = 20;    // margen para el número de página (originalmente 10, pero en algunas impresoras se cortaba)

		const PARTIR_DIR = 170;   // ancho mínimo a partir del cual una dirección que tenga una parte entre paréntesis se partirá en 2 líneas justo por el paréntesis

		const PARTIR_PROV = 170;   // ancho mínimo a partir del cual un conjunto "cp + población + província + país" se partirá en 2 líneas justo por la província

    protected $xx;          // coordenada X máxima de los datos de la empresa (se usa para no solapar los datos del cliente con los de la empresa))
		
		protected $yy;          // coordenada Y temporal (se usa para sincronizar la altura entre los datos de la empresa y los del cliente)

		protected $xcompany;    // coordenada X de los datos de empresa
		
		protected $ycompany;    // coordenada Y de los datos de empresa

		protected $topY;   			// coordenada Y del margen superior de la página

		protected $yyhead;      // para facturas, presupuestos, etc. es la coordenada Y donde acaba la cabecera empresa/cliente y empieza el número y fecha de factura

		protected $hr, $hg, $hb, $lr, $lg, $lb, $rowgap;   // color del head y de las filas pares de las tablas (red, green, blue), y espaciadoo entre filas

		protected $r1, $g1, $b1, $r2, $g2, $b2;   // color de los textos adicionales 1 y 2

	 /**
		 * Devuelve la altura aproximada que ocupará un texto en el PDF, teniendo en cuenta que pueda quedar partido en varias líneas
		*/
		protected function textHeight(string $text, int $fontsize): int
		{
				$text = str_replace(array("\r\n", "\r"), "\n", $text);
				$ny = 0;   $a = explode("\n", $text);   // separar parágrafos (delimitados por un Intro)
				$espacio = $this->pdf->ez['pageWidth'] - $this->pdf->ez['leftMargin'] - $this->pdf->ez['rightMargin'];   // espacio horizontal del que dispone el texto antes de partirse en una nueva línea
				foreach ($a as $s) {
					if ($s == '') {  $anchotexto = 1;  } else {  $anchotexto = $this->pdf->getTextWidth($fontsize, $s);  }
					$ny += round(ceil($anchotexto / $espacio) * ($fontsize * 1.1));   // altura de todas las líneas que ocupa cada parágrafo de texto
				}
				return $ny;
		}

	 /**
		 * Devuelve el texto traducido al idioma de la factura. Si no existe traducción, entonces devuelve el texto por defecto.
		 * (usado para traducir el método de pago;  en las facturas originales de FacturaScripts se muestra únicamente la descripción del método de pago, que está siempre en español)
		 * Opcionalemnte puede pasarse un tercer parámetro para activar o desactivar dicha traducción (por ejemplo por medio de un setting) 
		*/
		protected function defTrans(string $text, string $defaulttext, bool $enabled = true): string
		{
      if ($enabled == false || $this->i18n->trans($text) == $text) {  return $defaulttext;  }
			else {  return $this->i18n->trans($text);  }
		}

		/**
		 * Similar al floatval de PHP pero que funciona tanto con coma decimal como con punto decimal (según esté configurado en el Panel de Control de FacturaScripts) y cualquier separador de miles
		*/
		protected function fval($s): float
		{
			if (is_string($s)) {
				$s = preg_replace('/[^0-9'.Tools::settings('default','decimal_separator').']/', '', $s);   // quita cualquier cosa que no sean números o el separador decimal
				$s = str_replace(',', '.', $s);   // convierte las comas en puntos
			}
			return floatval($s);
		}

   /**
     * Adds a new page
     *
     * @param string $orientation
     * @param bool $forceNewPage
    */
    public function newPage(string $orientation = 'portrait', bool $forceNewPage = false)
    {
        if ($this->pdf === null) {
            $this->pdf = new Cezpdf('a4', $orientation);
            $this->pdf->addInfo('Creator', 'FacturaScripts');
            $this->pdf->addInfo('Producer', 'FacturaScripts');
            $this->pdf->addInfo('Title', $this->getFileName());
            $this->pdf->tempPath = FS_FOLDER . '/MyFiles/Cache';

            $this->tableWidth = $this->pdf->ez['pageWidth'] - self::CONTENT_X * 2;

            $this->pdf->ezStartPageNumbers(self::CONTENT_X, self::FOOTER_Y, self::FONT_SIZE, 'left', '{PAGENUM} / {TOTALPAGENUM}');
        } elseif ($forceNewPage || $this->pdf->y < 100) {  // originalmente 200
            $this->pdf->ezNewPage();
            $this->insertedHeader = false;
        } else {
            $this->pdf->ezText("\n");
        }
    }

    /**
     * Combine address if the parameters don´t empty
     *
     * @param BusinessDocument|Contacto $model
     *
     * @return string
     */
    protected function combineAddress($model): string
    {
        $dir = '';   $p = '';
				if (!empty($model->direccion)) {
					$dir .= $model->direccion . "\n";
					$n = strpos($dir, '(');   // si la dirección tiene una parte está entre paréntesis, la partirá en 2 líneas justo por el paréntesis
					if (($n!==false && $n>15) && $this->pdf->getTextWidth(self::FONT_SIZE, $dir)>self::PARTIR_DIR) {   // sólo la partirá si tiene unas medidas mínimas
						$dir = trim(substr($dir,0,$n)) . "\n" . substr($dir,$n);
					}
				}
        if (!empty($model->apartado)) {   $dir .= $this->i18n->trans('box') . ' ' . $model->apartado . "\n";   }
        $s = ltrim(ltrim($model->codpostal . ' ') . $model->ciudad);
				if (!empty($model->codpais) && !Tools::settings('invoice', 'ocultarpais')) {
					$p = ', ' . $this->getCountryName($model->codpais);
				}
				if (!empty($model->provincia) && (!Tools::settings('invoice', 'ocultarprovincia') || $model->provincia!=$model->ciudad)) {
					if ($this->pdf->getTextWidth(self::FONT_SIZE, $s.$model->provincia.$p) >= self::PARTIR_PROV) {   $s .= "\n";   } else {   $s .= ' ';   }
					$s = ltrim($s) . '(' . $model->provincia . ')';
				}
        $dir .= $s . $p;
				if (substr($dir,-1,1)=="\n") {   $dir = substr($dir,0,strlen($dir)-1);   }
        return Tools::fixHtml($dir);
    }

    /**
     * Returns the combination of the address.
     * If it is a supplier invoice, it returns the supplier's default address.
     * If it is a customer invoice, return the invoice address
     *
     * @param Cliente|Proveedor $subject
     * @param BusinessDocument|Contacto $model
     *
     * @return string
     */
    protected function getDocAddress($subject, $model): string
    {
        if (isset($model->codproveedor)) {
            $contacto = $subject->getDefaultAddress();
            return $this->combineAddress($contacto);
        }

        return $this->combineAddress($model);
    }

    /**
     * Gets the symbol (€, $, ...) of specifyed divisa
     *
     * @param string $code
     *
     * @return string
     */
    protected function getDivisaSymbol($code): string
    {
        if (empty($code)) {   return '';   }
        $divisa = new Divisa();
        return $divisa->load($code) ? $divisa->simbolo : '';
    }

    /**
     * Inserts company logo to PDF document or dies with a message to try to solve the problem.
     *
     * @param int $idfile
     */
    protected function insertCompanyLogo($idfile = 0): array
    {
				// Salir si no se quiere logo o hay error
				$this->yyhead = $this->pdf->ez['pageHeight'] - $this->pdf->ez['topMargin'];
				$pos = intval(Tools::settings('invoice', 'posicionlogo', '0'));
				if ($pos == 9) {  // sin logo
					return ['width' => 0, 'height' => 0];
				}
        if (!function_exists('imagecreatefromstring')) {
            die('ERROR: function imagecreatefromstring() not found. '
                . ' Do you have installed php-gd package and enabled support to allow us render images? .'
                . 'Note that the package name can differ between operating system or PHP version.');
        }

        // Cargar la imagen y calcular su tamaño y posición
				$logoFile = new AttachedFile();
				if (!$logoFile->load($idfile) || !file_exists($logoFile->path)) {   $idfile == 0;   }
        if ($idfile !== 0) {
						if (is_null($logoFile->path) || empty($logoFile->path)) {  return ['width' => 0, 'height' => 0];  }
            $logoSize = $this->calcImageSize($logoFile->path);
        } else {
            $logoPath = FS_FOLDER . '/Dinamic/Assets/Images/horizontal-logo.png';
            $logoSize = $this->calcImageSize($logoPath);
        }
        $xPos = $this->pdf->ez['leftMargin'];
        $yPos = $this->pdf->ez['pageHeight'] - $this->pdf->ez['topMargin'] - $logoSize['height'];
				if ($pos == 0) {   if ($logoSize['width'] >= ($logoSize['height'] * 2)|| $logoSize['width'] > 150) {  $pos = 2;  } else {  $pos = 1;  }   }  // posición automática
				if ($pos == 2) {   // logo arriba
					$this->xcompany = 0;
					$xPos += intval(Tools::settings('invoice', 'margenlogo', '0'));
					$this->ycompany = $yPos;
					$this->xx = $xPos + $logoSize['width'];
				} else {   // logo izquierda
					$this->xcompany = $xPos + $logoSize['width'];
					$this->ycompany = $yPos + ($logoSize['height'] / 2);
					$this->xx = 0;
					$yPos -= intval(Tools::settings('invoice', 'margenlogo', '0'));
				}

        // Pintar la imagen en el PDF
				if ($idfile !== 0) {
            $this->addImageFromAttachedFile($logoFile, $xPos, $yPos, $logoSize['width'], $logoSize['height']);
        } else {
            $this->addImageFromFile($logoPath, $xPos, $yPos, $logoSize['width'], $logoSize['height']);
				}

        $this->yyhead = $yPos;
				return $logoSize;
    }

    /**
     * Insert header details.
     *
     * @param int $idempresa
     */
    protected function insertHeader($idempresa = null)
    {
        if ($this->insertedHeader) {   return;   }
        $this->insertedHeader = true;
				$leftmargin = $this->pdf->ez['leftMargin'];   //$rightmargin = $this->pdf->ez['rightMargin'];
				$yy = $this->pdf->y;   $fs = self::FONT_SIZE;
				$this->yy = $yy;

				$code = $idempresa ?? Tools::settings('default', 'idempresa', '');
        $company = new Empresa();
        if (false === $company->load($code)) {   return;   }

				// Pintar logo
        $idLogo = $this->format->idlogo ?? $company->idlogo;
        $logoSize = $this->insertCompanyLogo($idLogo);

				// Preparar nombre de la empresa
				$espacio = intval(Tools::settings('invoice', 'espaciomaximoempresa', '280'));  // espacio disponible para el nombre de la empresa
				if (($logoSize['width']>0) && ($this->xcompany>0)) {  $espacio -= ($this->xcompany +20);  }  // le restamos el espacio ocupado por el logo si está a su izquierda
				else {  $espacio -= $leftmargin;  }  // si no hay logo a la izquierda, sólo le restamos el margen
				if ($this->pdf->getTextWidth($fs+5,$company->nombre)<=$espacio) {  $sizenombre = $fs + 5;  } else
				if ($this->pdf->getTextWidth($fs+4,$company->nombre)<=$espacio) {  $sizenombre = $fs + 4;  } else
				if ($this->pdf->getTextWidth($fs+3,$company->nombre)<=$espacio) {  $sizenombre = $fs + 3;  }
				else {  $sizenombre = $fs + 2;  }
				$e = $this->pdf->getTextWidth($sizenombre, $company->nombre);
				if ($e>$espacio) {  $wmax = $espacio;  $m = 2;  } else {  $wmax = $e;  $m = 1;  }
				$h = ($this->pdf->getFontHeight($sizenombre) * $m) + 3;
        
				// Preparar dirección y NIF/CIF de la empresa
				$dir = $this->combineAddress($company);
				$s = $company->tipoidfiscal;   if (empty($s)) {   $s = 'NIF';   }
				$dir .= "\n" . $s . ': ' . $company->cifnif;
				$a = explode("\n",$dir);
				for ($n=0;$n<count($a);$n++) {
					$e = $this->pdf->getTextWidth($fs, $a[$n]);
					if ($e>$espacio) {  $wmax = $espacio;  $m = 2;  } else {  $wmax = max($wmax,$e);  $m = 1;  }
					$h += ($this->pdf->getFontHeight($fs) * $m);
				}
				$h += 3;

				// Preparar telèfono, email y web de la empresa
        $con = '';
				if (!empty($company->email)) {   $con .= $company->email;   }
				$s = $company->telefono1;   if (empty($s)) {  $s = $company->telefono2;  } else if (!empty($company->telefono2)) {  $s .= '  /  '.$company->telefono2;  }
        if (!empty($s)) {   if (!empty($con)) { $con.="\n"; }   $con .= $s;   }
        if (!empty($company->web)) {   if (!empty($con)) { $con.="\n"; }   $con .= $company->web;   }
				$a = explode("\n",$con);
				for ($n=0;$n<count($a);$n++) {
					$e = $this->pdf->getTextWidth($fs, $a[$n]);
					if ($e>$espacio) {  $wmax = $espacio;  $m = 2;  } else {  $wmax = max($wmax,$e);  $m = 1;  }
					$h += ($this->pdf->getFontHeight($fs) * $m);
				}

				// Pintar datos empresa ($h es la altura que ocupan los datos a mostrar)
				if ($logoSize['width'] == 0) {       // sin logo
				} else if ($this->xcompany == 0) {   // logo arriba (o sin logo)
					if ($this->ycompany ==0) {   $this->pdf->y = $yy;   } else {   $this->pdf->y = $this->ycompany - 10;   }
				} else {                             // logo izquierda
					$this->pdf->ez['leftMargin'] = $this->xcompany + 20;
					$this->pdf->y = min($yy + 10, $this->ycompany + 2 + ($h/2));
				}
				$this->topY = $this->pdf->y;
				$rightmargin = intval(Tools::settings('invoice', 'espaciomaximoempresa', '280'));
				if ($rightmargin < ($this->pdf->ez['leftMargin'] + 50)) {  $rightmargin = $this->pdf->ez['leftMargin'] + 50;  }
        $this->pdf->ezText(Tools::fixHtml($company->nombre), $sizenombre, ['justification' => 'left', 'aright' => $rightmargin]);
        $this->pdf->y -= 3;
				$this->pdf->ezText(Tools::fixHtml($dir), $fs, ['justification' => 'left', 'aright' => $rightmargin]);
        $this->pdf->y -= 3;
				$this->pdf->ezText(Tools::fixHtml($con), $fs, ['justification' => 'left', 'aright' => $rightmargin]);

				// Final
				$this->xx = max($this->xx, min($this->pdf->ez['leftMargin'] + $wmax, $rightmargin)) + 20;   // xx será la coordenada para el QR o los datos del cliente en insertBusinessDocHeader(). 20 es el espacio que los separará
				$this->yyhead = min($this->yyhead, $this->pdf->y);
				$this->pdf->ez['leftMargin'] = $leftmargin;   //$this->pdf->ez['rightMargin'] = $rightmargin;
				$this->pdf->y -= 20;   // deja un margen para informes que no llamen a insertBusinessDocHeader(), por ejemplo la impresión de una ficha de cliente o del informe de impuestos
    }

    /**
     * Inserts the header of the page with the model data.
     *
     * @param BusinessDocument $model
     */
    protected function insertBusinessDocHeader($model)
    {
				$leftmargin = $this->pdf->ez['leftMargin'];   $xx = $this->xx;   $yy = $this->yy;   $fs = self::FONT_SIZE;

        // Preparar información para referencias de factura
				$refcli = '';   $ref2pos = 0;   $refs = '';
				if ($model->modelClassName() === 'FacturaCliente') {
					if (intval(Tools::settings('invoice', 'ref2', '0'))>0 && !empty($model->numero2)) {
						$ref2pos = intval(Tools::settings('invoice', 'ref2', '0'));
						if ($ref2pos==1) {   $refcli = $this->i18n->trans('reference').':  '.$model->numero2;   }
						if ($ref2pos==2) {   $refs = $this->i18n->trans('reference').':  '.$model->numero2;   }
					}
					if (!Tools::settings('invoice', 'ocultarreferenciasfact')) {
						$padre = $model->parentDocuments();
						for ($n=0; $n<count($padre); $n++) {
							if ($padre[$n]->modelClassName()==='FacturaCliente') {   continue;   }   // en las facturas rectificativas aparece aquí la factura original
							if (!empty($refs)) {   $refs .= '            ';   }
							$refs .= $this->i18n->trans($padre[$n]->modelClassName().'-min') . ' ' . strtolower($this->i18n->trans('original')) . 
							         ':  ' . $padre[$n]->primaryDescription() . '  (' . $padre[$n]->fecha . ')';
						}
					}
				}

				// Preparar información para los textos adicionales
				$s = Tools::settings('invoice', 'colortexto1', '#000000');
				$this->r1 = hexdec(substr($s,1,2)) / 255;    $this->g1 = hexdec(substr($s,3,2)) / 255;    $this->b1 = hexdec(substr($s,5,2)) / 255;
				$s = Tools::settings('invoice', 'colortexto2', '#000000');
				$this->r2 = hexdec(substr($s,1,2)) / 255;    $this->g2 = hexdec(substr($s,3,2)) / 255;    $this->b2 = hexdec(substr($s,5,2)) / 255;
				$r1 = $this->r1;   $g1 = $this->g1;   $b1 = $this->b1;   $r2 = $this->r2;   $g2 = $this->g2;   $b2 = $this->b2;
				$texto1 = Tools::fixHtml($this->format->texto);
				$texto2 = Tools::fixHtml(Tools::settings('invoice', 'texto2', ''));
				$posiciontexto1 = intval(Tools::settings('invoice', 'posiciontexto1', '8'));
				$medidatexto1 = intval(Tools::settings('invoice', 'medidatexto1', '8'));
				$just1 = Tools::settings('invoice', 'justiftexto1', 'left');
				$posiciontexto2 = intval(Tools::settings('invoice', 'posiciontexto2', '8'));
				$medidatexto2 = intval(Tools::settings('invoice', 'medidatexto2', '8'));
				$just2 = Tools::settings('invoice', 'justiftexto2', 'left');

				// Preparar nombre de cliente/proveedor
        if (isset($model->codproveedor)) {									// proveedor
            $tipo = $this->i18n->trans('supplier');
            $nombre = Tools::fixHtml($model->{'nombre'});
        } else {																						// cliente
						$tipo = $this->i18n->trans('customer');
						$nombre = Tools::fixHtml($model->{'nombrecliente'});
				}
				$wmax = $this->pdf->getTextWidth($fs+2, $nombre);
				$h = $this->pdf->getFontHeight($fs+5) + 4 + $this->pdf->getFontHeight($fs+2);

				// Preparar dirección y NIF/CIF del cliente
        $subject = $model->getSubject();
        $dir = $this->getDocAddress($subject, $model);
				if (!empty($model->cifnif)) {
					$s = empty($subject->tipoidfiscal) ? $this->i18n->trans('cifnif') : $subject->tipoidfiscal;
					if (!empty($s)) {   $s .= ': ';   }
					$dir .= "\n" . $s . Tools::fixHtml($model->cifnif);
				}
				$a = explode("\n",$dir);
				for ($n=0;$n<count($a);$n++) {   $wmax = max($wmax, $this->pdf->getTextWidth($fs, $a[$n]));   $h += $this->pdf->getFontHeight($fs);   }
				if (!empty($refcli)) {   $h += 4 + $this->pdf->getFontHeight($fs);   }

				// Determinar en qué coordenada empezarán los datos del cliente y en cuál empezará el QR
				$qrImage = '';   $qrTitle = '';
				try {
				  if (!empty($this->pipe('qrImageHeader', $model))) {  $qrImage = $this->pipe('qrImageHeader', $model);  $qrTitle = $this->pipe('qrSubtitleHeader', $model);  } else
				  if (!empty($this->pipe('qrImageAfterLines', $model))) {  $qrImage = $this->pipe('qrImageAfterLines', $model);  $qrTitle = $this->pipe('qrSubtitleAfterLines', $model);  }
					if ($qrTitle!='') {  $qrTitle = 'VERI*FACTU';  }
				} catch (Exception $e) {}
				if ($wmax<100) {  $wmax = 100;  }
				$xx2 = max($this->xx, $this->pdf->ez['pageWidth'] - $this->pdf->ez['rightMargin'] - 10 - $wmax);  // $xx2: dónde empezarán los datos de cliente
				$ww = $xx2 - $xx - 20;  // $ww: espacio disponible entre los datos de la empresa y los del cliente
				if (!empty($qrImage) && $ww<100) {  $xx2 += 100 - $ww;  $ww = $xx2 - $xx - 20;  }
				$qrX = $xx + ($ww / 2) - (100 / 2);  // $qrX: dónde empezará el QR
				$this->pdf->ez['leftMargin'] = $xx2;

        // Pintar QR Verifactu, si lo hubiera (core v2025)
				if (!empty($qrImage)) {
					$this->QRimg($qrImage, 'QR tributario', $qrTitle, $qrX, $this->pdf->ez['pageHeight']-$this->pdf->ez['topMargin'], 100, $fs);  //$this->topY
					$this->yyhead = min($this->yyhead, $this->pdf->y + 20);
				}

				// Pintar datos cliente  ($h es la altura que ocupan los datos a mostrar)
				if ($this->xcompany == 0) {   // logo arriba (o sin logo)
					if ($this->ycompany ==0) {   $this->pdf->y = $yy;   } else {   $this->pdf->y = $yy - (($yy - $this->yyhead) /2) + ($h/2);   }
				} else {                      // logo izquierda
					$this->pdf->y = min($yy + 10, $this->ycompany + 1 + ($h/2));
				}
				$this->pdf->ezText($tipo.':', $fs+5, ['justification' => 'left']);
				$this->pdf->y -=4;
				$this->pdf->ezText($nombre, $fs+2, ['justification' => 'left']);
				$this->pdf->ezText($dir, $fs, ['justification' => 'left']);

				// En caso de referencia de cliente
				if (!empty($refcli)) {   $this->pdf->y -=4;   $this->pdf->ezText($refcli, $fs);   }

				// Fin de la cabecera (empresa / cliente)
				$this->yyhead = min($this->yyhead, $this->pdf->y);
				$this->pdf->ez['leftMargin'] = $leftmargin;   $this->pdf->y = $this->yyhead - 15;

				// Datos del almacén
				if (isset($model->codalmacen) && !empty(trim(Tools::settings('invoice', 'mostraralmacen', '')))) {
					$almacen = new Almacen();
					if ($almacen->load($model->codalmacen)) {
						$alm = $this->i18n->trans(Tools::settings('invoice', 'mostraralmacen'));
						if ($alm=='#') {   $alm = Tools::fixHtml(Tools::settings('invoice', 'tituloalmacen')) . ' ';   } else {   $alm .= ': ';   }
						$alm .= $almacen->direccion . ', ' . $almacen->ciudad;   // $almacen->codpostal . $almacen->provincia . $almacen->pais;
						if (!empty($almacen->provincia) && (!Tools::settings('invoice', 'ocultarprovincia') || $almacen->provincia!=$almacen->ciudad)) {
							$alm .= ' ('. $almacen->provincia . ')';
						}
						if (!empty($almacen->codpais) && !Tools::settings('invoice', 'ocultarpais')) {
							$alm .= ', ' . $this->getCountryName($almacen->codpais);
						}
						if (Tools::settings('invoice', 'mostraralmacentel')) {   $alm .= '   ' . $this->i18n->trans('phone') . ': ' . $almacen->telefono;   }
						//$alm = "Dirección del almacén: " . $direccionAlmacen . ", " . $ciudadAlmacen . ", " . $codigoPostalAlmacen . ", " . $provinciaAlmacen . ", " . $paisAlmacen);
						$this->pdf->ezText($alm, 8, ['justification' => 'left']);   $this->pdf->y -= 10;
					}
				}

        // Textos adicionales (posición 2)
				if ($posiciontexto1==2 && !empty($texto1)) {
            $this->pdf->setColor($r1,$g1,$b1);   $this->pdf->ezText($texto1, $medidatexto1, ['justification' => $just1]);   $this->pdf->y -= 10;
        }
				if ($posiciontexto2==2 && !empty($texto2)) {
            $this->pdf->setColor($r2,$g2,$b2);   $this->pdf->ezText($texto2, $medidatexto2, ['justification' => $just2]);   $this->pdf->y -= 10;
        }
				$this->pdf->setColor(0,0,0);

				// Pintar línea horizontal
				$this->pdf->y -= 14;
				$this->newLine();   $yy = $this->pdf->y;

				// Pintar número, fecha y total de la factura
        $tipo = $this->i18n->trans($model->modelClassName() . '-min');
        if (!empty($this->format->titulo)) {   $tipo = Tools::fixHtml($this->format->titulo);   }
				$fac = $tipo . ':  ' . $model->codigo;
				if (strlen($fac)>38) {
					$facsize = $fs+4;   $espacios = str_repeat(' ',round((strlen($fac)-8)*1.4));
				} else if (strlen($fac)>32) {
					$facsize = $fs+5;   $espacios = str_repeat(' ',round((strlen($fac)-14)*1.5));
				} else {
					$facsize = $fs+6;
					if (strlen($fac)>14) {   $espacios = str_repeat(' ',round((strlen($fac)-14)*1.6));   } else {   $espacios = '';   }
				}
				$this->pdf->ezText($espacios . $this->i18n->trans('date') .':  '. $model->fecha, $facsize, ['justification' => 'center']);
				$this->pdf->y = $yy;   $total = Tools::number($model->total) .' '. $this->getDivisaSymbol($model->coddivisa) .'  ';
				$this->pdf->ezText($this->i18n->trans('total') .':  '. $total, $facsize, ['justification' => 'right']);
				$this->pdf->y = $yy;
        $this->pdf->ezText($fac, $facsize);

        // En caso de factura rectificativa, añade número y fecha de la factura original
				if (isset($model->codigorect) && !empty($model->codigorect)) {
            $original = new $model();
            if ($original->load('', [new DataBaseWhere('codigo', $model->codigorect)])) {
                $rec = $this->i18n->trans('invoice') . ' ' . strtolower($this->i18n->trans('original')) .
								       ':  ' . $model->codigorect . '  (' . $original->fecha . ')';
                $this->pdf->y -= 4;
								$this->pdf->setColor(0.2,0.2,0.2);
								$this->pdf->ezText($rec, $fs+3);
            }
        } else {

					// En caso de referencias a la factura
					if (!empty($refs)) {
						$this->pdf->y -= 7;   $this->pdf->setColor(0.3,0.3,0.3);
						$this->pdf->ezText($refs, $fs);
					}

				}
				$this->pdf->setColor(0,0,0);

				// Pintar segunda línea horizontal
        $this->pdf->ezText('', $fs+6);
				$this->newLine();   $this->pdf->y -= 8;

        // Textos adicionales (posición 3)
				if ($posiciontexto1==3 && !empty($texto1)) {
            $this->pdf->setColor($r1,$g1,$b1);   $this->pdf->ezText($texto1, $medidatexto1, ['justification' => $just1]);   $this->pdf->y -= 10;
        }
				if ($posiciontexto2==3 && !empty($texto2)) {
            $this->pdf->setColor($r2,$g2,$b2);   $this->pdf->ezText($texto2, $medidatexto2, ['justification' => $just2]);   $this->pdf->y -= 10;
        }
				$this->pdf->setColor(0,0,0);

				$this->pdf->y -= 10;
    }

    protected function getLineHeaders(): array
    {
        return [
            'referencia' => ['type' => 'text', 'title' => $this->i18n->trans('description')],   // $this->i18n->trans('reference') . ' - ' . $this->i18n->trans('description')]
            'cantidad' => ['type' => 'number', 'title' => $this->i18n->trans('quantity')],
            'pvpunitario' => ['type' => 'number', 'title' => $this->i18n->trans('price')],
            'dtopor' => ['type' => 'percentage', 'title' => $this->i18n->trans('dto')],
            'dtopor2' => ['type' => 'percentage', 'title' => $this->i18n->trans('dto-2')],
            'pvptotal' => ['type' => 'number', 'title' => $this->i18n->trans('net')],
            'iva' => ['type' => 'percentage', 'title' => $this->i18n->trans('tax')],
            'recargo' => ['type' => 'percentage', 'title' => $this->i18n->trans('re')],
            'irpf' => ['type' => 'percentage', 'title' => $this->i18n->trans('irpf')]
        ];
    }

    /**
     * Generate the body of the page with the model data.
     *
     * @param BusinessDocument $model
     */
    protected function insertBusinessDocBody($model)
    {
				// Colores de la tabla
				$s = Tools::settings('invoice', 'colorcabecera', '#ffffff');
				$this->hr = hexdec(substr($s,1,2)) / 255;    $this->hg = hexdec(substr($s,3,2)) / 255;    $this->hb = hexdec(substr($s,5,2)) / 255;
				$s = Tools::settings('invoice', 'colorfilas', '#ffffff');
				$this->lr = hexdec(substr($s,1,2)) / 255;    $this->lg = hexdec(substr($s,3,2)) / 255;    $this->lb = hexdec(substr($s,5,2)) / 255;
				$this->rowgap = Tools::settings('invoice', 'espaciofilas', 2);
				
				$headers = [];
        $tableOptions = [
            'cols' => [],
            'shadeCol' => [$this->lr, $this->lg, $this->lb],    // [0.93, 0.93, 0.93]
            'shadeHeadingCol' => [$this->hr, $this->hg, $this->hb],    // [0.92, 0.92, 0.92]
						'rowGap' => $this->rowgap,
            'width' => $this->tableWidth
        ];

        // fill headers and options with the line headers information
        foreach ($this->getLineHeaders() as $key => $value) {
            $headers[$key] = $value['title'];
            if (in_array($value['type'], ['number', 'percentage'], true)) {
                $tableOptions['cols'][$key] = ['justification' => 'right'];
            }
        }

        $tableData = [];
        foreach ($model->getlines() as $line) {
            $data = [];
            foreach ($this->getLineHeaders() as $key => $value) {
                if (property_exists($line, 'mostrar_precio') &&
                    $line->mostrar_precio === false &&
                    in_array($key, ['pvpunitario', 'dtopor', 'dtopor2', 'pvptotal', 'iva', 'recargo', 'irpf'], true)) {
                    continue;
                }

                if ($key === 'referencia') {
                    if (empty($line->{$key}) || Tools::settings('invoice', 'ocultarreferenciaprod')) {
												$data[$key] = Tools::fixHtml($line->descripcion);
										} else {
												$data[$key] = Tools::fixHtml($line->{$key} . " - " . $line->descripcion);
										}
                } elseif ($key === 'cantidad' && property_exists($line, 'mostrar_cantidad')) {
										$c = $line->{$key};   $d = strlen(floatval($c)) - strlen(intval($c));   if ($d>1) { $d-=1; }  // averiguar el número de decimales tiene
										$data[$key] = $line->mostrar_cantidad ? number_format($line->{$key}, $d, Tools::settings('default','decimal_separator'), Tools::settings('default','thousands_separator')) : '';
                } elseif ($value['type'] === 'percentage') {
                    $data[$key] = Tools::number($line->{$key}) . '%';
                } elseif ($value['type'] === 'number') {
                    $data[$key] = Tools::number($line->{$key});
                } else {
                    $data[$key] = $line->{$key};
                }
            }

            $tableData[] = $data;

            if (property_exists($line, 'salto_pagina') && $line->salto_pagina) {
                $this->removeEmptyCols($tableData, $headers, Tools::number(0));
                $this->pdf->ezTable($tableData, $headers, '', $tableOptions);
                $tableData = [];
                $this->pdf->ezNewPage();
            }
        }

        if (false === empty($tableData)) {
            $this->removeEmptyCols($tableData, $headers, Tools::number(0));
            $this->pdf->ezTable($tableData, $headers, '', $tableOptions);
						$this->newPage();
        }

        // Pintar QR inferior de Verifactu, si existe  (core v2025)
        $qrImage = $this->pipe('qrImageAfterLines', $model);  // core v2025
        $qrTitle = $this->pipe('qrTitleAfterLines', $model);  // core v2025
        if (!empty($qrImage)) {
            $this->pdf->y -= 10;
            $pageWidth = $this->pdf->ez['pageWidth'] - $this->pdf->ez['leftMargin'] - $this->pdf->ez['rightMargin'];  // // calcular el ancho disponible con margen derecho
            $leftBlockWidth = $pageWidth * 0.8;   $rightBlockWidth = $pageWidth * 0.2;  // 80% espacio libre a la izquierda, 20% para el QR a la derecha
            $this->renderQRimage($qrImage, $qrTitle, $this->pdf->ez['leftMargin'], $this->pdf->y, $leftBlockWidth, $rightBlockWidth);
        }
    }

    /**
     * Inserts the footer of the page with the model data.
     *
     * @param BusinessDocument $model
     */
    protected function insertBusinessDocFooter($model)
    {
        // Observaciones
				if (!empty($model->observaciones)) {
            $this->pdf->ezText($this->i18n->trans('observations') . "\n", self::FONT_SIZE + 2);
            $this->newLine();
            $this->pdf->ezText(Tools::fixHtml($model->observaciones) . "\n", self::FONT_SIZE + 1);
        }

        //$this->newPage();

				// Preparar información para los textos adicionales
				$r1 = $this->r1;   $g1 = $this->g1;   $b1 = $this->b1;   $r2 = $this->r2;   $g2 = $this->g2;   $b2 = $this->b2;
				$texto1 = Tools::fixHtml($this->format->texto);
				$texto2 = Tools::fixHtml(Tools::settings('invoice', 'texto2', ''));
				$posiciontexto1 = intval(Tools::settings('invoice', 'posiciontexto1', '8'));
				$medidatexto1 = intval(Tools::settings('invoice', 'medidatexto1', '8'));
				$just1 = Tools::settings('invoice', 'justiftexto1', 'left');
				$posiciontexto2 = intval(Tools::settings('invoice', 'posiciontexto2', '8'));
				if ($posiciontexto2==8 && $posiciontexto1<8) {  $posiciontexto2 = 9; }
				$medidatexto2 = intval(Tools::settings('invoice', 'medidatexto2', '8'));
				$just2 = Tools::settings('invoice', 'justiftexto2', 'left');

				// Ver si se puede ocultar la tabla de impuestos. Se podrá ocultar si sólo hay 1 impuesto, o si hay 1 impuesto i 1 IRPF que compartan la misma base, mientras la base sea igual que el neto de la factura.
				$a=array_values($this->getTaxesRows($model));  // convertimos a índexada la primera dimensión del array asociativo de los impuestos, para poder recorrer sus registros más fácilmente
				$numimpuestos = count($a);
				$tituloneto=$this->i18n->trans('net');   $tituloimpuesto=$this->i18n->trans('taxes');   $tituloirpf=$this->i18n->trans('irpf');   $l=strlen($tituloirpf);
				if (Tools::settings('invoice', 'ocultartablaimpuestos')) {
					if ($numimpuestos==1 && $this->fval($a[0]['taxbase'])==$this->fval($model->neto)) {
						$numimpuestos = 0;   $tituloneto=$this->i18n->trans('tax-base');
						if (substr($a[0]['tax'],0,$l)==$tituloirpf) {  $tituloirpf = $a[0]['tax'];  } else {  $tituloimpuesto = $a[0]['tax'];  }
					} else if ($numimpuestos==2 && ($this->fval($a[0]['taxbase'])==$this->fval($model->neto) && $this->fval($a[1]['taxbase'])==$this->fval($model->neto))) {
						if (((substr($a[0]['tax'],0,$l)==$tituloirpf && substr($a[1]['tax'],0,$l)!=$tituloirpf) || (substr($a[0]['tax'],0,$l)!=$tituloirpf && substr($a[1]['tax'],0,$l)==$tituloirpf))) {
							$numimpuestos = 0;   $tituloneto=$this->i18n->trans('tax-base');
							if (substr($a[0]['tax'],0,$l)==$tituloirpf) {  $tituloirpf = $a[0]['tax'];  $tituloimpuesto = $a[1]['tax'];  }
							else {  $tituloirpf = $a[1]['tax'];  $tituloimpuesto = $a[0]['tax'];  }
						}
					}
				}

				// Calcular el espacio aproximado que ocupará la información del pie
				$n = 0;   $pagoyvencimiento = intval(Tools::settings('invoice', 'pagoyvencimiento', 3));
				if ($numimpuestos>0) {  $n += $numimpuestos + 1 + 1.1;  }   // cabecera + número de filas de impuestos + separador
				$n += 2;   // 1 cabecera + 1 fila de subtotales
				if ($pagoyvencimiento>0) {
					if ($model->modelClassName() === 'FacturaCliente') {   // separador + número de filas de recibos + cabecera (si hay)
						$nn = count($model->getReceipts());
						$n += 1.1 + $nn;
						if ($pagoyvencimiento<3 || $nn>1) {  $n += 1;  }   // sólo hay cabecera si existe más de 1 recibo o no usamos el modo de 1 sola línea
					} elseif (isset($model->codcliente) && isset($model->finoferta)) {
						$n += 1.1 + 1;
					} else {  $n += 0.3;  }
				} else {  $n += 0.3;  }
				$ny = $n * 17 + 40;   // $ny: lo que ocupa el pie
				if (($posiciontexto1>=5 && $posiciontexto1<=7) && !empty($texto1)) {
					$ny += 15 + $this->textHeight($texto1, $medidatexto1);
				}
				if (($posiciontexto2>=5 && $posiciontexto2<=7) && !empty($texto2)) {
					$ny += 15 + $this->textHeight($texto2, $medidatexto2);
				}

        // Textos adicionales (posición 5)
				if ($posiciontexto1==4 && !empty($texto1)) {
            $this->pdf->setColor($r1,$g1,$b1);   $this->pdf->ezText($texto1, $medidatexto1, ['justification' => $just1]);   $this->pdf->y -= 10;
        }
				if ($posiciontexto2==4 && !empty($texto2)) {
            $this->pdf->setColor($r2,$g2,$b2);   $this->pdf->ezText($texto2, $medidatexto2, ['justification' => $just2]);   $this->pdf->y -= 10;
        }
				$this->pdf->setColor(0,0,0);

				// Posicionar cursor en la parte inferior de la página (reservando el espacio calculado para impuestos, subtotales, textos adicionales, etc.)
				if ($ny > $this->pdf->y) {   $this->pdf->ezNewPage();   $this->insertedHeader = false;   }   // si ya no cabe en la página, pasa a la página siguiente
				$this->pdf->y = $ny;

        // Textos adicionales (posición 5)
				if ($posiciontexto1==5 && !empty($texto1)) {
            $this->pdf->setColor($r1,$g1,$b1);   $this->pdf->ezText($texto1, $medidatexto1, ['justification' => $just1]);   $this->pdf->y -= 15;
        }
				if ($posiciontexto2==5 && !empty($texto2)) {
            $this->pdf->setColor($r2,$g2,$b2);   $this->pdf->ezText($texto2, $medidatexto2, ['justification' => $just2]);   $this->pdf->y -= 15;
        }
				$this->pdf->setColor(0,0,0);

        // Impuestos
				if ($numimpuestos>0) {
					$taxHeaders = [
							'tax' => $this->i18n->trans('tax'),
							'taxbase' => $this->i18n->trans('tax-base'),
							'taxp' => $this->i18n->trans('percentage'),
							'taxamount' => $this->i18n->trans('amount'),
							'taxsurchargep' => $this->i18n->trans('re'),
							'taxsurcharge' => $this->i18n->trans('amount')
					];
					$taxRows = $this->getTaxesRows($model);
					$taxTableOptions = [
							'cols' => [
									'tax' => ['justification' => 'right'],
									'taxbase' => ['justification' => 'right'],
									'taxp' => ['justification' => 'right'],
									'taxamount' => ['justification' => 'right'],
									'taxsurchargep' => ['justification' => 'right'],
									'taxsurcharge' => ['justification' => 'right']
							],
							'shadeCol' => [$this->lr, $this->lg, $this->lb],    // [0.93, 0.93, 0.93]
							'shadeHeadingCol' => [$this->hr, $this->hg, $this->hb],    // [0.92, 0.92, 0.92]
							'width' => $this->tableWidth
					];
					$this->removeEmptyCols($taxRows, $taxHeaders, Tools::number(0));
					$this->pdf->ezTable($taxRows, $taxHeaders, '', $taxTableOptions);
					$this->pdf->ezText("\n");
        }

        // Subtotales
        $headers = [
            'currency' => $this->i18n->trans('currency'),
            'subtotal' => $this->i18n->trans('subtotal'),
            'dto' => $this->i18n->trans('global-dto'),
            'dto-2' => $this->i18n->trans('global-dto-2'),
            'net' => $tituloneto,  // $this->i18n->trans('net')
            'taxes' => $tituloimpuesto,  // $this->i18n->trans('taxes')
            'totalSurcharge' => $this->i18n->trans('re'),
            'totalIrpf' => $tituloirpf,  // $this->i18n->trans('irpf')
            'totalSupplied' => $this->i18n->trans('supplied-amount'),
            'total' => $this->i18n->trans('total')
        ];
        $rows = [
            [
                'currency' => $this->getDivisaName($model->coddivisa),
                'subtotal' => Tools::number($model->netosindto != $model->neto ? $model->netosindto : 0),
                'dto' => Tools::number($model->dtopor1) . '%',
                'dto-2' => Tools::number($model->dtopor2) . '%',
                'net' => Tools::number($model->neto),
                'taxes' => Tools::number($model->totaliva),
                'totalSurcharge' => Tools::number($model->totalrecargo),
                'totalIrpf' => Tools::number(0 - $model->totalirpf),
                'totalSupplied' => Tools::number($model->totalsuplidos),
                'total' => Tools::number($model->total)
            ]
        ];
        $this->removeEmptyCols($rows, $headers, Tools::number(0));
        $tableOptions = [
            'cols' => [
                'subtotal' => ['justification' => 'right'],
                'dto' => ['justification' => 'right'],
                'dto-2' => ['justification' => 'right'],
                'net' => ['justification' => 'right'],
                'taxes' => ['justification' => 'right'],
                'totalSurcharge' => ['justification' => 'right'],
                'totalIrpf' => ['justification' => 'right'],
                'totalSupplied' => ['justification' => 'right'],
                'total' => ['justification' => 'right']
            ],
            'shadeCol' => [$this->lr, $this->lg, $this->lb],    // [0.93, 0.93, 0.93]
            'shadeHeadingCol' => [$this->hr, $this->hg, $this->hb],    // [0.92, 0.92, 0.92]
            'width' => $this->tableWidth
        ];
        $this->pdf->ezTable($rows, $headers, '', $tableOptions);

        // Recibos
				if ($pagoyvencimiento > 0) {
					if ($model->modelClassName() === 'FacturaCliente') {
							$this->insertInvoiceReceipts($model);
					} elseif (isset($model->codcliente)) {
							$this->insertExpiration($model);
							//if (function_exists('insertInvoicePayMethod')) {  $this->insertInvoicePayMethod($model);  }
							//else {  $this->insertInvoicePayMehtod($model);  }  // error tipográfico (meHTod) en el nombre de esta función en versiones antiguas de Facturascripts
					}
				}

        // Textos adicionales (posiciones 6, 7, 8 y 9)
				if (($posiciontexto2==6 || $posiciontexto2==8) && !empty($texto2)) {
						if ($posiciontexto2==8) {   $this->pdf->setColor(0,0,0);   $this->pdf->ezNewPage();   $this->insertedHeader = false;   }
            $this->pdf->y -= 15;   $this->pdf->setColor($r2,$g2,$b2);   $this->pdf->ezText($texto2, $medidatexto2, ['justification' => $just2]);
        }
				if (($posiciontexto1==7 || $posiciontexto1==9) && !empty($texto1)) {
						if ($posiciontexto1==9 && $posiciontexto2!=8) {   $this->pdf->setColor(0,0,0);   $this->pdf->ezNewPage();   $this->insertedHeader = false;   }
            $this->pdf->y -= 15;   $this->pdf->setColor($r1,$g1,$b1);   $this->pdf->ezText($texto1, $medidatexto1, ['justification' => $just1]);
        }
				if (($posiciontexto2==7 || $posiciontexto2==9) && !empty($texto2)) {
 						if ($posiciontexto2==9 && $posiciontexto1!=9) {   $this->pdf->setColor(0,0,0);   $this->pdf->ezNewPage();   $this->insertedHeader = false;   }
           $this->pdf->y -= 15;   $this->pdf->setColor($r2,$g2,$b2);   $this->pdf->ezText($texto2, $medidatexto2, ['justification' => $just2]);
        }
				$this->pdf->setColor(0,0,0);
    }

    /**
     * Insert footer details.
     */
    protected function insertFooter()
    {
        $now = $this->i18n->trans('generated-at', ['%when%' => date('d-m-Y H:i')]);
        $this->pdf->addText($this->tableWidth + self::CONTENT_X, self::FOOTER_Y, self::FONT_SIZE, $now, 0, 'right');
    }

    /**
     * @param BusinessDocument|ReciboCliente $receipt
     *
     * @return string
     */
    protected function getBankData($receipt): string
    {
        $payMethod = new FormaPago();
        if (false === $payMethod->load($receipt->codpago)) {
            // forma de pago no encontrada
            return '-';
        }

        if (false === $payMethod->imprimir) {
            // no imprimir información bancaria
            return $this->defTrans($payMethod->codpago, $payMethod->descripcion, Tools::settings('invoice','traducirformaspago'));
        }

        // Domiciliado. Mostramos la cuenta bancaria del cliente
        $cuentaBcoCli = new CuentaBancoCliente();
        $where = [new DataBaseWhere('codcliente', $receipt->codcliente)];
        if ($payMethod->domiciliado && $cuentaBcoCli->loadWhere($where, ['principal' => 'DESC'])) {
            return $this->defTrans($payMethod->codpago, $payMethod->descripcion, Tools::settings('invoice','traducirformaspago')) . ' - ' . $cuentaBcoCli->getIban(true, true);
        }

        // cuenta bancaria de la empresa
        $cuentaBco = new CuentaBanco();
        if ($payMethod->codcuentabanco && $cuentaBco->load($payMethod->codcuentabanco) && $cuentaBco->iban) {
            return $this->defTrans($payMethod->codpago, $payMethod->descripcion, Tools::settings('invoice','traducirformaspago')) . ' - ' . $cuentaBco->getIban(true);
        }

        // no hay información bancaria
        return $this->defTrans($payMethod->codpago, $payMethod->descripcion, Tools::settings('invoice','traducirformaspago'));
    }

    /**
     * @param FacturaCliente $invoice
     */
    protected function insertInvoiceReceipts($invoice)
    {
       $receipts = $invoice->getReceipts();   $modo = intval(Tools::settings('invoice', 'pagoyvencimiento', 3));
        if (count($receipts) == 0) {
						return;

				// Con modo simple y un solo recibo
				} else if (count($receipts) == 1 && $modo == 3) {
						$pago = $receipts[0]->url('pay');
						if (empty($pago)) {
							$pago = $this->i18n->trans('payment-method') .':  '. $this->getBankData($receipts[0]);
						} else {
							$pago = $this->i18n->trans('payment-method') . ':  <c:alink:' . $pago . '-' . $this->i18n->trans('pay') . '</c:alink>';
						}
						$venc = $this->i18n->trans('expiration') .':  ';
						if ($receipts[0]->pagado) {   $venc .=  $this->i18n->trans('paid');   } else {   $venc .= $receipts[0]->vencimiento;   }
						$total = $this->i18n->trans('amount') .':  '. Tools::number($receipts[0]->importe);
						$this->pdf->ezText("\n");   $yy = $this->pdf->y;
						$this->pdf->ezText($pago, self::FONT_SIZE + 1, ['justification' => 'left']);
						$this->pdf->y = $yy;
						$this->pdf->ezText($venc, self::FONT_SIZE + 1, ['justification' => 'right']);

				// Con modo original, modo blanco  o varios recibos
				} else {
            $headers = [
                'numero' => $this->i18n->trans('receipt'),
                'bank' => $this->i18n->trans('payment-method'),
                'importe' => $this->i18n->trans('amount'),
                'vencimiento' => $this->i18n->trans('expiration')
            ];
            $rows = [];
            foreach ($receipts as $receipt) {
                $payLink = $receipt->url('pay');
                $rows[] = [
                    'numero' => $receipt->numero,
                    'bank' => empty($payLink) ? $this->getBankData($receipt) : '<c:alink:' . $payLink . '>'
                        . $this->i18n->trans('pay') . '</c:alink>',
                    'importe' => Tools::number($receipt->importe),
                    'vencimiento' => $receipt->pagado ? $this->i18n->trans('paid') : $receipt->vencimiento
                ];
            }
						if ($modo == 1) {  // color de fondo de la tabla según el modo seleccionado en los settings
							$lr=$this->lr;  $lg=$this->lg;  $lb=$this->lb;  $hr=$this->hr;  $hg=$this->hg;  $hb=$this->hb;
						} else {  $lr=1;  $lg=1;  $lb=1;  $hr=1;  $hg=1;  $hb=1;  }
						$tableOptions = [
								'cols' => [
										'numero' => ['justification' => 'center'],
										'bank' => ['justification' => 'center'],
										'importe' => ['justification' => 'right'],
										'vencimiento' => ['justification' => 'right']
								],
								'shadeCol' => [$lr, $lg, $lb],    // [0.93, 0.93, 0.93]
								'shadeHeadingCol' => [$hr, $hg, $hb],    // [0.92, 0.92, 0.92]
								'width' => $this->tableWidth
						];
            $this->pdf->ezText("\n");
            $this->pdf->ezTable($rows, $headers, '', $tableOptions);
        }
    }

    protected function insertExpiration($invoice)
		{
				//$this->pdf->ezText("\n");   $yy = $this->pdf->y;                                // descomentar para añadir datos bancarios en presupuestos,albaranes, etc. (no facturas)
				//$pago = $this->getBankData($invoice)                                            //    "
				//$this->pdf->ezText($pago, self::FONT_SIZE + 1, ['justification' => 'left']);    //    "
				if (isset($invoice->finoferta)) {
					//$this->pdf->y = $yy;                                                          //    "
					$this->pdf->ezText("\n");
					$venc = $this->i18n->trans('expiration') .':  '.$invoice->finoferta;
					$this->pdf->ezText($venc, self::FONT_SIZE + 1, ['justification' => 'right']);
				}
		}

    protected function calcImageSize(string $filePath): array
    {
        $imageSize = $size = getimagesize($filePath);
        if ($size[0] > 200) {
            $imageSize[0] = 200;   $imageSize[1] = $imageSize[1] * $imageSize[0] / $size[0];
            $size[0] = $imageSize[0];   $size[1] = $imageSize[1];
        }
        if ($size[1] > 80) {
            $imageSize[1] = 80;   $imageSize[0] = $imageSize[0] * $imageSize[1] / $size[1];
        }
				$percent = intval(Tools::settings('invoice', 'medidalogo', '100'));
				$imageSize[0] = $imageSize[0] * $percent / 100;   $imageSize[1] = $imageSize[1] * $percent / 100;
        return [ 'width' => $imageSize[0], 'height' => $imageSize[1] ];
    }

    protected function QRimg(?string $qrImage, ?string $qrTitle1, ?string $qrTitle2, float $qrX, float $qrY, int $qrSize, int $qrFont)
		{
        if (empty($qrImage)) {  return;  }

        // Si $qrImage es una iagen en base64 - crear un archivo temporal
        if (str_starts_with($qrImage, 'data:image/')) {
            $base64Data = explode(',', $qrImage, 2)[1] ?? $qrImage;
            $imageData = base64_decode($base64Data);
            // Verificar si la decodificación fue exitosa
            if ($imageData === false) {  return;  }
            // Determinar el tipo de imagen desde el data URI
            $mimeType = 'image/png'; // por defecto PNG
            if (preg_match('/data:image\/([^;]+)/', $qrImage, $matches)) {
                $mimeType = 'image/' . $matches[1];
            }
            // Crear archivo temporal
            $extension = ($mimeType === 'image/png') ? '.png' : '.jpg';
            $tempFile = tempnam(sys_get_temp_dir(), 'qr_') . $extension;
            if (!file_put_contents($tempFile, $imageData)) {  return;  }
            try {
                // Usar la función nativa de Cezpdf para añadir la imagen con dimensiones cuadradas
                if ($mimeType === 'image/png') {
                    $this->pdf->addPngFromFile($tempFile, $qrX, $qrY - $qrSize, $qrSize, $qrSize);
                } else {
                    $this->pdf->addJpegFromFile($tempFile, $qrX, $qrY - $qrSize, $qrSize, $qrSize);
                }
								$this->pdf->y = $qrY - $qrSize;
            } catch (Exception $e) {
                return;
            } finally {
                // Limpiar el archivo temporal
                if (file_exists($tempFile)) {
                    unlink($tempFile);
                }
            }

        // Si $qrImage es una ruta de archivo válida - usar directamente los métodos nativos
        } elseif (file_exists($qrImage)) {
            $extension = strtolower(pathinfo($qrImage, PATHINFO_EXTENSION));
            try {
                if ($extension === 'png') {
                    $this->pdf->addPngFromFile($qrImage, $qrX, $qrY - $qrSize, $qrSize, $qrSize);
                } else {
                    $this->pdf->addJpegFromFile($qrImage, $qrX, $qrY - $qrSize, $qrSize, $qrSize);
                }
								$this->pdf->y = $qrY - $qrSize;
            } catch (Exception $e) {
                return;
            }
        } else {
						return;
        }

				// Pintar el título 1 (cabecera del QR)
        if (!empty($qrTitle1)) {
						$textX = $qrX + ($qrSize / 2);  // centro respecto al QR
						$textY = $qrY;  // encima del QR
						$this->pdf->addText($textX, $textY, $qrFont, $qrTitle1, 0, 'center');
				}

        // Pintar el título 2 (pie del QR)
        if (!empty($qrTitle2)) {
						$textX = $qrX + ($qrSize / 2);  // centro respecto al QR
						$textY = $qrY - $qrSize - 6;  // 6 puntos por debajo del QR
						$this->pdf->addText($textX, $textY, $qrFont, $qrTitle2, 0, 'center');
						$this->pdf->y = $textY - $this->pdf->getFontHeight($qrFont);
				}
		}

}
