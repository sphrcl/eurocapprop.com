
		
				$.supersized({
				
					// Functionality
					slideshow               :   1,			// Slideshow on/off
					autoplay				:	1,			// Slideshow starts playing automatically
					start_slide             :   1,			// Start slide (0 is random)
					stop_loop				:	0,			// Pauses slideshow on last slide
					random					: 	0,			// Randomize slide order (Ignores start slide)
					slide_interval          :   12000,		// Length between transitions
					transition              :   <?php if(get_option('misfit_slidertransitions') == 'Fade' )  { echo '1'; } elseif(get_option('misfit_slidertransitions') == 'Slide Top') { echo '2'; } elseif(get_option('misfit_slidertransitions') == 'Slide Right') { echo '3'; } elseif(get_option('misfit_slidertransitions') == 'Slide Bottom') { echo '4'; } elseif(get_option('misfit_slidertransitions') == 'Slide Left') { echo '5'; } elseif(get_option('misfit_slidertransitions') == 'Carousel Right') { echo '6'; } elseif(get_option('misfit_slidertransitions') == 'Carousel Left') { echo '7'; } else { echo '1'; } ?>, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1000,		// Speed of transition
					new_window				:	1,			// Image links open in new window/tab
					pause_hover             :   0,			// Pause slideshow on hover
					keyboard_nav            :   1,			// Keyboard navigation on/off
					performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,			// Disables image dragging and right click with Javascript
															   
					// Size & Position						   
					min_width		        :   0,			// Min width allowed (in pixels)
					min_height		        :   0,			// Min height allowed (in pixels)
					vertical_center         :   1,			// Vertically center background
					horizontal_center       :   1,			// Horizontally center background
					fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
					fit_portrait         	:   0,			// Portrait images will not exceed browser height
					fit_landscape			:   0,			// Landscape images will not exceed browser width
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					thumb_links				:	1,			// Individual thumb links for each slide
					thumbnail_navigation    :   0,			// Thumbnail navigation
					slides 					:  	[			// Slideshow Images
					
					
					
							<?php $pagename = get_option('misfit_sliderpage');
											$page = get_page_by_title($pagename);
											$featured_id =  $page->ID;
											
					            	query_posts(
				            			
				            			array(
				            				'post_type' => 'page',
				            				'p' => $featured_id,
				            				'posts_per_page' => -1
				            			)
				            	
				            		); if(have_posts()) : while(have_posts()) : the_post(); ?>
					
								 <?php $galleryImages = get_post_gallery_imagess(); 
							          $imagesCount = count($galleryImages);
				       			 ?>
				        		<?php if ($imagesCount > 0) : ?>
				              		<?php for ($i = 0; $i < $imagesCount; $i++): ?>
				                  		<?php if (!empty($galleryImages[$i])) :?>
                  
                  							{ image : '<?php echo $galleryImages[$i]['full'][0];?>', title : '<h1 class="largetype"><?php $post =  get_post($galleryImages[$i]['id']); echo $post->post_excerpt; ?></h1><h3 class="imagine"><?php $posts =  get_post($galleryImages[$i]['id']); echo $posts->post_content; ?></h3>', thumb : '', url : ''},
						
						 				<?php endif; ?>
              						<?php endfor; ?>
        						<?php endif; ?>
							
														
						<?php endwhile; endif; wp_reset_query(); ?>										
														
														
												],
												
					// Theme Options			   
					progress_bar			:	0,			// Timer for each slide							
					mouse_scrub				:	0
					
				});