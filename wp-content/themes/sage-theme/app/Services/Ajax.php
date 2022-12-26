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
        ob_start();

                $posts=Queries::loadMore();
                // wp_send_json_success(
                //     [
                //         'posts'=>$posts->posts,
                //     ]);
                    // foreach($posts->posts as $key => $valu   e) {
                    //     // wp_send_json_success(
                    //     //         [
                    //     //             'posts'=>$value,
                    //     //         ]);
                    //             var_dump($value);
                    //     // print_r( $value);
                    // }
                $count=3;
                    echo '<ul>';
                    while($posts->have_posts()):$posts->the_post();
                        
                        echo '<li>'.get_the_title($count).'</li>';
                        echo '<li>'.get_the_content($count).'</li>';
                        $count+=1;
                    endwhile;
                echo '</ul>';
                wp_reset_query();
                $result = ob_get_clean(); //cho hết bộ nhớ đệm vào biến $result
                wp_send_json_success($result); // trả về giá trị dạng json
                die();
                // var_dump($posts->posts[0]);
                    // return $posts->posts;
            }
        

    }

