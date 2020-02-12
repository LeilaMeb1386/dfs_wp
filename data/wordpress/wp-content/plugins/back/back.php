<?php
/*
Plugin Name:  Back
Plugin URI:   https://www.monpluginyoutubetropstyle.fr
Description:  Mon premier plugin
Version:      1.0
Requires at least: 5.2
Requires PHP:      7.2
Author:       leila
Author URI: https://www.monpluginyoutubetropstyle.fr /romain
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:       my-basics-plugin
Domain Path:       /languages
*/

add_action( 'wp_enqueue_scripts', 'scripts' );
function scripts() {
    wp_enqueue_script( 'script', plugins_url( 'scripts.js', __FILE__ ), array ( 'jquery' ), 1.0, true);
    wp_enqueue_style( 'back_styles', plugins_url( 'style.css', __FILE__ ));
}

add_action('wp_footer', 'my_back_picto');
function my_back_picto(){
	echo '<div id="back-to-top" class="back-picto">To top</div>';
}
