<?php

class Article_Page_Type extends Papi_Page_Type {

	public function page_type() {
		return array(
			'description' => 'Vel adipisicing dapibus nostra. Lectus malesuada volutpat aliquet',
			'fill_labels' => true,
			'name'        => 'Article page',
			'template'    => 'pages/article-page.php'
		);
	}

	public function register() {

		$this->remove( array(
			'editor'
		) );

		$this->box( 'Content', array(
			papi_property( array(
				'type'  => 'Image',
				'title'	=> 'p image'
			) ),

			papi_property( array(
				'type'  => 'editor',
				'title' => 'Editor'
			) ),

			papi_property( array(
			  'title'    => 'Feature',
			  'slug'     => 'feature_module',
			  'type'     => 'post',
			  'settings' => array(
					'text' => 'Select module',
					'post_type' => array( 'module', 'post' )
				)
			) )
		) );

	}

}
