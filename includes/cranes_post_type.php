<?php

if ( ! function_exists('magnetize_field_post_type') ) {

// Register Custom Post Type
function magnetize_field_post_type() {

	$labels = array(
		'name'                  => _x( 'Cranes', 'Post Type General Name', 'magnetize-field' ),
		'singular_name'         => _x( 'Crane', 'Post Type Singular Name', 'magnetize-field' ),
		'menu_name'             => __( 'Cranes', 'magnetize-field' ),
		'name_admin_bar'        => __( 'Cranes', 'magnetize-field' ),
		'archives'              => __( 'Crane Archives', 'magnetize-field' ),
		'attributes'            => __( 'Crane Attributes', 'magnetize-field' ),
		'parent_item_colon'     => __( 'Parent Crane:', 'magnetize-field' ),
		'all_items'             => __( 'All Cranes', 'magnetize-field' ),
		'add_new_item'          => __( 'Add Crane', 'magnetize-field' ),
		'add_new'               => __( 'Add Crane', 'magnetize-field' ),
		'new_item'              => __( 'New Crane', 'magnetize-field' ),
		'edit_item'             => __( 'Edit Crane', 'magnetize-field' ),
		'update_item'           => __( 'Update Crane', 'magnetize-field' ),
		'view_item'             => __( 'View Crane', 'magnetize-field' ),
		'view_items'            => __( 'View Cranes', 'magnetize-field' ),
		'search_items'          => __( 'Search Cranes', 'magnetize-field' ),
		'not_found'             => __( 'Crane not found', 'magnetize-field' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'magnetize-field' ),
		'featured_image'        => __( 'Featured Image', 'magnetize-field' ),
		'set_featured_image'    => __( 'Set featured image', 'magnetize-field' ),
		'remove_featured_image' => __( 'Remove featured image', 'magnetize-field' ),
		'use_featured_image'    => __( 'Use as featured image', 'magnetize-field' ),
		'insert_into_item'      => __( 'Insert into item', 'magnetize-field' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'magnetize-field' ),
		'items_list'            => __( 'Items list', 'magnetize-field' ),
		'items_list_navigation' => __( 'Items list navigation', 'magnetize-field' ),
		'filter_items_list'     => __( 'Filter items list', 'magnetize-field' ),
	);
	$args = array(
		'label'                 => __( 'Crane', 'magnetize-field' ),
		'description'           => __( 'Crane catalog', 'magnetize-field' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-category',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'cranes-for-sale', $args );

}
add_action( 'init', 'magnetize_field_post_type', 0 );

}