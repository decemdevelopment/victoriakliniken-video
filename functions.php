<?php
/**
 * victoriakliniken_video functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package victoriakliniken_video
 */

if ( ! function_exists( 'victoriakliniken_video_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function victoriakliniken_video_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on victoriakliniken_video, use a find and replace
	 * to change 'victoriakliniken_video' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'victoriakliniken_video', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'victoriakliniken_video' ),
		'menu-2' => esc_html__( 'Secundary', 'victoriakliniken_video' ),
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
	add_theme_support( 'custom-background', apply_filters( 'victoriakliniken_video_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'victoriakliniken_video_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function victoriakliniken_video_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'victoriakliniken_video_content_width', 640 );
}
add_action( 'after_setup_theme', 'victoriakliniken_video_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function victoriakliniken_video_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'victoriakliniken_video' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'victoriakliniken_video' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'victoriakliniken_video_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function victoriakliniken_video_scripts() {
	if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'popartcode.space') {
		$version_date = date('Y.m.d.hms');
	} else {
		$version_date = '';
	}

	wp_enqueue_style( 'victoriakliniken_video-plugins-css', get_template_directory_uri() . '/dist/plugins.min.css', array(), $version_date );

	wp_enqueue_style( 'victoriakliniken_video-style', get_stylesheet_uri(), array(), $version_date );

	wp_enqueue_script( 'victoriakliniken_video-site-js', get_template_directory_uri() . '/dist/site.min.js', array(), $version_date, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'victoriakliniken_video_scripts' );

/**
 * Custom theme functions for this theme.
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/theme-hooks.php';

/**
 * Load WooCommerce compatibility file.
 */
//require get_template_directory() . '/inc/woocommerce.php';

/**
 * Trims type attribute for w3c Validator
 * Substring type="text/javascript" -> ''
 * Substring type="css/stylesheet" -> type="stylesheet"
 */

add_action('wp_loaded', 'output_buffer_start');
function output_buffer_start() { 
    ob_start("output_callback"); 
}

add_action('shutdown', 'output_buffer_end');
function output_buffer_end() { 
	if (ob_get_contents()) ob_end_clean();
}

function output_callback($buffer) {
    return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
}

// Disable RSS feed, JSON API and prevent User Enumeration Attack
require('security.php');

/*------------------------------------------------------------------------------------------
     # CUSTOM POST TYPE
 ------------------------------------------------------------------------------------------*/
 function victoriakliniken_video_post_type_name() {
    $singular = 'Video';
    $plural = 'Videos';
    $slug = str_replace( ' ', '_', strtolower( $singular ) );

    $labels = array(
        'name' 			      => __( $plural, 'victoriakliniken_video' ),
        'singular_name' 	  => __( $singular, 'victoriakliniken_video' ),
        'add_new' 		      => _x( 'Add New', 'victoriakliniken_video', 'victoriakliniken_video' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'victoriakliniken_video' ),
        'edit'		          => __( 'Edit', 'victoriakliniken_video' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'victoriakliniken_video' ),
        'new_item'	          => __( 'New ' . $singular, 'victoriakliniken_video' ),
        'view' 			      => __( 'View ' . $singular, 'victoriakliniken_video' ),
        'view_item' 		  => __( 'View ' . $singular, 'victoriakliniken_video' ),
        'search_term'   	  => __( 'Search ' . $plural, 'victoriakliniken_video' ),
        'parent' 		      => __( 'Parent ' . $singular, 'victoriakliniken_video' ),
        'not_found'           => __( 'No ' . $plural .' found', 'victoriakliniken_video' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'victoriakliniken_video' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => 'dashicons-admin-post',
        'supports'            => array( 'title', 'thumbnail', 'editor' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'victoriakliniken_video_post_type_name' );

/*------------------------------------------------------------------------------------------

# Exclude node_modules and .git folders from All In One Exports
------------------------------------------------------------------------------------------*/

add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {
    $exclude_filters[] = 'themes/astra-child/node_modules';
    $exclude_filters[] = 'themes/astra-child/.git';
    return $exclude_filters;
});
