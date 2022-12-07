<?php

namespace App\Controllers\Modules;

class Content1
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
