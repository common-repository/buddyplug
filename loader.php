<?php
/*
Plugin Name: BuddyPlug
Plugin URI: http://github.com/modemlooper/BuddyPlug
Description: Quickly and easily access and install BuddyPress plugins from WordPress.org, right from your dashboard.
Version: 0.3
Author: modemlooper
Author URI: http://twitter.com/modemlooper
License: GPL2
*/



function buddyplug_init() {

	require( dirname( __FILE__) . '/include/bpp-class.php' );

    if ( get_bloginfo( 'version' ) >= 3.5 ) {
        $bpp_buddypress_plugins = new BPP_BuddyPress_Plugins();
    }

}
add_action( 'bp_include', 'buddyplug_init' );

/**
 * Load translations for this plugin
 */
function buddyplug_load_translations() {
	load_plugin_textdomain( 'buddyplug', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'buddyplug_load_translations', 1 );