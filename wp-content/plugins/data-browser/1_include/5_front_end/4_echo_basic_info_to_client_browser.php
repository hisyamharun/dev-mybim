<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_echo_basic_info_to_client_browser' ) ) {
function ws_db_echo_basic_info_to_client_browser($all_basic_info)
{
global $all_dimensions_black_list;//also send black_list 
$all_basic_info['all_dimensions_black_list']=$all_dimensions_black_list;
$serialize=serialize($all_basic_info);	
		echo "<script>  all_basic_info ='".$serialize ."';   </script>";

}
}
?>