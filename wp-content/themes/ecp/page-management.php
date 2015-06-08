<?php 

/* Template name: Management */
get_header(); 

?>


<?php 
	if(have_posts()) : while(have_posts()) : the_post();
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
?>

	<div class="container">	

		<h2 class="title"><?php the_title(); ?></h2>

		<div class="top-person">

			<div>
	
				<div id="owl1" class="right owl-carousel owl-theme">

					<?php 
						$galleryImages = get_post_gallery_imagess(); 
						$imagesCount = count($galleryImages);
					?>
				           
		    		<?php if ($imagesCount > 0) : ?>
		          	<?php for ($i = 0; $i < $imagesCount; $i++): ?>
		            <?php if (!empty($galleryImages[$i])) :?>

						<div class="item" style="background-image: url(<?php echo tt($galleryImages[$i]['full'][0],580,550); ?>);"></div>
					
					<?php endif; ?>
					<?php endfor; ?>
					<?php endif; ?>

				</div>

				<div class="left">
					
					<h3><?php echo get_post_meta($post->ID,'misfit_subtit',true); ?></h3>
					<?php echo get_post_meta($post->ID, 'misfit_readmore', true); ?>
					<a class="open-detail">Read More<img src="<?php bloginfo('template_url'); ?>/images/right-arrow.png"></a>

				</div>

				<div class="person-wrapper" style="display: none;">
					<div class="person-details">
					
						<div class="left" style="width: 100% !important;">
							<div class="person-description">
								<h3><?php echo get_post_meta($post->ID,'misfit_subtit',true); ?></h3>
								<?php echo get_post_meta($post->ID, 'misfit_readmore', true); ?>
								<?php the_content(); ?>
							</div>
						</div>

						<div class="close-button"></div>

					</div>
				</div>

			</div>	

		</div>

		<h2>Management Team</h2>

		<?php
			$query_leadership_team = new wp_query(array(
				'post_type' => 'management',
			)); 

			if($query_leadership_team->have_posts()) {
		?>

			<ul class="mem">
			
				<?php
					$count = 1;
					while($query_leadership_team->have_posts()) : $query_leadership_team->the_post();
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
				?>

					<?php if($count > 1) { ?>
				
						<li class="memli">
							
							<div class="teamimg" style="background-image: url(<?php echo tt($imgsrc[0],320,240); ?>);"><a class="dropanchor open-detail mem<?php echo $count;?>"></a></div>
							<h3><?php the_title(); ?></h3>
							<h4><?php echo get_post_meta($post->ID,'misfit_title_position',true); ?></h4>
							<div class="team-desc">
								<div class="left"><?php echo excerpt(20); ?></div>
								<a class="open-detail mem<?php echo $count;?>" href="#"><img src="<?php bloginfo('template_url'); ?>/images/right-arrow.png"></a>
							</div>
						</li>

					<?php } ?>

				<?php $count++; endwhile; ?>

			</ul>
			
		<?php } wp_reset_query(); ?>	
		
	</div>
	
	<?php
		$query_leadership_team = new wp_query(array(
			'post_type' => 'management',
		));
		
		if($query_leadership_team->have_posts()) {
	?>
	
		<?php
			$count = 1;
			while($query_leadership_team->have_posts()) : $query_leadership_team->the_post();
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
		?>
			
			<?php if($count > 1) { ?>
				
				<div class="memberwrap mem<?php echo $count;?>" style="display: none;">
					<div class="mw-container">
					<div class="mw-open">
						
						<div class="mw-img" style="background-image: url(<?php echo tt($imgsrc[0],450,310); ?>);"></div>
						
						<div class="mw-content">
							<h3><?php the_title(); ?></h3>
							<h4><?php echo get_post_meta($post->ID,'misfit_title_position',true); ?></h4>
							<div class="mw-desc"><?php the_content(); ?></div>
						</div>
						
						<div class="close-button"></div>
						
						<div class="clear"></div>
					
					</div>
					</div>
				</div>
					
			<?php } ?>
		
			<?php $count++; endwhile; ?>
			
	<?php } wp_reset_query(); ?>

</div>

<?php endwhile; endif; wp_reset_query(); ?>	

<?php get_footer(); ?>