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

		$this->remove( ['editor'] );

		$this->box( 'Content', [

			papi_property( [
				'type'  => 'Image',
				'title'	=> 'Hero image'
			] ),

			papi_property( [
				'type'  => 'editor',
				'title' => 'Editor'
			] )

		] );

	}

}
