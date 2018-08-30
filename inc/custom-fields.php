<?php 

// Custom post types function 
function create_custom_post_types(){
// Create gallery/portfolio post type
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

// Create post type for block template
	register_post_type('custom',
		array(
		'labels' => array(
			'name' => __('Custom Template'),
			'singular_name' => __('Custom Template'),
			),
		'public' => true,
		'has_archive' => true,
		'show_in_nav_menus' => true,
		'rewrite' => false,
		)
	);

// Create services post type
	register_post_type('services',
		array(
		'labels' => array(
			'name' => __('Services'),
			'singular_name' => __('Service'),
			),
		'public' => true,
		'has_archive' => true,
		'show_in_nav_menus' => true,
		'rewrite' => false,
		)
	);
}

// Hook this custom posts types function into the theme
add_action('init', 'create_custom_post_types');