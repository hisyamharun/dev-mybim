<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_ajax_save_base_setting' ) ) {
	function ws_db_ajax_save_base_setting($data,$browser_id)
	{
		$returns = update_post_meta($browser_id, 'ws_db_all_setting', $data);
		if($returns!== false){
			//echo 'all changes saved to meta<br/>';
		}else{
			//echo 'setting not changed<br/>';
			
		}	
	}
}
?>