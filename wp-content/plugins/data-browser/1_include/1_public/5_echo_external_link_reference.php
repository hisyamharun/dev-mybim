<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'echo_ex_link_ref' ) ) {
	function echo_ex_link_ref($url)
	{
		?><a href="<?php echo $url; ?>" target="_blank" ><span class="glyphicon glyphicon-new-window ws_db_external_link" ></span></a><?php  
		
	}
}
?>