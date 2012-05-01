<?php
/*
Plugin Name: wp-jsocial
Plugin URI: http://www.brownjohnf.com
Description: A Wordpress wrapper for the jQuery Timeline Slider.
Version: 0.1.1
Author: John F. Brown (jQuery Timeline Slider by Pez Flash)
Author URI: http://unpezvivo.com
License: MIT
*/

// style name, path, dependencies, version
wp_enqueue_style(
  "style",
  WP_PLUGIN_URL."/wp-jsocial/Script/style.css",
  false,
  "1.0"
);

// script name, path, dependencies, version, placement(0=header, 1=footer)
wp_enqueue_script(
  'jsocial',
  WP_PLUGIN_URL.'/wp-jsocial/Script/jsocial.js',
  array('jquery'),
  '1.0',
  1
);

?>