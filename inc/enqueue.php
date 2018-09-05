<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		
		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );

		// creative custom styling and scripts
		wp_enqueue_style( 'creative-styles',
			get_stylesheet_directory_uri() . '/css/style-creative.css', array(), 1 );

		// enqueue animation library AOS

		// register js file with the AOS init function
		wp_register_script('aosInit', get_template_directory_uri() . '/js/aosInit.js', array(), null, 1);

		// enqueue the AOS css stylesheet
		wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);

		// enqueue the AOS javascript file
		wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', array( 'aosInit' ), null, true);

		wp_enqueue_script( 'jquery');

		wp_enqueue_script( 'creative-js', get_template_directory_uri() . '/js/creative.js', array('jquery'), 1 );

		wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '3.0.6' );
		
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), $theme_version, true);
		
		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.min.js');
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );