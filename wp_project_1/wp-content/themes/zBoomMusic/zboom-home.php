<?php get_header();?>

<?php
/*
Template name: zboom home page
*/
?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
                    <?php 
                        $data = new WP_Query(array('post_type'=>'zboomslider'));
                        while($data->have_posts()): $data->the_post();
                    ?>
                    <li><?php the_post_thumbnail()?></li>
                    
<?php endwhile; ?>
					
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
        <?php 
                        $data = new WP_Query(array('post_type'=>'service'));
                        while($data->have_posts()): $data->the_post();
                    ?>
			<div class="col-1-3">
            
				<div class="wrap-col box">

                
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<p><?php echo wp_trim_words(get_the_content(), 25,' .....') ?></p>
                    <div class="more"><a href="<?php the_permalink(); ?>">[...]</a></div>
                    
               
                </div>
                
			</div>
			<?php endwhile;?>
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
                    <div class="heading"><h2>Latest Blog</h2></div>
                    
                    <?php $blog = new WP_Query(array('post_type'=>'post'));
                    while($blog->have_posts()):$blog->the_post();
                    ?>

					<article class="row">
                        
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail();?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#"><?php the_title() ?></a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
                    </article>
                    
<?php endwhile; ?>

					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="images/img2.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Welcome To Our Great Site</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="images/img3.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Stereosonic Is Back Just For You</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="images/img4.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Club Galaxy White Night Show</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article>
				</div>
			</div>
			<php get_sidebar();?>
			<?php dynamic_sidebar('right_sidebar'); ?>
		</div>
	</div>
</section>

<?php
get_footer(); 
?>

</body></html>