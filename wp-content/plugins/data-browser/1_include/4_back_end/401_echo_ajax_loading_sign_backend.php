<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_echo_echo_ajax_loading_sign_backend' ) ) {
	function ws_db_echo_echo_ajax_loading_sign_backend()
	{
	 ?>
		<div style="float:left;">
			<img style="display:none;margin-left:10px;" class="wsdb_loading_back_end"  src="<?php echo WS_DB_LOADING_ICON ?>" />
		</div>
		<div class="ws_db_success_massage_bakend" style="display:none; position: fixed; top:30%; left: 0;right: 0;  margin: auto; width: 100px; height: 100px;z-index: 9999;background-color: #ffffff;border-radius: 10px;padding:10px;" >
		<img width="100px"  style="opacity: none;" src="<?php echo WS_DB_CHECK_SIGN_PATH ?>" />
		</div >
		
		<div class="ws_db_fail_massage_bakend" style="display:none; position: fixed; top:30%; left: 0;right: 0;  margin: auto; width: 100px; height: 100px;z-index: 9999;background-color: #ffffff;border-radius: 10px;padding:10px;" >
		<img width="100px"  style="opacity: none;" src="<?php echo WS_DB_X_SIGN_PATH ?>" />
		</div >
	 <?php
	}
}
?>