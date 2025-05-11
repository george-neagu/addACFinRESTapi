=== Add ACF in REST API ===
Contributors: George Neagu
Tags: acf, rest api, json, custom fields
Requires PHP: 7.4
Tested up to: 6.8
Stable tag: 1.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds Advanced Custom Fields (ACF) data to the WordPress REST API responses for all public post types.

== Description ==

This plugin exposes ACF fields under the `acf` key in REST API responses for all public post types that support the REST API.

It allows developers building decoupled or headless frontends (e.g. using React, Vue, etc.) to access ACF data without additional custom code.

Features:
- Works with all public post types (`post`, `page`, and custom ones)
- Read-only access to ACF fields via the REST API
- Safe fallback with admin notice if ACF is not installed or active
- Clean, extensible codebase

⚠️ This plugin has only been tested with the **free version** of Advanced Custom Fields. Compatibility with ACF Pro is expected, but not guaranteed.

== Installation ==

1. Upload the plugin to the `/wp-content/plugins/` directory or install it via the WordPress Plugin Directory.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Ensure that the Advanced Custom Fields plugin is installed and active.
4. Make REST API requests to your post types (e.g. `/wp-json/wp/v2/posts`) and look for the `acf` field in the response.

== Frequently Asked Questions ==

= Does this plugin allow updating ACF fields through the API? =
No. This plugin provides **read-only** access to ACF fields.

= Does it support custom post types? =
Yes, it works with all public post types that have REST API support enabled.

= What if ACF is not active? =
An admin notice will be displayed, and the plugin will not register anything in the API.


== Changelog ==

= 1.1 =
* Support for all public post types with REST API enabled
* Added admin notice if ACF is missing
* Cleanup and performance improvements

= 1.0 =
* Initial release with support for `post` only

== Upgrade Notice ==

= 1.1 =
Upgrade to include support for all post types and improved admin messaging.
