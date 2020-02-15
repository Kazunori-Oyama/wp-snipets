<?php
// load styles and scripts
function themeInit (){
    wp_enqueue_style( 'style-css', get_stylesheet_uri(  ), array(), false, false );
    wp_enqueue_script( 'jquery3-4-1', get_template_directory_uri( ).'/asset/js/jQuery3-4-1.min', array(), '', false );
    wp_enqueue_script( 'common-js', get_template_directory_uri( ).'/asset/js/common.js', array(), '', false );
}
 add_action('wp_enqueue_scripts', 'themeInit' );

 function menuInit() {
    register_nav_menu( 'mainNav', 'mainNav' );
    register_nav_menu( 'secondNav', 'secondNav' );
    register_nav_menu( 'thirdNav', 'thirdNav' );
  }

  
  add_action( 'after_setup_theme', 'menuInit' );