<?php

class Article_Page_Type extends Papi_Page_Type {

	/**
	 * Define our Page Type meta data.
	 *
	 * @return array
	 */
	public function meta() {
		return [
			'description' => 'This page type should not be seen since its overridden by page-types-override/pages/article-page-type.php',
			'fill_labels' => true,
			'name'        => 'Article page',
			'template'    => 'pages/article-page.php'
		];
	}
}
