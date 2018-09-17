<?php
/*
Plugin Name: Event Tracking
Plugin URI: https://github.com/rrpathi/Event-Tracking-Wordpress-Plugin
Description: The complete list of the WordPress Post log And Comments log events the  Tracking plugin.
Version: 1.0
Author: Ragupathi
Author URI: https://github.com/rrpathi
License:     GPLv2 
Domain Path: /languages
*/

// Plugin path Url
if(!defined("PLUGIN_DIR")){
	define("PLUGIN_DIR",plugin_dir_path(__FILE__));
}
if(!defined("PLUGIN_URL")){
	define("PLUGIN_URL",plugins_url()."/Event Tracking");
}
// Adding Main Menu And Submenu
	add_action("admin_menu", "PluginMenu");

	 function PluginMenu() {
	    add_menu_page("Event Log", "Event Log", "manage_options", "log-list", "postlog", "dashicons-book-alt", 30);
	    add_submenu_page("log-list", "Post log", "Post ", "manage_options", "log-list", "postlog");
	    add_submenu_page("log-list", "Comment Log", "Comments  ", "manage_options", "comment-list", "commentlog");
  }
// Connecting css file And js file
  	add_action('init','plugin_assets');
	function plugin_assets(){
		wp_enqueue_style( "bootstrap",PLUGIN_URL."/assets/css/bootstrap.min.css");
		wp_enqueue_script("bootstrap",PLUGIN_URL."/assets/js/bootstrap.min.js");
		wp_enqueue_script("jquery",PLUGIN_URL."/assets/js/jquery.min.js");
	}
	// connecting Post Details 
	function postlog() {
		include_once PLUGIN_DIR . "views/post-log.php";
	}
	// connecting View Log Details 
	function commentlog() {
		include_once PLUGIN_DIR . "views/comments-log.php";
	}
