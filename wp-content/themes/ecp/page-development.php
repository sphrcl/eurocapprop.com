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
				$query_development_us = new wp_query(array(
					'post_type' => 'development',
					'tax_query' => array(
						array(
							'taxonomy' => 'development-type',
							'field'    => 'slug',
							'terms'    => 'us',
						),
					),
				)); 

				if($query_development_us->have_posts()) {
			?>

				<ul class="team">

					<?php
						while($query_development_us->have_posts()) : $query_development_us->the_post();
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
					?>
					
						<li>
							
							<div class="right dev-slider owl-carousel owl-theme">

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
							<h4><?php echo get_post_meta($post->ID,'misfit_location',true); ?></h4>
							<div class="person-description">
								<div class="left"><?php the_content(); ?></div>
							</div>

						</li>

					<?php endwhile; ?>

				</ul>

			<?php } wp_reset_query(); ?>

		</div>	

		<div class="development-divider">

			<h2>Properties | International</h2>

			<?php
				$query_development_international = new wp_query(array(
					'post_type' => 'development',
					'tax_query' => array(
						array(
							'taxonomy' => 'development-type',
							'field'    => 'slug',
							'terms'    => 'international',
						),
					),
				)); 

				if($query_development_international->have_posts()) {
			?>

				<ul class="team">

					<?php
						while($query_development_international->have_posts()) : $query_development_international->the_post();
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
					?>
					
						<li>
							
							<div class="right dev-slider owl-carousel owl-theme">

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
							<h4><?php echo get_post_meta($post->ID,'misfit_location',true); ?></h4>
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