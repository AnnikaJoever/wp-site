<?php

function custom_theme_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header', array('flex-width' => true, 'width' => 1500, 'flex-height' => true, 'height' => 500));
}
add_action('after_setup_theme', 'custom_theme_setup');

function register_my_menus() {
  register_nav_menus(
    array(
      'header' => __( 'Header' ),
      'tuotteet' => __( 'Tuotteet' ),
      'ruokalistat' => __( 'Ruokalistat' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function lisaa_kirjasto() {
  wp_enqueue_script( 
      'custom-script',
      get_stylesheet_directory_uri() . '/js/app.js',
      NULL,
      'all'
  );
}

add_action( 'wp_enqueue_scripts', 'lisaa_kirjasto' );

?>