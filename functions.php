<?php

define( 'THEME_PATH' ,          get_template_directory()            );
//define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );

define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/sources/styles'       );
define( 'IMAGES_URL' ,          THEME_URL .    '/sources/images'       );
define( 'JS_URL' ,              THEME_URL .    '/sources/scripts'      );
//define( 'FAVICONS_URL' ,        THEME_URL .    '/sources/favicon'      );
//define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );


foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
    include_once $file;
}

add_action('wp_enqueue_scripts', 'add_scripts');

function add_scripts() {
    wp_register_style('main_stylesheet', get_template_directory_uri().'/sources/styles/style.css');
    wp_enqueue_style('main_stylesheet');
}