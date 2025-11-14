<?php
/**
 * Copyright (C) 2020-2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\NeoTheme\Extension\Model;

use Closure;

class User
{
    public function gravatar(): Closure
    {
        return function ($size = 80) {
            return 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($this->email))) . '?s=' . $size;
        };
    }
}
