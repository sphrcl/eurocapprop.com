<?php 

/* Template name: Partnership */
get_header(); 

?>


<?php 
	if(have_posts()) : while(have_posts()) : the_post();
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
?>

	<div class="container">	

		<h2 class="title"><?php the_title(); ?></h2>

		<div class="development-divider">

			<?php
				$query_partnership = new wp_query(array(
					'post_type' => 'partnership',
				)); 

				if($query_partnership->have_posts()) {
			?>

				<ul class="team">

					<?php
						while($query_partnership->have_posts()) : $query_partnership->the_post();
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
					?>
					
						<li>
							
							<div style="background-image: url(<?php echo tt($imgsrc[0],320,240); ?>);"></div>
							<h3><?php the_title(); ?></h3>
							<h4><?php echo get_post_meta($post->ID,'misfit_industry',true); ?></h4>
							<div class="person-description">
								<div class="left"><?php the_content(); ?></div>
							</div>

						</li>

					<?php endwhile; ?>

				</ul>

			<?php } wp_reset_query(); ?>

		</div>	

	</div>

</div>

<?php endwhile; endif; wp_reset_query(); ?>	
			

<?php get_footer(); ?>