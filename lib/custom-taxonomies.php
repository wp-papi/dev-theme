<?php

/**
 * Add custom taxonomy test_taxonomy.
 */
function ctx_test_taxonomy() {
	$labels = [
		'name'              => 'Test taxonomy',
		'singular_name'     => 'Term',
		'search_items'      => 'Search Terms',
		'all_items'         => 'All Terms',
		'parent_item'       => 'Parent Term',
		'parent_item_colon' => 'Parent Term:',
		'edit_item'         => 'Edit Term',
		'update_item'       => 'Update Term',
		'add_new_item'      => 'Add New Term',
		'new_item_name'     => 'New Term Name',
		'menu_name'         => 'Test taxonomy',
	];

	$args = [
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	];

	register_taxonomy( 'test_taxonomy', [ 'post' ], $args );
}

add_action( 'init', 'ctx_test_taxonomy' );

/**
 * Add custom taxonomy test_taxonomy_2.
 */
function ctx_test_taxonomy_2() {
	$labels = [
		'name'              => 'Test taxonomy 2',
		'singular_name'     => 'Term',
		'search_items'      => 'Search Terms',
		'all_items'         => 'All Terms',
		'parent_item'       => 'Parent Term',
		'parent_item_colon' => 'Parent Term:',
		'edit_item'         => 'Edit Term',
		'update_item'       => 'Update Term',
		'add_new_item'      => 'Add New Term',
		'new_item_name'     => 'New Term Name',
		'menu_name'         => 'Test taxonomy 2',
	];

	$args = [
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	];

	register_taxonomy( 'test_taxonomy_2', [ 'post' ], $args );
}

add_action( 'init', 'ctx_test_taxonomy_2' );
