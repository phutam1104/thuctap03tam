<?php

namespace App\Controllers\Modules;

class ModThreecolerp
{
    public function dataModule($module)
    {
            // $datathreecol=array();
            // foreach($module['treecolrepater'] as $key => $value)
            // {
            //     $datathreecol[$key]=[
            //         'icon' => $value->iconthreecol,
            //         'title'=>$value->titlethreecol,
            //         'content'=>$value->contentthreecol,
            //         'links'=>$value->linksthreecol,
            //     ];
            // }
                return (object) [
            'module' => $module,
            'titleerp'=>$module['titleerp'],
            'contenterp'=>$module['contenterp'],
            'threecolrepater'=>$module['threecolrepater'],
            'imgspacingrepeater'=>$module['imgspacingrepeater']
        ];
    }
}
