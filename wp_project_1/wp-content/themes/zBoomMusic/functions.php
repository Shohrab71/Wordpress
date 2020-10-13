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

function my_register_sidebar(){
    register_sidebar( 
        array(
            'id' => 'right_sidebar',
            'name' => __('right sidebar'),
            'description' => __('A short description of the sidebar'),
            'before_widget' => '<div class="box">',
            'after_widget' => '</div></div>',
            'before_title' => '<div class="heading"><h2>',
            'after_title' => '</h2></div><div class="content">',
        )
     );
     register_sidebar( 
        array(
            'id' => 'footer_sidebar',
            'name' => __('footer sidebar'),
            'description' => __('A short description of the sidebar'),
            'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="heading"><h2>',
            'after_title' => '</h2></div><div class="content">',
        )
     );
}

add_action('widgets_init','my_register_sidebar');