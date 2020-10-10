<?php 

function add_theme_setup()
{
    add_theme_support('post-thumbnails');
    register_nav_menus(['primary'=>'Primary Menu']);

}

function wordLimit($content){
    $words = explode('', $content);
    $output = array_slice($words, 0, 30);
}

add_action('after_setup_theme','add_theme_setup');