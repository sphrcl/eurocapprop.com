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


<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		var owl = $("#owl")

		owl.owlCarousel({
			itemsDesktop : [1000,1], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,1], // betweem 900px and 601px
			itemsTablet: [600,1], //2 items between 600 and 0
			itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
			pagination: false,
			singleItem : true,
			responsive: true,
		});

		$(".next").click(function(){
			owl.trigger('owl.next');
		})

		$(".prev").click(function(){
			owl.trigger('owl.prev');
		})

	});
</script>

</body>
</html>

