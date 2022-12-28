<?php

namespace App\Controllers\Modules;

class ModThreecolcontent
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'threecolcontent'=>$module['threecolcontent'],
        ];
    }
}
