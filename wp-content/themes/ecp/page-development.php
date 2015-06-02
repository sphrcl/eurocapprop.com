<?php 

/* Template name: Development */
get_header(); 

?>


<?php 
	if(have_posts()) : while(have_posts()) : the_post();
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
?>

	<div class="container">	

		<h2 class="title"><?php the_title(); ?></h2>

		<div class="top-person">

			<h3><?php echo get_post_meta($post->ID,'misfit_subtit',true); ?></h3>
			<?php the_content(); ?>
			
		</div>

		<div class="development-divider">

			<h2>Properties | US</h2>

			<?php
				$query_leadership_team = new wp_query(array(
					'post_type' => 'development',
					'development-type' => 'us'
				)); 

				if($query_leadership_team->have_posts()) {
			?>

				<ul class="team">

					<?php
						while($query_leadership_team->have_posts()) : $query_leadership_team->the_post();
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
					?>
					
						<li>
							
							<div id="owl1" class="right owl-carousel owl-theme">

								<?php 
									$galleryImages = get_post_gallery_imagess(); 
									$imagesCount = count($galleryImages);
								?>
							           
					    		<?php if ($imagesCount > 0) : ?>
					          	<?php for ($i = 0; $i < $imagesCount; $i++): ?>
					            <?php if (!empty($galleryImages[$i])) :?>

									<div class="item" style="background-image: url(<?php echo tt($galleryImages[$i]['full'][0],320,240); ?>);"></div>
								
								<?php endif; ?>
								<?php endfor; ?>
								<?php endif; ?>

							</div>

							<h3><?php the_title(); ?></h3>
							<h4><?php echo get_post_meta($post->ID,'misfit_title_position',true); ?></h4>
							<div class="person-description">
								<div class="left"><?php echo excerpt(20); ?></div>
								<a class="open-detail"><img class="right" src="<?php bloginfo('template_url'); ?>/images/right-arrow.png"></a>
							</div>

						</li>

					<?php endwhile; ?>

				</ul>

			<?php } wp_reset_query(); ?>

		</div>	

		<div class="development-divider">

			<h2>Properties | International</h2>

			<?php
				$query_leadership_team = new wp_query(array(
					'post_type' => 'development',
					'development-type' => 'international'
				)); 

				if($query_leadership_team->have_posts()) {
			?>

				<ul class="team">

					<?php
						while($query_leadership_team->have_posts()) : $query_leadership_team->the_post();
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
					?>
					
						<li>
							
							<div id="owl1" class="right owl-carousel owl-theme">

								<?php 
									$galleryImages = get_post_gallery_imagess(); 
									$imagesCount = count($galleryImages);
								?>
							           
					    		<?php if ($imagesCount > 0) : ?>
					          	<?php for ($i = 0; $i < $imagesCount; $i++): ?>
					            <?php if (!empty($galleryImages[$i])) :?>

									<div class="item" style="background-image: url(<?php echo tt($galleryImages[$i]['full'][0],320,240); ?>);"></div>
								
								<?php endif; ?>
								<?php endfor; ?>
								<?php endif; ?>

							</div>

							<h3><?php the_title(); ?></h3>
							<h4><?php echo get_post_meta($post->ID,'misfit_title_position',true); ?></h4>
							<div class="person-description">
								<div class="left"><?php echo excerpt(20); ?></div>
								<a class="open-detail"><img class="right" src="<?php bloginfo('template_url'); ?>/images/right-arrow.png"></a>
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