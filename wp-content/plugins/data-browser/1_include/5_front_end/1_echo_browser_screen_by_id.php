<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_echo_browser_screen_by_id' ) ) {
	function ws_db_echo_browser_screen_by_id($atts){
		extract( shortcode_atts(
			array(
				'id' => '0',
			), $atts )
		);
		//
		$browser_id=$atts['id'];
		$browser_id =(int)$browser_id; 
		//
		return ws_db_boot('front_end','a_shortcode_ran_and_send_a_browser_id_to_server','ws_db_echo_browser_screen_by_id','echo_browser_to_page',$browser_id);
	}
}

//[ws_data_browser id='1']
?>