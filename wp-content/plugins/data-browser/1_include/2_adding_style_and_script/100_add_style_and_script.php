<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_add_style_and_script_to_back_end' ) ) {
	function ws_db_add_style_and_script_to_back_end()
	{
		global $pagenow;
		if ($pagenow == 'admin.php') {
		 if (isset($_GET['page'])&& $_GET['page'] == 'wide_engine_menu_slug'
		 or  $_GET['page'] == 'url_submenu_slug' 
		 or  $_GET['page'] == 'ws_db_add_browser_submenu_slug'
		 or  $_GET['page'] == 'ws_db_general_submenu_slug'
		 or  $_GET['page'] == 'ws_db_manage_browser_submenu_slug'
		 ) {
			add_action('admin_enqueue_scripts', 'ws_db_jquery_js_wp');
			add_action('admin_enqueue_scripts', 'ws_db_jquery_css');
			add_action('admin_enqueue_scripts', 'ws_db_magnific_popup');
			add_action('admin_enqueue_scripts', 'ws_db_bootstrap_css');
			add_action('admin_enqueue_scripts', 'ws_db_bootstrap_js');
			add_action('admin_enqueue_scripts', 'ws_db_color_picker_scripts', 100);
			add_action('admin_enqueue_scripts', 'ws_db_foundation_js');
			add_action('admin_enqueue_scripts', 'ws_db_foundation_css');
			add_action('admin_enqueue_scripts', 'ws_db_custom_css_and_js_back_end');
			add_action('admin_enqueue_scripts', 'ws_db_font_awesome_css');
		 }
		}
	}
}
if ( ! function_exists( 'ws_db_add_style_and_script_to_front_end' ) ) {
	function ws_db_add_style_and_script_to_front_end()
	{
		add_action('wp_enqueue_scripts', 'ws_db_jquery_css');
		add_action( 'wp_enqueue_scripts', 'ws_db_jquery_js_wp' );
		add_action( 'wp_enqueue_scripts', 'ws_db_magnific_popup' );
		add_action( 'wp_enqueue_scripts', 'ws_db_bootpag' );
		add_action( 'wp_enqueue_scripts', 'ws_db_bootstrap_css' );
		//add_action( 'wp_enqueue_scripts', 'ws_db_bootstrap_js' );
		
		add_action( 'wp_enqueue_scripts', 'ws_db_google_chart_scripts' );
		//add_action( 'wp_enqueue_scripts', 'ws_db_google_chart_scripts_offline' );
		
		add_action( 'wp_enqueue_scripts', 'ws_db_custom_css_and_js_front_end');
		add_action( 'wp_enqueue_scripts', 'ws_db_malihu_custom_scrollbar' );
		add_action('wp_enqueue_scripts', 'ws_db_font_awesome_css');
		
		
		
	}
}

if ( ! function_exists( 'ws_db_add_style_and_script_to_both' ) ) {
	function ws_db_add_style_and_script_to_both()
	{
		
	}
}
?>