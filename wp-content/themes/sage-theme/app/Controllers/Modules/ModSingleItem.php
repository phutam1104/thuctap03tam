<?php

namespace App\Controllers\Modules;

class ModSingleItem
{   

    public function dataModule($module)
    {
        foreach ($module['slicksingle'] as $key => $value) {
            
            // $value->ID;
            # code...
            // array_push($dataslick,$value->ID);
            // $dataslick+= $value;
            $value->pos = get_field('postion',$value->ID);
        }
        return (object) [
            'module' => $module,
            'slicksingle'=>$module['slicksingle'],
            // 'dataslick'=> $module['pos'],

        ];
    }
}
