function if_ajax_save_botton_in_setting_section_clicked(type_of_ajax_request){
	active_tab_in_setting = jQuery( "#vtabs" ).tabs( "option", "active" );
	var exclude_value_from_analys_length_more_than_x_basic = jQuery('#vtabs').find('input[name="exclude_value_from_analys_length_more_than_x_basic"]').val();
	var exclude_value_from_analys_length_more_than_x_taxonomy = jQuery('#vtabs').find('input[name="exclude_value_from_analys_length_more_than_x_taxonomy"]').val();
	var exclude_value_from_analys_length_more_than_x_custom_field = jQuery('#vtabs').find('input[name="exclude_value_from_analys_length_more_than_x_custom_field"]').val();
	//
	var hide_items_from_table_if_repeated_less_than_x_basic = jQuery('#vtabs').find('input[name="hide_items_from_table_if_repeated_less_than_x_basic"]').val();
	var hide_items_from_table_if_repeated_less_than_x_taxonomy = jQuery('#vtabs').find('input[name="hide_items_from_table_if_repeated_less_than_x_taxonomy"]').val();
	var hide_items_from_table_if_repeated_less_than_x_custom_field = jQuery('#vtabs').find('input[name="hide_items_from_table_if_repeated_less_than_x_custom_field"]').val();
	//
	var hide_table_if_its_items_less_than_x_in_first_load_basic = jQuery('#vtabs').find('input[name="hide_table_if_its_items_less_than_x_in_first_load_basic"]').val();
	var hide_table_if_its_items_less_than_x_in_first_lod_taxonomy = jQuery('#vtabs').find('input[name="hide_table_if_its_items_less_than_x_in_first_lod_taxonomy"]').val();
	var hide_table_if_its_items_less_than_x_in_first_lod_custom_field = jQuery('#vtabs').find('input[name="hide_table_if_its_items_less_than_x_in_first_lod_custom_field"]').val();
	///////////
	var hide_table_if_its_items_less_than_x_always_basic = jQuery('#vtabs').find('input[name="hide_table_if_its_items_less_than_x_always_basic"]').val();
	var hide_table_if_its_items_less_than_x_always_taxonomy = jQuery('#vtabs').find('input[name="hide_table_if_its_items_less_than_x_always_taxonomy"]').val();
	var hide_table_if_its_items_less_than_x_always_custom_field = jQuery('#vtabs').find('input[name="hide_table_if_its_items_less_than_x_always_custom_field"]').val();
	//
	var hide_table_item_more_than_x_basic = jQuery('#vtabs').find('input[name="hide_table_item_more_than_x_basic"]').val();
	var hide_table_item_more_than_x_taxonomy = jQuery('#vtabs').find('input[name="hide_table_item_more_than_x_taxonomy"]').val();
	var hide_table_item_more_than_x_custom_field = jQuery('#vtabs').find('input[name="hide_table_item_more_than_x_custom_field"]').val();
	//
    var alternative_text_for_empty_values = jQuery('#vtabs').find('input[name="alternative_text_for_empty_values"]').val();
	var alternative_text_for_one_space_values = jQuery('#vtabs').find('input[name="alternative_text_for_one_space_values"]').val();
	//
	var hide_empty_value_items_basic = jQuery('#hide_empty_value_items_basic').is(":checked");
	var hide_empty_value_items_taxonomy = jQuery('#hide_empty_value_items_taxonomy').is(":checked");
	var hide_empty_value_items_custom_field = jQuery('#hide_empty_value_items_custom_field').is(":checked");
	//
	var hide_one_space_items_basic = jQuery('#hide_one_space_items_basic').is(":checked");
	var hide_one_space_items_taxonomy = jQuery('#hide_one_space_items_taxonomy').is(":checked");
	var hide_one_space_items_custom_field = jQuery('#hide_one_space_items_custom_field').is(":checked");
	//
	var sign_for_click_able_area_in_tabs =jQuery("input[name=sign_for_click_able_area_in_tabs]").val();
	var sign_color_for_click_able_area_in_tabs =jQuery("input[name=sign_color_for_click_able_area_in_tabs]").val();
	var sign_font_size_for_click_able_area_in_tabs =jQuery("input[name=sign_font_size_for_click_able_area_in_tabs]").val();
	//
	var analys_section_font_name_for_tabs =jQuery("input[name=analys_section_font_name_for_tabs]").val();
	var analys_section_font_size_for_tabs =jQuery("input[name=analys_section_font_size_for_tabs]").val();
	var analys_section_font_color_for_tabs =jQuery("input[name=analys_section_font_color_for_tabs]").val();
	//
	var ws_db_publish_status = jQuery('#ws_db_publish_status').is(":checked");
	var ws_db_future_status = jQuery('#ws_db_future_status').is(":checked");
	var ws_db_draft_status = jQuery('#ws_db_draft_status').is(":checked");
	var ws_db_pending_status = jQuery('#ws_db_pending_status').is(":checked");
	var ws_db_private_status = jQuery('#ws_db_private_status').is(":checked");
	var ws_db_trash_status = jQuery('#ws_db_trash_status').is(":checked");
	var ws_db_auto_draft_status = jQuery('#ws_db_auto_draft_status').is(":checked");
	var ws_db_inherit_status = jQuery('#ws_db_inherit_status').is(":checked");
	//
	exclude_posts_by_statuses ={'publish': ws_db_publish_status ,'future':ws_db_future_status  ,'draft':ws_db_draft_status  ,'pending':ws_db_pending_status  ,'private':ws_db_private_status  ,'trash':ws_db_trash_status  ,'auto-draft': ws_db_auto_draft_status ,'inherit':ws_db_inherit_status  ,};
	
	//
	if(jQuery('#table_chart22_width_auto').is(":checked")){ var table_chart22_width_auto = 'true'}else{var table_chart22_width_auto = 'false'}
	if(jQuery('#table_chart22_height_auto').is(":checked")){ var table_chart22_height_auto = 'true'}else{var table_chart22_height_auto = 'false'}
	if(jQuery('#table_chart22_page').is(":checked")){ var table_chart22_page = 'true'}else{var table_chart22_page = 'false'}
	if(jQuery('#table_chart22_rtl_table').is(":checked")){ var table_chart22_rtl_table = 'true'}else{var table_chart22_rtl_table = 'false'}
	if(jQuery('#table_chart22_show_row_number').is(":checked")){ var table_chart22_show_row_number = 'true'}else{var table_chart22_show_row_number = 'false'}
	if(jQuery('#table_chart22_sort').is(":checked")){ var table_chart22_sort = 'true'}else{var table_chart22_sort = 'false'}
	if(jQuery('#table_chart22_sort_ascending').is(":checked")){ var table_chart22_sort_ascending = 'true'}else{var table_chart22_sort_ascending = 'false'}
	table_chart_default_settings ={	
		'table_chart22_width_auto' : table_chart22_width_auto,	
		'table_chart22_height_auto' : table_chart22_height_auto,
		'table_chart22_page' : table_chart22_page,
		'table_chart22_rtl_table' : table_chart22_rtl_table,
		'table_chart22_show_row_number' : table_chart22_show_row_number,
		'table_chart22_sort' : table_chart22_sort,
		'table_chart22_sort_ascending' : table_chart22_sort_ascending,
		//
		'table_chart22_width_px' : jQuery("input[name=table_chart22_width_px]").val(),
		'table_chart22_height_px' : jQuery("input[name=table_chart22_height_px]").val(),
		//
		'table_chart22_Start_Position' : jQuery("input[name=table_chart22_Start_Position]").val(),
		'table_chart22_sort_column' : jQuery("input[name=table_chart22_sort_column]").val(),
		'table_chart22_start_page' : jQuery("input[name=table_chart22_start_page]").val(),
		'table_chart22_page_size' : jQuery("input[name=table_chart22_page_size]").val(),
		//
		'table_chart22_height_px' : jQuery("input[name=table_chart22_height_px]").val(),
		'table_chart22_height_px' : jQuery("input[name=table_chart22_height_px]").val(),
		//
	};
	
	//
	
	nav_path_first_static_settings ={
		'nav_path11_first_static_alternative_text' : jQuery("input[name=nav_path11_first_static_alternative_text]").val(),
		
	}
	
	//
	nav_path_group_element_settings ={	
		'nav_path11_group_element_alternative_text_basic' : jQuery("input[name=nav_path11_group_element_alternative_text_basic]").val(),
		'nav_path11_group_element_alternative_text_taxo' : jQuery("input[name=nav_path11_group_element_alternative_text_taxo]").val(),
		'nav_path11_group_element_alternative_text_field' : jQuery("input[name=nav_path11_group_element_alternative_text_field]").val(),
	}
	
	//
	nav_path_sign_after_group_settings ={	
		'nav_path11_sign_after_group_alternative_text' : jQuery("input[name=nav_path11_sign_after_group_alternative_text]").val(),
	}

	//
	nav_path_sign_after_dimension_settings ={
		'nav_path11_sign_after_dimension_alternative_text' : jQuery("input[name=nav_path11_sign_after_dimension_alternative_text]").val(),
	}
	//

	nav_path_number_sign_settings ={	
		'nav_path11_number_sign_before_alternative_text' : jQuery("input[name=nav_path11_number_sign_before_alternative_text]").val(),
		'nav_path11_number_sign_after_alternative_text' : jQuery("input[name=nav_path11_number_sign_after_alternative_text]").val(),
	}
	//
	nav_path_delete_sign_settings ={	
		'nav_path11_delete_sign_alternative_image_url' : jQuery("input[name=nav_path11_delete_sign_alternative_image_url]").val(),
		'nav_path11_delete_sign_alternative_text' : jQuery("input[name=nav_path11_delete_sign_alternative_text]").val(),
		'nav_path11_delete_sign_image_width' : jQuery("input[name=nav_path11_delete_sign_image_width]").val(),

	}
	nav_path_hover_unhover_settings ={
		'nav_path11_hover_remained_areas' : jQuery("input[name=nav_path11_hover_remained_areas]").val(),
		'nav_path11_hover_deleted_areas' : jQuery("input[name=nav_path11_hover_deleted_areas]").val(),
	}
	//ta inja tanzimat be object enteghal dade shod
	
	var ddd=0;
	post_list_rr_content_for_list_items={};
	jQuery('#post_list_sortable_target > li').each(function(i, elm){
		ddd++;
		 var dimension_gruop_154 = jQuery(this).find(".dimension_gruop_154").text();
		 var dimension_name_153 = jQuery(this).find('.dimension_name_153').text();
		 var dimension_name_visible_text_154 = jQuery(this).find('.dimension_name_154').justtext();
		 options_for_this_dimension ={'dimension_gruop':dimension_gruop_154};
		 options_for_this_dimension ['dimension_name']=dimension_name_153;
		 options_for_this_dimension ['dimension_name_visible_text']=dimension_name_visible_text_154;
		 post_list_rr_content_for_list_items[ddd] =options_for_this_dimension;	
	});
	//console.log(post_list_rr_content_for_list_items);
	//
	post_list_pagination315={
		'post_list_pagination315_post_per_page' : jQuery("input[name=post_list_pagination315_post_per_page]").val(),
		'post_list_pagination315_max_visible_pagination' : jQuery("input[name=post_list_pagination315_max_visible_pagination]").val(),
		'post_list_pagination315_alternative_for_next_sign' : jQuery("input[name=post_list_pagination315_alternative_for_next_sign]").val(),
		'post_list_pagination315_alternative_for_prev_sign' : jQuery("input[name=post_list_pagination315_alternative_for_prev_sign]").val(),
		'post_list_pagination315_alternative_for_first_button' : jQuery("input[name=post_list_pagination315_alternative_for_first_button]").val(),
		'post_list_pagination315_alternative_for_last_button' : jQuery("input[name=post_list_pagination315_alternative_for_last_button]").val(),
	};
	//
	var ddds=0;
	single_post_rr_content_for_single_post={};
	jQuery('#single_post_sortable_target > li').each(function(i, elm){
		ddds++;
		 var dimension_gruop_155 = jQuery(this).find(".dimension_gruop_155").text();
		 var dimension_name_156 = jQuery(this).find('.dimension_name_156').text();
		 var current_dimension_name_visible_text_x155 = jQuery(this).find('.dimension_name_155').justtext();
		 options_for_this_dimension ={'dimension_gruop':dimension_gruop_155};
		 options_for_this_dimension ['dimension_name']=dimension_name_156;
		 options_for_this_dimension ['dimension_name_visible_text']=current_dimension_name_visible_text_x155;
		 single_post_rr_content_for_single_post[ddds] =options_for_this_dimension;	
	});
	//
	var ttts=0;
	sort_charts_rr_content_for_sort_charts={};
	jQuery('#sort_charts_sortable_target > li').each(function(i, elm){
		ttts++;
		 var dimension_gruop_155 = jQuery(this).find(".dimension_gruop_155").text();
		 var dimension_name_156 = jQuery(this).find('.dimension_name_156').text();
		 var current_dimension_name_visible_text_x155 = jQuery(this).find('.dimension_name_155').justtext();
		 options_for_this_dimension ={'dimension_gruop':dimension_gruop_155};
		 options_for_this_dimension ['dimension_name']=dimension_name_156;
		 options_for_this_dimension ['dimension_name_visible_text']=current_dimension_name_visible_text_x155;
		 sort_charts_rr_content_for_sort_charts[ttts] =options_for_this_dimension;	
	});
	//
	var tttc=0;
	default_queries={};
	jQuery('#default_queries_container_id > div').each(function(i, elm){
		tttc++;
		 var default_query_query_type = jQuery(this).find(".ws_db_default_query_type_part").text();
		 var default_query_selected_group = jQuery(this).find('.ws_db_default_query_group_part').text();
		 var default_query_selected_dimension = jQuery(this).find('.ws_db_default_query_dimension_part').text();
		 var default_query_selected_value = jQuery(this).find('.ws_db_default_query_value_part').text();
		 options_for_this_dimension ={'query_type':default_query_query_type};
		 options_for_this_dimension ['group']=default_query_selected_group;
		 options_for_this_dimension ['dimension']=default_query_selected_dimension;
		 options_for_this_dimension ['value']=default_query_selected_value;
		 default_queries[tttc] =options_for_this_dimension;	
	});
	
	//
	merge_them_all_together ={
		'type_of_ajax_request':type_of_ajax_request,
		//
		'exclude_value_from_analys_length_more_than_x_basic':exclude_value_from_analys_length_more_than_x_basic,
		'exclude_value_from_analys_length_more_than_x_taxonomy':exclude_value_from_analys_length_more_than_x_taxonomy,
		'exclude_value_from_analys_length_more_than_x_custom_field':exclude_value_from_analys_length_more_than_x_custom_field,
		//
		'hide_items_from_table_if_repeated_less_than_x_basic':hide_items_from_table_if_repeated_less_than_x_basic,
		'hide_items_from_table_if_repeated_less_than_x_taxonomy':hide_items_from_table_if_repeated_less_than_x_taxonomy,
		'hide_items_from_table_if_repeated_less_than_x_custom_field':hide_items_from_table_if_repeated_less_than_x_custom_field,
		//
		'hide_table_if_its_items_less_than_x_in_first_load_basic':hide_table_if_its_items_less_than_x_in_first_load_basic,
		'hide_table_if_its_items_less_than_x_in_first_lod_taxonomy':hide_table_if_its_items_less_than_x_in_first_lod_taxonomy,
		'hide_table_if_its_items_less_than_x_in_first_lod_custom_field':hide_table_if_its_items_less_than_x_in_first_lod_custom_field,
		//
		'hide_table_if_its_items_less_than_x_always_basic':hide_table_if_its_items_less_than_x_always_basic,
		'hide_table_if_its_items_less_than_x_always_taxonomy':hide_table_if_its_items_less_than_x_always_taxonomy,
		'hide_table_if_its_items_less_than_x_always_custom_field':hide_table_if_its_items_less_than_x_always_custom_field,
		//
		'hide_table_item_more_than_x_basic':hide_table_item_more_than_x_basic ,
		'hide_table_item_more_than_x_taxonomy':hide_table_item_more_than_x_taxonomy ,
		'hide_table_item_more_than_x_custom_field':hide_table_item_more_than_x_custom_field ,
		//
		'alternative_text_for_empty_values':alternative_text_for_empty_values,
		'alternative_text_for_one_space_values':alternative_text_for_one_space_values,
		//
		'hide_empty_value_items_basic':hide_empty_value_items_basic,
		'hide_empty_value_items_taxonomy':hide_empty_value_items_taxonomy,
		'hide_empty_value_items_custom_field':hide_empty_value_items_custom_field,
		//
		'hide_one_space_items_basic':hide_one_space_items_basic,
		'hide_one_space_items_taxonomy':hide_one_space_items_taxonomy,
		'hide_one_space_items_custom_field':hide_one_space_items_custom_field,
		//
		'exclude_posts_by_statuses':exclude_posts_by_statuses,
		//
		'table_chart_default_settings':table_chart_default_settings,
		//
		'nav_path_first_static_settings':nav_path_first_static_settings,
		'nav_path_group_element_settings':nav_path_group_element_settings,
		'nav_path_sign_after_group_settings':nav_path_sign_after_group_settings,
		'nav_path_sign_after_dimension_settings':nav_path_sign_after_dimension_settings,
		'nav_path_number_sign_settings':nav_path_number_sign_settings,
		'nav_path_delete_sign_settings':nav_path_delete_sign_settings,
		'nav_path_hover_unhover_settings':nav_path_hover_unhover_settings,
		//
		'post_list_pagination315':post_list_pagination315,
		//
		'post_list_rr_content_for_list_items':post_list_rr_content_for_list_items,
		'single_post_rr_content_for_single_post':single_post_rr_content_for_single_post,
		'sort_charts_rr_content_for_sort_charts':sort_charts_rr_content_for_sort_charts,
		//
		'object_all_style_stting_container':object_all_style_stting_container,
		//
		'default_queries':default_queries,
	};	
	
	
	console.log(object_all_style_stting_container);
	
	if(type_of_ajax_request=="reset_botton_in_setting_section_clicked"){
		var r = confirm("reset this data browser?");
		if (r == false) 
			return;	
		}
	
	
	
	
	
	
	 if( jQuery('#ws_db_this_browser_id_setting_section').length ){
			var type_of_save_request='saving_settings_to_selected_browser_id';
			var this_browser_id=jQuery('#ws_db_this_browser_id_setting_section').text();
		}else{
			var type_of_save_request='saving_settings_to_unselected_browser_id';	
			var this_browser_id='0';
		}
	var this_browser_title_name=jQuery("input[name=this_browser_title_name]").val();
	var JSON_stringify = JSON.stringify(merge_them_all_together);
	ws_db_during_ajax_backend();
	jQuery.ajax({
		type: "POST",
		url: pefix_handel.name_1,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'merge_them_all_together': JSON_stringify,
			'type_of_save_request':type_of_save_request,
			'this_browser_id':this_browser_id,
			'this_browser_title_name':this_browser_title_name,
		},
		success: function(msg) {
			if(type_of_ajax_request=='reset_botton_in_setting_section_clicked'){
				reset_all_var_in_document();
			}else if(type_of_ajax_request=='close_botton_in_setting_section_clicked'){
				reset_all_var_in_document();
			}else if(type_of_ajax_request=='save_and_close_botton_in_setting_section_clicked'){
				reset_all_var_in_document();
			}
			jQuery('#result_section_in_setting_ui').html(msg);
			jQuery( "#vtabs" ).tabs({ active: active_tab_in_setting});
			jQuery(function () {
				jQuery("#vtabs").tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
				jQuery( "#vtabs" ).tabs( "option", "show", { effect: "fade", duration: 500 } );
				jQuery( "#vtabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
			});
			if (type_of_ajax_request=='reset_botton_in_setting_section_clicked' || type_of_ajax_request=='save_botton_in_setting_section_clicked'){
			
			  //ws_db_draw_chart();
			jQuery('.ws_db_color_field').wpColorPicker();
			jQuery(document).foundation();	
			jQuery( '.ws_element_sortable' ).sortable({});
			jQuery( "ul.post_list_droptrue" ).sortable({
				connectWith: "ul"
			});
			jQuery( "ul.post_list_dropfalse" ).sortable({
				connectWith: "ul",
				dropOnEmpty: false
			});
			}
			if (type_of_ajax_request=='save_and_close_botton_in_setting_section_clicked' || type_of_ajax_request=='save_botton_in_setting_section_clicked'){	
				jQuery('.ws_db_success_massage_bakend').fadeIn('slow');
				jQuery('.ws_db_success_massage_bakend').delay(1000).fadeOut('slow');
			}
		},
		complete: function() {
			ws_db_complete_ajax_backend();
		},
		error: function(data){
			jQuery('.ws_db_fail_massage_bakend').fadeIn('slow');
			jQuery('.ws_db_fail_massage_bakend').delay(1000).fadeOut('slow');
			// alert(data);
		},
	});
}


function if_create_new_browser_botton_clicked(type_of_ajax_request){
	ws_db_during_ajax_backend();
	jQuery.ajax({
		type: "POST",
		url: pefix_handel.name_1,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
		},
		success: function(msg) {
			jQuery('#result_section_in_setting_ui').html(msg);
			 jQuery(function () {
				jQuery("#vtabs").tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
				jQuery( "#vtabs" ).tabs( "option", "show", { effect: "fade", duration: 500 } );
				jQuery( "#vtabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
			});
			  //ws_db_draw_chart();
			jQuery('.ws_db_color_field').wpColorPicker();
			jQuery(document).foundation();
			jQuery( '.ws_element_sortable' ).sortable({});
			jQuery( "ul.post_list_droptrue" ).sortable({
				connectWith: "ul"
			});
			jQuery( "ul.post_list_dropfalse" ).sortable({
				connectWith: "ul",
				dropOnEmpty: false
			});
		},
		complete: function() {
			ws_db_complete_ajax_backend();
		},
		error: function(data){
			jQuery('.ws_db_fail_massage_bakend').fadeIn('slow');
			jQuery('.ws_db_fail_massage_bakend').delay(1000).fadeOut('slow');
			// alert(data);
		},
	});
}

function if_edit_botton_in_browsers_list_clicked(){
	var this_browser_id =jQuery( this ).find('.ws_db_browser_id_in_browser_list').text();
	var type_of_ajax_request =jQuery( this ).find('.ws_db_request_type_in_browser_list').text();
	
	
	if(type_of_ajax_request=="delete_botton_in_browsers_list_clicked"){
		var r = confirm("delete this data browser?");
		if (r == false) 
			return;	
		}

	ws_db_during_ajax_backend();
	jQuery.ajax({
		type: "POST",
		url: pefix_handel.name_1 ,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			reset_all_var_in_document();
			jQuery('#result_section_in_setting_ui').html(msg);
			jQuery(function () {
				jQuery("#vtabs").tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
				jQuery( "#vtabs" ).tabs( "option", "show", { effect: "fade", duration: 500 } );
				jQuery( "#vtabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
			});
			  //ws_db_draw_chart();
			jQuery('.ws_db_color_field').wpColorPicker();
			jQuery(document).foundation();
			jQuery( '.ws_element_sortable' ).sortable({});
			jQuery( "ul.post_list_droptrue" ).sortable({
				connectWith: "ul"
			});
			jQuery( "ul.post_list_dropfalse" ).sortable({
				connectWith: "ul",
				dropOnEmpty: false
			});
		},
		complete: function() {
			ws_db_complete_ajax_backend();
		},
		error: function(data){
			jQuery('.ws_db_fail_massage_bakend').fadeIn('slow');
			jQuery('.ws_db_fail_massage_bakend').delay(1000).fadeOut('slow');
			// alert(data);
		},
	});
}
jQuery(document).on("click",".edit_botton_in_browsers_list", if_edit_botton_in_browsers_list_clicked);
jQuery(document).on("click",".delete_botton_in_browsers_list", if_edit_botton_in_browsers_list_clicked);
jQuery(document).on("click",".duplicate_botton_in_browsers_list", if_edit_botton_in_browsers_list_clicked);