<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package sscontent
 * @since sscontent 1.0
 */
?>

	</div><!-- #main -->
	</div><!-- #page .hfeed .site -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'sscontent_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'sscontent' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'sscontent' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'sscontent' ), 'SScontent', '<a href="http://blankthemes.com/" rel="designer">Blank Themes</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->


<?php wp_footer(); ?>

</body>
</html>