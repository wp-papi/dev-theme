<?php

/**
 * Register Papi directory.
 *
 * @return string
 */

add_filter('papi/settings/directories', function () {
	return __DIR__ . '/page-types';
});
