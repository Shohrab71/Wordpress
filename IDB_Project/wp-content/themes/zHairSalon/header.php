<!DOCTYPE html>
<html <?php language_attributes( ); ?>> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta <?php bloginfo( 'charset' ); ?>>
	<title><?php bloginfo( 'name' ) ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="author" content="www.sohrab.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/menu.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/lightbox.css">
	
	<!-- Custom Fonts -->
	<link href="<?php echo get_template_directory_uri();?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="<?php echo get_template_directory_uri();?>/owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->
	
	<script src="<?php echo get_template_directory_uri();?>/js/jquery-2.1.1.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(  ); ?>>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header>
	<div class="wrap-header">
		<!---Main Header--->
		<div class="main-header">
			<div class="zerogrid">
				<div class="row">
					<div class="col-1-4">
						<span class="contact-info left">
							<b style="color:#2b2459;font-size:14px;">Mon - Sat 8.00 - 20.00</b>
							<br>
							Sunday CLOSED
						</span>
					</div>
					<div class="col-2-4">
						<div id="logo"><a class="logo_title" href="<?php home_url()?>"><?php bloginfo( 'name' ); ?><!-- <img src="<?php echo get_template_directory_uri();?>/images/logo.png" /> --></a></div>
					</div>
					<div class="col-1-4">
						<span class="contact-info right">
							<b style="color:#2b2459;font-size:14px;">Call us: 123-456-78-90</b>
							<br>
							info@yoursite.com
						</span>
					</div>
				</div>
			</div>
		</div>
		<!---Top Menu--->
		<!-- <div id="cssmenu" > -->
			<?php wp_nav_menu(array(
				'theme_location' => 'primary',
				'container' => 'div',
				'container_class' => '',
				'container_id' => 'cssmenu',

			)); ?>
			<!-- <ul>
			   <li class="active"><a href="index.html"><span>zHairSalon</span></a></li>
			   <li class="has-sub"><a href="#"><span>Category</span></a>
				  <ul>
					 <li class="has-sub"><a href="#"><span>Item 1</span></a>
						<ul>
						   <li><a href="#"><span>Sub Item</span></a></li>
						   <li class="last"><a href="#"><span>Sub Item</span></a></li>
						</ul>
					 </li>
					 <li class="has-sub"><a href="#"><span>Item 2</span></a>
						<ul>
						   <li><a href="#"><span>Sub Item</span></a></li>
						   <li class="last"><a href="#"><span>Sub Item</span></a></li>
						</ul>
					 </li>
				  </ul>
			   </li>
			   <li><a href="archive.html"><span>Archive</span></a></li>
			   <li><a href="single.html"><span>About</span></a></li>
			   <li class="last"><a href="contact.html"><span>Contact</span></a></li>
			</ul> -->
		<!-- </div> -->
		<!---Owl Slide--->
		
	</div>
</header>
