=== Vidata ===
Contributors: dovan
Tags: url, query string, url parameters, urlparam, url params, url param, query, vidata, video
Requires at least: 2.0.2
Tested up to: 4.9.1
Stable tag: 1.2.1

Short Code to implement vidata player.

== Description ==

The Vidata WordPress Plugin allows you to implement Vidata's player and other functionnality with simple Short Code.

== Installation ==

To install the plugin, download the zip file and upload via the plugin interface of your WordPress site.

== Usage ==

To implement the player, use the shortcode vidata_player with the optional parameter of "height" and "width". 
Parameters:
    - height : height of the player.
    - width : width of the player.
    - class : use this parameter to add html class to the player.

For example `[vidata_player /]` or `[vidata_player width="640" height="360" class="player-vidata" /]`.

To implement CTAs with custom link, use the shortcode vidata_cta.
Parameters:
    - ctaid * : id of the CTA you wish to use, required.
    - class : use this parameter to add html class to the button.
    - text : content you wish to show in the link button.

For example `[vidata_cta ctaid="CTA_1" /]` or `[vidata_cta ctaid="CTA_1" class="btn btn-link" text="Click me" /]`.

== Security ==
To help protect your site against [Reflected Cross Site Scripting](http://en.wikipedia.org/wiki/Cross-site_scripting), we sanitize output with [esc_html()](http://codex.wordpress.org/Function_Reference/esc_html) which prevents any HTML tags from being passed in and displayed. This would prevent someone from passing in javascript, for example, and having it execute on your site.

== Changelog ==
* 1.2: Released 22/12/2017. Added CTA Short Code and class support for all Short Code
* 1.1: Released 21/12/2017. Added autoplay and responsive feature

