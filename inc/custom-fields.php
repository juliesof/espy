<?php 

// Custom post types function 
function create_custom_post_types(){
// Create testimonials post type
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