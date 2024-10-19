=== SMNTCS Disable REST API User Endpoints ===

Contributors:       nielslange
Tags:               REST API, Endpoints, Security
Stable tag:         2.3
Tested up to:       6.6
Requires PHP:       5.6
Requires at least:  5.0
License:            GPL v2 or later
License URI:        https://www.gnu.org/licenses/gpl-2.0.html

Disable the REST API user endpoints due to obscure user slugs.

== Description ==

With WordPress 4.7 the REST API is part of the core. At the moment everyone has read access to the REST API. As a result of that a potential intruder can retrieve a list of all user slugs via `/wp-json/wp/v2/users`. This plugin disables the REST API user endpoints to obscure the user slugs.

== Contribute ==

Contributions are more than welcome. Simply head over to [Github](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/) and open an issue or a pull request.

== Installation ==

1. Upload `smntcs-disable-rest-api-user-endpoints` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the `Plugins` menu in WordPress.

== Screenshots ==

Simple activate the plugin and you're done.

== Changelog ==

= 2.3 (2024.10.19) =

- Test up to WordPress 6.6

= 2.2 (2023.10.15) =

- Test up to WordPress 6.4
- Convert code to OOP

= 2.1 (2023.03.11) =

- Test up to WordPress 6.2

= 2.0 (2022.12.03) =

- Test up to WordPress 6.1

= 1.9 (2022.06.09) =

- Test up to WordPress 6.0

= 1.8 (2021.12.31) =

- Test up to WordPress 5.8

= 1.7 (2021.05.01) =

- [Add build tools](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/21)
- [Add GitHub Actions](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/23)
- [Test up to WordPress 5.7](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/25)

= 1.6 (2021.01.08) =

- Test up to WordPress 5.6

= 1.5 (2020.05.10) =

- [Remove load_plugin_textdomain()](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/7)

= 1.4 (2020.05.10) =

- [Update plugin header](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/5)
- Test up to WordPress 5.4

= 1.3 (2019.12.26) =

- [Add build tools](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/3)
- [Test up to 5.3](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/2)

= 1.2 (2019.04.05) =

- Refactor based on PHPCS and WPCS

= 1.1 (2019.02.20) =

- Test up to WordPress 5.1

= 1.0 (2018.03.27) =

- Initial release
