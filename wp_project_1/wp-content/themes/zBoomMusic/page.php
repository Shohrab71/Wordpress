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
						<h2><a href="#"><?php the_title()?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F j,Y');?> <a href="#"><?php comments_popup_link('No comment','1 comment','% comments,','comment-link','comments are off')?></a></div>
						<p><?php the_content()?></p>
                        <?php comments_template() ?>
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
				<?php dynamic_sidebar('right_sidebar') ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>

</body></html>