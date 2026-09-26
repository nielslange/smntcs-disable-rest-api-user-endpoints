=== SMNTCS Disable REST API User Endpoints ===

Contributors:       nielslange
Tags:               rest api, users, security, user enumeration, privacy
Requires at least:  5.5
Tested up to:       7.1
Requires PHP:       5.6
Stable tag:         2.6
License:            GPL v2 or later
License URI:        https://www.gnu.org/licenses/gpl-2.0.html

Hides the list of user accounts that the WordPress REST API shows to visitors who are not logged in, which helps prevent user enumeration.

== Description ==

By default, anyone can request `/wp-json/wp/v2/users` on a WordPress site and get a list of every author's username slug. Attackers use that list to guess logins.

SMNTCS Disable REST API User Endpoints removes the user endpoints from the REST API for visitors who are not logged in. Logged-in users and everything else in the REST API keep working, including the block editor.

There are no settings. Activate the plugin and the user endpoints are gone.

== Contribute ==

Contributions are more than welcome. Simply head over to [GitHub](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/) and open an issue or a pull request.

== Installation ==

1. Upload `smntcs-disable-rest-api-user-endpoints` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the `Plugins` menu in WordPress.

== Screenshots ==

Simply activate the plugin and you're done.

== Changelog ==

= 2.6 (2026.09.26) =

- Test up to WordPress 7.1
- Update development dependencies and GitHub Actions

= 2.5 (2026.08.14) =

- [Keep REST API user endpoints available for logged-in users](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/31) ([#33](https://github.com/nielslange/smntcs-disable-rest-api-user-endpoints/issues/33))
- Test up to WordPress 7.0

= 2.4 (2024.12.31) =

- Test up to WordPress 6.7

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
