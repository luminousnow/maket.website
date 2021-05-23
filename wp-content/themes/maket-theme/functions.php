<?php
// --- theme style ---
add_action( 'wp_enqueue_scripts', 'maket_styles' );
function maket_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

// --- theme scripts ---
add_action( 'wp_enqueue_scripts', 'maket_scripts' );
function maket_scripts() {
  	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
