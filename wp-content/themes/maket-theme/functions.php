<?php
// --- theme style ---
add_action( 'wp_enqueue_scripts', 'maket_styles' );
function maket_styles() {
	// --- Основной файл стилей темы ---
	wp_enqueue_style( 'maket-style', get_stylesheet_uri() );
	// --- Слайдер ---
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css');
	// --- Анимация ---
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
	// --- Bootstrap ---
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
	// --- Custom styles for this template ---
	wp_enqueue_style( 'maket-custom-style', get_template_directory_uri() . '/css/style.css');
}

// --- Jquery ---
add_action( 'wp_enqueue_scripts', 'jquery' );
function jquery() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}

// --- theme scripts ---
add_action( 'wp_enqueue_scripts', 'maket_scripts' );
function maket_scripts() {
  	wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.min.js', 'jquery', null, true );
  	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', 'jquery', null, true );
  	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', null, null, true );
  	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', null, null, true );
}