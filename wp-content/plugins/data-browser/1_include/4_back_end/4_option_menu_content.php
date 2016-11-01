<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_option_menu_content' ) ) {
	function ws_db_option_menu_content($browser_id)
	{
	?><div class="option_menu_warper"  style="background-color: #d3d3d3;
	box-shadow: 0 0 13px #b2b2b2;
	border: 2px outset #000098;
    margin-right: 10px;
    margin-top: 20px;
    width: 98%;" >	
	
	
	
	<?php 
		
		
		ws_db_boot('back_end','botton_for_create_or_manage_specific_browser_clicked','ws_db_option_menu_content','echo_a_browser_setting_page',$browser_id);

	?>	
	</div ><?php 	
///////////////////////////////////////////////////////////////////////	
//////////////////////////////////////////////////////////////////
	}
}
?>