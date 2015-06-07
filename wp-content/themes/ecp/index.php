<?php get_header(); ?>


	<div class="ecp-home">
		
		
		<div class="ecp-home-lining">
		
			<img src="<?php bloginfo('template_url'); ?>/images/homepage-ecp-logo.png">

			<ul class="menu">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ,  'container' => false, 'items_wrap' => '%3$s' ) ); ?>
			</ul>
			
		</div>
		
	</div>
	

<?php get_footer(); ?>