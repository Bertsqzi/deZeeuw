<?php
add_action( 'after_setup_theme', 'register_menus' );
function register_menus() {
  register_nav_menu( 'primary', __( 'Hoofdmenu', 'de-zeeuw-theme' ) );
}

add_theme_support( 'post-thumbnails' );


// register_sidebar( array(
//     'id'          => 'footer-widget',
//     'name'        => __( 'Footer Widget', $text_domain ),
//     'description' => __( 'This sidebar is located above the age logo.', $text_domain ),
// ) );

