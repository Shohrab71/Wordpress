<footer class="site-footer">
    <p><?php bloginfo( 'name' ) ?></p>
    <nav class="navigation-menu">
            <?php $args = [ 'theme_location' => 'footer' ]; ?>
			<?php wp_nav_menu( $args ) ?>
        </nav>
</footer>
</div> <!-- closes <div class=container"> -->
 
<?php wp_footer() ?>
</body>
</html>

