<?php
    get_header();
?>
<a href=""></a>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                    <?php if(have_posts()):
                    while(have_posts()): the_post();
                    ?>
                    <article>
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> <?php the_time();?> <a href="#">01 Commnets</a>]</div>
						<p><?php echo wp_trim_words(get_the_content(), 25,' .....') ?>
						<a href="<?php the_permalink(); ?>">Read more</a>
						</p>
					</article>
                    <?php 

                    endwhile;
                    endif;
                    
                    ?>
					<ul id="pagi">
						<li><a class="current" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">next</a></li>
					</ul>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<?php dynamic_sidebar('right_sidebar'); ?>
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
<?php get_footer();?>

</body></html>