<?php

namespace App\Controllers\Modules;

class CustomScrollbar
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
