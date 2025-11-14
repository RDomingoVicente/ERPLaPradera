<?php
namespace FacturaScripts\Plugins\FacturaPDF1;

use FacturaScripts\Core\Template\InitClass;  // para versiones de FacturaScripts v2024.5 o superiores. Es obligatoria a partir de la v2025, pues la copia en Core\Base\InitClass ya es eliminada del CORE.
//use FacturaScripts\Core\Base\InitClass;  // para versiones de FacturaScripts de la v2023 a la v2024.4. La  clase se considera obsoleta a partir de la v2024.5, pero sigue existiendo por compatibilidad hasta la v2024.96. Usando esta clase conseguimos compatibilidad con todas las versiones v2023 y v2024 de Facturascripts. A partir de la v2025 esta clase desaparece y deja de ser compatible.
use FacturaScripts\Core\Tools;
use FacturaScripts\Core\Base\DataBase;

class Init extends InitClass
{
	const VER = 2.2;				// versión actual del plugin
	const NOM = 'invoice';	// nombre de la sección de settings


    // Se ejecuta cada vez que carga FacturaScripts (si este plugin está activado)
		public function init(): void
    {
				// Si se acaba de actualizar el plugin
				$verant = floatval(Tools::settings(self::NOM, 'pluginversion', '0'));
				if (self::VER > $verant) {
					// Lee los settings que hay en la base de datos
					$posicionlogo = Tools::settings(self::NOM, 'posicionlogo');
					$margenlogo = Tools::settings(self::NOM, 'margenlogo');
					$medidalogo = Tools::settings(self::NOM, 'medidalogo');
					$espaciomaximoempresa = Tools::settings(self::NOM, 'espaciomaximoempresa');
					$mostrarpais = Tools::settings(self::NOM, 'mostrarpais');
					$ocultarprovincia = Tools::settings(self::NOM, 'ocultarprovincia');
					$ocultarpais = Tools::settings(self::NOM, 'ocultarpais');
					$mostraralmacen = Tools::settings(self::NOM, 'mostraralmacen');
					$tituloalmacen = Tools::settings(self::NOM, 'tituloalmacen');
					$mostraralmacentel = Tools::settings(self::NOM, 'mostraralmacentel');
					$ref2 = Tools::settings(self::NOM, 'ref2');
					$ocultarreferenciasfact = Tools::settings(self::NOM, 'ocultarreferenciasfact');
					$colorcabecera = Tools::settings(self::NOM, 'colorcabecera');
					$colorfilas = Tools::settings(self::NOM, 'colorfilas');
					$espaciofilas = Tools::settings(self::NOM, 'espaciofilas');
					$ocultarreferenciaprod = Tools::settings(self::NOM, 'ocultarreferenciaprod');
					$ocultartablaimpuestos = Tools::settings(self::NOM, 'ocultartablaimpuestos');
					$pagoyvencimiento = Tools::settings(self::NOM, 'pagoyvencimiento');
					$traducirformaspago = Tools::settings(self::NOM, 'traducirformaspago');
					$posiciontexto1 = Tools::settings(self::NOM, 'posiciontexto1');
					$medidatexto1 = Tools::settings(self::NOM, 'medidatexto1');
					$colortexto1 = Tools::settings(self::NOM, 'colortexto1');
					$justiftexto1 = Tools::settings(self::NOM, 'justiftexto1');
					$posiciontexto2 = Tools::settings(self::NOM, 'posiciontexto2');
					$medidatexto2 = Tools::settings(self::NOM, 'medidatexto2');
					$colortexto2 = Tools::settings(self::NOM, 'colortexto2');
					$justiftexto2 = Tools::settings(self::NOM, 'justiftexto2');
					$texto2 = Tools::settings(self::NOM, 'texto2');

					// Reordena todos los settings del plugin directamente en la base de datos, eliminando settings obsoletos
					$prop = '{"pluginversion":null,"posicionlogo":null,"margenlogo":null,"medidalogo":null,"espaciomaximoempresa":null,"ocultarprovincia":null,'.
									'"ocultarpais":null,"mostraralmacen":null,"tituloalmacen":null,"mostraralmacentel":null,"ref2":null,"ocultarreferenciasfact":null,'.
									'"colorcabecera":null,"colorfilas":null,"espaciofilas":null,"ocultarreferenciaprod":null,"ocultartablaimpuestos":null,'.
									'"pagoyvencimiento":null,"traducirformaspago":null,'.
									'"posiciontexto1":null,"medidatexto1":null,"colortexto1":null,"justiftexto1":null,'.
									'"posiciontexto2":null,"medidatexto2":null,"colortexto2":null,"justiftexto2":null,"texto2":null}';
					$sql = "UPDATE settings SET properties='".$prop."' WHERE name='".self::NOM."';";
					$db = new DataBase();
					Tools::settingsSave();   // necesario justo antes de hacer el UPDATE en la base de datos, o este no funcionará
					$db->exec($sql);

					// Reescribe los valores anteriores de los settings
					Tools::settingsSet(self::NOM, 'pluginversion', self::VER);
					Tools::settingsSet(self::NOM, 'posicionlogo', $posicionlogo);
					Tools::settingsSet(self::NOM, 'margenlogo', $margenlogo);
					Tools::settingsSet(self::NOM, 'medidalogo', $medidalogo);
					Tools::settingsSet(self::NOM, 'espaciomaximoempresa', $espaciomaximoempresa);
					Tools::settingsSet(self::NOM, 'ocultarprovincia', $ocultarprovincia);
					Tools::settingsSet(self::NOM, 'ocultarpais', $ocultarpais);
					Tools::settingsSet(self::NOM, 'mostraralmacen', $mostraralmacen);
					Tools::settingsSet(self::NOM, 'tituloalmacen', $tituloalmacen);
					Tools::settingsSet(self::NOM, 'mostraralmacentel', $mostraralmacentel);
					Tools::settingsSet(self::NOM, 'ref2', $ref2);
					Tools::settingsSet(self::NOM, 'ocultarreferenciasfact', $ocultarreferenciasfact);
					Tools::settingsSet(self::NOM, 'colorcabecera', $colorcabecera);
					Tools::settingsSet(self::NOM, 'colorfilas', $colorfilas);
					Tools::settingsSet(self::NOM, 'espaciofilas', $espaciofilas);
					Tools::settingsSet(self::NOM, 'ocultarreferenciaprod', $ocultarreferenciaprod);
					Tools::settingsSet(self::NOM, 'ocultartablaimpuestos', $ocultartablaimpuestos);
					Tools::settingsSet(self::NOM, 'pagoyvencimiento', $pagoyvencimiento);
					Tools::settingsSet(self::NOM, 'traducirformaspago', $traducirformaspago);
					Tools::settingsSet(self::NOM, 'posiciontexto1', $posiciontexto1);
					Tools::settingsSet(self::NOM, 'medidatexto1', $medidatexto1);
					Tools::settingsSet(self::NOM, 'colortexto1', $colortexto1);
					Tools::settingsSet(self::NOM, 'justiftexto1', $justiftexto1);
					Tools::settingsSet(self::NOM, 'posiciontexto2', $posiciontexto2);
					Tools::settingsSet(self::NOM, 'medidatexto2', $medidatexto2);
					Tools::settingsSet(self::NOM, 'colortexto2', $colortexto2);
					Tools::settingsSet(self::NOM, 'justiftexto2', $justiftexto2);
					Tools::settingsSet(self::NOM, 'texto2', $texto2);

					// A partir de la v0.4, el setting "mostrarpais" se convierte en "ocultarpais" (true cambia a false, y false cambia a true)
					if ($verant < 0.4 && (is_null($ocultarpais) && !is_null($mostrarpais))) {
						if ($mostrarpais==false || $mostrarpais=='') {  Tools::settingsSet(self::NOM, 'ocultarpais', '1');  } else {  Tools::settingsSet(self::NOM, 'ocultarpais', '');  };
					}

					Tools::settingsSave();
				}

				// Si ve que algún setting no tiene valor (es null), le pone un valor por defecto
				$sav = false;
				if (is_null(Tools::settings(self::NOM, 'pluginversion'))) {   Tools::settingsSet(self::NOM, 'pluginversion', self::VER);   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'posicionlogo'))) {   Tools::settingsSet(self::NOM, 'posicionlogo', '0');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'margenlogo'))) {   Tools::settingsSet(self::NOM, 'margenlogo', '0');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'medidalogo'))) {   Tools::settingsSet(self::NOM, 'medidalogo', '100');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'espaciomaximoempresa'))) {   Tools::settingsSet(self::NOM, 'espaciomaximoempresa', '280');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'ocultarprovincia'))) {   Tools::settingsSet(self::NOM, 'ocultarprovincia', '');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'ocultarpais'))) {   Tools::settingsSet(self::NOM, 'ocultarpais', '');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'mostraralmacen'))) {   Tools::settingsSet(self::NOM, 'mostraralmacen', ' ');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'tituloalmacen'))) {   Tools::settingsSet(self::NOM, 'tituloalmacen', '');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'mostraralmacentel'))) {   Tools::settingsSet(self::NOM, 'mostraralmacentel', '');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'ref2'))) {   Tools::settingsSet(self::NOM, 'ref2', '2');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'ocultarreferenciasfact'))) {   Tools::settingsSet(self::NOM, 'ocultarreferenciasfact', '');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'colorcabecera'))) {   Tools::settingsSet(self::NOM, 'colorcabecera', '#E9E9E9');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'colorfilas'))) {   Tools::settingsSet(self::NOM, 'colorfilas', '#EDEDED');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'espaciofilas'))) {   Tools::settingsSet(self::NOM, 'espaciofilas', '4');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'ocultarreferenciaprod'))) {   Tools::settingsSet(self::NOM, 'ocultarreferenciaprod', '');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'ocultartablaimpuestos'))) {   Tools::settingsSet(self::NOM, 'ocultartablaimpuestos', '');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'pagoyvencimiento'))) {   Tools::settingsSet(self::NOM, 'pagoyvencimiento', '3');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'traducirformaspago'))) {   Tools::settingsSet(self::NOM, 'traducirformaspago', '1');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'posiciontexto1'))) {   Tools::settingsSet(self::NOM, 'posiciontexto1', '7');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'medidatexto1'))) {   Tools::settingsSet(self::NOM, 'medidatexto1', '8');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'colortexto1'))) {   Tools::settingsSet(self::NOM, 'colortexto1', '#555555');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'justiftexto1'))) {   Tools::settingsSet(self::NOM, 'justiftexto1', 'left');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'posiciontexto2'))) {   Tools::settingsSet(self::NOM, 'posiciontexto2', '7');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'medidatexto2'))) {   Tools::settingsSet(self::NOM, 'medidatexto2', '8');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'colortexto2'))) {   Tools::settingsSet(self::NOM, 'colortexto2', '#555555');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'justiftexto2'))) {   Tools::settingsSet(self::NOM, 'justiftexto2', 'left');   $sav = true;   }
				if (is_null(Tools::settings(self::NOM, 'texto2'))) {   Tools::settingsSet(self::NOM, 'texto2', '');   $sav = true;   }
				if ($sav) {   Tools::settingsSave();   } /**/
    }

    // Se ejecuta cada vez que se desinstale el plugin. Primero desinstala y luego ejecuta el uninstall
		public function uninstall(): void
    {
        
    }

    // Se ejecuta cada vez que se instala o actualiza el plugin
		public function update(): void
    {

    }
}
