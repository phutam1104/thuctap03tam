<?php

namespace App\Controllers\Modules;

class ModSingleItem
{   

    public function dataModule($module)
    {
        foreach ($module['slicksingle'] as $key => $value) {
            $value->pos = get_field('postion',$value->ID);
        }
        return (object) [
            'module' => $module,
            'slicksingle'=>$module['slicksingle'],
            // 'dataslick'=> $module['pos'],

        ];
    }
}
