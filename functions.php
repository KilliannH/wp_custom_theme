<?php
function add_theme_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendors/bootstrap/css/bootstrap.css' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendors/jquery/jquery-3.4.1.min.js' );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/vendors/popper/popper.min.js' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendors/bootstrap/js/bootstrap.js' );
	wp_enqueue_script( 'howler', get_template_directory_uri() . '/vendors/howler/howler.min.js' );

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js');
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );