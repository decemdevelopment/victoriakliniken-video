<?php

/*------------------------------------------------------------------------------------------

# Adds ACF Theme Options page to WordPress admin
------------------------------------------------------------------------------------------*/
add_action('acf/init', 'register_acf_theme_options_page');
function register_acf_theme_options_page() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}