<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
//add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );

if ( ! function_exists( 'ws_db_add_menu_page' ) ) {
	function ws_db_add_menu_page(){
		add_menu_page( "Data Browser", "Data Browser", "manage_options", "ws_db_menu_slug", 'wsdb_menu_content','dashicons-chart-pie', 80  );
		add_submenu_page('ws_db_menu_slug', "Manage Browsers", "Manage Browsers", 'manage_options',"ws_db_manage_browser_submenu_slug", 'wsdb_menu_content');
		remove_submenu_page( "ws_db_menu_slug", "ws_db_menu_slug" );
	}
}


if ( ! function_exists( 'wsdb_menu_content' ) ) {
function wsdb_menu_content()
	{ 
		ws_db_boot('back_end','wsdb_admin_menu_item_clicked','wsdb_menu_content','see_and_manage_browsers','');
	 }
}


?>