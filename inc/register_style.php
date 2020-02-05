<?php

add_action('wp_enqueue_scripts', 'add_nav_styles');

function add_nav_styles() {
    wp_register_style('main_style', get_template_directory_uri() . '/sources/styles/style.css');
    wp_enqueue_style('main_style', get_template_directory_uri() . '/sources/styles/style.css');

    wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Rubik:300,400,700&display=swap');
    wp_enqueue_style('googleFonts');
}

?>