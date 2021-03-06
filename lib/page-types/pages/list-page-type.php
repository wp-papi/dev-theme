<?php

class List_Page_Type extends Papi_Page_Type {

	/**
	 * Define our Page Type meta data.
	 *
	 * @return array
	 */
	public function meta() {
		return [
			'description' => 'Vel adipisicing dapibus nostra. Lectus malesuada volutpat aliquet',
			'fill_labels' => true,
			'name'        => 'List page',
			'template'    => 'pages/list-page.php'
		];
	}

	/**
	 * Remove meta boxes.
	 *
	 * @return array
	 */
	public function remove() {
		return ['editor'];
	}

	/**
	 * Define our properties.
	 */
	public function register() {
		$this->box( 'Content', [

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
										'key'     => papi_get_page_type_key(),
										'compare' => 'NOT EXISTS'
									]
								]
							]
						]
					] )
				]
			] )
		] );
	}
}
