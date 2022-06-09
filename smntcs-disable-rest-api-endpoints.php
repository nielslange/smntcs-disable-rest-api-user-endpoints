<?php
/**
 * Plugin Name: SMNTCS Disable REST API User Endpoints
 * Plugin URI: https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints
 * Description: Disable the REST API user endpoints due to security reasons.
 * Author: Niels Lange <info@nielslange.de>
 * Author URI: https://nielslange.de
 * Text Domain: smntcs-disable-rest-api-user-endpoints
 * Version: 1.9
 * Requires at least: 5.5
 * Requires PHP: 5.6
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @category   Plugin
 * @package    WordPress
 * @subpackage SMNTCS Disable REST API User Endpoints
 * @author     Niels Lange <info@nielslange.de>
 * @license    https://www.gnu.org/licenses/gpl-2.0.html
 */

// Avoid direct plugin access.
defined( 'ABSPATH' ) || exit;

/**
 * Disable REST API user endpoints.
 *
 * @param array $endpoints The original endpoints.
 * @return array The updated endpoints.
 * @since 1.0.0
 */
function smntcs_rest_endpoints( $endpoints ) {
	if ( isset( $endpoints['/wp/v2/users'] ) ) {
		unset( $endpoints['/wp/v2/users'] );
	}
	if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
		unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
	}

	return $endpoints;
}
add_filter( 'rest_endpoints', 'smntcs_rest_endpoints' );
