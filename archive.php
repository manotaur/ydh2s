<?php
/*
	Displays posts by date
*/
add_theme_support('post-thumbnails');
get_header(); ?>
<div id="taxonomy" class="container listing">

<?php if ( have_posts() ) : ?>
		<div class="outer-head">
			<h1 class="page-title">
				<?php
					if ( is_category() ) {
						printf( __( 'Category: %s'), '<span>' . single_cat_title( '', false ) . '</span>' );

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
						printf( __( 'Events from %s'), '<span>' . get_the_date( 'l, F j' ) . '</span>' );

					} elseif ( is_month() ) {
						printf( __( 'Events from %s'), '<span>' . get_the_date( 'F Y' ) . '</span>' );

					} elseif ( is_year() ) {
						printf( __( 'Events from %s'), '<span>' . get_the_date( 'Y' ) . '</span>' );

					} else {
						_e( 'Archives');

					} ?></h1>
		</div>
		<?php rewind_posts(); ?>
		
		<div class="front-content">
			<div class="col-sm-10 col-xs-12 listed">
				<?php
					
					while ( have_posts() ) : the_post();
						include 'post-list.php'; ?>
				<?php endwhile ?>
				<div class="next-prev"><p><?php posts_nav_link(); ?></p></div>
	<?php else : ?>
		<div class="front-content">
			<div class="col-sm-10 col-xs-12 list">
				<?php _e('<p>Sorry, no posts matched your criteria</p>');
	endif; ?>
			</div>		
			<div class="col-sm-2 xs-hide"><?php get_sidebar(); ?></div>
			<div class="clearfix"></div>
		</div><!-- .front-content -->
</div><!-- #taxonomy -->

<?php get_footer(); ?>
