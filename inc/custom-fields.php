<?php 

// Custom post types function 
function create_custom_post_types(){
// Create gallery post type
	register_post_type('galleries',
		array(
		'labels' => array(
			'name' => __('Galleries'),
			'singular_name' => __('Gallery'),
			),
		'public' => true,
		'has_archive' => true,
		'show_in_nav_menus' => true,
		'rewrite' => array (
			'slug' => 'galleries'
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