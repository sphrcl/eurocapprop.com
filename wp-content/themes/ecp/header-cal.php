<!DOCTYPE HTML>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
		<?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'misfitlang' ), max( $paged, $page ) );
		?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-ico"/>

	
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('misfit_feedburner_url') <> "" ) { echo get_option('misfit_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	
	<!-- Lightbox -->	
	<!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet"/> -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/flexslider.css">

	<!-- google analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-62512349-1', 'auto');
		ga('send', 'pageview');

		</script>
	
	<!-- Media Queries -->	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css">

	<?php
		/****************** DO NOT REMOVE **********************
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.lightbox_me.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
	
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js'></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/general.js"></script>

	</head> 
	
	<body <?php body_class(); ?>>

	<div id="header">
		<div class="container">
			<div class="logo">
				<a href="<?php bloginfo ('url'); ?>"><img width="325px" src="<?php bloginfo('template_url'); ?>/images/ecp-logo.png" alt="The Water Gate Hotel"></a>
			</div>
			
			<div class="reserve">
				<a class="btn1 reservebtn res" href="#">Reserve</a>
				<ul>
					<?php if(get_option('misfit_facebook')) { ?>
					<li><a href="http://facebook.com/<?php echo get_option('misfit_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<?php } ?>
					<?php if(get_option('misfit_twitter')) { ?>
					<li><a href="http://twitter.com/<?php echo get_option('misfit_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<?php } ?>
					<?php if(get_option('misfit_instagram')) { ?>
					<li><a href="https://instagram.com/<?php echo get_option('misfit_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<?php } ?>
				</ul>
				<!--<div class="reservebox">
					<div class="rbtop"><p>Accepting Reservations May 1 for Fall 2015</p></div>
					<div class="rbbot"><a class="btn2" href="#">Make a Reservation</a></div>
					<a class="xey" href="#">X</a>
				</div>-->
			</div>
			
			<div class="navigation">
				<div id="navmenu">
					<ul class="topnavigation">
						
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ,  'container' => '', 'menu_class' => '' ) ); ?>

					</ul>
				</div>
			</div>
		</div>
	    <div class="container" style="position: relative;">
			<div class="ressys">

				<a class="btn1" href="#">Close</a>
				<div class="whippapeal">
					<div class="formfields">
						<div class="reservationform">
							<form method="get" action="https://www.phgsecure.com/IBE/bookingRedirect.ashx?" target="_blank">
							
								<input type="hidden"  name="propertyCode" value="WASWH">
								<input type="hidden"  name="group" value="">
								
								<div class="droppers">
									<span class="dropsec" style="margin-right: 2px;">
										<select id="adults"  name="numberOfAdults" class="fulldrop">
											<option value="1">Number of Adults</option>
											<option value="1">1 Adults</option>
											<option value="2">2 Adults</option>
											<option value="3">3 Adults</option>
											<option value="4">4 Adults</option>
										</select>
									</span>

									<span class="dropsec" style="margin-left: 2px;">
										<select  id="children" name="numberOfChildren" class="fulldrop">
											<option value="0">0 Children</option>
											<option value="1">1 Children</option>
											<option value="2">2 Children</option>
											<option value="3">3 Children</option>
										</select>
									</span>
									<div class="clear"></div>
								</div>
								
								<div class="slipdrop droppers">
									<span class="dropsec"  style="margin-right: 2px;">
										<select id="adults"  name="Rooms" class="fulldrop">
											<option value="1">Number of Rooms</option>
											<option value="3">1 Room</option>
											<option value="2">2 Rooms</option>
											<option value="3">3 Rooms</option>
											<option value="4">4 Rooms</option>
										</select>
									</span>

									<span class="dopinput" style="margin-left: 2px;">
										<input type="text" name="rateCode" placeholder="Promo Code">
									</span>
									<div class="clear"></div>
								</div>

								
								<input type="hidden"  id="arrival_date" name="arrivalDate" class="calendarsection" />
								<input type="hidden"  id="arv">


								<input type="hidden" id="departure_date" name="departureDate" class="calendarsection" />
								<input type="hidden" id="dep">


								<div class="calendars">
									<div class="datepicker"></div>
								</div>

								<button class="button" type="submit">View Availability</button>

							<!-- <a href="#" class="button" onclick="_gaq.push(['_trackEvent', 'Booking-widget', 'Search-now', 'Search dates with booking widget']);">Search Now</a>	 -->


							</form>

						</div><!-- end reservation form -->

					</div><!-- end formfields form -->
				</div><!-- end whip appeal form -->


			</div><!-- end ressys form -->
		</div>



	</div>
	
	
	<div class="overlay">
			<a href="#" class="shutdown"></a>
		</div>
