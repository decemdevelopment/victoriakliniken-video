<?php 

//REMOVE REST API
add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
    }
    return $result;
});

// REMOVE RSSs
function wpb_disable_feed() {
 wp_die( __('No feed available, please visit our '. get_bloginfo('url') ),"Info", 200);
}

add_action('do_feed', 'wpb_disable_feed', 1);
add_action('do_feed_rdf', 'wpb_disable_feed', 1);
add_action('do_feed_rss', 'wpb_disable_feed', 1);
add_action('do_feed_rss2', 'wpb_disable_feed', 1);
add_action('do_feed_atom', 'wpb_disable_feed', 1);
add_action('do_feed_rss2_comments', 'wpb_disable_feed', 1);
add_action('do_feed_atom_comments', 'wpb_disable_feed', 1);

//PREVENT WP JSON API User Enumeration
add_filter( 'rest_endpoints', function( $endpoints ){
     if ( isset( $endpoints['/wp/v2/users'] ) ) {
         unset( $endpoints['/wp/v2/users'] );
     }
     if ( isset( $endpoints['/wp/v2/users/(?P[\d]+)'] ) ) {
         unset( $endpoints['/wp/v2/users/(?P[\d]+)'] );
     }
     return $endpoints;
});

//PREVENT /author=
if (!is_admin() && isset($_REQUEST['author'])) {     
    wp_die( 'Author archives have been disabled.', "Info", 200 ); 
}

?>