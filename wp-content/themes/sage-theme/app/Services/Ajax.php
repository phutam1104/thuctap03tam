<?php

namespace App\Services;
use App\Services\Queries;
class Ajax
{
    public function init()
    {
        // Setup Ajax action hook
        add_action('wp_ajax_register_get_posts',array($this,'getPosts'));
        add_action('wp_ajax_nopriv_register_get_posts',array($this,'getPosts'));

    }
    public static function getPosts()
    {
       
            if(isset($_POST['loadmore'])){
                $posts=Queries::loadMore();
                // wp_send_json_success(
                //     [
                //         'posts'=>$posts->posts,
                //     ]);
                    return $posts->posts;
            }


    }
}
