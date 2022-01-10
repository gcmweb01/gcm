<?php

add_action( 'wp_enqueue_scripts', 'basel_child_enqueue_styles', 1000 );

function basel_child_enqueue_styles() {
	$version = basel_get_theme_info( 'Version' );
	
	if( basel_get_opt( 'minified_css' ) ) {
		wp_enqueue_style( 'basel-style', get_template_directory_uri() . '/style.min.css', array('bootstrap'), $version );
	} else {
		wp_enqueue_style( 'basel-style', get_template_directory_uri() . '/style.css', array('bootstrap'), $version );
	}
	
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('bootstrap'), $version );
}


add_action( 'wp_enqueue_scripts', 'additional_stylesheets', 1000);

function additional_stylesheets() {
	$version = basel_get_theme_info( 'Version' ); 
		wp_enqueue_style('custom_style', get_stylesheet_directory_uri(). '/custom_style.css', array('bootstrap'), $version);
		wp_enqueue_style('media_query', get_stylesheet_directory_uri(). '/media_query.css', array('bootstrap'), $version);
		// wp_enqueue_style('custom_js'), get_stylesheet_directory_uri().'/custom_js.js', $version);


	
}