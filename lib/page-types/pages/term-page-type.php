<?php
class Term_Page_Type extends Papi_Page_Type {

	/**
	 * Define our Page Type meta data.
	 *
	 * @return array
	 */
	public function meta() {
		return [
			'name'        => 'Term test page',
			'description' => 'Page type to test out the term property'
		];
	}

	/**
	 * Remove meta boxes.
	 *
	 * @return array
	 */
	public function remove() {
		return ['editor', 'commentsdiv', 'commentstatusdiv', 'authordiv', 'slugdiv'];
	}

	/**
	 * Define our properties.
	 */
	public function register() {

		$this->box( 'Content', [

			// Term
			papi_property( [
				'type'     => 'term',
				'title'    => 'Term test',
				'slug'     => 'term_test',
				'settings' => [
					'taxonomy' => ['test_taxonomy', 'test_taxonomy_2'],
				]
			] ),

			papi_property( [
				'type'     => 'term',
				'title'    => 'Term test 2',
				'slug'     => 'term_test_2',
				'settings' => [
					'taxonomy' => ['test_taxonomy', 'test_taxonomy_2'],
					'layout'   => 'multiple'
				]
			] ),

			papi_property( [
				'type'     => 'term',
				'title'    => 'Term test 3',
				'slug'     => 'term_test_3',
				'settings' => [
					'taxonomy' => ['test_taxonomy', 'test_taxonomy_2'],
					'select2'  => false,
				]
			] ),

			papi_property( [
				'type'     => 'repeater',
				'title'    => 'Repeater test',
				'slug'     => 'repeater_test',
				'settings' => [
					'items' => [
						papi_property( [
							'type'     => 'term',
							'title'    => 'Term test 4',
							'slug'     => 'term_test_4',
							'settings' => [
								'taxonomy' => ['test_taxonomy', 'test_taxonomy_2'],
							]
						] ),

						papi_property( [
							'type'     => 'term',
							'title'    => 'Term test 5',
							'slug'     => 'term_test_5',
							'settings' => [
								'taxonomy' => ['test_taxonomy', 'test_taxonomy_2'],
								'layout'   => 'multiple'
							]
						] ),

						papi_property( [
							'type'     => 'term',
							'title'    => 'Term test 6',
							'slug'     => 'term_test_6',
							'settings' => [
								'taxonomy' => ['test_taxonomy', 'test_taxonomy_2'],
								'select2'  => false,
							]
						] ),
					]
				]
			] )

		] );

	}
}
