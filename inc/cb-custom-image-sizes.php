<?php
/**
 * Custom Image Crop Sizes
 *
 * @package understrap
 */

add_action( 'after_setup_theme', 'aw_custom_add_image_sizes' );
function aw_custom_add_image_sizes() {
	add_image_size( 'xxsmall', 300, 9999 ); // 300px wide unlimited height
	add_image_size( 'xsmall', 450, 9999 ); // 450px wide unlimited height
	add_image_size( 'small', 576, 9999 ); // 576px wide unlimited height
	add_image_size( 'medium', 768, 9999 ); // 768px wide unlimited height
	add_image_size( 'large', 992, 9999 ); // 992px wide unlimited height
	add_image_size( 'xlarge', 1200, 9999 ); // 1200px wide unlimited height
	add_image_size( 'xxlarge', 2000, 9999 ); // 2000px wide unlimited height
	add_image_size( 'portfolio_full', 9999, 900 ); // 900px tall unlimited width
}

add_filter( 'image_size_names_choose', 'aw_custom_add_image_size_names' );
function aw_custom_add_image_size_names( $sizes ) {
	return array_merge( $sizes, array(
		'xxsmall' => __( '2X Extra Small' ),
		'xsmall' => __( 'Extra Small' ),
		'small' => __( 'Small' ),
		'medium' => __( 'Medium' ),
		'large' => __( 'Large' ),
		'xlarge' => __( 'Extra Large' ),
		'xxlarge' => __( '2X Extra Large' ),
		'portfolio_full' => __( 'Portfolio Full Size' ),
	) );
}	