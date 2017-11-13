<?php

function wpm_enqueue_styles() {

wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );

function blue_plus_styles() {
    
    wp_enqueue_style( 'parent-style', get_template_directory_uri() .'/style.css' );
    wp_enqueue_style( 'Child-style', get_stylesheet_directory_uri() . '/assets/css/bpstyle.css');
}
add_action( 'wp_enqueue_scripts', 'blue_plus_styles', 20 );

function blue_plus_script() {
    
    wp_enqueue_script('svg4everybody', get_stylesheet_directory_uri() . '/assets/js/polyfill/svg4everybody/svg4everybody.legacy.min.js', '2.1.9');
}
add_action( 'wp_enqueue_scripts', 'blue_plus_script', 5 );