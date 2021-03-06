<?php
/**
 * Get $_POST request action from the settings page.
 *
 * @since  1.2.0
 *
 * @param string $check_referer Check plugin nonce if set to 'check_referer'
 * @return string Plugin request action 'delete', 'register' or 'unregister'/
 */
function cptc_get_request( $check_referer = '' ) {

	if ( 'POST' !== $_SERVER['REQUEST_METHOD'] ) {
		return '';
	}

	if ( 'check_referer' === $check_referer ) {
		check_admin_referer( 'custom_post_type_cleanup_nonce', 'security' );
	}

	$request = stripslashes_deep( $_POST );
	$plugin_request = '';

	if ( isset( $request['cptc_delete'] ) ) {
		$plugin_request = 'delete';
	}

	if ( isset( $request['cptc_register'] ) ) {
		$plugin_request = 'register';
	}

	if ( isset( $request['cptc_unregister'] ) ) {
		$plugin_request = 'unregister';
	}

	return $plugin_request;
}

/**
 * Returns the post type from a $_POST request.
 *
 * @since 1.2.0
 *
 * @param string $check_referer Check plugin nonce if set to 'check_referer'
 * @return string Post type to delete posts from or empty string.
 */
function cptc_get_requested_post_type( $check_referer = '' ) {
	if ( ! cptc_get_request( $check_referer ) ) {
		return '';
	}

	$request = stripslashes_deep( $_POST );
	return isset( $request['cptc_post_type'] ) ? trim( $request['cptc_post_type'] ) : '';
}
