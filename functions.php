<?php
/**
 * humoraf functions and definitions
 *
 * @package humoraf
 */

if ( ! function_exists( 'humoraf_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function humoraf_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on humoraf, use a find and replace
		 * to change 'humoraf' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'humoraf', get_template_directory() . '/languages' );

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
		 *
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'top_menu' => esc_html__( 'Primary', 'humoraf' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'humoraf_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * 
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

function humoraf_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'humoraf_content_width', 640 );
}
add_action( 'after_setup_theme', 'humoraf_content_width', 0 );

add_action( 'after_setup_theme', 'humoraf_setup' );
add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );

function style_theme() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'google_fonts', get_template_directory_uri() . '/fonts/google_fonts.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/fontawesome-free-5.9.0-web/css/all.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'mdb', get_template_directory_uri() . '/css/mdb.min.css' );
	wp_enqueue_style( 'compiled-4.8.1', get_template_directory_uri() . '/css/compiled-4.8.1.min.css' );
	wp_enqueue_style( 'my_style', get_template_directory_uri() . '/css/style.css' );
};

function scripts_theme() {
	wp_enqueue_script('jquery-3.4.1', get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
	wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('mdb', get_template_directory_uri() . '/js/mdb.min.jss');
	wp_enqueue_script('compiled-4.8.1', get_template_directory_uri() . '/js/compiled-4.8.1.min.js');
};










/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

