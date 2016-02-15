<?php

class Article_Page_Type extends Papi_Page_Type {

	/**
	 * Define our Page Type meta data.
	 *
	 * @return array
	 */
	public function meta() {
		return [
			'description'         => 'Vel adipisicing dapibus nostra. Lectus malesuada volutpat aliquet',
			'fill_labels'         => true,
			'name'                => 'Article page',
			'template'            => 'pages/article-page.php',
			'show_screen_options' => false
		];
	}
	
	/**
	 * Get help sidebar information.
	 *
	 * @return string
	 */
	public function help_sidebar() {
		return '
			<p>
				<strong>For more information:</strong>
			</p>
			<p>
				<a href="https://wp-papi.github.io/" target="_blank">Papi site</a>
			</p>
			<p>
				<a href="https://wp-papi.github.io/docs" target="_blank">Papi docs</a>
			</p>
		';
	}
	
	/**
	 * Add help tabs.
	 *
	 * @return array
	 */
	public function help() {
		return [
			'General'   => 'Varius diam exercitation irure consequat. Facilisis varius id pretium. Risus imperdiet ridiculus',
			'Page type' => 'Lorem ipsum dadadaa...'
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
				'type'  => 'Image',
				'title' => 'Hero image'
			] ),

			papi_property( [
				'title'    => 'Feature',
				'slug'     => 'feature_module',
				'type'     => 'post',
				'settings' => [
					'text'      => 'Select module',
					'post_type' => ['module', 'post']
				]
			] )
		] );
	}
}
