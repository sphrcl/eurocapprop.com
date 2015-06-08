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
			'post_type' => 'leadership',
			'posts_per_page' => -1,
			'offset_per_page' => 1,
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