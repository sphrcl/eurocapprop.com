<?php 

/* 

Basic Single Post Template 

*/

get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

  <!-- // Navigation -->
        
        <div class="lining">
        
        	<div class="scene_element scene_element--fadein">
        	
        	<?php if(!$imgsrc) { ?>
        	
        	<div class="introspacer"> 
          		
          			<div class="homecontainer housearrest">

		          		<section class="home-intro" style="background-image: url(<?php if(get_option('misfit_hometype') == "2") { echo get_option('misfit_vidfallback'); } else { echo get_option('misfit_single_image'); } ?>);">
			            	
		
			            </section>
		            
	           		</div>
          			
          		</div>

        	<?php } ?>
        	
        	<div id="container" class="container intro-effect-push">
        	
        	<?php if($imgsrc) { ?>
        	
        	<header class="header">
				<div class="bg-img">
					<div class="slickbg" style="background-image: url(<?php echo $imgsrc[0]; ?>)"></div>
				</div>
				<div class="title">
					<p class="date"><?php the_time('d m y') ?></p>
					<h1 class="trigger"><?php the_title(); ?></h1>
					
						<p class="auth"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a></p>
									
						<h4 class="cats">In <?php $project_terms = wp_get_object_terms($post->ID, 'category'); if(!empty($project_terms)) { if(!is_wp_error( $project_terms )) { echo ''; $count = 0; foreach($project_terms as $term){ if($count > 0) { echo ', '; } echo '<a href="'.get_term_link($term->slug, 'category'). '">'.$term->name. '</a>';  $count++; }  } } ?></h4>
									
									
				</div>
				<div class="socials">
						
						<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=<?php echo get_option('misfit_twitter'); ?>" target="_blank" class="flaticon-twitter44"></a>

						<a href="http://www.facebook.com/sharer.php?s= 100&amp;p[title]=<?php the_title(); ?>&amp;p[url]=<?php the_permalink(); ?>&amp;p[images][0]=<?php echo $imgsrc[0]; ?>&amp;p[summary]=<?php echo excerpt(30); ?>" target="_blank" class="flaticon-facebook51"></a>
							
						<?php 

							$perm = get_permalink(); 
							$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
							$regex = '/(?<!href=["\'])http:\/\//'; 
							$regio = '/(?<!href=["\'])http:\/\//'; 
							$perm = preg_replace($regio, '', $perm); 
							$img = preg_replace($regex, '', $img); 

						?>

						<a class="pin flaticon-pinterest31" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2F<?php echo $perm; ?>&media=<?php echo $imgsrc[0]; ?>&description=<?php echo excerpt(30); ?>" target="_blank"></a>


				</div>

				
				
			</header>
			<button class="trigger" data-info="Click to see the header effect"><span><i class="flaticon-back28"></i></span></button>
			
			<?php } ?>
			
			
			<section class="pagecopy">
			
			
		
			<article class="content">
			
							
			
				<div>
				
				<div class="post-intro">
					<p class="date"><?php the_time('d m y') ?></p>
				
					<h1><?php the_title(); ?></h1>
						<p class="auth"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a></p>
									
						<h4 class="cats">In <?php $project_terms = wp_get_object_terms($post->ID, 'category'); if(!empty($project_terms)) { if(!is_wp_error( $project_terms )) { echo ''; $count = 0; foreach($project_terms as $term){ if($count > 0) { echo ', '; } echo '<a href="'.get_term_link($term->slug, 'category'). '">'.$term->name. '</a>';  $count++; }  } } ?></h4>
					
					<div class="socials">
						
							<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=<?php echo get_option('misfit_twitter'); ?>" target="_blank" class="flaticon-twitter44"></a>

							<a href="http://www.facebook.com/sharer.php?s= 100&amp;p[title]=<?php the_title(); ?>&amp;p[url]=<?php the_permalink(); ?>&amp;p[images][0]=<?php echo $imgsrc[0]; ?>&amp;p[summary]=<?php echo excerpt(30); ?>" target="_blank" class="flaticon-facebook51"></a>
								
							<?php 

								$perm = get_permalink(); 
								$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
								$regex = '/(?<!href=["\'])http:\/\//'; 
								$regio = '/(?<!href=["\'])http:\/\//'; 
								$perm = preg_replace($regio, '', $perm); 
								$img = preg_replace($regex, '', $img); 

							?>

							<a class="pin flaticon-pinterest31" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2F<?php echo $perm; ?>&media=<?php echo $imgsrc[0]; ?>&description=<?php echo excerpt(30); ?>" target="_blank"></a>


					</div>
				
					<div class="commentcounter">
						<a href="#comments"> <?php comments_number( '0', '1', '%' ); ?></a>
					</div>
				
				</div>
					<?php the_content(); ?>
					
					<br>
					<br>
					<p class="auth"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a></p>
								
					<h4 class="cats" style="margin: 0 0 5px 0;">In <?php $project_terms = wp_get_object_terms($post->ID, 'category'); if(!empty($project_terms)) { if(!is_wp_error( $project_terms )) { echo ''; $count = 0; foreach($project_terms as $term){ if($count > 0) { echo ', '; } echo '<a href="'.get_term_link($term->slug, 'category'). '">'.$term->name. '</a>';  $count++; }  } } ?></h4>
					
					<p class="solemn"><?php the_tags(); ?></p>
					
					
				</div>
				
		
			</article>		
				
					
				<?php comments_template(); ?>
		
			<div class="clear"></div>

		</section>
		<?php endwhile; endif; wp_reset_query(); ?>	
		
		<?php 
		$cat_ID=array();
		$categories = get_the_category(); //get all categories for this post
		  foreach($categories as $category) {
		    array_push($cat_ID,$category->cat_ID);
		  }

		$my_query = new WP_Query(
			array(
					
				//'paged' => $paged,
				'post__not_in' => array($post->ID),
				'category__in' => $cat_ID,
				'posts_per_page' => 1
				
			)
		);

		if(have_posts()) :
	    while($my_query->have_posts()) : $my_query->the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>


		<section class="related<?php if(!$imgsrc) { ?> nopuc<?php } ?>">
								
			<div class="fullbanner" style="background-image: url(<?php echo $imgsrc[0]; ?>)">
			
				<div class="whyhello">
							
					<p class="date"><?php the_time('m d y') ?></p>
					
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						
				</div>
				
				<a href="<?php the_permalink(); ?>" class="letsgo"><i class="flaticon-back28"></i></a>
				
			</div>
	
		</section>
			
		<?php endwhile; endif; wp_reset_query(); ?>		
		
		
		
		
		</div><!-- /container -->
		
		<?php include(TEMPLATEPATH . '/library/copyright.php'); ?>
			
			</div><!-- end lining -->
			
        </div>
			






<?php get_footer(); ?>