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

				<ul class="team mem">

					<?php
						$count = 2;
						while($query_partnership->have_posts()) : $query_partnership->the_post();
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
					?>
						<?php if($count > 1) { ?>
					
							<li class="memli">
								
									<a target="_blank" href="<?php echo get_post_meta($post->ID, 'misfit_link', true); ?>">
										<div class="partner-thumb" style="background-image: url(<?php echo tt($imgsrc[0],320,240); ?>);"></div>
									</a>
									<h3><?php the_title(); ?></h3>
									<h4><?php echo get_post_meta($post->ID,'misfit_industry',true); ?></h4>
									<div class="person-description">
										<div class="left"><?php echo excerpt(20); ?></div>
										<a class="mem-detail mem<?php echo $count;?>" href="#"><img src="<?php bloginfo('template_url'); ?>/images/right-arrow.png"></a>
									</div>
								
							</li>

					<?php } ?>

				<?php $count++; endwhile; ?>

				</ul>

			<?php } wp_reset_query(); ?>

		</div>	

	</div>

		<?php
		$query_partnership = new wp_query(array(
					'post_type' => 'partnership',
				));

		if($query_partnership->have_posts()) {
	?>
			
		<?php
			$count = 2;
			while($query_partnership->have_posts()) : $query_partnership->the_post();
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
		?>
			<?php if($count > 1) { ?>
			
				<div class="memberwrap mem<?php echo $count;?>" style="display: none;">
					<div class="mw-container">
					<div class="mw-open">
						
						<div class="mw-img" style="background-image: url(<?php echo tt($imgsrc[0],450,310); ?>);"></div>
						
						<div class="mw-content">
							<h3><?php the_title(); ?></h3>
							<h4><?php echo get_post_meta($post->ID,'misfit_industry',true); ?></h4>
							<div class="mw-desc"><?php the_content(); ?></div>
						</div>
						
						<div class="mem-close"></div>
						
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