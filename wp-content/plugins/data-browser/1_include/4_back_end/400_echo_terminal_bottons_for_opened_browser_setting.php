<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_echo_terminal_bottons_for_opened_browser_setting' ) ) {
	function ws_db_echo_terminal_bottons_for_opened_browser_setting()
	{
	 ?>
		<div style="float:left;">
			<button type="button" class="ws_db_save_botton  button tiny" style="margin:0;" onclick="if_ajax_save_botton_in_setting_section_clicked('close_botton_in_setting_section_clicked');">
				<?php _e( 'close', 'data-browser-by-ws' ); ?>
			</button>
			<button type="button" class="ws_db_save_botton  button tiny" style="margin:0;" onclick="if_ajax_save_botton_in_setting_section_clicked('save_botton_in_setting_section_clicked');">
				<?php _e( 'Save ', 'data-browser-by-ws' ); ?>
			</button>
			<button type="button" class="ws_db_save_botton  button tiny" style="margin:0;" onclick="if_ajax_save_botton_in_setting_section_clicked('save_and_close_botton_in_setting_section_clicked');">
				<?php _e( 'Save and close', 'data-browser-by-ws' ); ?>
			</button>
			<button type="button" class="ws_db_save_botton  button tiny" style="margin:0;"onclick="if_ajax_save_botton_in_setting_section_clicked('reset_botton_in_setting_section_clicked');">
				<?php _e( 'reset to default', 'data-browser-by-ws' ); ?>
			</button>
		</div>
		<?php	ws_db_boot('back_end','seve_series_bottons_are_printing','ws_db_echo_terminal_bottons_for_opened_browser_setting','need_to_ajax_loading_sign_inside_seve_bottons',''); ?>
		
	 <?php
	}
}
?>