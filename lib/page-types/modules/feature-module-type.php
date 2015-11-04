<?php

class Feature_Module_Type extends Papi_Page_Type {

	public function page_type() {
		return [
		  'name'        => 'Feature',
		  'description' => 'Feature module',
		  'post_type'   => 'module'
		];
	}

	public function register() {
		$this->remove( ['editor', 'comments', 'thumbnail'] );

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
