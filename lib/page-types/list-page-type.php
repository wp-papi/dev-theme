<?php

class List_Page_Type extends Papi_Page_Type {

	public function page_type() {
		return [
			'description' => 'Vel adipisicing dapibus nostra. Lectus malesuada volutpat aliquet',
			'fill_labels' => true,
			'name'        => 'List page',
			'template'    => 'pages/list-page.php'
		];
	}

	public function register() {

		$this->remove([
			'editor'
		]);

		$this->box('Content', [

			papi_property( [
				'title'    => 'Pages',
				'type'     => 'repeater',
				'sidebar'  => false,
				'settings' => [
					'items' => papi_property( [
						'title'    => 'Page',
						'type'     => 'post',
						'settings' => [
							'text'      => '',
							'post_type' => 'page',
							'query'     => [
								'meta_query' => [
									[
										'key' => '_papi_page_type',
										'compare' => 'NOT EXISTS'
									]
								]
							]
						]
					] )
				]
			] )

		]);

	}

}
