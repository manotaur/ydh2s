<?php
/*
	Displays posts by date
*/
add_theme_support('post-thumbnails');
get_header(); ?>
<div id="taxonomy" class="container listing">

<?php if ( have_posts() ) : ?>
		<header class="page-header row">
			<h1 class="page-title">
				<?php
					if ( is_category() ) {
						printf( __( 'Category Archives: %s'), '<span>' . single_cat_title( '', false ) . '</span>' );

					} elseif ( is_tag() ) {
						printf( __( 'Tag Archives: %s'), '<span>' . single_tag_title( '', false ) . '</span>' );

					} elseif ( is_author() ) {
						/* Queue the first post, that way we know
						* what author we're dealing with (if that is the case).
						*/
						the_post();
						printf( __( 'Author Archives: %s'), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
						/* Since we called the_post() above, we need to
						* rewind the loop back to the beginning that way
						* we can run the loop properly, in full.
						*/
						rewind_posts();

					} elseif ( is_day() ) {
						printf( __( 'Daily Archives: %s'), '<span>' . get_the_date() . '</span>' );

					} elseif ( is_month() ) {
						printf( __( 'Monthly Archives: %s'), '<span>' . get_the_date( 'F Y' ) . '</span>' );

					} elseif ( is_year() ) {
						printf( __( 'Yearly Archives: %s'), '<span>' . get_the_date( 'Y' ) . '</span>' );

					} else {
						_e( 'Archives');

					} ?></h1>
		</header>
		<?php rewind_posts(); ?>
		
		<div class="front-content">
			<div class="col-xs-10 list">
				<?php
					$archArgs = array(
					//	'date_query' => array(
					//		array( // Show events less than a day old
					//			'after' => '-1 day'
					//		),
					//	),
						'category_name' => 'Event',
						'order' => 'ASC'
					);
					$the_query = new WP_Query($archArgs);
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						include 'post-list.php'; 
					} ?>
				<div class="next-prev"><p><?php posts_nav_link(); ?></p></div>
	<?php else : ?>
		<div class="front-content">
			<div class="col-xs-10 list">
				<?php _e('<p>Sorry, no posts matched your criteria</p>');
	endif; ?>
			</div>		
			<div class="col-xs-2"><?php get_sidebar(); ?></div>
			<div class="clearfix"></div>
		</div><!-- .front-content -->
</div><!-- #taxonomy -->

<?php get_footer(); ?>

<!--
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
							if ( is_category() ) {
								printf( __( 'Category Archives: %s'), '<span>' . single_cat_title( '', false ) . '</span>' );

							} elseif ( is_tag() ) {
								printf( __( 'Tag Archives: %s'), '<span>' . single_tag_title( '', false ) . '</span>' );

							} elseif ( is_author() ) {
								/* Queue the first post, that way we know
								 * what author we're dealing with (if that is the case).
								*/
								the_post();
								printf( __( 'Author Archives: %s'), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
								/* Since we called the_post() above, we need to
								 * rewind the loop back to the beginning that way
								 * we can run the loop properly, in full.
								 */
								rewind_posts();

							} elseif ( is_day() ) {
								printf( __( 'Daily Archives: %s'), '<span>' . get_the_date() . '</span>' );

							} elseif ( is_month() ) {
								printf( __( 'Monthly Archives: %s'), '<span>' . get_the_date( 'F Y' ) . '</span>' );

							} elseif ( is_year() ) {
								printf( __( 'Yearly Archives: %s'), '<span>' . get_the_date( 'Y' ) . '</span>' );

							} else {
								_e( 'Archives');

							}
						?>
					</h1>
					<?php
						if ( is_category() ) {
							// show an optional category description
							$category_description = category_description();
							if ( ! empty( $category_description ) )
								echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );

						} elseif ( is_tag() ) {
							// show an optional tag description
							$tag_description = tag_description();
							if ( ! empty( $tag_description ) )
								echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
						}
					?>
				</header>

				<?php rewind_posts(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php include 'post-thumb.php'; ?>

				<?php endwhile; ?>

			<?php else : ?>

				<p><?php _e('Sorry, no posts matched your criteria.'); ?>, guy</p>

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>