<?php
/**
 * Plugin Name:           SMNTCS Disable REST API User Endpoints
 * Plugin URI:            https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints
 * Description:           Disable the REST API user endpoints due to security reasons.
 * Author:                Niels Lange
 * Author URI:            https://nielslange.de
 * Text Domain:           smntcs-disable-rest-api-user-endpoints
 * Version:               2.0
 * Requires PHP:          5.6
 * Requires at least:     5.5
 * License:               GPL v2 or later
 * License URI:           https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package SMNTCS_Disable_REST_API_User_Endpoints
 */

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
