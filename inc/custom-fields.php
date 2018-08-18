<?php 

// Custom post types function 
function create_custom_post_types(){
// Create testimonials post type
	register_post_type('portfolio',
		array(
		'labels' => array(
			'name' => __('Portfolio'),
			'singular_name' => __('Portfolio'),
			),
		'public' => true,
		'has_archive' => true,
		'show_in_nav_menus' => true,
		'rewrite' => array (
			'slug' => 'portfolio'
			),
		)
	);
}

// Hook this custom posts types function into the theme
add_action('init', 'create_custom_post_types');