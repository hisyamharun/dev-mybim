<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_get_all_dimensions_array_full' ) ) {
function ws_db_get_all_dimensions_array_full($due_to_function_call,$posts){
	global $ws_db_all_setting;
	
	
	$all_dimensions = ws_db_boot('public_core','after_the_posts_queried','ws_db_get_all_dimensions_array_full','get_all_existing_dimensions_on_these_posts',$posts);

	
	
	
	//remove values that contain quotation
	foreach($all_dimensions as $dimensions_group_name=>$dimensions_group_array ){
		foreach($dimensions_group_array as $dimension_name=> $dimension_value_array){
			foreach($dimension_value_array as $value2=> $number){
				if (is_string ($value2)) {
					//|| strpos($value2,'"') //</
					if (strpos($value2,"'") || strpos($value2,"[") || strpos($value2,"]") || strpos($value2,"{") || strpos($value2,"}") || strpos($value2,",")|| strpos($value2,";") || strpos($value2,'/')) {
						//var_dump($value2);
						unset($all_dimensions[$dimensions_group_name][$dimension_name][$value2]);
						//var_dump($all_dimensions[$dimensions_group_name][$dimension_name][$value2]);
					}
					//exclude empty value item for arrays if exist 
					if($value2 == ''){
						if($dimensions_group_name=='all_dimensions_static'){
							if($ws_db_all_setting['hide_empty_value_items_basic']=="true"){
								unset($all_dimensions[$dimensions_group_name][$dimension_name][$value2]);
							}
						}elseif($dimensions_group_name=='all_dimensions_taxonomy'){
							if($ws_db_all_setting['hide_empty_value_items_taxonomy']=="true"){
							unset($all_dimensions[$dimensions_group_name][$dimension_name][$value2]);
							}
						}elseif($dimensions_group_name=='all_dimensions_custom_field'){
							if($ws_db_all_setting['hide_empty_value_items_custom_field']=="true"){
							unset($all_dimensions[$dimensions_group_name][$dimension_name][$value2]);
							}
						}
					//exclude one space item for arrays if exist 	
					}elseif($value2 == ' '){
						if($dimensions_group_name=='all_dimensions_static'){
							if($ws_db_all_setting['hide_one_space_items_basic']=="true"){
								unset($all_dimensions[$dimensions_group_name][$dimension_name][$value2]);
							}
						}elseif($dimensions_group_name=='all_dimensions_taxonomy'){
							if($ws_db_all_setting['hide_one_space_items_taxonomy']=="true"){
							unset($all_dimensions[$dimensions_group_name][$dimension_name][$value2]);
							}
						}elseif($dimensions_group_name=='all_dimensions_custom_field'){
							if($ws_db_all_setting['hide_one_space_items_custom_field']=="true"){
							unset($all_dimensions[$dimensions_group_name][$dimension_name][$value2]);
							}
						}
					}
				}
				
			}
		}
	}
	
	//
		function call_back_static($this_array_item){
			global $ws_db_all_setting;
			return $this_array_item >= $ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_basic'];
			}
		function call_back_taxonomy($this_array_item){
			global $ws_db_all_setting;
			return $this_array_item >= $ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_taxonomy'];
			}
		function call_back_custom_field($this_array_item){
			global $ws_db_all_setting;
			return $this_array_item >= $ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_custom_field'];
			}
		//
		$all_dimensions_static_t=$all_dimensions['all_dimensions_static'];
		$all_dimensions_taxonomy_t=$all_dimensions['all_dimensions_taxonomy'];
		$all_dimensions_custom_field_t=$all_dimensions['all_dimensions_custom_field'];	
		//
		$all_dimensions_static_filtered =array();
		foreach($all_dimensions_static_t as $dimension_name=> $dimension_value_array ){
		arsort($dimension_value_array);
		$dimension_value_array_filtered=array_filter($dimension_value_array,'call_back_static');
		$all_dimensions_static_filtered[$dimension_name]=$dimension_value_array_filtered;
		}
		//
		$all_dimensions_taxonomy_filtered =array();
		foreach($all_dimensions_taxonomy_t as $dimension_name=> $dimension_value_array ){
		arsort($dimension_value_array);
		$dimension_value_array_filtered=array_filter($dimension_value_array,'call_back_taxonomy');
		$all_dimensions_taxonomy_filtered[$dimension_name]=$dimension_value_array_filtered;
		}
		//
		$all_dimensions_custom_field_filtered =array();
		foreach($all_dimensions_custom_field_t as $dimension_name=> $dimension_value_array ){
		arsort($dimension_value_array);	
		$dimension_value_array_filtered=array_filter($dimension_value_array,'call_back_custom_field');
		$all_dimensions_custom_field_filtered[$dimension_name]=$dimension_value_array_filtered;
		}
		///////////
		foreach($all_dimensions_static_filtered as $dimension_name=> $dimension_value_array){
			if (count($dimension_value_array)>$ws_db_all_setting['hide_table_item_more_than_x_basic']){
				$dimension_value_array2=array_slice($dimension_value_array,0,$ws_db_all_setting['hide_table_item_more_than_x_basic']);
				$all_dimensions_static_filtered[$dimension_name]=$dimension_value_array2;
			}	
			if (count($dimension_value_array)<$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_basic']){
				unset($all_dimensions_static_filtered[$dimension_name]);
			}
		}
		//
		foreach($all_dimensions_taxonomy_filtered as $dimension_name=> $dimension_value_array){
			if (count($dimension_value_array)>$ws_db_all_setting['hide_table_item_more_than_x_taxonomy']){
				$dimension_value_array2=array_slice($dimension_value_array,0,$ws_db_all_setting['hide_table_item_more_than_x_taxonomy']);
				$all_dimensions_taxonomy_filtered[$dimension_name]=$dimension_value_array2;
			}
			if (count($dimension_value_array)<$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_taxonomy']){
				unset($all_dimensions_taxonomy_filtered[$dimension_name]);
			}
		}
		//
		foreach($all_dimensions_custom_field_filtered as $dimension_name=> $dimension_value_array){
			if (count($dimension_value_array)>$ws_db_all_setting['hide_table_item_more_than_x_custom_field']){
				$dimension_value_array2=array_slice($dimension_value_array,0,$ws_db_all_setting['hide_table_item_more_than_x_custom_field']);
				$all_dimensions_custom_field_filtered[$dimension_name]=$dimension_value_array2;
			}
			if (count($dimension_value_array)<$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_custom_field']){
				unset($all_dimensions_custom_field_filtered[$dimension_name]);
			}
		}
		//
		$all_dimensions['all_dimensions_static']=$all_dimensions_static_filtered;
		$all_dimensions['all_dimensions_taxonomy']=$all_dimensions_taxonomy_filtered;
		$all_dimensions['all_dimensions_custom_field']=$all_dimensions_custom_field_filtered;

//exclude setting page from filtering dimension because user must have full control on all dimensions and if a dimension filtered by default user will lost complete control 
if($due_to_function_call!="setting_page_is_loading"){
	//if first screen than create black list for dimensions and exclude dimensions based on blacklist and send this list to client to use later
	if(empty($_POST ) or $_POST['type_of_ajax_request']=='create_new_browser_botton_clicked' or $_POST['type_of_ajax_request']=='reset_botton_in_setting_section_clicked'){
			$all_dimensions_static_t2=$all_dimensions['all_dimensions_static'];
			$all_dimensions_taxonomy_t2=$all_dimensions['all_dimensions_taxonomy'];
			$all_dimensions_custom_field_t2=$all_dimensions['all_dimensions_custom_field'];	
			//
			$all_dimensions_static_black_list=array();
			$all_dimensions_taxonomy_black_list=array();
			$all_dimensions_custom_field_black_list=array();
			//
			foreach($all_dimensions_static_t2 as $dimension_name=> $dimension_value_array){
				if (count($dimension_value_array)<$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_load_basic']){
					$all_dimensions_static_black_list[$dimension_name]=$dimension_name;
					unset($all_dimensions_static_t2[$dimension_name]);
				}
			}
			foreach($all_dimensions_taxonomy_t2 as $dimension_name=> $dimension_value_array){
				if (count($dimension_value_array)<$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_load_basic']){
					$all_dimensions_taxonomy_black_list[$dimension_name]=$dimension_name;
					unset($all_dimensions_taxonomy_t2[$dimension_name]);
				}
			}
			foreach($all_dimensions_custom_field_t2 as $dimension_name=> $dimension_value_array){
				if (count($dimension_value_array)<$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_load_basic']){
					$all_dimensions_custom_field_black_list[$dimension_name]=$dimension_name;
					unset($all_dimensions_custom_field_t2[$dimension_name]);
				}
			}
			$all_dimensions['all_dimensions_static']=$all_dimensions_static_t2;
			$all_dimensions['all_dimensions_taxonomy']=$all_dimensions_taxonomy_t2;
			$all_dimensions['all_dimensions_custom_field']=$all_dimensions_custom_field_t2;
			//
			global $all_dimensions_black_list;
			$all_dimensions_black_list=array('all_dimensions_static_black_list'=>$all_dimensions_static_black_list,'all_dimensions_taxonomy_black_list'=>$all_dimensions_taxonomy_black_list,'all_dimensions_custom_field_black_list'=>$all_dimensions_custom_field_black_list);
		}else{
			global $all_dimensions_black_list;
			//
			$all_dimensions_static_t2=$all_dimensions['all_dimensions_static'];
			$all_dimensions_taxonomy_t2=$all_dimensions['all_dimensions_taxonomy'];
			$all_dimensions_custom_field_t2=$all_dimensions['all_dimensions_custom_field'];	
			//
			foreach($all_dimensions_static_t2 as $dimension_name=> $dimension_value_array){
				if (array_key_exists($dimension_name, $all_dimensions_black_list['all_dimensions_static_black_list'])) {
					unset($all_dimensions_static_t2[$dimension_name]);
				}
			}
			foreach($all_dimensions_taxonomy_t2 as $dimension_name=> $dimension_value_array){
				if (array_key_exists($dimension_name, $all_dimensions_black_list['all_dimensions_taxonomy_black_list'])) {
					unset($all_dimensions_taxonomy_t2[$dimension_name]);
				}
			}
			foreach($all_dimensions_custom_field_t2 as $dimension_name=> $dimension_value_array){
				if (array_key_exists($dimension_name, $all_dimensions_black_list['all_dimensions_custom_field_black_list'])) {
					unset($all_dimensions_custom_field_t2[$dimension_name]);
				}
			}
			$all_dimensions['all_dimensions_static']=$all_dimensions_static_t2;
			$all_dimensions['all_dimensions_taxonomy']=$all_dimensions_taxonomy_t2;
			$all_dimensions['all_dimensions_custom_field']=$all_dimensions_custom_field_t2;
		}
}


	//remove empty $dimensions
	foreach($all_dimensions as $dimensions_group_name=>$dimensions_group_array ){
		foreach($dimensions_group_array as $dimension_name=> $dimension_value_array){
			if (empty($dimension_value_array)) {
				unset($all_dimensions[$dimensions_group_name][$dimension_name]);
			}
		}
	}
	//

	
	
return $all_dimensions;


}
}
?>