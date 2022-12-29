<?php

namespace App\Controllers\Modules;

class ModTwocol
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'contenttowcol'=>$module['contenttowcol'],
        ];
    }
}
