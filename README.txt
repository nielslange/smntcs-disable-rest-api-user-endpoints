=== SMNTCS Disable REST API User Endpoints ===

Contributors: nielslange
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QL92KESGMVT4Q
Tags: REST API, Endpoints, Security
Version: 1.5
Stable Tag: 1.5
Requires at least: 4.6
Tested up to: 5.4
License: GPLv2
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html

Disable the REST API user endpoints due to obscure user slugs.

== Description ==

With WordPress 4.7 the REST API is part of the core. At the moment everyone has read access to the REST API. As a result of that a potential intruder can retrieve a list of all user slugs via /wp-json/wp/v2/users. This plugin disables the REST API user endpoints to obscure the user slugs.

== Installation ==

1. Upload `smntcs-disable-rest-api-user-endpoints` to the `/wp-content/plugins/` directory
2. Activate the plugin through the `Plugins` menu in WordPress

== Screenshots ==

Simple activate the plugin and you're done.

== Changelog ==

= 1.5 =
* [Remove load_plugin_textdomain()](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/7)

= 1.4 =
* [Update plugin header](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/5)
* Test up to 5.4

= 1.3 =
* [Add build tools](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/3)
* [Test up to 5.3](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/2)

= 1.2 =
* Refactor based on PHPCS and WPCS

= 1.1 =
* Test up to 5.1

= 1.0 =
* Initial release
