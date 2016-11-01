<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_echo_all_data_browser_screen_content' ) ) {
	function ws_db_echo_all_data_browser_screen_content($incoming_ajax_data)
	{	
		global $ws_db_all_setting;
		$all_setting = $ws_db_all_setting;
		if( isset($all_setting['object_all_style_stting_container']) and is_array($all_setting['object_all_style_stting_container'])){
			//this var declared in condition_control_center
			global $an_data_browser_screen_printed_for_user;
			if(isset($an_data_browser_screen_printed_for_user) and $an_data_browser_screen_printed_for_user==true){
				?><div class="ws_db_alert_no_setting_exist"  > currently a data browser exist in this page , only one data browser can be loaded in a web page. </div><?php 
			}else{
				ws_db_boot('front_end','','ws_db_echo_all_data_browser_screen_content','echo_browser_to_page',$incoming_ajax_data);
			}
		}else{
			
			?><div class="ws_db_alert_no_setting_exist"  > you most seve the setting for this data browser instance. </div><?php 
		}
	}
}
?>