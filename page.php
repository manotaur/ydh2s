<?php
/*
Template Name: Page
*/
	add_theme_support('post-thumbnails');
?>

	<?php get_header(); ?>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content('Read More'); ?>
		<?php endwhile ?>
		
	<?php endif; ?>
		
			<!--</div> end .content -->
		</div><!-- end .container -->
		<?php get_footer(); ?>
	</body>
</html>