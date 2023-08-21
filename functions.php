<?php 

function load_scripts(){
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array(), '4.6.0', true );
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), '4.6.0', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri() . './css/template.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


add_theme_support( 'post-thumbnails' );

function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css' );
  }
  
  add_action( 'wp_enqueue_scripts', 'enqueue_load_fa');

  function mytheme_custom_excerpt_length( $length ) {
    return 24;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


add_filter( 'excerpt_more', 'wpse174028_change_excerpt_more' );
function wpse174028_change_excerpt_more( $excerpt_more ) {
    return '...';
}   

 

