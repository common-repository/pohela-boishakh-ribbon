<?php
/*
Plugin Name: Pohela Boishakh Ribbon
Description: When activated, this plugin will put a  ribbon on the top right corner of your website. 
Author: Bub Rupam JCB 
Version: 1.0
License: GPLv2
Author URI: http://boxtwobox.com
*/


function render_boishak_ribbon() {
	$ribbon_url = plugins_url( 'boishak.png', __FILE__ );
	echo "<a target='_blank' class='boishak-ribbon' href='http://en.wikipedia.org/wiki/Pohela_Boishakh'>
	<img src='{$ribbon_url}' alt='Pohela Boishakh Ribbon' style='position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;' /></a>";
}
add_action( 'wp_footer', 'render_boishak_ribbon' );
