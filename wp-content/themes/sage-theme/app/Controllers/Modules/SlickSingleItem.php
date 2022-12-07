<?php

namespace App\Controllers\Modules;

class SlickSingleItem
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
