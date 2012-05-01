<?php
/*
Plugin Name: wp-jsocial
Plugin URI: http://www.brownjohnf.com
Description: A Wordpress wrapper for the jQuery Timeline Slider.
Version: 0.1
Author: John F. Brown (jQuery Timeline Slider by Pez Flash)
Author URI: http://unpezvivo.com
License: MIT
*/

wp_enqueue_style(
  "style",
  WP_PLUGIN_URL."/Script/style.css",
  false,
  "1.0"
);

wp_enqueue_script(
  'jsocial',
  WP_PLUGIN_URL.'/Script/jsocial.js',
  array('jquery'),
  '1.0',
  1
);


?>