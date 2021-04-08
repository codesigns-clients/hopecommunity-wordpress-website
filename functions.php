<?php
require get_template_directory() . '/inc/theme-functions.php';
require get_template_directory() . '/inc/template-tags.php';

// require get_template_directory() . '/inc/custom-post-type.php';

/* ### ADD CUSTOM POST TYPES */
require get_template_directory() . '/inc/cpt/user-forms.php';

// ACF
require get_template_directory() . '/inc/acf.php';

// SIDEBARS
// require get_template_directory() . '/inc/sidebars.php';

// WooCommerce
//require get_template_directory() . '/inc/woocommerce.php';

function custom_theme_setup () {
	/** Nav Menus - Add anymore here as needed */
	register_nav_menus( array(
		'main-menu' => 'Primary',
		'footer' => 'Footer',
	) );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

/** Admin Login Logo */
function custom_login_logo() {
	$image_url = get_template_directory_uri() . '/assets/img/logo.png'; // URL of LOGO
	echo '
		<style>
			body {
				background-color:#f2f2f2;
			}
			.login #backtoblog a, 
			.login #nav a {
				color:#105aab;
			}
			.login h1 a { background-image: url('.$image_url.') !important; background-size: 280px 50px; width:280px; height:50px; display:block; }
		</style>
	';
}
add_action( 'login_head', 'custom_login_logo' );

add_editor_style('style.css');

/** ADD Extra Styles and Themes as Needed */

// wp_enqueue_style('UNIQUE-style', 'URL', 'VERSION');
// wp_enqueue_script('UNIQUE-js', 'URL', '', 'VERSION', true);

function custom_theme_scripts() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), '', null);
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );

/** REMOVE Extra Styles and Themes as Needed */
function custom_theme_scripts_remove() {
	wp_deregister_style( 'af-form-style' );
}
add_action('wp_print_styles', 'custom_theme_scripts_remove', 100);

add_action( 'init', function() {
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure( '/%postname%/' );
} );

