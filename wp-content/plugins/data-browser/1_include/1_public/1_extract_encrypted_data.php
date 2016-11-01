<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_extract_encrypted_data' ) ) {
	function ws_db_extract_encrypted_data($data,$type_encrypted_data)
	{
		if ( $type_encrypted_data == "browser_screen_temporary_data" ){
			$all_basic_info = $data['all_basic_info'];
			$all_basic_info = ltrim($all_basic_info, "'");
			$all_basic_info = rtrim($all_basic_info, "'");
			$all_basic_info = '"'.$all_basic_info.'"';
			$json_decoded=json_decode($all_basic_info);
			$unserialized=unserialize($json_decoded);
			$data['all_basic_info']=$unserialized;
			return $data;
		}elseif($type_encrypted_data == "setting_interface_uploaded_data"){
			$data2 = json_decode(stripslashes($data['merge_them_all_together']));
			$data3 = json_decode(json_encode($data2), true);
			return $data3;
			
		}
		
	}
}
?>