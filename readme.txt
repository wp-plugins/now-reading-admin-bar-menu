=== Now-Reading Admin Bar Menu ===
Contributors: manzabar
Tags: adminbar, now-reading
Requires at least: 3.1
Tested up to: 3.1
Stable tag: 0.0.0

Adds the Now-Reading menu links to the new admin bar introduced in WordPress 3.1

== Description ==

With the introduction of the new admin bar in WordPress 3.1, I wanted to have the links to the Now-Reading Reloaded's various pages. Since Ben has stated on his site that he is no longer actively developing the plugin, I decided to write this "mini-plugin" to add the links.

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
= 0.0.0 =
* Initial release
