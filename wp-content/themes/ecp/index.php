<?php get_header(); ?>


	<div class="ecp-home">

		<img src="<?php bloginfo('template_url'); ?>/images/homepage-ecp-logo.png">

		<ul class="menu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ,  'container' => false, 'items_wrap' => '%3$s' ) ); ?>
		</ul>

	</div>
	

<?php get_footer(); ?>