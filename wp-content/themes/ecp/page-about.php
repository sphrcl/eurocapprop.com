<?php 

/* Template name: About */
get_header(); 

?>


<?php 
	if(have_posts()) : while(have_posts()) : the_post();
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
?>

<div class="container">	

	<div class="page-slider">

		<?php 
			 $repeatable_fields = get_post_meta($post->ID, 'repeatable_fields', true);
			 if ($repeatable_fields) : 
		?>

			<div id="owl" class="right owl-carousel owl-theme">

			  	<?php foreach ( $repeatable_fields as $field ) { ?>

					<?php if ($field['url'] != '' || $field['description'] != '' || $field['namer'] != '') { ?>

						<div class="item" style="background-image: url(<?php echo tt($field['url'],1200,500); ?>);">

							<div>
								<h2><?php echo $field['namer']; ?></h2>
	        					<p><?php echo $field['description']; ?></p>	
							</div>

	        			</div>

        			<?php } ?>

				<?php } ?>

			</div>

			<div class="controls">
				<div class="prev" type="button"></div>
				<div class="next" type="button"></div>
			</div>

		<?php endif; ?>

	</div>

	<div class="content">

		<h2><?php the_title(); ?></h2>

		<div class="the-content">
			
			<?php the_content(); ?>
				
		</div>		

	</div>

</div>

<?php endwhile; endif; wp_reset_query(); ?>	
			

<?php get_footer(); ?>