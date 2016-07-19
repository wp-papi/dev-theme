<?php

class Feature_Module_Type extends Papi_Page_Type {

	/**
	 * Define our Page Type meta data.
	 *
	 * @return array
	 */
	public function meta() {
		return [
		  'name'        => 'Feature',
		  'description' => 'Feature module',
		  'post_type'   => 'module'
		];
	}

	/**
	 * Remove meta boxes.
	 *
	 * @return array
	 */
	public function remove() {
		return ['editor', 'comments', 'thumbnail'];
	}

	/**
	 * Define our properties.
	 */
	public function register() {
		$this->box( 'Module content', [
			papi_property( [
				'type'  => 'string',
				'title' => 'Title'
			] ),
			papi_property( [
				'type'  => 'image',
				'title' => 'Image'
			] ),
			papi_property( [
			  'title'    => 'References',
			  'type'     => 'reference',
			  'settings' => [
					'slug'      => 'feature_module',
					'page_type' => 'article-page-type',
				]
			] )
		] );
	}
}
