=== Plugin Name ===
Contributors: Dwamian Mcleish
Donate link: http://cornersix.com
Tags: ssl,secure socket layer, secure, credit card
Requires at least: 2.8
Tested up to: 2.8
Stable tag: trunk

This plugin will allow you to force an ssl on a per page basis by adding the "force_ssl" custom field

== Description ==

This plugin will allow you to force an ssl(HTTPS) on a per page basis by adding the "force_ssl" custom field. It will jump back out of the SSL connection on other pages if it doesn't detect the custom field so that you can continue 
to use a standard http connection.

See the FAQ for a list of commonly occuring issues and their fixes. 


== Installation ==


1. Upload `force_ssl.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add "force_ssl" custom field to your page / post
1. If you get an error that says "Invalid Header" or something to that effect try moving the force_ssl.php file to the root of the plugins folder. (note that you will need to access the files on your server .e.g FTP / WebDav) 

== Frequently Asked Questions ==
1. If you get an error that says "Invalid Header" or something to that effect try moving the force_ssl.php file to the root of the plugins folder. 


== Screenshots ==


== Changelog ==

= 1.0 =
* Added ability to jump out of ssl on pages without the "force_ssl" custom tag
= 1.1 = 
* Cleaned up whitespace that was throwing header errors. 
