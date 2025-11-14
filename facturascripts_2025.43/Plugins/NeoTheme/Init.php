<?php
/**
 * Copyright (C) 2020-2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\NeoTheme;

use FacturaScripts\Core\Template\InitClass;

final class Init extends InitClass
{
    public function init(): void
    {
        // se ejecutará cada vez que carga FacturaScripts (si este plugin está activado).
        $this->loadExtension(new Extension\Model\User());
    }

    public function uninstall(): void
    {
    }

    public function update(): void
    {
        // se ejecutará cada vez que se instala o actualiza el plugin.
    }
}
