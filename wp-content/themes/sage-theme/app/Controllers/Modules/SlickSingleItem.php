<?php

namespace App\Controllers\Modules;

class SlickSingleItem
{
    public function dataModule($module)
    {
        foreach ($module['slicksingle'] as $key => $value) {
            
            // $value->ID;
            # code...
            // array_push($dataslick,$value->ID);
            // $dataslick+= $value;
         $pos = get_field('postion',$value->ID);
            $value->pos = $pos;
        }
        return (object) [
            'module' => $module,
            // 'dataslick'=> $module['pos'],

        ];
    }
}
