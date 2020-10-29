<?php 

	function flipmart_setup()
	{

		add_theme_support( 'title_tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'woocommerce' );


	}

	add_action('after_setup_theme','flipmart_setup');


	function flipmart_script()
	{
		//Bootstrap Core CSS 
		wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
		wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
		wp_enqueue_style( 'blue', get_template_directory_uri() . '/assets/css/blue.css');
		wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
		wp_enqueue_style( 'owl-transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css');
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css');
		wp_enqueue_style( 'rateit', get_template_directory_uri() . '/assets/css/rateit.css');
		wp_enqueue_style( 'bootstrap-select', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css');
		wp_enqueue_style( 'font-awesome-font', get_template_directory_uri() . '/assets/css/font-awesome.css');
		wp_enqueue_style( 'google-font','http://fonts.googleapis.com/css?family=Roboto:300,400,500,700');
		wp_enqueue_style( 'google-fontt','https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800');
		wp_enqueue_style( 'google-fonttt','https://fonts.googleapis.com/css?family=Montserrat:400,700');


		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'bootstrap-js',get_template_directory_uri() . '/assets/js/bootstrap.min.js',array(), '', true);
		wp_enqueue_script( 'bootstrap-hover-dropdown',get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js',array(), '', true);
		wp_enqueue_script( 'owl-carosel-js',get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array(), '', true);
		wp_enqueue_script( 'echo-min',get_template_directory_uri() . '/assets/js/echo.min.js',array(), '', true);
		wp_enqueue_script( 'easing-jquery',get_template_directory_uri() . '/assets/js/jquery.easing-1.3.min.js',array(), '', true);
		wp_enqueue_script( 'bootstrap-slider-js',get_template_directory_uri() . '/assets/js/bootstrap-slider.min.js',array(), '', true);
		wp_enqueue_script( 'rate-it-js',get_template_directory_uri() . '/assets/js/jquery.rateit.min.js',array(), '', true);
		wp_enqueue_script( 'lightbox-js',get_template_directory_uri() . '/assets/js/lightbox.min.js',array(), '', true);
		wp_enqueue_script( 'bootstrap-select-js',get_template_directory_uri() . '/assets/js/bootstrap-select.min.js',array(), '', true);
		wp_enqueue_script( 'wow-min-js',get_template_directory_uri() . '/assets/js/wow.min.js',array(), '', true);
		wp_enqueue_script( 'script-js',get_template_directory_uri() . '/assets/js/scripts.js',array(), '', true);
		
	}

	add_action( 'wp_enqueue_scripts', 'flipmart_script' );



	function loop_columns(){
		return 3;
	}

	add_filter('loop_shop_columns','loop_columns',999);
?>













