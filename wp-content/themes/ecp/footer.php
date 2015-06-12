<?php
/**
 * The template for displaying the footer.
 *
**/
?>

	
	<div id="footer">
		
		<div class="left">
			<p><span class="tel"><span>TEL:</span> 212.842.0075</span> <span><span class="fax">FAX:</span> 212.842.0465</span></p>
		</div>

		<div class="right">			
			<p><?php echo get_option('misfit_address'); ?></p>
		</div>

	</div>
	
	
		<ul class="hiddennavigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ,  'container' => false, 'items_wrap' => '%3$s' ) ); ?>
		</ul>

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		var owl = $("#owl"),
			owl1 = $('#owl1'),
			owl2 = $('.dev-slider.owl-carousel')

		owl.owlCarousel({
			itemsDesktop : [1000,1], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,1], // betweem 900px and 601px
			itemsTablet: [600,1], //2 items between 600 and 0
			itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
			pagination: false,
			singleItem : true,
			responsive: true,
			autoplay: true,
		});

		$(".next").click(function(){
			owl.trigger('owl.next');
		})

		$(".prev").click(function(){
			owl.trigger('owl.prev');
		})

		owl1.owlCarousel({
			itemsDesktop : [1000,1], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,1], // betweem 900px and 601px
			itemsTablet: [600,1], //2 items between 600 and 0
			itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
			pagination: true,
			singleItem : true,
			responsive: true,
		});

		owl2.owlCarousel({
			itemsDesktop : [1000,1],
			itemsDesktopSmall : [900,1],
			itemsTablet: [600,1],
			itemsMobile : false,
			pagination: true,
			singleItem : true,
			responsive: true,
		});

	});
</script>
</div>
</body>
</html>

