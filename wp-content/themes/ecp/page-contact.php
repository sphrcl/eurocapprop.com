<?php 

/* Template name: Contact */
get_header(); 

?>


	<div class="container">
	
		<div class="contact-container">

			<h2 class="title"><?php the_title(); ?></h2>

			<p>We are based out of New York.</p>

			<p class="address">19 W. 44th Street, Suite 1702,<br/> New York, NY 10022</p>

			<p class="tel-fax">
				<span style="color: #757575;">T:</span> 212.842.0075<br/> 
				<span style="color: #757575;">F:</span> 212.842.0465
			</p>

			<p class="email">info@eurocapprop.com<br/> press@eurocapprop.com<br/> marketing@eurocapprop.com</p>
			
			<div class="clear"></div>

		</div>

		<div class="map-container">
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.2992498223907!2d-73.98093779999999!3d40.7554425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258ffc5430ca7%3A0xd7b0da21781d6dca!2s19+W+44th+St+%231702%2C+New+York%2C+NY+10036%2C+USA!5e0!3m2!1sen!2s!4v1433131422540" width="800" height="600" frameborder="0" style="border:0"></iframe> -->
			<img src="<?php bloginfo ('template_url'); ?>/images/eurocap-map-contact.jpg" />
		</div>
	
	</div>


<?php get_footer(); ?>