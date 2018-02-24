<?php

function university_files() {
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
	wp_enqueue_script( 'main-js', get_theme_file_uri( '/js/scripts-bundled.js' ), null, microtime(), true );
	wp_enqueue_style( 'main_styles', get_stylesheet_uri(), null, microtime() );
	
}

add_action( 'wp_enqueue_scripts', 'university_files' );


function university_features() {
	add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'university_features' );



?>