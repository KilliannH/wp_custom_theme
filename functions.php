<?php
function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js');
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );