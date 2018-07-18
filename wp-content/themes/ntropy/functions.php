<?php
/**
* Child theme stylesheet einbinden in Abhängigkeit vom Original-Stylesheet
*/

function child_theme_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() .'/style.css' , array('parent-style'));

}
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );

// Load translation files from your child theme instead of the parent theme
function my_child_theme_locale() {
    load_child_theme_textdomain( 'wp-bootstrap-4', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_child_theme_locale' );


?>