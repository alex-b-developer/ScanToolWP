<?php
/*
Plugin Name: ScanToolWP
Plugin Author: Alexander Betancur
Description: Alexander Betancur
Version: 0.0.1
*/

add_action ('admin_menu','CrearMenu');

function CrearMenu(){

add_menu_page ( 'ScanToolWP', 
				'ScanToolWP', 
				'read', 
				'sp_menu', 
				'', 
				'', 
				101);

add_submenu_page( 	'sp_menu', 
					'Dashboard', 
					'Dashboard', 
					'read', 
					plugin_dir_path(__FILE__).'page-dashboard.php', 
					'');

add_submenu_page( 	'sp_menu', 
					'About', 
					'About', 
					'read', 
					plugin_dir_path(__FILE__).'page-about.php', 
					'');

remove_submenu_page( 'sp_menu','sp_menu' );
}