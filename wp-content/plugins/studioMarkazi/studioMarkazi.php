<?php
/*
Plugin Name: StudioMarkazi
Description: This is a Plugin for developing Lolagar Cafe backend logic
Version: 1.0
Author: StudioMarkazi
Text Domain:       studioMarkazi
Domain Path:       /languages
*/


/*
Including ACF into hezardasht plugin
*/

// Define path and URL to the ACF plugin
define( 'MY_ACF_PATH', plugin_dir_path( __FILE__ ) . 'includes/acf/' );
define( 'MY_ACF_URL', plugin_dir_url( __FILE__ ) . 'includes/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', '__return_false');

// When including the PRO plugin, hide the ACF Updates menu
add_filter('acf/settings/show_updates', '__return_false', 100);



class stmkz_INIT {

    private function register_all_post_types() {
    }

    public function init() {

    }
}

// Importing The CPT Activation file
require_once plugin_dir_path( __FILE__ ) . '/post-types.php';
register_activation_hook( __FILE__, 'stmkz_rewrite_flush' );

require_once plugin_dir_path( __FILE__ ) . 'includes/custom-fields.php';

