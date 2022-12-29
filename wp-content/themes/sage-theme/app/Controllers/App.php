<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use App\Services\Queries;
use App\Services\Api;
class App extends Controller
{
    // public function usingApi(Api $api){
    //     $this->api = $api;
    // }
    // public static function usingApi()
    // {
    //     // $this->json('POST', 'api/v1/get-post');
    //    return (new Api)->register_get_posts();
    // }

    public function siteName()
    {
        return get_bloginfo('name');
    }


    public static function title()
    {
        $title = "";
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            $title = get_the_archive_title();
        }
        if (is_search()) {
            $title = sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            $title = __('Not Found', 'sage');
        }
        if (empty($title)) {
            $title = get_the_title();
        }
        return $title;
    }

    public static function getLogo()
    {
        $logo = get_field('ns_header_logo', ACF_OPTION);
        $url = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/logo1.svg';
        $alt = ($logo && $logo['alt']) ? $logo['alt'] : 'logo';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }
    public static function getSocial()
    {
        $Social = get_field('ns_social_media', 'options');
        $youtube='Youtube';
        $instagram='Instagram';
        $twitter='Twitter';
        $linkedin='Linkedin';
        $facebook='Facebook';
        foreach($Social as $key=>$value) {
            if(strcmp($value['icon'], $youtube) == 0){
                $Social[$key]['icon'] ='<span class="icomoon icon-Icon-awesome-youtube text-2xl"></span>';
            }
            if(strcmp($value['icon'], $instagram) == 0){
                $Social[$key]['icon'] ='<span class="icomoon icon-Icon-awesome-instagram text-2xl"></span>';
            }
            if(strcmp($value['icon'], $twitter) == 0){
                $Social[$key]['icon'] ='<span class="icomoon icon-Icon-ionic-logo-twitter text-2xl"></span>';
            }
            if(strcmp($value['icon'], $linkedin) == 0){
                $Social[$key]['icon'] ='<span class="icomoon icon-Icon-awesome-linkedin text-2xl"></span>';
            } 
            if(strcmp($value['icon'], $facebook) == 0){
                $Social[$key]['icon'] ='<span class="icomoon icon-Icon-simple-facebook text-2xl"></span>';
            }               
        }
        return $Social ;
    }
    public static function getLogoWeb()
    {
        $logofooter = get_field('logofooter', 'options');
        return $logofooter ;
    }

    public static function getImgLoading()
    {
        $banner = get_field('ns_loading', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/ajax-loader.svg';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }

 
    
   
    public static function getLogoFooter()
    {
        $banner = get_field('ns_footer_background', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/footer/logofooter.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }


    public static function getFooterAddress()
    {
        return get_field('ns_footer_address', ACF_OPTION);
    }

    public static function getCopyRight()
    {
        return get_field('ns_copyright', ACF_OPTION);
    }

    public static function getTrackingCode($position = '')
    {
        if ($position) {
            switch ($position) {
                case 'in_head':
                    $code = get_field('ns_tracking_head', ACF_OPTION);
                    break;
                case 'after_open_body':
                    $code = get_field('ns_tracking_after_body', ACF_OPTION);
                    break;
                case 'before_close_body':
                    $code = get_field('ns_tracking_before_body', ACF_OPTION);
                    break;
                default:
                    $code = '';
                    break;
            }
            return $code;
        }
        return '';
    }

    public static function getFavicon()
    {
        $favicon = get_field('ns_favicon', ACF_OPTION);
        return $favicon ? $favicon : '';
    }

    public static function getAppleIcon()
    {
        $icon = get_field('ns_apple_touch_icon', ACF_OPTION);
        return $icon ? $icon : '';
    }
    /**
     * Get content 404.
     *
     * @return string
     */
    public static function getContent404()
    {
        return Queries::getOptionField('ns_404_page_content');
    }

    /**
     * Get Main Menu
     */
    public static function getMainNav()
    {
        $location = 'primary_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeHeaderMenu(),
                'menu_class' => 'main-menu-ul navbar-nav list-none flex mb-0 p-0 text-white flex-col
                lg:flex-row lg:justify-end',
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }
    /**
     * Get Footer Menu
     */
    public static function getFooterNav()
    {
        $location = 'footer_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                // ITEMS_WRAP => '%3$s',
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeFooterMenu(),
                'menu_class' => 'list-none flex lg:order-2 xl:order-1 sm:justify-between sm:w-full lg:w-4/5 xl:w-3/5 lg:mt-20 text-white',
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }
}
