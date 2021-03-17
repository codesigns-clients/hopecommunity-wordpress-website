<?php

function base_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'base_woocommerce_setup' );


// Set how many products to show on each page
function base_woocommerce_products_per_page() {
	return 20; // SHOWS 20 per page
}
add_filter( 'loop_shop_per_page', 'base_woocommerce_products_per_page' );

// How many columns the products are split into
function base_woocommerce_loop_columns() {
	return 4;
}
add_filter( 'loop_shop_columns', 'base_woocommerce_loop_columns' );


// Product page thumbnails columns
function base_woocommerce_thumbnail_columns() {
	return 4;
}
add_filter( 'woocommerce_product_thumbnails_columns', 'base_woocommerce_thumbnail_columns' );

// Product Page related items
function base_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 4,
		'columns'        => 4,
	);
	$args = wp_parse_args( $defaults, $args );
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'base_woocommerce_related_products_args' );
