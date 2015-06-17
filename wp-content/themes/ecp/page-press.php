<?php 

/* Template name: Press */
get_header(); 

?>


	<div class="container">
	
		<h2 class="title"><?php the_title(); ?></h2>

			<?php

				$query_press = new WP_Query(array(
					'post_type' => 'press',
				));

				if($query_press->have_posts()) : while($query_press->have_posts()) : $query_press->the_post(); 
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 

			?>

				<div class="press-container" style="background-image: url(<?php echo tt($imgsrc[0],370,280); ?>);">

					<a href="<?php 
						if( get_post_meta($post->ID,'misfit_file',true) ) {
							get_post_meta($post->ID,'misfit_file',true); 
						} else {
							get_post_meta($post->ID,'misfit_press_link',true); 
						}
					?>">
						<a target="_blank" href="<?php echo get_post_meta($post->ID, 'misfit_press_link', true); ?>"><h3><?php the_title(); ?></h3></a>
						<p><?php the_content(); ?></p>
						<span class="press-date"><?php echo get_the_date("F j, Y"); ?></span>
						<!-- <span class="press-see-photos">See photos</span> -->
					</a>

				</div>

			<?php endwhile; endif; wp_reset_query(); ?>
	
	</div>


<?php get_footer(); ?>