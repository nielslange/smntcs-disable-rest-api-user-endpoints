<?php
/**
 * Plugin Name: SMNTCS Disable REST API User Endpoints
 * Plugin URI: https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints
 * Description: Disable the REST API user endpoints due to security reasons
 * Author: Niels Lange
 * Author URI: https://nielslange.com
 * Version: 1.1
 * Requires at least: 4.7
 * Tested up to: 5.1
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: smntcs-disable-rest-api-user-endpoints
 * Domain Path: /languages/
 */

// Avoid direct plugin access
if ( ! defined( 'ABSPATH' ) ) {
	die( '¯\_(ツ)_/¯' );
}

// Load text domain
add_action( 'plugins_loaded', function () {
	load_plugin_textdomain( 'smntcs-disable-rest-api-user-endpoints', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
} );

// Disable REST API user endpoints
add_filter( 'rest_endpoints', function ( $endpoints ) {
	if ( isset( $endpoints['/wp/v2/users'] ) ) {
		unset( $endpoints['/wp/v2/users'] );
	}
	if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
		unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
	}

	return $endpoints;
} );
