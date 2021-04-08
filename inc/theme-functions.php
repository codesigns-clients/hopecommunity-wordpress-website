<?php
/**
* Functions Include in all WordPress Themes
* Place in /inc folder with wp-bootstrap-navwalker.php in same folder
*
*/

/** Add support for Bootstrap Nav */
require_once('wp-bootstrap-navwalker.php');

/** Enqueue Scripts */
function default_scripts() {

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Catamaran:wght@600;800&family=Open+Sans:wght@300;400;600&display=swap', array(), null );

	#wp_enqueue_style('slick', get_template_directory_uri(). '/static/vendor/slick-slider/1.8.1/slick/slick.css', '');
	#wp_enqueue_style('slick-thtme', get_template_directory_uri(). '/static/vendor/slick-slider/1.8.1/slick/slick-theme.css', '');

	wp_enqueue_script('jquery');
	
	wp_enqueue_script('bootstrap-bundle-min', get_template_directory_uri() . '/static/vendor/bootstrap/4.6.0/js/bootstrap.bundle.min.js', '', '4.6.0', true);

	#wp_enqueue_script('popper-js', get_template_directory_uri() . '/static/vendor/popper/popper.min.js', '', '1.16.0', true);
	#wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/static/vendor/bootstrap/4.6.0/js/bootstrap.min.js', '', '4.5.0', true);

	#wp_enqueue_script('slick', get_template_directory_uri() . '/static/vendor/slick-slider/1.8.1/slick/slick.js', '', '1.8.1', true);
	wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/static/js/scripts.js', '', '1.0.0', true);

	wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/13d29dabf2.js', '', '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'default_scripts' );

/** SVG Support */
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/** Custom Excerpt Length */
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}

/** Custom Content Length */
function content($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
	} else {
		$content = implode(" ",$content);
	}
	$content = preg_replace('/[.+]/','', $content);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}

/** ASYNC Scripts */
/** Add #asyncload to the end of URL's when enqueuing them */
function async_scripts($url) {
	if ( strpos( $url, '#asyncload') === false ) :
		return $url;
	elseif ( is_admin() ) :
		return str_replace( '#asyncload', '', $url );
	else :
		return str_replace( '#asyncload', '', $url )."' async='async";
	endif;
}
add_filter( 'clean_url', 'async_scripts', 11, 1 );

/** Disable Emoji's */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
* Filter function used to remove the tinymce emoji plugin.
*
* @param array $plugins
* @return array Difference betwen the two arrays
*/
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
* Remove emoji CDN hostname from DNS prefetching hints.
*
* @param array $urls URLs to print for resource hints.
* @param string $relation_type The relation type the URLs are printed for.
* @return array Difference betwen the two arrays.
*/
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}
	return $urls;
}

/** Placeholder Image Shortcode */
/** [placeimg width="400" height="400" /] */
add_shortcode('placeimg', 'placeimg');
function placeimg($atts) {
	$atts = shortcode_atts( array(
		'width' => '1000',
		'height' => '500'
	), $atts, 'bartag' );

	$html = '<img class="img-responsive" src="http://via.placeholder.com/'.$atts['width'].'x' .$atts['height'].'/ff9900/2c2c2c" />';
	return $html;
}

/** Button Shortcode */
/** [btn_link class="btn_grey"]Read More [/btn_link] */

add_shortcode('btn_link', 'btn_link');
function btn_link($atts, $content) {
	$atts = shortcode_atts( array(
		'class' => 'btn-default',
	), $atts, 'bartag' );

	$input = new SimpleXMLElement($content);
	$link = $input['href'];
	$text = $input['0'];

	$html = '<a href="' . $link . '" class="btn '. $atts['class'] .'">' . $text . '</a>';
	return $html;
}

/** Designed and Developed by Co:Designs in Admin */
function modify_footer() {
	echo 'Designed and Developed by <a href="mailto:webmaster@codesigns.co.uk">CO:DESIGNS</a>.';
}
add_filter( 'admin_footer_text', 'modify_footer' );

/** Remove Dashboard Widgets */
function remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );
remove_action('welcome_panel', 'wp_welcome_panel');

/** Remove Comments  */
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'init', 'remove_comment_support', 100 );
function remove_comment_support() {
	remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'page', 'comments' );
}
function mytheme_admin_bar_render() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'comments' );
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

/** Disable xmlrpc.php */
add_filter( 'xmlrpc_enabled', '__return_false' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

/** Remove Query String from Static Resources  */
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

/** Always show second bar in TinyMCE */
function show_tinymce_toolbar( $in ) {
	$in['wordpress_adv_hidden'] = false;
	return $in;
}
add_filter( 'tiny_mce_before_init', 'show_tinymce_toolbar' );

/** Remove WP Version */
remove_action('wp_head', 'wp_generator');

/** Secure WP Login */
function no_wordpress_errors(){
  return 'Please contact the developers for assistance or try again';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

/** Image Default Link None */
function wpb_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );

    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

/** Site Environment */
/* add_action( 'admin_bar_menu', 'custom_wp_toolbar_link', 999 );
function custom_wp_toolbar_link( $wp_admin_bar ) {
    if( current_user_can( 'level_10' ) ){
	        $args = array(
	            'id' => 'flag-'. WP_ENV,
	            'title' => ucwords( WP_ENV ),
	        );
	        $wp_admin_bar->add_node($args);
    }
}
function flag_style() {
	echo '
	<style type="text/css">
		#wpadminbar ul li#wp-admin-bar-flag-development div { background:#cc3232 !important; color: #fff !important; }
		#wpadminbar ul li#wp-admin-bar-flag-staging div { background: #e7b416 !important; color: #fff !important; }
		#wpadminbar ul li#wp-admin-bar-flag-production div {  background: #B4CF11 !important; color: #354253 !important; }

		#wpadminbar ul li#wp-admin-bar-flag-development,
		#wpadminbar ul li#wp-admin-bar-flag-staging,
		#wpadminbar ul li#wp-admin-bar-flag-production, #wpadminbar ul li#wp-admin-bar-flag-WP_ENV {
			float: right;
		}
	</style>';
}
add_action( 'wp_before_admin_bar_render', 'flag_style', 99 );

// if(WP_ENV == 'development') :
// 	add_filter( 'auto_update_plugin', '__return_true' );
// endif;
*/

/** SUPPORT WIDGET */
add_action('wp_dashboard_setup', 'dashboard_widgets');
function dashboard_widgets() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'Website Support', 'custom_dashboard_help');
}
function custom_dashboard_help() {

	echo '<a href="https://www.codesigns.co.uk" target="_blank"></a>';
	echo '<p>Welcome to ';
	$website = bloginfo('name');
	echo '! </p>';
	echo '<p>Need help? Contact the developer <a href="mailto:webmaster@codesigns.co.uk">here</a> or call <a href="tel:+447948157081">07948 157081</a></p>';
}

function telephone($phone) {
	$telephone = $phone;
	$telephone_link = str_replace(' ', '', $phone );
	$telephone_link = preg_replace('/^0/', '+44', $telephone_link, 1);
	return $telephone_link;
}
function company_name() {
	$company = get_field('company_name', 'options');
	return $company;
}
add_shortcode('company_name', 'company_name');

function material_style() {
    wp_enqueue_style('material-theme', get_template_directory_uri(). '/assets/admin/admin-styles.css', '');
}
add_action('admin_enqueue_scripts', 'material_style');
add_action('login_enqueue_scripts', 'material_style');

function auto_set_license_keys() {
	if ( ! get_option( 'acf_pro_license' ) && defined( 'ACF_5_KEY' ) ) {
		$save = array(
			'key'	=> ACF_5_KEY,
			'url'	=> home_url()
		);
		$save = maybe_serialize($save);
		$save = base64_encode($save);
		update_option( 'acf_pro_license', $save );
	}
}
add_action( 'acf/init', 'auto_set_license_keys' );

function my_acf_init() {
	$map_key = get_field('google_maps_api', 'options');
	acf_update_setting('google_api_key', $map_key);
}

add_action('acf/init', 'my_acf_init');

add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
    return home_url();
}