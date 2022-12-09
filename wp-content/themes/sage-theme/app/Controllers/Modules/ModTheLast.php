<?php

namespace App\Controllers\Modules;

class ModTheLast
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
