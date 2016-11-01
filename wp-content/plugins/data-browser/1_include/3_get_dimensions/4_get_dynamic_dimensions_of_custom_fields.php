<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_get_custom_field_dynamic_dimensions' ) ) {
	function ws_db_get_custom_field_dynamic_dimensions($post)
	{
		$custom_field_dynamic_dimensions =array();
		$custom_fields = get_post_custom($post->ID);

		foreach( $custom_fields as $custom_field_key => $custom_field_value_array ){
			
			//if(!strlen($custom_field_value) >= 200){
			$custom_field_dynamic_dimensions[$custom_field_key]= $custom_field_value_array ;
			
			//}
			
		}

		$custom_field_dynamic_dimensions=array_filter($custom_field_dynamic_dimensions);
		return $custom_field_dynamic_dimensions;
	}
}
?>