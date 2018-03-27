=== SMNTCS Disable REST API User Endpoints ===

Contributors: nielslange
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QL92KESGMVT4Q
Tags: REST API, Endpoints, Security
Version: 1.0
Requires at least: 4.7
Tested up to: 4.9
License: GPL2+
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Disable the REST API user endpoints due to obscure user slugs

== Description ==

With WordPress 4.7 the REST API is part of the core. At the moment everyone has read access to the REST API. As a result of that a potential intruder can retrieve a list of all user slugs via /wp-json/wp/v2/users. This plugin disables the REST API user endpoints to obscure the user slugs.

== Installation ==

1. Upload 'smntcs-disable-rest-api-user-endpoints' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

Simple activate the plugin and you're done.

== Changelog ==

= 1.0 =
* Initial release
