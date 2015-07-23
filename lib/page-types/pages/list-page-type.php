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

		$this->remove( ['editor'] );

		$this->box( 'Collaborators', [

			papi_property( [
				'type'     => 'repeater',
				'title'    => 'Collaborators',
				'slug'     => 'collaborators_repeater',
				'sidebar'  => false,
				'settings' => [
					'items' => [
						[
							'type'     => 'image',
							'title'    => 'Logo',
							'slug'     => 'collaborator_logo'
						],
						[
							'type'  => 'string',
							'title' => 'Titel',
							'slug'  => 'collaborator_title',
							'allow_html' => true
						],
						[
							'type'  => 'url',
							'title' => 'Link',
							'slug'  => 'collaborator_url'
						]
					]
				]
			] )

		] );

	}

}
