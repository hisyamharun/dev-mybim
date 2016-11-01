<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_add_ws_data_browser_shortcode' ) ) {
	function ws_db_add_ws_data_browser_shortcode(){
		
		

  add_shortcode( 'ws_data_browser', 'ws_db_echo_browser_screen_by_id' );
	}
}

?>