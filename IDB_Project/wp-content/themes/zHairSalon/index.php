
<?php get_header();?>



		
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


					<?php $featured = new WP_Query(array('post_type' => 'post')); 
					if($featured->have_posts()):
						while($featured->have_posts()): $featured->the_post();
					?>
						
						<div class="col-1-3">
							<div class="wrap-col item">
								<div class="portfolio-box">
									<?php the_post_thumbnail( ); ?>
									
								</div>
								<div class="item-content">
									<h3><a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a></h3>
									<span><i class="fa fa-calendar"></i> <?php the_date( ); ?> <i class="fa fa-comments"></i> 1 Comment</span>
								</div>
							</div>
						</div>
					<?php  endwhile; endif;?>	
					</div>
				</div>
			</div>
		</section>
<?php get_footer();?>