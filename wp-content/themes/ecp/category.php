<?php 

/* Category Template

*/
get_header(); ?>   


 <div class="lining">
        
        	<div class="scene_element scene_element--fadein">
          		
          		
					<div class="introspacer"> 
          		
          			<div class="homecontainer housearrest">

		          		<section class="home-intro" style="background-image: url(<?php if(get_option('misfit_hometype') == "2") { echo get_option('misfit_vidfallback'); } else { echo get_option('misfit_single_image'); } ?>);">
			            	
		
			            </section>
		            
	           		</div>
          			
          		</div>
				<div class="quietbanner"></div>
				<div class="quietspacer"></div>
				
				         
				<section class="postlist">
					
					<?php if(get_option('misfit_showfeatured') == "true") { ?>   
					<div class="authorsection">
			            		
	            		<div class="hellofriend">
	            			<div class="author" style="background-image: url(<?php echo get_option('misfit_logo'); ?>);"><a href="<?php $authurl = get_option('misfit_authpage'); echo esc_url( get_permalink( get_page_by_title( $authurl ) ) ); ?>"></a></div>
	            		
	            			<h3><a href="<?php $authurl = get_option('misfit_authpage'); echo esc_url( get_permalink( get_page_by_title( $authurl ) ) ); ?>"><?php echo get_option('misfit_logotext'); ?></a></h3>
	            		
	            			<p><?php echo get_option('misfit_logotextline'); ?></p>
	            		</div>
	            	</div>
	            	<?php } ?>
	            	
					<div class="querybar">
					
						<div class="searcher">
							<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
					
						        <input class="silentsearch" type="text" value="" name="s" id="s" placeholder="<?php _e('Search and find what you need','misfitlang'); ?>"/>
							</form>
						
						</div>
						
						<ul class="dripper">
							
							<li>
								<a href="#" class="filter" data-filter="all"><?php _e('Currently In:','misfitlang'); ?> <?php single_cat_title(); ?></a>
								<ul class="drip">
									<?php wp_nav_menu( array( 'theme_location' => 'category' ,  'container' => false, 'items_wrap' => '%3$s' ) ); ?>
								</ul>
							</li>
						</ul>
						<div class="clear"></div>
						
					</div>
			
					<div class="posts">

				
						<?php  if(have_posts()) :
					       			$postcount=1;
					      			while(have_posts()) : the_post();
			
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
							global $wp_query; 
					        ?>
										
						<div class="post count<?php echo $postcount; ?><?php if(!$imgsrc) { ?> noimage<?php } ?>"<?php if($wp_query->found_posts == 1) { ?> style="width: 100%"<?php } ?>>
				
							<div class="whyhello">
								
								<p class="date"><?php the_time('d m y') ?></p>
								
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							
							</div>
							
							
							<div class="dearfriend">
								
								<div class="p-lining">
								
									<p class="date"><?php the_time('m d y') ?></p>
									
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									
									<p class="auth"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a></p>
									
									<h4 class="cats">In <?php $project_terms = wp_get_object_terms($post->ID, 'category'); if(!empty($project_terms)) { if(!is_wp_error( $project_terms )) { echo ''; $count = 0; foreach($project_terms as $term){ if($count > 0) { echo ', '; } echo '<a href="'.get_term_link($term->slug, 'category'). '">'.$term->name. '</a>';  $count++; }  } } ?></h4>
									
								</div>
								
								<a href="<?php the_permalink(); ?>" class="letsgo"><i class="flaticon-back28"></i></a>
								
								
							</div>
							
							<?php if($imgsrc) { ?>
							
							<div class="innerpost" style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>
							
							<?php } ?>
						
						</div>
					
						<?php $postcount++;  endwhile; ?>
											
						
					</div>
					
					<div class="clear"></div>
				
				
				</section>

				
				<div class="moreposts">
					
                    <div class="navigation-al">
                    	<p><?php if(!get_previous_posts_link()) { _e('No More Posts','misfitlang'); } else { _e('View More Posts','misfitlang'); } ?></p>
                        <div class="alignleft previousposts"><?php next_posts_link('&laquo;' .   __(' <i class="flaticon-back28"></i>' , 'misfitlang')) ?></div>
                        <div class="alignright nextposts"><?php previous_posts_link( __('<i class="flaticon-back28"></i> ', 'misfitlang') .  '&raquo;') ?></div>
                        <div class="clear"></div>
                    </div>
                    
				</div>
				
				 <?php endif; ?>
				<?php include(TEMPLATEPATH . '/library/copyright.php'); ?>
	 
			</div><!-- end lining -->
			
        </div>
		
		
<?php get_footer(); ?>