<?php
add_action( 'init', 'custom_post_types');
function custom_post_types() {
	$name = 'portfolio'; //lowercase no spaces eg ecorys_digital
	$menu = 'Portfolio';
	$type = "Portfolio";
	$url = 'custom';
	$icon = 'welcome-widgets-menus'; // https://developer.wordpress.org/resource/dashicons/
	$supports = array(
		'title', // Main title
		'editor', // Content Editor
		'thumbnail', // Post Thumbnail
		'page-attributes', // Ordering
	);
	register_post_type( $name,
		array(
			'labels' => array(
				'name' => $menu,
				'singular_name' => $type,
				'add_new' => 'Add New',
				'add_new_item' => 'Add New ' . $type,
				'edit' => 'Edit',
				'edit_item' => 'Edit' . $type,
				'new_item' => 'New '. $type,
				'view' => 'View ' . $type,
				'view_item' => 'View ' . $type,
				'search_items' => 'Search ' . $type .'s',
				'not_found' => 'No ' . $type .'s found',
				'not_found_in_trash' => 'No ' . $type .'s found in Trash',
				),
			'public' => true,
			'has_archive' => true,
			'menu_position' => 35,
			'menu_icon' => 'dashicons-'. $icon ,
			'supports' => $supports,
			'rewrite' => array('slug' => $url),
		)
	);
}
