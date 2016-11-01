<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_post_list_light_box_option' ) ) {
	function ws_db_post_list_light_box_option($all_setting)
	{
		
	?>
	<span  style="display:none" >
			<div id="ws_db_post_list_light_box_option" style="background-color:white;padding: 38px 20px;" >
				<div class="ws_db_setting_section ws_db_post_list_light_box_option211x" style="margin-bottom:30px" >
					<h5 class="ws_db_setting_title" > <?php _e( 'Select which element you want to edit. ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_edit_botton_in_setting" style="width:100%;background-color: activecaption;height: 27px;border-bottom: 1px solid #d3d3d3;">
						<button type="button" class="ws_db_edit_label_botton_in_setting ws_db_open_css_setting_light_box" style="padding:3px 10px; margin: 0 4px 0 0; float:left; "   >wrapper</button>
						<button type="button" class="ws_db_edit_label_botton_in_setting ws_db_open_css_setting_light_box" style="padding:3px 10px; margin: 0 4px 0 0; float:left; "   >label</button>
						<button type="button" class="ws_db_edit_value_botton_in_setting ws_db_open_css_setting_light_box" style="padding:3px 10px; margin: 0 4px 0 0; float:left; "   >delimiter</button>
						<button type="button" class="ws_db_edit_value_botton_in_setting ws_db_open_css_setting_light_box" style="padding:3px 10px; margin: 0 4px 0 0; float:left; "   >value</button>
						<button type="button" class="ws_db_edit_value_botton_in_setting ws_db_open_css_setting_light_box" style="padding:3px 10px; margin: 0 4px 0 0; float:left; "   >suffix</button>
					</div>
					<div class="ws_db_setting_group_name214" style="display:none;">post_list_section</div>
					
				</div>
		</div>
	</span>
				
	<?php 
		
	}
}
?>