<?php 

function mysite_theme_setup(){

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => 'Primary Menu',
		'footer' => 'Footer Menu',
		'social' => 'Social Menu',

	) );
}
add_action( 'after_setup_theme', 'mysite_theme_setup' );


function mysite_custom_post(){

		register_post_type( 'slider', array(
				'label' => 'Slider',
				'public'              => true,
				'capability_type'     => 'post',
				'supports'            => array(
							'title',
							'editor',
							'thumbnail'
				),


		));

		register_post_type( 'gallery', array(
				'label' => 'gallery',
				'public'              => true,
				'capability_type'     => 'post',
				'supports'            => array(
							'title',
							'editor',
							'thumbnail'
				),


		));
		register_post_type( 'team', array(
				'label' => 'team',
				'public'              => true,
				'capability_type'     => 'post',
				'supports'            => array(
							'title',
							'editor',
							'thumbnail'
				),


		));

		register_post_type( 'testimonial', array(
						'label' => 'testimonial',
						'public'              => true,
						'capability_type'     => 'post',
						'supports'            => array(
									'title',
									'editor',
									'thumbnail'
						),


				));

	
}
add_action( 'init', 'mysite_custom_post' );


function mysite_widgets(){
	/**
	 * Creates a sidebar
	 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	 */
	
	
	register_sidebar( array(
		'name'          => __( 'Footer widget', 'zhairsalon' ),
		'id'            => 'footer_widget',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div class="col-1-3 col-footer-1">
				<div class="wrap-col"><div class="wrap-col">',
		'after_widget'  => '</div>
			</div></div></li>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'My Location', 'zhairsalon' ),
		'id'            => 'map',
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	

}
add_action( 'widgets_init' , 'mysite_widgets' );










 ?>