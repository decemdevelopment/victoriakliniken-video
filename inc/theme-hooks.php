<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package victoriakliniken_video
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function victoriakliniken_video_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'victoriakliniken_video_body_classes' );


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function victoriakliniken_video_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'victoriakliniken_video_pingback_header' );


/**
 * Modify WP Login
 */
// change error message
function victoriakliniken_video_error_message() {
	return 'Wrong username or password.';
}
add_filter( 'login_errors', 'victoriakliniken_video_error_message' );

// remove error shaking
function victoriakliniken_video_remove_login_shake() {
	remove_action( 'login_head', 'wp_shake_js', 12 );
}
add_action( 'login_head', 'victoriakliniken_video_remove_login_shake' );

// add custom stylesheet
function victoriakliniken_video_add_login_styles() {
	wp_enqueue_style('victoriakliniken_video-login-style', get_template_directory_uri() . '/assets/config/customize-login/login.css' );
}
add_action( 'login_enqueue_scripts', 'victoriakliniken_video_add_login_styles' );

// add login title
function victoriakliniken_video_add_login_title() {
	echo '<span class="login-title">victoriakliniken_video login</span>';
}
add_action( 'login_form', 'victoriakliniken_video_add_login_title' );

// change logo url
function victoriakliniken_video_loginlogo_url($url) {
	$url = esc_url( home_url( '/' ) );
	return $url;
}
add_filter( 'login_headerurl', 'victoriakliniken_video_loginlogo_url' );


/**
 * Plugin dependencies
 */
function victoriakliniken_video_dependencies() {
	if( ! function_exists('get_field') ) {
		echo '<div class="error"><p>' . __( 'Warning: The theme needs ACF Pro plugin to function', 'victoriakliniken_video' ) . '</p></div>';
	}
}
add_action( 'admin_notices', 'victoriakliniken_video_dependencies' );
