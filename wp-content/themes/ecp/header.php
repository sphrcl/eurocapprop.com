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
	
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/flexslider.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/js/owl-carousel/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/js/owl-carousel/owl.transitions.css">
	
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
	
	<div class="wrapper">
	<div id="header">

		<div class="container">
			<div class="logo">
				<a href="<?php bloginfo ('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo-reduction.jpg" alt="The Water Gate Hotel"></a>
			</div>

			<ul class="menu">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ,  'container' => false, 'items_wrap' => '%3$s' ) ); ?>
			</ul>
			
			<span class="hiddennav"><a href="#"><i class="fa fa-bars"></i></a></span>
		</div>

	</div>