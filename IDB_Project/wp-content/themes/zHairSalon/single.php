 
<?php get_header();?>



		
		<!-----------------content-box-5-------------------->
		<section class="content-box boxstyle-3 box-5">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="row"><!--Blog Box-->


				<?php
					if(have_posts()):
						while(have_posts()): the_post();
					?>
						
						<div class="col-1-12">
							<div class="wrap-col item">
								<div class="portfolio-box">
									<?php the_post_thumbnail( ); ?>
									
								</div>
								<div class="item-content">
									<h3><a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a></h3>
									<span><i class="fa fa-calendar"></i> <?php the_date( ); ?> <i class="fa fa-comments"></i> 1 Comment</span>
									<p><?php the_content( ); ?></p>
									<p><?php //comment_form(); ?></p>
									<?php comments_template( ); ?>
								</div>
							</div>
						</div>
					<?php  endwhile; endif;?>	
					</div>
				</div>
			</div>
		</section>
<?php get_footer();?>