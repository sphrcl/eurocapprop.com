<?php get_header(); ?>


	<div class="ecp-home">

		<img src="<?php bloginfo('template_url'); ?>/images/homepage-ecp-logo.png">

		<?php wp_nav_menu( array( 'theme_location' => 'primary' ,  'container' => false, 'items_wrap' => '%3$s' ) ); ?>

	</div>
	

<?php get_footer(); ?>