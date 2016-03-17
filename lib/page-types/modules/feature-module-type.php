<?php

class Feature_Module_Type extends Papi_Page_Type {

	public function meta() {
		return [
		  'name'        => 'Feature',
		  'description' => 'Feature module',
		  'post_type'   => 'module'
		];
	}

	public function remove() {
		return ['editor', 'comments', 'thumbnail'];
	}

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
