<?php get_header(); ?>
<div class="container">
	<div class="content-column row">
		<?php if ( in_category('Event') ): 
			include 'single-event.php'; // Posts with category "Event" go to single-event.php
		else: // If this post is not an Event post, render this HTML below ?>
   			<div id="primary" class="single">
				<div id="content">
				</div><!-- #content -->
			</div><!-- #primary .single -->
		<?php endif; ?>
	</div><!-- end .content-column -->
</div><!-- end .container -->
<?php get_footer(); ?>