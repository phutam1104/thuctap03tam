<?php

namespace App\Controllers\Modules;

class ModTheLast
{
   
    public function dataModule($module)
    {
        foreach ($module['postthelast'] as $key => $value) {
            $value->linkslast = get_field('linklast',$value->ID);
            if ($key==0)
            $value->imgslast = get_field('imglast',$value->ID);
        }
        return (object) [
            'module' => $module,
            'postthelast'=>$module['postthelast'],

        ];
    }
}
