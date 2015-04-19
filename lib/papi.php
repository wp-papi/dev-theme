<?php

add_filter('papi/settings/directories', function () {
	return __DIR__ . '/page-types';
});
