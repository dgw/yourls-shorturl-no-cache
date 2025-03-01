<?php
/*
Plugin Name: Caching Disabled for Redirects
Plugin URI: https://github.com/dgw/yourls-shorturl-no-cache
Description: Send cache-busting headers with shorturl redirections.
Version: 1.0
Author: dgw
Author URI: https://github.com/dgw
*/

// Copyright (c) 2024, dgw; released under the MIT License

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action( 'redirect_shorturl', 'dgw_shorturl_no_cache' );

function dgw_shorturl_no_cache( $args ) {
    yourls_no_cache_headers();
}
