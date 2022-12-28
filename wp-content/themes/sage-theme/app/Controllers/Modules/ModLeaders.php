<?php

namespace App\Controllers\Modules;

class ModLeaders
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'titileleader'=>$module['titileleader'],
            'contentlead'=>$module['contentlead'],
            'slickleader'=>$module['slickleader'],
        ];
    }
}
