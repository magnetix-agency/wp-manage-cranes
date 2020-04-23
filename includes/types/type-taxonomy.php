<?php

// Taxonomy
if ( ! function_exists( 'magnetize_type_taxonomy' ) ) {
	// Register Custom Taxonomy
	function magnetize_type_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Type of Crane', 'Taxonomy General Name', 'magnetize-field' ),
			'singular_name'              => _x( 'Type of Crane', 'Taxonomy Singular Name', 'magnetize-field' ),
			'menu_name'                  => __( 'Type of Crane', 'magnetize-field' ),
			'all_items'                  => __( 'All Types', 'magnetize-field' ),
			'parent_item'                => __( 'Types', 'magnetize-field' ),
			'parent_item_colon'          => __( 'Parent Type:', 'magnetize-field' ),
			'new_item_name'              => __( 'New Type', 'magnetize-field' ),
			'add_new_item'               => __( 'Add New Type', 'magnetize-field' ),
			'edit_item'                  => __( 'Edit Type', 'magnetize-field' ),
			'update_item'                => __( 'Update Type', 'magnetize-field' ),
			'view_item'                  => __( 'View Type', 'magnetize-field' ),
			'separate_items_with_commas' => __( 'Separate Type', 'magnetize-field' ),
			'add_or_remove_items'        => __( 'Add or remove Types', 'magnetize-field' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'magnetize-field' ),
			'popular_items'              => __( 'Popular Items', 'magnetize-field' ),
			'search_items'               => __( 'Search Types', 'magnetize-field' ),
			'not_found'                  => __( 'Types Not Found', 'magnetize-field' ),
			'no_terms'                   => __( 'No Types', 'magnetize-field' ),
			'items_list'                 => __( 'Types list', 'magnetize-field' ),
			'items_list_navigation'      => __( 'Types list navigation', 'magnetize-field' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
		);
		register_taxonomy( 'type_cranes', array( 'cranes-for-sale' ), $args );

	}
	add_action( 'init', 'magnetize_type_taxonomy', 0 );
}