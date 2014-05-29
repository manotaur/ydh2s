<?php
/**
 * The template for displaying search forms in sscontent
 *
 * @package sscontent
 * @since sscontent 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'sscontent' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'sscontent' ); ?>" />
	</form>
