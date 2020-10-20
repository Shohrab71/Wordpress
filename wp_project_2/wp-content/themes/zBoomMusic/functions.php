<?php 
function add_theme_setup()
{
    add_theme_support('post-thumbnails');
    register_nav_menus( array(
      'primary' => 'Primary Menu',
      'footer_menu' => 'Footer Menu',
   ) );
}

add_action( 'after_setup_theme', 'add_theme_setup' );




function themename_custom_logo_setup()
   {
  
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 50,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
       'unlink-homepage-logo' => true, 
        ) );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



?>