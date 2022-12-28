<?php

namespace App\Controllers\Modules;

class ModBanner
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'titlebanner' =>$module['titlebanner'],
            'contentbanner'=>$module['contentbanner'],
            'linkbanner'=>$module['linkbanner'],
            'imgbanner'=>$module['imgbanner'],
        ];
    }
}
