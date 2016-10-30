<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_browser_menu_content' ) ) {
	function ws_db_browser_menu_content($browser_id)
	{
		$browser_post_id=ws_db_get_browser_post_id($browser_id);
		$all_setting_from_meta = get_post_meta($browser_post_id, 'ws_db_all_setting');
		$all_setting = $all_setting_from_meta[0];
		ws_db_create_global_setting_variable($browser_post_id);
		?><div style="display:none;" class="wsdb_loading_front_end_class">
			<span   class="wsdb_loading_front_end_class_icon fa fa-spinner fa-spin" ></span>
		</div>
		
		<?php if($browser_id !=0){  ?>
		<div id="ws_db_this_browser_id_front_end" style="display:none;" ><?php echo $browser_id; ?></div>
		<?php }  ?>
		<?php
		echo '<div id="ws_db_result">';
		ws_db_echo_all_data_browser_screen_content("");
		echo '</div>';
	}
}


?>