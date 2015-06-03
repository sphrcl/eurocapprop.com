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

					<a href="<?php get_post_meta($post->ID,'misfit_press_link',true); ?>">
						<img class="press-title" src="<?php echo get_post_meta($post->ID, 'misfit_press_image', true); ?>">
						<p><?php the_content(); ?></p>
						<span class="press-date"><?php the_date('F j, Y'); ?></span>
						<!-- <span class="press-see-photos">See photos</span> -->
					</a>

				</div>

			<?php endwhile; endif; wp_reset_query(); ?>

			<!-- <div class="press-container" style="background-image: url(images/press9.jpg);">

				<a href="#">
					<img class="press-title" src="images/press9.png">
					<span class="press-date">March 24, 2015</span>
					<span class="press-see-photos">See photos</span>
				</a>

			</div>

			<div class="press-container no-margin" style="background-image: url(images/press7.jpg);">

				<a href="#">
					<img class="press-title" src="images/press7.png">
					<span class="press-date">March 24, 2015</span>
					<span class="press-see-photos">See photos</span>
				</a>

			</div>

			<div class="press-container" style="background-image: url(images/press6.jpg);">

				<a href="#">
					<img class="press-title" src="images/press6.png">
					<div class="clear"></div>
					<span class="press-date">April 24, 2015</span>
					<span class="press-see-photos">See photos</span>
				</a>

			</div>

			<div class="press-container" style="background-image: url(images/press2.jpg);">

				<a href="#">
					<p>
						Ribbon Cutting Ceremony<br/>
						at the Grand Opening<br/>
						of the WaterGate Hotel
					</p>
					<span class="press-date">May 2, 2015</span>
					<span class="press-see-photos">See photos</span>
				</a>

			</div>

			<div class="press-container no-margin" style="background-image: url(images/press8.jpg);">

				<a href="#">
					<img class="press-title" src="images/press8.png">
					<span class="press-date">May 8, 2015</span>
					<span class="press-see-photos">See photos</span>
				</a>
				
			</div>

			<div class="press-container" style="background-image: url(images/press5.jpg);">

				<a href="#">
					<img class="press-title" src="images/press5.png">
					<span class="press-date">March 24, 2015</span>
					<span class="press-see-photos">See photos</span>
				</a>

			</div>

			<div class="press-container" style="background-image: url(images/press1.jpg);">

				<a href="#">
					<p>
						New Lobby Open at<br/>
						The WaterGate Hotel
					</p>
					<span class="press-date">March 24, 2015</span>
					<span class="press-see-photos">See photos</span>
				</a>

			</div>

			<div class="press-container no-margin" style="background-image: url(images/press4.jpg);">

				<a href="#">
					<img class="press-title" src="images/press4.png">
					<span class="press-date">March 24, 2015</span>
					<span class="press-see-photos">See photos</span>
				</a>

			</div> -->
	
	</div>


<?php get_footer(); ?>