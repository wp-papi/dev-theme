<?php

class Article_Page_Type extends Papi_Page_Type {

	/**
	 * Define our Page Type meta data.
	 *
	 * @return array
	 */
	public function meta() {
		return [
			'description' => 'Vel adipisicing dapibus nostra. Lectus malesuada volutpat aliquet',
			'fill_labels' => true,
			'name'        => 'Article page',
			'template'    => 'pages/article-page.php'
		];
	}

	/**
	 * Remove meta boxes.
	 *
	 * @return array
	 */
	public function remove() {
		return ['editor'];
	}

	/**
	 * Define our properties.
	 */
	public function register() {
		$this->box( 'Content', [

			papi_property( [
				'type'  => 'Image',
				'title' => 'Hero image'
			] ),

			papi_property( [
				'title'    => 'Feature',
				'slug'     => 'feature_module',
				'type'     => 'post',
				'settings' => [
					'text'      => 'Select module',
					'post_type' => ['module', 'post']
				]
			] )
		] );
	}
}
