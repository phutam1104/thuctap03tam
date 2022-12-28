<?php

namespace App\Controllers\Modules;

class ModConnect
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'contentconnect'=>$module['contentconnect'],
            'linkconnect'=>$module['linkconnect'],
            'titleconnect'=>$module['titleconnect']

        ];
    }
}
