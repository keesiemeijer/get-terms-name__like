=== Get terms name__like ===
Contributors: keesiemeijer
Tags: name__like
Requires at least: 3.7
Tested up to: 3.7
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Get the terms by name that begin with the "name__like" parameter used by the WordPress function get_terms().

== Description ==
The "name_like" parameter was changed in WordPress **3.7** to match terms that **contain** the "name__like" string. Use this plugin or use the function from the plugin file in your own (child) theme if you want it to only match terms that **begin** with the "name__like" string as it was prior to 3.7.

This reverses the changes made in this trac ticket. 
http://core.trac.wordpress.org/ticket/8214

The "search" parameter does almost exactly what the "name__like" parameter does now (in 3.7), the difference being it also searches in term slugs. Use both parameters (as it was before 3.7) to get the terms you want.
See: http://codex.wordpress.org/Function_Reference/get_terms#Parameters

**Note**: this plugin only reverses it on the front end of your website.

== Installation ==
* Unzip the get-terms-name-like.zip folder.
* Upload the get-terms-name-like folder to your /wp-content/plugins directory.
* Activate *Get Terms name__like*.
* That's it.

== Changelog ==

= 0.1 =
* Initial release.