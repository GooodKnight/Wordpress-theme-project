<?php
  function register_my_menus() {
      register_nav_menus(
        [
          'header-left-menu' => __( 'Header Left Menu' ),
          'header-right-menu' => __( 'Header Right Menu' ),
          'main-menu' => __( 'Main Menu' ),
          'footer-middle-menu' => __( 'Footer Middle Menu' )
        ]
      );
    }

  function footer_middle_menu() {
    $menu = wp_nav_menu( array( 'theme_location' => 'footer-middle-menu', 'echo' => false  ) );
    return $menu;
  }

  function main_menu() {
    $menu =  wp_nav_menu( array( 'theme_location' => 'main-menu', 'echo' => false ) );
    return $menu;
  }

  function header_right_menu() {
    $menu =  wp_nav_menu( array( 'theme_location' => 'header-right-menu', 'container' => false, 'echo' => false ) );
    return $menu;
  }

  function header_left_menu() {
    $menu =  wp_nav_menu( array( 'theme_location' => 'header-left-menu' ) );
    return $menu;
  }
?>