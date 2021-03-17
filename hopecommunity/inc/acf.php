<?php

/** ACF Settings */

//Theme Settings
if( function_exists('acf_add_options_page') ) {

 	// add parent
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Theme Details',
		'menu_title' 	=> 'Theme Details',
		'redirect' 		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Extras',
		'menu_title' 	=> 'Theme Extras',
		'parent_slug' 	=> $parent['menu_slug'],
	));
}

include_once ('acf/business.php');
include_once ('acf/contact.php');
include_once ('acf/footer.php');
include_once ('acf/logos.php');
include_once ('acf/social.php');
include_once ('acf/tracking.php');
include_once ('acf/website.php');

?>
