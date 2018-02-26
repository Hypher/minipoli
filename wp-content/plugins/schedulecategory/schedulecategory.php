<?php
/**
 * Plugin Name: Schedule Category
 * Description: In development ...
 * Version: 1.0.0
 * Author: Léo Clément
 * Text Domain: schcat
 */

if(!defined("SCHCAT_PLUGIN_PATH")){
	define("SCHCAT_PLUGIN_PATH", substr(plugin_dir_path(__FILE__), 0, -1));
}
if(!defined("SCHCAT_PLUGIN_URL")){
	define("SCHCAT_PLUGIN_URL", substr(plugin_dir_url(__FILE__), 0, -1));
}



require_once SCHCAT_PLUGIN_PATH . "/admin/admin-menu.php";
require_once SCHCAT_PLUGIN_PATH . "/front/category.php";