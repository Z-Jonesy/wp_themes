<?php
/**
 * Created by PhpStorm.
 * User: 1022699
 * Date: 2018. 10. 16.
 * Time: 16:27
 */


/* CONSTANTS */
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES',  THEMEROOT . '/img');
define('JS', THEMEROOT . '/js');

/* THEME SETUP */
 if ( ! function_exists('tuts_theme_setup')) {
    function tuts_theme_setup()
    {
        $lang_dir = THEMEROOT . '/languages';
        load_theme_textdomain('tuts', $lang_dir);

        /* add support for automatic feed links and thumbnails */
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');

        /* Register nav menus */
        register_nav_menus( array(
            'main-menu' => __( 'Main Menu', 'tuts' )
        ));
    }

        add_action( 'after_setup_theme', 'tuts_theme_setup' );

}

?>