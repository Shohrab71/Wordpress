<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset=" <?php bloginfo('charset') ?> " />
<title> <?php wp_title(';',true,'right'); ?> 
		<?php bloginfo('name');  if (is_home())  echo '|  The University';
		?>
</title>
<meta name="description" content="<?php bloginfo('description') ?>" />
<meta name="viewport" content="width = device-width, initial-scale = 1.0">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen,projection" />
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div id="wrapper">
 <div id="header" class="section">
 <h1 class="header"> <a href="<?php home_url('/'); ?>"> <?php bloginfo('name'); ?> </a> </h1>
 </div>
 <div id="nav-top">
 	<?php wp_nav_menu(); ?>
 
 </div>

<div id="content" class="section">

<?php 

		if (have_posts()) :

			while (have_posts()) :
				the_post()


?>


 <div <?php post_class(); ?> id="<?php the_ID(); ?>">
<h2><a href="<?php the_permalink();?>" id="<?php the_id();?>"> <?php the_title_attribute()?> </a></h2>
 <p class="postmetadata before">Posted by <a href="#"> <?php the_author(); ?> </a></p>

 <p> <?php the_content('read more.....'); ?> </p>
 </div> <!-- #post-n -->
<?php 	endwhile;
			
		endif;

?>
</div> <!-- #content -->
<div id="sidebar" class="section">
 <div class="widget">
 <h3>Sidebar</h3>
 <p>Some useful ancillary information goes here.</p>
 </div>
</div>
<div id="footer" class="section">
 <p class="copyright">&copy; 2013 The University</p>
 <div class="contact"><p>P.O. Box 1111, College Town, MD</p></div>
</div>
</body>
<?php wp_footer(); ?>
</html>

