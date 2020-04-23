<?php

// Taxonomy
if ( ! function_exists( 'manufacturer_taxonomy' ) ) {
	// Register Custom Taxonomy
	function manufacturer_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Manufacturer of Crane', 'Taxonomy General Name', 'magnetize-field' ),
			'singular_name'              => _x( 'Manufacturer of Crane', 'Taxonomy Singular Name', 'magnetize-field' ),
			'menu_name'                  => __( 'Manufacturer of Crane', 'magnetize-field' ),
			'all_items'                  => __( 'All Manufacturers', 'magnetize-field' ),
			'parent_item'                => __( 'Manufacturers', 'magnetize-field' ),
			'parent_item_colon'          => __( 'Parent Manufacturer:', 'magnetize-field' ),
			'new_item_name'              => __( 'New Manufacturer', 'magnetize-field' ),
			'add_new_item'               => __( 'Add New Manufacturer', 'magnetize-field' ),
			'edit_item'                  => __( 'Edit Manufacturer', 'magnetize-field' ),
			'update_item'                => __( 'Update Manufacturer', 'magnetize-field' ),
			'view_item'                  => __( 'View Manufacturer', 'magnetize-field' ),
			'separate_items_with_commas' => __( 'Separate Manufacturer', 'magnetize-field' ),
			'add_or_remove_items'        => __( 'Add or remove Models', 'magnetize-field' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'magnetize-field' ),
			'popular_items'              => __( 'Popular Items', 'magnetize-field' ),
			'search_items'               => __( 'Search Models', 'magnetize-field' ),
			'not_found'                  => __( 'Models Not Found', 'magnetize-field' ),
			'no_terms'                   => __( 'No Models', 'magnetize-field' ),
			'items_list'                 => __( 'Models list', 'magnetize-field' ),
			'items_list_navigation'      => __( 'Models list navigation', 'magnetize-field' ),
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
		register_taxonomy( 'manufacturer_cranes', array( 'cranes-for-sale' ), $args );

	}
	add_action( 'init', 'manufacturer_taxonomy', 0 );
}