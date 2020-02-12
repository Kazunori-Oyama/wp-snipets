<?php
function themeInit (){
    wp_enqueue_style( 'style-css', get_stylesheet_uri(  ), array(), false, false );
}
 add_action('wp_enqueue_scripts', 'themeInit' );

 function menuInit() {
    register_nav_menu( 'mainNav', 'mainNav' );
    register_nav_menu( 'secondNav', 'secondNav' );
    register_nav_menu( 'thirdNav', 'thirdNav' );
  }

  
  add_action( 'after_setup_theme', 'menuInit' );