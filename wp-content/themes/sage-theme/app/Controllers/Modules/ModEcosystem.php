<?php

namespace App\Controllers\Modules;

class ModEcosystem
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
