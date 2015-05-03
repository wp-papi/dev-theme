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

		$this->box( 'Collaborators', array(

			papi_property( array(
				'type'     => 'repeater',
				'title'    => 'Collaborators',
				'slug'     => 'collaborators_repeater',
				'sidebar'  => false,
				'settings' => array(
					'items' => array(
						array(
							'type'     => 'image',
							'title'    => 'Logo',
							'slug'     => 'collaborator_logo'
						),
						array(
							'type'  => 'string',
							'title' => 'Titel',
							'slug'  => 'collaborator_title',
							'allow_html' => true
						),
						array(
							'type'  => 'url',
							'title' => 'Link',
							'slug'  => 'collaborator_url'
						)
					)
				)
			) )
		) );

	}

}
