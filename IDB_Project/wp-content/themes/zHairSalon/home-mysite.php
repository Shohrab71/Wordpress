<?php 
/*
Template Name: MY home page
*/







 ?>
 
<?php get_header();?>

<div id="owl-slide" class="owl-carousel">

				<?php $slider =new WP_Query(array('post_type' => 'slider')); 
					if($slider->have_posts()):
						while($slider->have_posts()): $slider->the_post();
				?>
					<div class="item">
						<?php the_post_thumbnail( ); ?>
						<div class="carousel-caption">
							<div class="carousel-caption-inner">
								<p class="carousel-caption-title"><a href="#"><?php the_title(); ?></a></p>
								<p class="carousel-caption-category"><a href="#" rel="category tag"><?php the_content(); ?></a>
								</p>
							</div>
						</div>
					</div>
				<?php  endwhile; endif;?>



			<!-- <div class="item">
				<img src="<?php //echo get_template_directory_uri();?>/images/slider-2.jpg" />
				<div class="carousel-caption">
					<div class="carousel-caption-inner">
						<p class="carousel-caption-title"><a href="#">How to Take Care for Hair in the Summer</a></p>
						<p class="carousel-caption-category"><a href="#" rel="category tag">Business</a>, 
						<a href="#" rel="category tag">Lifestyle</a>, <a href="#" rel="category tag">Pursuits</a>
						</p>
					</div>
				</div>
			</div> -->
			
		</div>

<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container">
		<!-----------------content-box-1-------------------->
		<section class="content-box boxstyle-1 box-1">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<?php $welcome =new WP_Query(array('post_type' => 'post', 'category_name' => 'welcome')); 
					if($welcome->have_posts()):
						while($welcome->have_posts()): $welcome->the_post();
					?>
					<div class="col-1-2">
						<div class="wrap-col">
							<h1><?php the_title(); ?><br><span><?php bloginfo('name')?></span></h1>
							<p class=""><?php echo wp_trim_words(get_the_content(), 60, '');?></p>
							<a class="button bt1" href="<?php the_permalink( ); ?>">More Info</a>
						</div>
					</div>
					<div class="col-1-2">
						<div class="wrap-col">
							<?php the_post_thumbnail( ); ?>
						</div>
					</div>
					<?php  endwhile; endif;?>
				</div>
			</div>
		</section>
		
		<!-----------------content-box-2-------------------->
		<section class="content-box boxstyle-2 box-2">
			<div class="zerogrid" style="width: 100%;">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<div class="wrapper">
							<h2 class="color-yellow">Gallery</h2>
							<hr class="line01">
							<div class="intro">We Love Our Clients</div>
						</div>
					</div>
					<div class="row">
							<?php $gallery =new WP_Query(array('post_type' => 'gallery')); 
							if($gallery->have_posts()):
								while($gallery->have_posts()): $gallery->the_post();
							?>
							<div class="col-1-4">
									<div class="portfolio-box zoom-effect">
										<?php the_post_thumbnail( ); ?>
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													<?php the_title(); ?>
												</div>
												<div class="project-category">
													<?php echo wp_trim_words(get_the_content(), 60, '');?>
												</div>
												<div class="project-social">
													<ul class="list-inline">
														<li><a href="single.html"><i class="fa fa-link"></i></a></li>
														<li><a href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><i class="fa fa-search"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php  endwhile; endif;?>
					</div>
				</div>
			</div>
		</section>
		
		<!-----------------content-box-3-------------------->
		<section class="content-box boxstyle-3 box-3 ">
			<div class="portfolio-box">	
				<?php $new =new WP_Query(array('post_type' => 'post', 'category_name' => 'new')); 
					if($new->have_posts()):
						while($new->have_posts()): $new->the_post();
					?>
					<?php the_post_thumbnail( ); ?>
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category">
								<?php the_title(); ?>
							</div>
							<div class="project-name">
								<?php echo wp_trim_words(get_the_content(), 60, '');?>
								
							</div>
						</div>
					</div>
					<?php  endwhile; endif;?>

			</div>
		</section>
		
		<!-----------------content-box-4-------------------->
		<section class="content-box boxstyle-1 box-4">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<div class="wrapper">
							<h2 class="color-yellow">Team</h2>
							<hr class="line02">
							<div class="intro">Meet Our Team</div>
						</div>
					</div>
					<div class="row"><!--Start Box-->


					<?php $team = new WP_Query(array('post_type' => 'team')); 
					if($team->have_posts()):
						while($team->have_posts()): $team->the_post();
					?>
						<div class="col-1-4">
							<div class="wrap-col item">
								<div class="portfolio-box">
														<?php the_post_thumbnail( ); ?>
								</div>
								<div class="item-content">
									<h3><a href="#"><?php the_title(); ?></a></h3>
									<span><?php echo wp_trim_words(get_the_content(), 60, '');?></span>
								</div>
							</div>
						</div>
					<?php  endwhile; endif;?>						
					</div>
				</div>
			</div>
		</section>
		
		<!-----------------content-box-5-------------------->
		<section class="content-box boxstyle-3 box-5">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<div class="wrapper">
							<h2 class="color-yellow">From the Blog</h2>
							<hr class="line03">
							<div class="intro">We make beauty</div>
						</div>
					</div>
					<div class="row"><!--Blog Box-->


					<?php $featured = new WP_Query(array('post_type' => 'post', 'category_name'=>'featured')); 
					if($featured->have_posts()):
						while($featured->have_posts()): $featured->the_post();
					?>
						
						<div class="col-1-3">
							<div class="wrap-col item">
								<div class="portfolio-box">
									<?php the_post_thumbnail( ); ?>
									
								</div>
								<div class="item-content">
									<h3><a href="single.html"><?php the_title(); ?></a></h3>
									<span><i class="fa fa-calendar"></i> <?php the_date( ); ?> <i class="fa fa-comments"></i> 1 Comment</span>
								</div>
							</div>
						</div>
					<?php  endwhile; endif;?>	
					</div>
					<div class="row"><!--Testimonials Box-->
						<div id="owl-testimonials" class="owl-carousel t-center">


							<?php $testimonial = new WP_Query(array('post_type' => 'testimonial')); 
							if($testimonial->have_posts()):
								while($testimonial->have_posts()): $testimonial->the_post();
							?>
							<div class="item testimonials-item">
								<?php the_post_thumbnail( ); ?>
								<p><?php the_content( ); ?></p>
								<h5><?php the_title(); ?></h5>
							</div>
							<?php  endwhile; endif;?>	
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-----------------content-box-6-------------------->
		<section class="content-box boxstyle-1 box-6">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="col-1-3">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="col-2-3 t-left">
									<h3>Address</h3>
									<p>123, New Lenox Chicago, IL 60606</p>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="col-1-3">
									<i class="fa fa-phone"></i>
								</div>
								<div class="col-2-3 t-left">
									<h3>Phone</h3>
									<p>Carteret NJ 0708 (732) 803-01 03, (732) 806-01 04</p>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="col-1-3">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="col-2-3 t-left">
									<h3>Email</h3>
									<p><span>Email One :</span> info@yoursite.com </p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
	</div>
</section>
<?php get_footer();?>