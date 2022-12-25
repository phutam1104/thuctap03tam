<?php

namespace App\Controllers\Modules;

class ModAllpost
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
