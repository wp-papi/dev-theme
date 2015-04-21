<?php

class Article_Page_Type extends Papi_Page_Type {

	public function page_type() {
		return [
			'description' => 'Vel adipisicing dapibus nostra. Lectus malesuada volutpat aliquet',
			'fill_labels' => true,
			'name'        => 'Article page',
			'template'    => 'pages/article-page.php'
		];
	}

	public function register() {

		$this->remove([
			'editor'
		]);

		$this->box('Content', [

			papi_property([
				'type'  => 'Image',
				'title'	=> 'Hero image'
			]),

			papi_property([
				'type'  => 'editor',
				'title' => 'Editor'
			])

		]);

	}

}

return [

	/**
	 * Page type meta.
	 */

	'page_type' => [
		'name' => 'Article page'
	],

	/**
	 * Remove meta boxes.
	 */

	'remove' => [
		'editor'
	],

	/**
	 * Register meta boxes.
	 */

	'register' => [

		/**
		 * Content meta box.
		 */

		'Content' => [
			[
				'title' => 'Hero image',
				'type'  => 'image'
			],
			[
				'title' => 'Editor',
				'type'  => 'editor'
			]
		]
	]

];
