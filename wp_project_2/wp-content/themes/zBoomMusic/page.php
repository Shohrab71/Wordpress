<?php get_header(); ?>

<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					
                    <?php// if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
							
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink();?>"><?php  the_title();?></a></h2>
								
								<p><?php the_content();?></p>
							</div>
						</div>
                    </article>
                    
                    <?php //endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php //endif; ?>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="<?php echo get_template_directory_uri() ?>/images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>














<?php get_footer(); ?>