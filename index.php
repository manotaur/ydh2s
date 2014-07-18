<?php
/*
Template Name: Event Listing
*/
	add_theme_support('post-thumbnails');
?>
<?php get_header(); ?>

<div class="event-list">
	<?php // Gets event posts which have been published or scheduled
		query_posts('category_name=Event&post_status=future,publish'); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php include 'post-thumb.php'; ?>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?>, guy</p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>