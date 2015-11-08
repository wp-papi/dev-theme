<?php

/**
 * Add custom post type `Module`.
 */
function cpt_module() {
  $labels = [
	'name'               => 'Module',
	'singular_name'      => 'Module',
	'add_new'            => 'Add new',
	'add_new_item'       => 'Add new module',
	'edit_item'          => 'Edit modul',
	'new_item'           => 'Add new',
	'all_items'          => 'All modules',
	'view_item'          => 'Show module',
	'search_items'       => 'Search modules',
	'not_found'          => 'No modules found',
	'not_found_in_trash' => 'No modules found in the trash',
	'parent_item_colon'  => '',
	'menu_name'          => 'Modules'
  ];

  $args = [
	'menu_icon'          => 'dashicons-admin-page',
	'labels'             => $labels,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'capability_type'    => 'post',
	'has_archive'        => false,
	'hierarchical'       => false,
	'menu_position'      => 10,
	'can_export'         => true,
	'rewrite'            => ['slug' => 'module'],
	'supports' 			=> [
	  'title',
	  'editor',
	  'thumbnail'
	]
  ];

  register_post_type( 'module', $args );
}

add_action( 'init', 'cpt_module' );

/**
 * Add custom post type `FAQ`.
 */
function cpt_faq() {
  $labels = [
	'name'               => 'FAQ',
	'singular_name'      => 'FAQ',
	'add_new'            => 'Add new',
	'add_new_item'       => 'Add new FAQ',
	'edit_item'          => 'Edit FAQ',
	'new_item'           => 'Add new',
	'all_items'          => 'All FAQs',
	'view_item'          => 'Show FAQ',
	'search_items'       => 'Search FAQs',
	'not_found'          => 'No FAQs found',
	'not_found_in_trash' => 'No FAQs found in the trash',
	'parent_item_colon'  => '',
	'menu_name'          => 'FAQs'
  ];

  $args = [
	'menu_icon'          => 'dashicons-admin-page',
	'labels'             => $labels,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'capability_type'    => 'post',
	'has_archive'        => false,
	'hierarchical'       => false,
	'menu_position'      => 10,
	'can_export'         => true,
	'rewrite'            => ['slug' => 'faq'],
	'supports' 			=> [
	  'title',
	  'editor',
	  'thumbnail'
	]
  ];

  register_post_type( 'faq', $args );
}

add_action( 'init', 'cpt_faq' );
