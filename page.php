<?php
/*
Template Name: Page
*/
	add_theme_support('post-thumbnails');
?>

<?php get_header(); ?>
<div class="container">
	<div class="content-column row">
		<div id="primary" class="single page">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
	<div class="single article row">

		<h1 class="entry-title"><?php the_title(); ?></h1>

		<article id="post-<?php the_ID(); ?>" class="front-content col-xs-12">
			<div class="main col-xs-12">
				<div class="entry-summary row">
					<?php the_content(); // Event Description ?>
				</div>
			</div>
		</article><!-- end article -->

	</div><!-- end .single .event .row -->
				
			<?php endwhile ?>
			<?php endif; ?>
		</div>
	</div><!-- end .content -->
	<?php get_footer(); ?>
</div><!-- end .container -->

	</body>
</html>