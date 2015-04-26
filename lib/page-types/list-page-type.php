<?php

class List_Page_Type extends Papi_Page_Type {

	public function page_type() {
		return array(
			'description' => 'Vel adipisicing dapibus nostra. Lectus malesuada volutpat aliquet',
			'fill_labels' => true,
			'name'        => 'List page',
			'template'    => 'pages/list-page.php'
		);
	}

	public function register() {

		$this->remove( array(
			'editor'
		) );

		$this->box( 'Content', array(

			papi_property( array(
				'title'    => 'Pages',
				'type'     => 'repeater',
				'sidebar'  => false,
				'settings' => array(
					'items' => papi_property( array(
						'title'    => 'Page',
						'type'     => 'post',
						'settings' => array(
							'text'      => '',
							'post_type' => 'page',
							'query'     => array(
								'meta_query' => array(
									array(
										'key' => '_papi_page_type',
										'compare' => 'NOT EXISTS'
									)
								)
							)
						)
					) )
				)
			) )
		) );

	}

}
