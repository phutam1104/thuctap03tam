<?php

namespace App\Controllers\Modules;

class Content2
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
