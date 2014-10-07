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


	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>
		
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
 		 <div class="container-fluid">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
	  			
      			<a class="navbar-brand" href="http://localhost/ydh2s.com/">
      				<img src="<?php bloginfo('template_directory');?>/img/ydh2s-logo.svg" class="logo" alt="YDH2S logo"/>
	  				<h6>YOU DON'T HAVE 2 SETTLE</h6>
      			</a>

    		</div> <!-- end .navbar-header -->
    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li><a href="http://localhost/ydh2s.com/category/event/">EVENTS</a></li>
        			<li><a href="http://localhost/ydh2s.com/category/editorial/">ARTICLES</a></li>
        			<li><a href="http://localhost/ydh2s.com/about">ABOUT</a></li>
        			<li><a href="http://localhost/ydh2s.com/newsletter/">NEWSLETTER</a></li> 
       			    <li><a href="http://localhost/ydh2s.com/contact">CONTACT</a></li>          	
      			</ul>
    	   </div><!-- /.navbar-collapse -->
  		</div><!-- /.container-fluid -->
	</nav>
	</div><!-- end #page -->
