<?php 

function add_theme_setup()
{
    add_theme_support('post-thumbnails');
    register_nav_menus(['primary'=>'Primary Menu']);
    $args = array(
       
        'label' => 'Sliders',
        'Description' => 'Holds our slider entries',
        'public' => true,
        'supports' => array('title','thumbnail',),
        'has_archive' => true,
   
    );
    register_post_type('zboomslider',$args);

    $args = array(
       
        'label' => 'Services',
        'Description' => 'Holds our services',
        'public' => true,
        'supports' => array('title','editor',),
        'has_archive' => true,
   
    );
    register_post_type('service',$args);
}

add_action('after_setup_theme','add_theme_setup');

