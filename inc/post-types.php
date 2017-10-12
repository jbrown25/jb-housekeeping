<?php
/**
 * JB Housekeeping Custom Post Types
 *
 * @package JB_Housekeeping
 */

/**
 * Register Team members and testimonials post types
 */

// Register Custom Post Type
if(!function_exists('jb_register_custom_post_types')){
	function jb_register_custom_post_types(){
		//team members
		$labels = array(
			'name'                  => _x( 'Team Members', 'Post Type General Name', 'jb-housekeeping' ),
			'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'jb-housekeeping' ),
			'menu_name'             => __( 'Team Members', 'jb-housekeeping' ),
			'name_admin_bar'        => __( 'Team Member', 'jb-housekeeping' ),
			'archives'              => __( 'Team Member Archives', 'jb-housekeeping' ),
			'attributes'            => __( 'Item Attributes', 'jb-housekeeping' ),
			'parent_item_colon'     => __( 'Parent Item:', 'jb-housekeeping' ),
			'all_items'             => __( 'All Members', 'jb-housekeeping' ),
			'add_new_item'          => __( 'Add New Item', 'jb-housekeeping' ),
			'add_new'               => __( 'Add New Team Member', 'jb-housekeeping' ),
			'new_item'              => __( 'New Item', 'jb-housekeeping' ),
			'edit_item'             => __( 'Edit Item', 'jb-housekeeping' ),
			'update_item'           => __( 'Update Item', 'jb-housekeeping' ),
			'view_item'             => __( 'View Item', 'jb-housekeeping' ),
			'view_items'            => __( 'View Items', 'jb-housekeeping' ),
			'search_items'          => __( 'Search Item', 'jb-housekeeping' ),
			'not_found'             => __( 'Not found', 'jb-housekeeping' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'jb-housekeeping' ),
			'featured_image'        => __( 'Team Member Image', 'jb-housekeeping' ),
			'set_featured_image'    => __( 'Set team member image (ideal dimentions 320x480)', 'jb-housekeeping' ),
			'remove_featured_image' => __( 'Remove team member image', 'jb-housekeeping' ),
			'use_featured_image'    => __( 'Use as team member image', 'jb-housekeeping' ),
			'insert_into_item'      => __( 'Insert into item', 'jb-housekeeping' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'jb-housekeeping' ),
			'items_list'            => __( 'Items list', 'jb-housekeeping' ),
			'items_list_navigation' => __( 'Items list navigation', 'jb-housekeeping' ),
			'filter_items_list'     => __( 'Filter items list', 'jb-housekeeping' ),
		);
		$args = array(
			'label'                 => __( 'Team Member', 'jb-housekeeping' ),
			'description'           => __( 'These are your team members', 'jb-housekeeping' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,		
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'team_member', $args );
		
		//testimonials
		$labels = array(
			'name'                  => _x( 'Testimonials', 'Post Type General Name', 'jb-housekeeping' ),
			'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'jb-housekeeping' ),
			'menu_name'             => __( 'Testimonials', 'jb-housekeeping' ),
			'name_admin_bar'        => __( 'Testimonial', 'jb-housekeeping' ),
			'archives'              => __( 'Testimonial Archives', 'jb-housekeeping' ),
			'attributes'            => __( 'Item Attributes', 'jb-housekeeping' ),
			'parent_item_colon'     => __( 'Parent Item:', 'jb-housekeeping' ),
			'all_items'             => __( 'All Testimonials', 'jb-housekeeping' ),
			'add_new_item'          => __( 'Add New Item', 'jb-housekeeping' ),
			'add_new'               => __( 'Add New Testimonial', 'jb-housekeeping' ),
			'new_item'              => __( 'New Item', 'jb-housekeeping' ),
			'edit_item'             => __( 'Edit Item', 'jb-housekeeping' ),
			'update_item'           => __( 'Update Item', 'jb-housekeeping' ),
			'view_item'             => __( 'View Item', 'jb-housekeeping' ),
			'view_items'            => __( 'View Items', 'jb-housekeeping' ),
			'search_items'          => __( 'Search Item', 'jb-housekeeping' ),
			'not_found'             => __( 'Not found', 'jb-housekeeping' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'jb-housekeeping' ),
			'insert_into_item'      => __( 'Insert into item', 'jb-housekeeping' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'jb-housekeeping' ),
			'items_list'            => __( 'Items list', 'jb-housekeeping' ),
			'items_list_navigation' => __( 'Items list navigation', 'jb-housekeeping' ),
			'filter_items_list'     => __( 'Filter items list', 'jb-housekeeping' ),
		);
		$args = array(
			'label'                 => __( 'Testimonial', 'jb-housekeeping' ),
			'description'           => __( 'These are your testimonials', 'jb-housekeeping' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,		
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'testimonial', $args );
	}

	add_action( 'init', 'jb_register_custom_post_types', 0 );
}