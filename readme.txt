=== Now-Reading Admin Bar Menu ===
Contributors: manzabar
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=manzabar%40gmail%2ecom&lc=US&item_name=Now%2dReading%20Admin%20Bar%20Menu&item_number=wpextend%2dmlmnr&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: adminbar, now-reading
Requires at least: 3.1
Tested up to: 4.2.1
Stable tag: 0.2.5

Adds the Now-Reading menu links to the admin bar introduced in WordPress 3.1

== Description ==

With the introduction of the admin bar in WordPress 3.1, I wanted to have the links to the Now-Reading Reloaded's various pages up on that bar. Since Ben has stated on his site that he is no longer actively developing the plugin, I decided to write this "mini-plugin" to add the links.

== Special Thanks ==

* Ben Gunnink: author of [Now Reading Reloaded plugin](http://heliologue.com/projects/now-reading-reloaded/)
* EAMann: wrote the [answer at WordPress.SE](http://wordpress.stackexchange.com/questions/4998/is-the-new-wordpress-3-1-admin-bar-pluggable-and-how-can-i-extend-it/5005#5005 "plugin development - Is the new WordPress 3.1 admin bar pluggable and how can I extend it? - WordPress - Stack Exchange") on which this plugin is based.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `mlm-nrAdminBar`  to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Do I have to install Now-Reading Reloaded too? =

Yes. Now-Reading Admin Bar Menu (MLM) does not include any of the functionality of Now-Reading Reloaded. It simply adds the same backend menu links to the admin bar introduced in WordPress 3.1.

= Will these links show up if I don't have Now-Reading Reloaded plugin activated? =
While I've not actually tested (this is version 0 after all), the links should not show if Now-Reading Reloaded is not installed & active. This plugin checks for the `nr_check_versions` function from Now-Reading Reloaded before it attempts to generate the admin bar menu.

== Screenshots ==

1. Display Admin Bar links

== Changelog ==
= 0.2.5 =
* Tested and working with WordPress 4.1.1.
= 0.2.4 =
* Tested and working with WordPress 4.0.
= 0.2.3 =
* I've been forgetful about updating the tested up to version, but I've not had any problems using this plugin with WordPress 3.8.
= 0.2.2 =
* Updating the forgotten version/stable version tags after committing 0.2.1.
= 0.2.1 =
* Fixed typo in the Plugin URL
= 0.2.0 =
* Added a submenu (off of View Library) to display/link to those books you are currently reading.
= 0.1.0 =
* Added a link to view your library from the admin bar menu.
* This version was not published to the WordPress Plugin directory, as I kept trying (and failing) to add support for translating it.
= 0.0.0 =
* Initial release
== Upgrade Notice ==
= 0.2.1 =
Fixed typo
= 0.2.0 =
Adds a submenu to display/link (off of View Library) to those books you are currently reading.
= 0.1.0 =
Adds a link to view your library from the admin bar menu.
== TODO ==
* Add [I18n](http://codex.wordpress.org/I18n_for_WordPress_Developers) support.
