<?php

function alfie_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on alfie, use a find and replace
		* to change 'alfie' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'alfie', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'alfie' ),
		)
	);

	function add_menu_class($ulclass)
{
    return preg_replace('/<a/', '<a class="main-menu__link"', $ulclass, -1);
}
add_filter('wp_nav_menu', 'add_menu_class');

}
add_action( 'after_setup_theme', 'alfie_setup' );


/**
 * Enqueue scripts and styles.
 */
function alfie_scripts() {
	wp_register_style('tailwindOutput', get_template_directory_uri() . '/dist/output.css', array(), 1, 'all');
    wp_enqueue_style('tailwindOutput'); 

    wp_register_style('tailwindInput', get_template_directory_uri() . '/src/input.css', array(), 1, 'all');
    wp_enqueue_style('tailwindInput'); 

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js', array(), null, true);

    wp_register_script('index', get_template_directory_uri() . '/js/index.js',  array(), 1, 1, 1);
    wp_enqueue_script('index');
	
	add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

}
add_action( 'wp_enqueue_scripts', 'alfie_scripts' );