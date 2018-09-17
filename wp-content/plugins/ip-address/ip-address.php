<?php
/*
Plugin Name: IP-Address
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Basic WordPress Plugin Header Comment
Version:     20160911
Author:      WordPress.org
Author URI:  https://developer.wordpress.org/
Text Domain: wporg
Domain Path: /languages
License:     GPL2
 
Learning is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Learning is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Learning. If not, see {License URI}.
*/

// add_action( 'init','ip_address');

// function ip_address(){
// 	echo  $_SERVER['REMOTE_ADDR'];
// }

// function plugin_table(){
// 	include_once (ABSPATH.'wp-admin/includes/upgrade.php');
// 	global $wpdb;
// 	$sql = "DROP TABLE IF EXISTS `wp_ip_address`;
// CREATE TABLE `wp_ip_address` (
//   `id` int(11) NOT NULL AUTO_INCREMENT,
//   `post_title` char(45) NOT NULL,
//   `ip_address` bigint(20) NOT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

// dbDelta($sql);
// }


// register_activation_hook(__FILE__,'plugin_table');

function get_ip(){
	global $wpdb;
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$data = array('post_title'=>'Sample Title','ip_address'=>$ipaddress);
	$wpdb->insert('wp_ip_address',$data);
}
add_action('init','get_ip');

