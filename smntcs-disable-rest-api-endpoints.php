<?php
/**
 * Plugin Name: SMNTCS Disable REST API User Endpoints
 * Plugin URI: https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints
 * Description: Disable the REST API user endpoints due to security reasons.
 * Author: Niels Lange <info@nielslange.de>
 * Author URI: https://nielslange.de
 * Text Domain: smntcs-disable-rest-api-user-endpoints
 * Domain Path: /languages/
 * Version: 1.4
 * Stable Tag: 1.4
 * Requires at least: 4.7
 * Requires PHP: 5.6
 * Tested up to: 5.4
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 *
 * @category   Plugin
 * @package    WordPress
 * @subpackage SMNTCS Disable REST API User Endpoints
 * @author     Niels Lange <info@nielslange.de>
 * @license    https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html GNU General Public License, version 2
 */

/**
 * Avoid direct plugin access
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '¯\_(ツ)_/¯' );
}

/**
 * Load text domain
 *
 * @return void
 * @since 1.0.0
 */
function smntcsdraue_plugins_loaded() {
	load_plugin_textdomain( 'smntcs-disable-rest-api-user-endpoints', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'smntcsdraue_plugins_loaded' );

/**
 * Disable REST API user endpoints.
 *
 * @param array $endpoints The original endpoints.
 * @return array $endpoints The updated endpoints.
 * @since 1.0.0
 */
function smntcsdraue_rest_endpoints( $endpoints ) {
	if ( isset( $endpoints['/wp/v2/users'] ) ) {
		unset( $endpoints['/wp/v2/users'] );
	}
	if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
		unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
	}

	return $endpoints;
}
add_filter( 'rest_endpoints', 'smntcsdraue_rest_endpoints' );
