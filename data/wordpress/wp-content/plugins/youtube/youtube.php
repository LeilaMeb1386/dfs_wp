<?php
/*
Plugin Name: youtube
Plugin URL: http://monpluginyoutubetropstyle.fr
Description: Mon premoer plugingVersion: 1.0
Requires at least:5.2
Requires PHP: 7.2
Author: leila
Author URL: http://www.monpluginyoutunetropstyle.fr  /romain
licence: GPL2
Licence URL: http://www.gnu.org/licences/gpl-2.0.html
Text domain: my-basics-plugingDomain Path: /languages
*/

if(!defined('ABSPATH')) {
  exit;
}
 add_action('init', 'youtube_init_shortcode');

 function youtube_init_shortcode()
 {
   add_shortcode('video', 'youtube_do_shortcode');
 }

 function youtube_do_shortcode($attrs)
 {
   $output='';
   if(!isset($attrs['source']) or empty($attrs['source'])) {
     return $output;
   }
   $url=sprintf('https://www.youtube-nocookie.com/embed/%s?rel=&amp:control=0',$attrs['source']);

   $output.=sprintf('<iframe width="100%%" height="315" src="%s" frameborder="0"
   allow="autoplay; encrypted-media" allowfullscreen></iframe>', $url);
   return $output;
 }
