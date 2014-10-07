<?php get_header(); ?>

	<?php if ( in_category('Event') ): 
			include 'single-event.php'; // Posts with category "Event" go to single-event.php
		else: // If this post is not an Event post, render this HTML below ?>
    		<div id="primary" class="single">
			<div id="content">
			</div><!-- #content -->
	<?php endif; ?>
		
		</div><!-- #primary .single -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>