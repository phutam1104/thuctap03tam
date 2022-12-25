<?php

namespace App\Services;

class Queries
{
    public static function getOptionField($fieldName)
    {
        return get_field($fieldName, ACF_OPTION);
    }
    public static function getPost()
    {
        $argc=[
            'posts_per_page'=> 2,
            'post_type'=>'post',
        ];
        $queryAll=new \WP_Query($argc);
        return $queryAll;
           
    }
    public static function loadMore(){
        $argc=[
            'posts_per_page'=> -1,
            'post_type'=>'post',
        ];
        $queryAll=new \WP_Query($argc);
        return $queryAll;
       
    
    }
}
