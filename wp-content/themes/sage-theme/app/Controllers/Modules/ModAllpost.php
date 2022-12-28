<?php
namespace App\Controllers\Modules;
use App\Services\Api;
use App\Services\Ajax;
class ModAllpost
{   
    
    public function dataModule($module)
    {
        $module=array();
        foreach(Api::getPosts() as $value){
            $datapost=[
                'title'=>$value->post_title,
                'content'=>$value->post_content,
            ];
            array_push($module,$datapost);
            }
            
            
        return (object) [
            'module' => $module,

        ];
    }
}
