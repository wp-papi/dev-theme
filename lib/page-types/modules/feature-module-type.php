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
		$this->remove( array( 'editor', 'comments', 'thumbnail' ) );

		$this->box( 'Module content', array(
			papi_property(array(
				'type'  => 'string',
				'title' => 'Title'
			)),
			papi_property(array(
				'type'  => 'image',
				'title' => 'Image'
			)),

			papi_property( [
			  'title'    => 'References',
			  'type'     => 'reference',
			  'settings' => [
					'slug'      => 'feature_module',
					'page_type' => 'article-page-type',
				]
			] )
		) );
	}

}