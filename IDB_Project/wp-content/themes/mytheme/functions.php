<?php
 
function custom_theme_assets() {
	wp_enqueue_style('style1', get_stylesheet_uri() );
	wp_enqueue_style('style2', get_template_directory_uri(). '/css/style.css');
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );
register_nav_menus( [ 'footer' => __( 'Footer Menu' ) ] );

