<?php

function slider_custom_post() {
	$labels = array(
		'name'               => _x( 'sliders', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'slider', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'sliders', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'slider', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'slider', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New slider', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New slider', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit slider', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View slider', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All sliders', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search sliders', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent sliders:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No sliders found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No sliders found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' )
	);

	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_custom_post' );

//services custom post
function services_custom_post() {
	$labels = array(
		'name'               => _x( 'services', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'service', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'services', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'service', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'service', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New service', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New service', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit service', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View service', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All services', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search services', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent services:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No services found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No services found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' )
	);

	register_post_type( 'service', $args );
}
add_action( 'init', 'services_custom_post' );


//services custom post
function team_custom_post() {
	$labels = array(
		'name'               => _x( 'teams', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'team', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'teams', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'team', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'team', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New team', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New team', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit team', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View team', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All teams', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search teams', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent teams:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No teams found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No teams found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' )
	);

	register_post_type( 'team', $args );
}
add_action( 'init', 'team_custom_post' );





?>