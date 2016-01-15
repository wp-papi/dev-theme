<?php

/**
 * Register Papi directories.
 *
 * 1. Page types directory that exists in the plugin.
 * 2. Theme custom page types directory.
 *
 * @return string
 */
add_filter( 'papi/settings/directories', function () {
	$dir = file_exists( WP_CONTENT_DIR . '/mu-plugins/papi/papi-loader.php' )
		? 'mu-plugins' : 'plugins';

	return [
		WP_CONTENT_DIR . '/' . $dir . '/papi/tests/data/page-types',
		__DIR__ . '/page-types',
		__DIR__ . '/page-types-override'
	];
} );
