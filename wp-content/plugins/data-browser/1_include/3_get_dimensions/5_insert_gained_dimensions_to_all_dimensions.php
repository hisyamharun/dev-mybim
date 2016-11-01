<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_insert_gained_dimensions_to_all_dimensions' ) ) {
function ws_db_insert_gained_dimensions_to_all_dimensions($static_dimensions ,$taxonomy_dynamic_dimensions ,$custom_field_dynamic_dimensions ,$all_dimensions)
{
	
	global $ws_db_all_setting;
	//
	$all_dimensions_static = $all_dimensions['all_dimensions_static'];
	$all_dimensions_taxonomy = $all_dimensions['all_dimensions_taxonomy'];
	$all_dimensions_custom_field = $all_dimensions['all_dimensions_custom_field'];
//insert static_dimensions to $all_dimensions_static 
   foreach( $static_dimensions as $dimension_name => $array_of_dimension_value ){
	   foreach($array_of_dimension_value as $dimension_value ){
			if(strlen($dimension_value) <= $ws_db_all_setting['exclude_value_from_analys_length_more_than_x_basic']){
				if (!array_key_exists($dimension_name,$all_dimensions_static)){
					$all_dimensions_static[$dimension_name]= array( $dimension_value => 1 ) ;	
				}else{
					$dimension_values = $all_dimensions_static[$dimension_name];
					if (!array_key_exists($dimension_value,$dimension_values)){
						$dimension_values[$dimension_value] = 1;
						$all_dimensions_static[$dimension_name]= $dimension_values ;
					}else{
						$old_value = $dimension_values[$dimension_value];
						$old_value = $old_value +1;
						$dimension_values[$dimension_value]= $old_value;
						$all_dimensions_static[$dimension_name]= $dimension_values ;
					}
				}
			}
	   }
   }
//insert taxonomy_dynamic_dimensions to $all_dimensions_taxonomy 
   foreach( $taxonomy_dynamic_dimensions as $dimension_name => $array_of_dimension_value ){
	   foreach($array_of_dimension_value as $dimension_value ){
			if(strlen($dimension_value) <= $ws_db_all_setting['exclude_value_from_analys_length_more_than_x_taxonomy']){
				if (!array_key_exists($dimension_name,$all_dimensions_taxonomy)){
					$all_dimensions_taxonomy[$dimension_name]= array( $dimension_value => 1 ) ;	
				}else{
					$dimension_values = $all_dimensions_taxonomy[$dimension_name];
					if (!array_key_exists($dimension_value,$dimension_values)){
						$dimension_values[$dimension_value] = 1;
						$all_dimensions_taxonomy[$dimension_name]= $dimension_values ;
					}else{
						$old_value = $dimension_values[$dimension_value];
						$old_value = $old_value +1;
						$dimension_values[$dimension_value]= $old_value;
						$all_dimensions_taxonomy[$dimension_name]= $dimension_values ;
					}
				}
			}
	   }
   }
   
//insert custom_field_dynamic_dimensions to $all_dimensions_custom_field 
   foreach( $custom_field_dynamic_dimensions as $dimension_name => $array_of_dimension_value ){
	   foreach($array_of_dimension_value as $dimension_value ){
		   if(strlen($dimension_value) <= $ws_db_all_setting['exclude_value_from_analys_length_more_than_x_custom_field']){
			if (!array_key_exists($dimension_name,$all_dimensions_custom_field)){
				$all_dimensions_custom_field[$dimension_name]= array( $dimension_value => 1 ) ;	
			}else{
				$dimension_values = $all_dimensions_custom_field[$dimension_name];
				if (!array_key_exists($dimension_value,$dimension_values)){
					$dimension_values[$dimension_value] = 1;
					$all_dimensions_custom_field[$dimension_name]= $dimension_values ;
				}else{
					$old_value = $dimension_values[$dimension_value];
					$old_value = $old_value +1;
					$dimension_values[$dimension_value]= $old_value;
					$all_dimensions_custom_field[$dimension_name]= $dimension_values ;
				}
			}
		   }
	   }
   } 

   
   
 $all_dimensions = array('all_dimensions_static'=>$all_dimensions_static,'all_dimensions_taxonomy'=>$all_dimensions_taxonomy,'all_dimensions_custom_field'=>$all_dimensions_custom_field);
 return $all_dimensions;


}
}
?>