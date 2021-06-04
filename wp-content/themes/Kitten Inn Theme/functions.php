<?php

// theme support
add_theme_support('woocommerce');

// linking custom style sheets

function custom_theme_assets() {
    wp_enqueue_style('kitten_inn_stylesheet', get_stylesheet_uri());
    wp_register_script('kiiten-inn-js-file', get_template_directory_uri() . '/js/script.js', false, null, true);
    wp_enqueue_script('kiiten-inn-js-file');
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');

// register nav menu
register_nav_menus( [ 'primary' => __( 'Primary Menu' )]);