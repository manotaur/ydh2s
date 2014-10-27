<?php get_header(); ?>
<div class="container">
	<div class="content-column row">
		<?php if ( in_category('event') ): 
			include 'single-event.php'; // Posts with category "event" go to single-event.php
			elseif ( in_category('newsletter') ):
			include 'single-newsletter.php'; // Posts with category "newsletter" go to single-newsletter.php
			elseif ( in_category('editorial') ):
			include 'single-article.php'; // Posts with category "Editorial go to single-article.php
			elseif ( in_category('venue') ):
			include 'single-venue.php'; // Posts with category "venue" go to single-venue.php
		else: // If this post is not an Event post, render this HTML below ?>
   			<div id="primary" class="single">
				<div id="content">
				</div><!-- #content -->
			</div><!-- #primary .single -->
		<?php endif; ?>
	</div><!-- end .content-column -->
</div><!-- end .container -->
<?php get_footer(); ?>