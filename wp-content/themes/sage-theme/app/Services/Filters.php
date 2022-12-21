<?php

namespace App\Services;

trait Filters
{
    public static function fileterTwocol($input){
        $data=(object) $input;
        include \App\template_path(
            \App\locate_template('partials/filter/item.blade.php', $data)
        );
    }
}
