<?php
/**
 * Disable author page and author search by url
 *
 * @package wp-tweaks
 */

add_action( 'wp', 'wp_tweaks_disable_author_search' );
function wp_tweaks_disable_author_search () {
	global $wp_query;
	$disable_author_query = apply_filters( 'wp_tweaks_disable_author_query', true );

	if ( $disable_author_query && isset( $_GET['author'] ) ) {
		$wp_query->set_404();
		status_header( 404 );
	}
}
