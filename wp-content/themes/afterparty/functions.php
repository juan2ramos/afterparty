<?php
/*
Description: WP Functions - Theme init
Theme: After Party Bogotá
*/
//add image in posts
add_theme_support('post-thumbnails');

define('themeDir', get_template_directory() . '/');
define('themeDirUri', get_template_directory_uri());

/* Jquery + Main */
add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", false, '2.1.3' , true);
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'main', themeDirUri . '/assets/js/main.js', '', '', true );
}
/* remove emoji comments */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );