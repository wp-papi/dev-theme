<?php

// Load library files.
foreach ( glob( __DIR__ . '/lib/*.php' ) as $file ) {
	require_once $file;
}

/**
 * Get current url.
 *
 * @param bool $parse
 * @param bool $obj
 *
 * @return string
 */

function current_url( $parse = false, $obj = true ) {
	$url = $_SERVER['REQUEST_URI'];
	$url = ltrim($url, '/');
	$url = home_url() . '/' . $url;

	if ( ! $parse ) {
		return $url;
	}

	$parts = parse_url( $url );

	if ( $parts === false ) {
		$parts = array();
	}

	if ( $obj ) {
		return (object) $parts;
	}

	return $parts;
}
