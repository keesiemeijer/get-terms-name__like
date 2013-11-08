=== Get terms name__like ===
Contributors: keesiemeijer
Tags: name__like
Requires at least: 3.7
Tested up to: 3.7
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Reverses the WordPress 3.7 get_terms() name__like functionality back to its prior query by matching terms that begin with the name__like string.

== Description ==
This reverses the changes made in this trac ticket for the 'name__like' parameter.
http://core.trac.wordpress.org/ticket/8214

The name_like parameter was changed in WordPress **3.7** to match terms that **contain** the name__like string. It's now basically the same as the "search" parameter. 
Use this plugin or use the function from the plugin file in your own (child) theme if you want it to only match terms that **begin** with the name__like string.

Note: This plugin only reverses it on the front end of your website.

== Installation ==
* Unzip the get-terms-name-like.zip folder.
* Upload the get-terms-name-like folder to your /wp-content/plugins directory.
* Activate *Get Terms name__like*.
* That's it.

== Changelog ==

= 0.1 =
* Initial release.