<?php
/**
 * Plugin Name: SMNTCS Disable REST API User Endpoints
 * Plugin URI: https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints
 * Description: Disable the REST API user endpoints due to security reasons
 * Author: Niels Lange <info@nielslange.de>
 * Author URI: https://nielslange.de
 * Text Domain: smntcs-disable-rest-api-user-endpoints
 * Domain Path: /languages/
 * Version: 1.2
 * Requires at least: 4.7
 * Requires PHP: 5.6
 * Tested up to: 5.1
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @category   Plugin
 * @package    WordPress
 * @subpackage SMNTCS Disable REST API User Endpoints
 * @author     Niels Lange <info@nielslange.de>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 */

/**
 * Avoid direct plugin access
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '¯\_(ツ)_/¯' );
}

/**
 * Load text domain
 */
add_action(
	'plugins_loaded',
	function () {
		load_plugin_textdomain( 'smntcs-disable-rest-api-user-endpoints', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}
);

/**
 * Disable REST API user endpoints
 */
add_filter(
	'rest_endpoints',
	function ( $endpoints ) {
		if ( isset( $endpoints['/wp/v2/users'] ) ) {
			unset( $endpoints['/wp/v2/users'] );
		}
		if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
			unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
		}

		return $endpoints;
	}
);
