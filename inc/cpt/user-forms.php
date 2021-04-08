<?php
add_action( 'init', 'custom_post_type_userforms');
function custom_post_type_userforms() {
	$name = 'userforms'; //lowercase no spaces
	$menu = 'User Forms';
	$type = "User Forms";
	$cpmenu = "content";
	$url = 'user-forms';
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
			'show_ui' => true,
			'show_in_menu' => true,
			'rewrite' => array('slug' => $url),
		)
	);
}
