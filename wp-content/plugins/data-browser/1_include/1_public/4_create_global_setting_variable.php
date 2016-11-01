<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_create_global_setting_variable' ) ) {
	function ws_db_create_global_setting_variable($browser_id)
	{
		global $ws_db_all_setting;
		$ws_db_all_setting_from_meta = get_post_meta($browser_id, 'ws_db_all_setting');
		$ws_db_all_setting = $ws_db_all_setting_from_meta[0];
		if($ws_db_all_setting=='' or $ws_db_all_setting===false or empty($ws_db_all_setting) ){	
				$ws_db_all_setting =	array (
				  'active_tab_in_setting' =>'0',
				  'all_dimensions_user_sort' => '',
				  'all_dimensions_group_user_sort' => '',
				  'exclude_value_from_analys_length_more_than_x_basic' =>'60' ,
				  'exclude_value_from_analys_length_more_than_x_taxonomy' =>'60',
				  'exclude_value_from_analys_length_more_than_x_custom_field' =>'60',
				  'hide_items_from_table_if_repeated_less_than_x_basic' =>'0',
				  'hide_items_from_table_if_repeated_less_than_x_taxonomy' =>'0',
				  'hide_items_from_table_if_repeated_less_than_x_custom_field' =>'0',
				  'hide_table_if_its_items_less_than_x_in_first_load_basic' =>'2',
				  'hide_table_if_its_items_less_than_x_in_first_lod_taxonomy' =>'2',
				  'hide_table_if_its_items_less_than_x_in_first_lod_custom_field' =>'3',
				  'hide_table_if_its_items_less_than_x_always_basic' =>'2',
				  'hide_table_if_its_items_less_than_x_always_taxonomy' =>'2',
				  'hide_table_if_its_items_less_than_x_always_custom_field' =>'2',
				  'hide_table_item_more_than_x_basic' =>'0',
				  'hide_table_item_more_than_x_taxonomy' =>'0',
				  'hide_table_item_more_than_x_custom_field' =>'0',
				  'alternative_text_for_empty_values' =>'empty_value',
				  'hide_empty_value_items_basic' =>'false',
				  'hide_empty_value_items_taxonomy' =>'false',
				  'hide_empty_value_items_custom_field' =>'false',
				  
				  'hide_one_space_items_basic' =>'false',
				  'hide_one_space_items_taxonomy' =>'false',
				  'hide_one_space_items_custom_field' =>'false',
				  
				  'exclude_posts_by_statuses' => 
					array (
					  'publish' =>'true',
					),
				);
				}	
		//
		$opt1=$ws_db_all_setting['exclude_value_from_analys_length_more_than_x_basic'];
		$opt1 =(int)$opt1; 
		if($opt1==0){$opt1=10000;}
		$ws_db_all_setting['exclude_value_from_analys_length_more_than_x_basic']= $opt1;
		//
		$opt2=$ws_db_all_setting['exclude_value_from_analys_length_more_than_x_taxonomy'];
		$opt2 =(int)$opt2; 
		if($opt2==0){$opt2=10000;}
		$ws_db_all_setting['exclude_value_from_analys_length_more_than_x_taxonomy']= $opt2;
		//
		$opt3=$ws_db_all_setting['exclude_value_from_analys_length_more_than_x_custom_field'];
		$opt3 =(int)$opt3; 
		if($opt3==0){$opt3=10000;}
		$ws_db_all_setting['exclude_value_from_analys_length_more_than_x_custom_field']= $opt3;
		//
		$opt4=$ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_basic'];
		$opt4 =(int)$opt4; 
		$ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_basic']= $opt4;
		//
		$opt5=$ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_taxonomy'];
		$opt5 =(int)$opt5; 
		$ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_taxonomy']= $opt5;
		//
		$opt6=$ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_custom_field'];
		$opt6 =(int)$opt6; 
		$ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_custom_field']= $opt6;
		//
		$opt7=$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_load_basic'];
		$opt7 =(int)$opt7; 
		$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_load_basic']= $opt7;
		//
		$opt8=$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_lod_taxonomy'];
		$opt8 =(int)$opt8; 
		$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_lod_taxonomy']= $opt8;
		//
		$opt9=$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_lod_custom_field'];
		$opt9 =(int)$opt9; 
		$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_lod_custom_field']= $opt9;
		/////////////////
		$opt73=$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_basic'];
		$opt73 =(int)$opt73; 
		$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_basic']= $opt73;
		//
		$opt83=$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_taxonomy'];
		$opt83 =(int)$opt83; 
		$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_taxonomy']= $opt83;
		//
		$opt93=$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_custom_field'];
		$opt93 =(int)$opt93; 
		$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_custom_field']= $opt93;
		/////////////////
		$opt10=$ws_db_all_setting['hide_table_item_more_than_x_basic'];
		$opt10 =(int)$opt10; 
		if($opt10==0){$opt10=10000;}
		$ws_db_all_setting['hide_table_item_more_than_x_basic']= $opt10;
		//
		$opt11=$ws_db_all_setting['hide_table_item_more_than_x_taxonomy'];
		$opt11 =(int)$opt11; 
		if($opt11==0){$opt11=10000;}
		$ws_db_all_setting['hide_table_item_more_than_x_taxonomy']= $opt11;
		//
		$opt12=$ws_db_all_setting['hide_table_item_more_than_x_custom_field'];
		$opt12 =(int)$opt12; 
		if($opt12==0){$opt12=10000;}
		$ws_db_all_setting['hide_table_item_more_than_x_custom_field']= $opt12;


		
	}
}
?>