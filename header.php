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
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicon.png"/>
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory');?>/img/you-128.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;" charset="<?php bloginfo('version'); ?>" />
	<meta name="generator" content="Wordpress <?php bloginfo('version'); ?>" />
	
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'><!-- Roboto Font -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<?php include_once("analytics.php") ?>
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
		
	<nav class="navbar navbar-default navbar-fixed-top expanded-header" role="navigation">

 		 <div class="container">
 		 
 		 <div class="row">
 		 	<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        		<i class="fa fa-bars fa-3x"></i>
      		</button>

    		<div class="navbar-header">
      			<a class="navbar-left" href="<?php bloginfo('url'); ?>">
      				<img src="<?php bloginfo('template_directory');?>/img/ydh2s-logo.svg" class="logo" alt="YDH2S logo"/>
      				<img src="<?php bloginfo('template_directory');?>/img/ydh2s-logo.png" class="ie-logo logo" alt="YDH2S Logo">
	  				<h4 class="logotext">YOU DON'T HAVE 2 SETTLE</h4>
      			</a>
    		</div> <!-- .navbar-header -->
    		<!-- the content in .navbar-collapse will collapse into the hamburger menu -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
      				<li class="mobile-link"><a href="<?php bloginfo('url'); ?>">HOME</a></li>
	  				<li class="mobile-link"><a href="<?php bloginfo('url'); ?>/featured">FEATURED</a></li>
	  				<li class="mobile-link"><a href="<?php bloginfo('url'); ?>/pick">OUR PICKS</a></li>
	  				<li class="mobile-link"><a href="<?php bloginfo('url'); ?>/category/event">ALL EVENTS</a></li>
      				<li class="nav-drop">
      					EVENTS<span class="caret"></span>
	  					<ul class="drop-menu" role="menu">
	  						<li><a href="<?php bloginfo('url'); ?>/featured">FEATURED</a></li>
	  						<li><a href="<?php bloginfo('url'); ?>/pick">OUR PICKS</a></li>
	  						<li><a href="<?php bloginfo('url'); ?>/category/event">ALL EVENTS</a></li>
						</ul>
      				</li>
        			<li><a href="<?php bloginfo('url'); ?>/this-week">THIS WEEK</a></li>
        			<li><a href="<?php bloginfo('url'); ?>/category/editorial">ARTICLES</a></li>
        			<li><a href="<?php bloginfo('url'); ?>/about">ABOUT</a></li>
        			<li><a href="<?php bloginfo('url'); ?>/newsletter">NEWSLETTER</a></li> 
       			    <li><a href="<?php bloginfo('url'); ?>/contact">CONTACT</a></li>  
       			    <li class="modal-signup-button">
						<a href="#" data-toggle="modal" class="signup-link" data-target=".mailing-list-modal">
							<i class="fa fa-envelope fa-lg"></i>
						</a>
						<!-- Modal -->
						<div class="modal fade mailing-list-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  							<div class="modal-dialog">
      							<div class="modal-header">
        							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      							</div><!-- .modal-header -->
      							<div class="mailing-list-modal-body">
									<div class="signup">
										<p>Join our mailing list and stay up to date on all the best</p><p>dance parties in Brooklyn.</p>
										<div class="col-md-3 col-xs-0"></div>
										<label for="mc4wp_email"></label>
										<div class="col-md-4 col-xs-7">
											<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Join our Mailing List" required>
										</div>
										<button>SIGN UP<input type="submit" /></button>
									</div><!-- .signup -->
      							</div><!-- .mailing-list-modal-body -->
  							</div><!-- .modal-dialog -->
						</div><!-- .modal -->
					</li>        	
      			</ul>

	  			<div class="navbar-right nav-share-buttons">
    				<a href="http://www.facebook.com/DontSettleBK" target="_blank">
						<i class="fa fa-facebook fa-1x mediaIcon"></i>
						<div class="social-button-text">DontSettleBK</div>
   					</a>
   					<a href="http://twitter.com/YDH2S" target="_blank">
						<i class="fa fa-twitter fa-1x mediaIcon"></i>
						<div class="social-button-text">@YDH2S</div>
   					</a>
				</div><!-- .nav-share-buttons -->	
    	  	</div><!-- /.navbar-collapse -->
    	</div><!-- .row -->
  		</div><!-- /.container -->
	</nav>
	</div><!-- end #page -->
