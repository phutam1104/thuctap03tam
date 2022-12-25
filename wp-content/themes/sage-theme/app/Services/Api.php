<?php

namespace App\Services;
use WP_REST_Server;
use App\Services\Queries;
class Api
{
    public function init()
    {
        add_action( 'rest_api_init', array($this,'register_get_posts') );

    }
    
    public function register_get_posts() {
        // register_rest_route() handles more arguments but we are going to stick to the basics for now.
        register_rest_route( 'api/v1', '/get-post', array(
            // By using this constant we ensure that when the WP_REST_Server changes our readable endpoints will work as intended.
            'methods'  => \WP_REST_Server::READABLE,
            // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
            'callback' => array($this,'getPosts'),
        ) );
    }
    public static function getPosts(){
        $post=Queries::getPost();
        
        if(empty($post)){
            return new \WP_Error('emty_post','There are no posts to display',array('status' =>404));
        }
            $response=new \WP_REST_Response(array(
                'posts'=>$post,
            ));
        
            // wp_send_json_success(
            // [
            //     'posts'=>$response->data['posts']->posts,
            // ]);
            // var_dump($response->data['posts']->posts);

            return $response->data['posts']->posts;

    }
}
