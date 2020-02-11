<?php
/*
Plugin Name: update
Plugin URL: http://monpluginupdatetropstyle.fr
Description: Mon premoer plugingVersion: 1.0
Requires at least:5.2
Requires PHP: 7.2
Author: leila
Author URL: http://www.monpluginupdatetropstyle.fr  /romain
licence: GPL2
Licence URL: http://www.gnu.org/licences/gpl-2.0.html
Text domain: my-basics-pluging
Domain Path: /languages
*/

add_action('init', 'test');
function test(){
  //die();
}

add_filter('document_title_parts', 'add_promotional_text');
function add_promotional_text($parts) {
  $parts['title'] = 'It Akademy '. $parts['title'];
  return $parts;
}
