<?php
/**
 * The template for displaying taxonomy-related archive pages. It will only display posts in the event category
 */

add_theme_support('post-thumbnails');
get_header(); ?>

	<div id="content" class="archive">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title">
						<?php $the_tax = get_taxonomy( get_query_var( 'taxonomy' ) );
							echo $the_tax->labels->name; // Get & display the section title ?> &gt;
						<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
							echo $term->name; // Get & display the section term  ?>
					</h1>
				</header>

				<?php while ( have_posts() ) : the_post(); 
					if ( in_category('event') ) : // Only include 'event' posts ?>
						<?php include 'post-thumb.php'; ?>
					<?php endif; 
				endwhile; ?>

			<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria'); ?>, guy</p>

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>