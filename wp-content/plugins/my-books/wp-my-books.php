<?php
/*
Plugin Name:  Book Management
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Basic WordPress Plugin Header Comment
Version:      1.0
Author:       WordPress.org
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/

// function my_book_assets(){
// 	wp_enqueue_style( "Bootstrap", $src, $deps, $ver, $media );
// }

// add_action('init','my_book_assets');

if(!defined("PLUGIN_DIR")){
	define("PLUGIN_DIR",plugin_dir_path(__FILE__));
}
if(!defined("PLUGIN_URL")){
	define("PLUGIN_URL",plugins_url()."/my-books");
}

function book_assets(){
	wp_enqueue_style( "bootstrap",PLUGIN_URL."/assets/css/bootstrap.min.css");
	wp_enqueue_style("datatable",PLUGIN_URL."/assets/css/datatables.min.css");
	wp_enqueue_script("jquery",PLUGIN_URL."/assets/js/jquery.min.js");
	wp_enqueue_script("bootstrap",PLUGIN_URL."/assets/js/bootstrap.min.js");
	wp_enqueue_script("datatable",PLUGIN_URL."/assets/js/datatables.min.js");
	wp_enqueue_script("validation",PLUGIN_URL."/assets/js/jquery.validate.js");

}

 function my_book_plugin_menus() {
    add_menu_page("My Book", "My Book", "manage_options", "book-list", "my_book_list", "dashicons-book-alt", 30);
    add_submenu_page("book-list", "Book List", "Book List", "manage_options", "book-list", "my_book_list");
    add_submenu_page("book-list", "Add New", "Add New", "manage_options", "add-new", "my_book_add");
  }

function my_book_list() {
 include_once PLUGIN_DIR . "/views/book-list.php";
}

function my_book_add() {
include_once PLUGIN_DIR . '/views/book-add.php';
}
function table_name(){
	global $wpdb;
	return $wpdb->prefix."books";
}
function create_books_table(){
	require_once ABSPATH.'wp-admin/includes/upgrade.php';
	global $wpdb;
	$sql = "DROP TABLE IF EXISTS `".table_name()."`;
CREATE TABLE`".table_name()."` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `author` varchar(50) NOT NULL,
  `about` varchar(100) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
dbDelta($sql);
}

function truncate_book_table(){
	global $wpdb;
	return $wpdb->query("TRUNCATE TABLE `".table_name()."`");
}

register_activation_hook(__FILE__,'create_books_table');
register_deactivation_hook(__FILE__,'truncate_book_table');
add_action('init','book_assets');
add_action("admin_menu", "my_book_plugin_menus");

add_action('wp', function(){
    global $wpdb, $post;

    if( is_single() || is_page() ) {
      $results = $wpdb->get_results( "SELECT * FROM wp_user_ip where `post_id` = $post->ID AND  `user_ip` ='".$_SERVER['REMOTE_ADDR']."' order by id desc",ARRAY_A)[0];
    if(!empty($results)){
    $upsateArray = array('count'=>$results['count']+1);
    $wpdb->update('wp_user_ip',$upsateArray,array( 'id' => $results['id']));
    }else{
    $wpdb->insert('wp_user_ip',array('post_id' => $post->ID,'post_title' => get_the_title($post->ID),'user_ip' => $_SERVER['REMOTE_ADDR'],'date' => current_time('mysql'),'count'=>1));
    }
    }

});


