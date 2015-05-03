<?php 

/* 404 Page Template 

*/
 get_header(); ?>


<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

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
				
					<p class="auth"></p>
					
					<h1 class="trigger"><?php the_title(); ?></h1>
					
					<p class="auth"></p>
									
									
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
		
					<h1><?php _e('This is awkward','misfitlang'); ?></h1>
						
						<p class="auth"></p>
	
		       		      		
						
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
				
					
				
				</div>
					
		       		<p><?php _e('Sorry, friend, if you have found this page it either means the internet has failed you or that you will have to try your search again. ', 'misfitlang'); ?><?php _e('Head over to our ', 'misfitlang'); ?><a href="<?php bloginfo('url'); ?>"><?php _e('home page ', 'misfitlang'); ?></a><?php _e('or you can visit any of the links below.', 'misfitlang'); ?><br>
		       		<br>
		       		
		       			<?php if(get_option('misfit_facebook')) { ?>
						<a class="button" href="http://facebook.com/<?php echo get_option('misfit_facebook'); ?>" target="_blank"><?php _e('Friend Us On Facebook','misfitlang'); ?></a>
						<?php } ?>
						<?php if(get_option('misfit_twitter')) { ?>
						<a class="button" href="http://twitter.com/<?php echo get_option('misfit_twitter'); ?>" target="_blank"><?php _e('Follow Us On Twitter','misfitlang'); ?></i></a>
						<?php } ?>
						<?php if(get_option('misfit_pinterest')) { ?>
						<a class="button" href="http://www.pinterest.com/<?php echo get_option('misfit_pinterest'); ?>" target="_blank"><?php _e('Pin Us On Pinterest','misfitlang'); ?></i></a>
						<?php } ?>
						<?php if(get_option('misfit_dribbble')) { ?>
						<a class="button" href="https://dribbble.com/<?php echo get_option('misfit_dribbble'); ?>" target="_blank"><?php _e('See Us On Dribbble','misfitlang'); ?></i></a>
						<?php } ?>
						<?php if(get_option('misfit_googleplus')) { ?>
						<a class="button" href="https://plus.google.com/+<?php echo get_option('misfit_googleplus'); ?>" target="_blank"><?php _e('Hang Out Us On Google +','misfitlang'); ?></i></a>
						<?php } ?>
						<?php if(get_option('misfit_instagram')) { ?>
						<a class="button" href="http://instagram.com/<?php echo get_option('misfit_instagram'); ?>" target="_blank"><?php _e('Follow Us On Instagram','misfitlang'); ?></i></a>	
						<?php } ?>
						
		       		</p>	 
					
					<br>
					<br>
					
					
					
				</div>
				
		
			</article>		
				
		
			<div class="clear"></div>

		</section>		
		
		
		</div><!-- /container -->
		
		
			<div class="additionalposts">
		
			<div id="carousel-gallery" class="touchcarousel  black-and-white">      
		
			
			 			
    		<ul class="touchcarousel-container">
                
                 <?php query_posts('post_type=post&posts_per_page=10'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrcs = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
	
						            		
	        		<li class="touchcarousel-item<?php if(!$imgsrcs) { ?> sleepercell <?php } ?>">
			          <a href="<?php the_permalink(); ?>" >
			          		<h3><?php the_title(); ?></h3>
			          		<?php if($imgsrcs) { ?>
			          		<img src="<?php echo $imgsrcs[0]; ?>" alt="<?php the_title(); ?>" title="#" />
			          		<?php } else { ?>
			          		<i class="flaticon-back28"></i>
			          		<img src="<?php bloginfo('template_url'); ?>/images/blank.png" alt="<?php the_title(); ?>" title="#" />
			          		<?php } ?>
			          </a>
			        </li>
			       
			      <?php endwhile; endif; wp_reset_query(); ?>	
			      <div class="clear"></div>			                	
			</ul>
		</div>

	
	</div>

	<?php include(TEMPLATEPATH . '/library/copyright.php'); ?>
			
			</div><!-- end lining -->
			
        </div>
			

<?php get_footer(); ?>