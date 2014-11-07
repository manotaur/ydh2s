<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php
		/*
		* Print the <title> tag based on what is being viewed.
		*/
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

			// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'sscontent' ), max( $paged, $page ) );
	?></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;" charset="<?php bloginfo('version'); ?>" />
	<meta name="generator" content="Wordpress <?php bloginfo('version'); ?>" />
    <meta name="description" content="">
	<meta name="keywords" content="">
		
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.0.0/isotope.pkgd.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/scripts/main.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
		
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="spacer"></div>

	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>
		
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
 		 <div class="container">
 		 <div class="row">

    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
	  			
      			<a class="navbar-left" href="<?php bloginfo('url'); ?>">
      				<img src="<?php bloginfo('template_directory');?>/img/ydh2s-logo.svg" class="logo" alt="YDH2S logo"/>
	  				<h4 class="logoText">YOU DON'T HAVE 2 SETTLE</h4>
      			</a>

    		</div> <!-- end .navbar-header -->
    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li><a href="<?php bloginfo('url'); ?>/category/event">ALL EVENTS</a></li>
        			<li><a href="<?php bloginfo('url'); ?>/this-week">THIS WEEK</a></li>
        			<li><a href="<?php bloginfo('url'); ?>/category/editorial">ARTICLES</a></li>
        			<li><a href="<?php bloginfo('url'); ?>/about">ABOUT</a></li>
        			<li><a href="<?php bloginfo('url'); ?>/newsletter">NEWSLETTER</a></li> 
       			    <li><a href="<?php bloginfo('url'); ?>/contact">CONTACT</a></li>          	
      			</ul>
      			
    		<div class="share-buttons navbar-right">
				<span class="fa-stack fa-lg">
					<i class="fa fa-square fa-stack-2x"></i>
   					<a class="fa fa-facebook fa-stack-1x mediaIcon" target="_blank" href="http://www.facebook.com/DontSettleBK"></a>
   				</span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-square fa-stack-2x"></i>
					<a class="fa fa-twitter fa-stack-1x mediaIcon" target="_blank" href="http://twitter.com/YDH2S"></a>
				</span>
			</div><!-- .share-buttons -->
      			
    	   </div><!-- /.navbar-collapse -->
    	   </div><!-- .row -->
  		</div><!-- /.container -->
	</nav>
	</div><!-- end #page -->
