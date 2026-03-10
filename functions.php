<?php
include "library/fun_page_print.php";
include "library/fun_menu.php";
include "library/fun_other.php";

add_theme_support('post-thumbnails');
add_action( 'init', 'register_my_menus' );