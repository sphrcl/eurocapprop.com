<?php 

/* Template name: Leadership */
get_header(); 

?>


<?php 
	if(have_posts()) : while(have_posts()) : the_post();
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
?>

	<div class="container">	

		<h2><?php the_title(); ?></h2>

		<?php
			$query_leadership = new wp_query(array(
				'post_type' => 'leadership',
				'posts_per_page' => 1
			)); 
			if($query_leadership->have_posts()) {
		?>

			<div class="top-person">

				<?php
					while($query_leadership->have_posts()) : $query_leadership->the_post();
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
				?>
				
					<div class="left" style="background-image: url(<?php echo tt($imgsrc[0],580,550); ?>);"></div>

					<div class="right">
						
						<h3><?php echo get_post_meta($post->ID,'misfit_title_position',true); ?></h3>
						<h4><?php the_title(); ?></h4>
						<?php the_content(); ?>

					</div>
				
				<?php $count++; endwhile; ?>

			</div>

		<?php } wp_reset_query(); ?>

		<h2 style="color: #757575;">Leadership Team</h2>

		<?php
			$query_leadership_team = new wp_query(array(
				'post_type' => 'leadership',
				'posts_per_page' => -1,
				'offset_per_page' => 1,
			)); 

			if($query_leadership_team->have_posts()) {
		?>

			<ul class="team">

				<?php
					$count = 1;
					while($query_leadership_team->have_posts()) : $query_leadership_team->the_post();
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
				?>

					<?php if($count > 1) { ?>
				
						<li>
							
							<div class="photo" style="background-image: url(<?php echo tt($imgsrc[0],320,240); ?>);"><a class="dropanchor open-detail"></a></div>
							<h3><?php the_title(); ?></h3>
							<h4><?php echo get_post_meta($post->ID,'misfit_title_position',true); ?></h4>
							<div class="person-description">
								<div class="left"><?php echo excerpt(20); ?></div>
								<a class="open-detail"><img class="right" src="<?php bloginfo('template_url'); ?>/images/right-arrow.png"></a>
							</div>

							<div class="person-wrapper" style="display: none;">
								<div class="person-details">

									<div class="person-lightbox-image left" style="background-image: url(<?php echo tt($imgsrc[0],450,310); ?>);"></div>

									<div class="right">
										<h3><?php the_title(); ?></h3>
										<h4><?php echo get_post_meta($post->ID,'misfit_title_position',true); ?></h4>
										<div class="person-description">
											<?php the_content(); ?>
										</div>
									</div>

									<div class="close-button"></div>

								</div>
							</div>

						</li>

					<?php } ?>

				<?php $count++; endwhile; ?>

			</ul>

		<?php } wp_reset_query(); ?>	

	</div>

</div>

<?php endwhile; endif; wp_reset_query(); ?>	
			

<?php get_footer(); ?>