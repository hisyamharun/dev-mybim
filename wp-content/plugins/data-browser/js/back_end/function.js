//get justtext of selected element
jQuery.fn.justtext = function() {
		return jQuery(this)  .clone()
				.children()
				.remove()
				.end()
				.text();
	};
jQuery('#colorpicker').on('change', function() {
	//var color    = jQuery('#colorpicker').val();
	//alert(this.value);
	//hexcolor = jQuery('#hexcolor');
    //hexcolor.html(this.value);
});

/******************************************************************************************************/
function ws_db_transfer_all_li_to_another_ul (from_this , to_this){
	jQuery('.'+from_this+' > li').remove().prependTo('.'+to_this);
}



/******************************************************************************************************/
function ws_db_during_ajax_backend(){
	jQuery(".wsdb_loading_back_end").show();
}
function ws_db_complete_ajax_backend(){
	jQuery(".wsdb_loading_back_end").hide();
}
/******************************************************************************************************/

 //#default_queries_container_id'), jQuery('.ws_db_default_query_single_query'
function ws_db_default_query_checke_no_default_query_existence(){
	if (jQuery( "#default_queries_container_id" ).has( ".ws_db_default_query_single_query" ).length) {
		jQuery(".ws_db_default_no_default_query_founded").hide();
	}else{
		jQuery(".ws_db_default_no_default_query_founded").show();
	}
}
 
 
 function ws_db_default_query_if_delete_this_query_sign_clicked(){
	var this_query =jQuery( this ).parent();
	jQuery( this_query ).remove();
	 ws_db_default_query_checke_no_default_query_existence();
}
jQuery(document).on("click",".ws_db_default_query_delete_icon_part", ws_db_default_query_if_delete_this_query_sign_clicked);
 
 
 
 
 
 
 
 
 function ws_db_default_query_group_select(selected) {
	   if (selected.value == "basic"){
			jQuery("#basic_select_box_default_query").show();
			jQuery("#taxo_select_box_default_query").hide();
			jQuery("#field_select_box_default_query").hide();
			jQuery("#values_of_Selected_dimension_container_id").hide();
			jQuery('.ws_db_default_query_select_dimension').prop('selectedIndex',0);
			//
			jQuery("#ws_db_default_query_add_this_query_botton").show();
	   }else if (selected.value == "taxo"){
			jQuery("#basic_select_box_default_query").hide();
			jQuery("#taxo_select_box_default_query").show();
			jQuery("#field_select_box_default_query").hide();
			jQuery("#values_of_Selected_dimension_container_id").hide();
			jQuery('.ws_db_default_query_select_dimension').prop('selectedIndex',0);
			//
			jQuery("#ws_db_default_query_add_this_query_botton").show();
	   }else if (selected.value == "field"){
			jQuery("#basic_select_box_default_query").hide();
			jQuery("#taxo_select_box_default_query").hide();
			jQuery("#field_select_box_default_query").show();
			jQuery("#values_of_Selected_dimension_container_id").hide();
			jQuery('.ws_db_default_query_select_dimension').prop('selectedIndex',0);
			//
			jQuery("#ws_db_default_query_add_this_query_botton").show();
	   }else if (selected.value == "NOT SELECTED"){
			jQuery("#basic_select_box_default_query").hide();
			jQuery("#taxo_select_box_default_query").hide();
			jQuery("#field_select_box_default_query").hide();
			jQuery("#values_of_Selected_dimension_container_id").hide();
			jQuery('.ws_db_default_query_select_dimension').prop('selectedIndex',0);
			//
			jQuery("#ws_db_default_query_add_this_query_botton").hide();
			
	   }
    }

 function ws_db_default_query_dimension_select_box(selected ,group ) {
		var selected_value = selected.value ;
		jQuery(".ws_db_default_query_during_ajax_sign").show();
		jQuery.ajax({
		type: "POST",
		url: pefix_handel.name_1,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':'get_values_of_Selected_dimension',
			'selected_value':selected_value,
			'group':group,
		},
		success: function(msg) {
			jQuery('#values_of_Selected_dimension_container_id').html(msg);
			jQuery("#values_of_Selected_dimension_container_id").show();
		},
		complete: function() {
			jQuery(".ws_db_default_query_during_ajax_sign").hide();
		},
		
		});
    }
	
 function if_add_new_default_query_botton_in_setting_section_clicked()	{
	jQuery("#ws_db_default_query_box_for_slect_query_system").show();
	jQuery("#ws_db_default_query_add_new_query_botton").hide();
	jQuery("#ws_db_default_query_cancel_this_query_botton").show();
	jQuery("#ws_db_default_query_add_this_query_botton").hide();
	 ws_db_default_query_checke_no_default_query_existence();
 }
   function if_cancel_this_query_botton_in_setting_section_clicked()	{
		jQuery('.ws_db_default_query_select_group').prop('selectedIndex',0);
		jQuery("#ws_db_default_query_box_for_slect_query_system").hide();
		jQuery("#ws_db_default_query_cancel_this_query_botton").hide();
		jQuery("#ws_db_default_query_add_this_query_botton").hide();
		jQuery("#ws_db_default_query_add_new_query_botton").show();
		//
		jQuery("#basic_select_box_default_query").hide();
		jQuery("#taxo_select_box_default_query").hide();
		jQuery("#field_select_box_default_query").hide();
		jQuery("#values_of_Selected_dimension_container_id").hide();
		jQuery('.ws_db_default_query_select_dimension').prop('selectedIndex',0);
		//
  }
  function if_add_this_default_query_botton_in_setting_section_clicked()	{
	var selected_group = jQuery( "#ws_db_default_query_group_select_input" ).val();
	if(selected_group=="basic"){
		var selected_dimension = jQuery( "#ws_db_default_query_basic_select_input" ).val();	
		if (selected_dimension=="NOT SELECTED"){
			//create query item - type: first level
			var query_type="level_one";
			var selected_value="NOT SELECTED";
			
		}else{
			var selected_value = jQuery( "#ws_db_default_query_part_select_input_value" ).val();
			if (selected_value=="NOT SELECTED"){
				var query_type="level_two";
			}else{
				var query_type="level_three";
			}
		}
	}else if(selected_group=="taxo"){
		var selected_dimension = jQuery( "#ws_db_default_query_taxo_select_input" ).val();	
		if (selected_dimension=="NOT SELECTED"){
			//create query item - type: first level
			var query_type="level_one";
			var selected_value="NOT SELECTED";
			
		}else{
			var selected_value = jQuery( "#ws_db_default_query_part_select_input_value" ).val();
			if (selected_value=="NOT SELECTED"){
				var query_type="level_two";
			}else{
				var query_type="level_three";
			}
		}
	}else if(selected_group=="field"){
		var selected_dimension = jQuery( "#ws_db_default_query_field_select_input" ).val();	
		if (selected_dimension=="NOT SELECTED"){
			//create query item - type: first level
			var query_type="level_one";
			var selected_value="NOT SELECTED";
			
		}else{
			var selected_value = jQuery( "#ws_db_default_query_part_select_input_value" ).val();
			if (selected_value=="NOT SELECTED"){
				var query_type="level_two";
			}else{
				var query_type="level_three";
			}
		}
	}
	
	if(query_type=="level_one"){
		var html_for_for_this_query_item='\
		<div class="ws_db_default_query_single_query"  style=" background-color: #88b9ff;" >\
			<span class="ws_db_default_query_type_part" style="display:none;">'+query_type+'</span>\
			<span class="ws_db_default_query_group_part">'+selected_group+'</span>\
			<span  class="ws_db_default_query_first_delimiter_part" style="display:none;" > : </span>\
			<span class="ws_db_default_query_dimension_part" style="display:none;">'+selected_dimension+'</span>\
			<span  class="ws_db_default_query_second_delimiter_part" style="display:none;" > : </span>\
			<span class="ws_db_default_query_value_part" style="display:none;">'+selected_value+'</span>\
			<i class="fa fa-times-circle ws_db_default_query_delete_icon_part" ></i>\
		</div>';
		
	}else if(query_type=="level_two"){
		var html_for_for_this_query_item='\
		<div class="ws_db_default_query_single_query"  style=" background-color: #88b9ff;" >\
			<span class="ws_db_default_query_type_part" style="display:none;">'+query_type+'</span>\
			<span class="ws_db_default_query_group_part">'+selected_group+'</span>\
			<span class="ws_db_default_query_first_delimiter_part" > : </span>\
			<span class="ws_db_default_query_dimension_part">'+selected_dimension+'</span>\
			<span  class="ws_db_default_query_second_delimiter_part"  style="display:none;" > : </span>\
			<span class="ws_db_default_query_value_part"  style="display:none;">'+selected_value+'</span>\
			<i class="fa fa-times-circle ws_db_default_query_delete_icon_part" ></i>\
		</div>';
	}else if(query_type=="level_three"){
		var html_for_for_this_query_item='\
		<div class="ws_db_default_query_single_query"  style=" background-color: #88b9ff;" >\
			<span class="ws_db_default_query_type_part" style="display:none;">'+query_type+'</span>\
			<span class="ws_db_default_query_group_part">'+selected_group+'</span>\
			<span class="ws_db_default_query_first_delimiter_part"  > : </span>\
			<span class="ws_db_default_query_dimension_part">'+selected_dimension+'</span>\
			<span  class="ws_db_default_query_second_delimiter_part"  > : </span>\
			<span class="ws_db_default_query_value_part">'+selected_value+'</span>\
			<i class="fa fa-times-circle ws_db_default_query_delete_icon_part" ></i>\
		</div>';
	}

		jQuery("#default_queries_container_id"  ).append( html_for_for_this_query_item );
		if_cancel_this_query_botton_in_setting_section_clicked();
		ws_db_default_query_checke_no_default_query_existence();
 }

 
  function if_add_a_value_to_value_select_botton_in_setting_section_clicked(){
	  var new_option = jQuery('#ws_db_default_query_add_a_value_to_value_select_input').val();
	  if (!new_option.trim()) {
			// is empty or whitespace
			alert("the input is empty!");
		}else{
			jQuery('#ws_db_default_query_part_select_input_value').prepend(jQuery('<option>', {
				value: new_option,
				text: new_option
			})
			);
			jQuery('#ws_db_default_query_part_select_input_value').val(new_option).prop('selected', true);
			jQuery('#ws_db_default_query_add_a_value_to_value_select_input').val('');
			
		}
	  
  }
	
	function ws_db_default_query_if_delete_this_query_sign_hovered(evt) {
		var target = jQuery(evt.target);
		var this_parent =jQuery( target ).parent();
		if ( target.hasClass( "ws_db_default_query_delete_icon_part") ) {
			jQuery( this_parent ).css( "background-color", "#ff9c9c"  );
		}
	}
	function ws_db_default_query_if_delete_this_query_sign_unhovered(evt) {
		var target = jQuery(evt.target);
		var this_parent =jQuery( target ).parent();
		if ( target.hasClass( "ws_db_default_query_delete_icon_part") ) {
			jQuery( this_parent ).css( "background-color", "#88b9ff"  );
		}	
			
	}
	jQuery(document).bind('mouseover', ws_db_default_query_if_delete_this_query_sign_hovered);
	jQuery(document).bind('mouseout', ws_db_default_query_if_delete_this_query_sign_unhovered);
/******************************************************************************************************/
jQuery(document).ready(function($){
	var myOptions2 = {
    // you can declare a default color here,
    // or in the data-default-color attribute on the input
    defaultColor: false,
    // a callback to fire whenever the color changes to a valid color
    change: function(event, ui){},
	};	
    $('.ws_db_color_field').wpColorPicker(myOptions2);
});
/******************************************************************************************************/
  jQuery(function() {
    jQuery( "ul.post_list_droptrue" ).sortable({
      connectWith: "ul"
    });
    jQuery( "ul.post_list_dropfalse" ).sortable({
      connectWith: "ul",
      dropOnEmpty: false
    });
  });
/******************************************************************************************************
jQuery(document).ready(function($){
	jQuery(function () {
		jQuery("#vtabs").tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
		jQuery( "#vtabs" ).tabs( "option", "show", { effect: "fade", duration: 500 } );
		jQuery( "#vtabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
	});
    
});
/******************************************************************************************************/
//sortable functionality
  jQuery(function() {
    jQuery( ".ws_element_sortable" ).sortable({
     // placeholder: "ui-state-highlight"
    });
    //jQuery( ".ws_element_sortable" ).disableSelection();
  });
/******************************************************************************************************/  
//Initialize Foundation JS 
jQuery(document).ready(function() {
   jQuery(document).foundation();
});
/******************************************************************************************************/

/*****************************************************************************************************************/
function reset_all_var_in_document(){
object_all_style_stting_container=undefined;
if (typeof object_all_style_stting_container === "undefined"){
	object_all_style_stting_container ={
		'general':{
			'exclude_value_from_analys_length_more_than_x_basic':'60',
			'exclude_value_from_analys_length_more_than_x_taxonomy':'60',
			'exclude_value_from_analys_length_more_than_x_custom_field':'60',
			//
			'hide_items_from_table_if_repeated_less_than_x_basic':'0',
			'hide_items_from_table_if_repeated_less_than_x_taxonomy':'0',
			'hide_items_from_table_if_repeated_less_than_x_custom_field':'0',
			//
			'hide_table_if_its_items_less_than_x_in_first_load_basic':'3',
			'hide_table_if_its_items_less_than_x_in_first_lod_taxonomy':'2',
			'hide_table_if_its_items_less_than_x_in_first_lod_custom_field':'3',
			//
			'hide_table_if_its_items_less_than_x_always_basic':'0',
			'hide_table_if_its_items_less_than_x_always_taxonomy':'0',
			'hide_table_if_its_items_less_than_x_always_custom_field':'2',
			//
			'hide_table_item_more_than_x_basic':'1000',
			'hide_table_item_more_than_x_taxonomy':'1000',
			'hide_table_item_more_than_x_custom_field':'1000',
			//
			'alternative_text_for_empty_values':'empty_value',
			'alternative_text_for_one_space_values':'one_space',
			//
			'hide_empty_value_items_basic':'true',
			'hide_empty_value_items_taxonomy':'true',
			'hide_empty_value_items_custom_field':'true',
			//
			'hide_one_space_items_basic':'true',
			'hide_one_space_items_taxonomy':'true',
			'hide_one_space_items_custom_field':'true',
			//
			'exclude_posts_by_statuses':{
				'array':{
					'publish':'true',
					'future':'false',
					'draft':'false',
					'pending':'false',
					'private':'false',
					'trash':'false',
					'auto-draft':'false',
					'inherit':'false',
				}
			},
		},
		
		'chart_setting_section':{
			'pie':{
				'all_chart_setting_instance22_is_3d':'false',
				
				'all_chart_setting_instance22_slice_text_style_overwrite':'false',
				'all_chart_setting_instance22_slice_text_style_color':'#000000',
				'all_chart_setting_instance22_slice_text_style_font_name':'arial',
				'all_chart_setting_instance22_slice_text_style_font_size':'11',
				'all_chart_setting_instance22_slice_text':'percentage',
				'all_chart_setting_instance22_start_angle':'0',
				'all_chart_setting_instance22_residue_slice_color':'#ccc',
				'all_chart_setting_instance22_residue_slice_label':'other',
				
				'all_chart_setting_instance22_font_size_auto':'true',
				'all_chart_setting_instance22_font_size_px':'13',
				'all_chart_setting_instance22_font_name':'arial',
				'all_chart_setting_instance22_force_iframe':'false',
				'all_chart_setting_instance22_enable_interactivity':'true',
				'all_chart_setting_instance22_reverse_categories':'false',
				'all_chart_setting_instance22_title_text_style_overwrite':'false',
				'all_chart_setting_instance22_title_text_style_color':'#000000',
				'all_chart_setting_instance22_title_text_style_font_name':'arial',
				'all_chart_setting_instance22_title_text_style_font_size':'13',
				'all_chart_setting_instance22_title_text_style_bold':'true',
				'all_chart_setting_instance22_title_text_style_italic':'false',
				'all_chart_setting_instance22_background_color_fill':'#ffffff',
				'all_chart_setting_instance22_background_color_stroke_color':'#ddb880',
				'all_chart_setting_instance22_background_color_stroke_width':'0',
				'all_chart_setting_instance22_area_width_auto':'true',
				'all_chart_setting_instance22_area_width_px':'80%',
				'all_chart_setting_instance22_area_height_auto':'true',
				'all_chart_setting_instance22_area_height_px':'80%',
				'all_chart_setting_instance22_width_auto':'true',
				'all_chart_setting_instance22_width_px':'100%',
				'all_chart_setting_instance22_height_auto':'true',
				'all_chart_setting_instance22_height_px':'100%',
				'all_chart_setting_instance22_legend_max_lines':'',
				'all_chart_setting_instance22_legend_position':'right',
				'all_chart_setting_instance22_legend_alignment':'auto',
				'all_chart_setting_instance22_legend_text_style_overwrite':'false',
				'all_chart_setting_instance22_legend_text_style_color':'#000000',
				'all_chart_setting_instance22_legend_text_style_font_name':'',
				'all_chart_setting_instance22_legend_text_style_bold':'true',
				'all_chart_setting_instance22_legend_text_style_italic':'false',
				'all_chart_setting_instance22_legend_text_style_font_size':'13',
				'all_chart_setting_instance22_tooltip_ignore_bounds':'false',
				'all_chart_setting_instance22_tooltip_show_color':'true',
				'all_chart_setting_instance22_tooltip_trigger':'focus',
				'all_chart_setting_instance22_tooltip_text_style_overwrite':'false',
				'all_chart_setting_instance22_tooltip_text_style_color':'#000000',
				'all_chart_setting_instance22_tooltip_text_style_font_name':'arial',
				'all_chart_setting_instance22_tooltip_text_style_bold':'true',
				'all_chart_setting_instance22_tooltip_text_style_italic':'false',
				'all_chart_setting_instance22_tooltip_text_style_font_size':'13',
				
				'all_chart_setting_instance22_trendlines_enable_or_disable':'false',
				'all_chart_setting_instance22_annotations_enable_or_disable':'false',
			},
			'donut':{
				'all_chart_setting_instance22_pie_hole':'0.4',
				
				
				'all_chart_setting_instance22_slice_text_style_overwrite':'false',
				'all_chart_setting_instance22_slice_text_style_color':'#000000',
				'all_chart_setting_instance22_slice_text_style_font_name':'arial',
				'all_chart_setting_instance22_slice_text_style_font_size':'11',
				'all_chart_setting_instance22_slice_text':'percentage',
				'all_chart_setting_instance22_start_angle':'0',
				'all_chart_setting_instance22_residue_slice_color':'#ccc',
				'all_chart_setting_instance22_residue_slice_label':'other',
				
				'all_chart_setting_instance22_font_size_auto':'true',
				'all_chart_setting_instance22_font_size_px':'13',
				'all_chart_setting_instance22_font_name':'arial',
				'all_chart_setting_instance22_force_iframe':'false',
				'all_chart_setting_instance22_enable_interactivity':'true',
				'all_chart_setting_instance22_reverse_categories':'false',
				'all_chart_setting_instance22_title_text_style_overwrite':'false',
				'all_chart_setting_instance22_title_text_style_color':'#000000',
				'all_chart_setting_instance22_title_text_style_font_name':'arial',
				'all_chart_setting_instance22_title_text_style_font_size':'13',
				'all_chart_setting_instance22_title_text_style_bold':'true',
				'all_chart_setting_instance22_title_text_style_italic':'false',
				'all_chart_setting_instance22_background_color_fill':'#ffffff',
				'all_chart_setting_instance22_background_color_stroke_color':'#ddb880',
				'all_chart_setting_instance22_background_color_stroke_width':'0',
				'all_chart_setting_instance22_area_width_auto':'true',
				'all_chart_setting_instance22_area_width_px':'80%',
				'all_chart_setting_instance22_area_height_auto':'true',
				'all_chart_setting_instance22_area_height_px':'80%',
				'all_chart_setting_instance22_width_auto':'true',
				'all_chart_setting_instance22_width_px':'100%',
				'all_chart_setting_instance22_height_auto':'true',
				'all_chart_setting_instance22_height_px':'100%',
				'all_chart_setting_instance22_legend_max_lines':'',
				'all_chart_setting_instance22_legend_position':'right',
				'all_chart_setting_instance22_legend_alignment':'auto',
				'all_chart_setting_instance22_legend_text_style_overwrite':'false',
				'all_chart_setting_instance22_legend_text_style_color':'#000000',
				'all_chart_setting_instance22_legend_text_style_font_name':'',
				'all_chart_setting_instance22_legend_text_style_bold':'true',
				'all_chart_setting_instance22_legend_text_style_italic':'false',
				'all_chart_setting_instance22_legend_text_style_font_size':'13',
				'all_chart_setting_instance22_tooltip_ignore_bounds':'false',
				'all_chart_setting_instance22_tooltip_show_color':'true',
				'all_chart_setting_instance22_tooltip_trigger':'focus',
				'all_chart_setting_instance22_tooltip_text_style_overwrite':'false',
				'all_chart_setting_instance22_tooltip_text_style_color':'#000000',
				'all_chart_setting_instance22_tooltip_text_style_font_name':'arial',
				'all_chart_setting_instance22_tooltip_text_style_bold':'true',
				'all_chart_setting_instance22_tooltip_text_style_italic':'false',
				'all_chart_setting_instance22_tooltip_text_style_font_size':'13',
				
				'all_chart_setting_instance22_trendlines_enable_or_disable':'false',
				'all_chart_setting_instance22_annotations_enable_or_disable':'false',
			},
			'area':{
				'all_chart_setting_instance22_area_opacity':'0.3',
				
				'all_chart_setting_instance22_line_width':'2',
				
				'all_chart_setting_instance22_curve_type':'none',
				'all_chart_setting_instance22_orientation':'vertical',
				'all_chart_setting_instance22_point_shape':'circle',
				'all_chart_setting_instance22_point_size':'0',
				'all_chart_setting_instance22_points_visible':'true',
				'all_chart_setting_instance22_crosshair_trigger':'both',
				'all_chart_setting_instance22_crosshair_color_focused':'',
				'all_chart_setting_instance22_crosshair_opacity_focused':'0.7',
				'all_chart_setting_instance22_crosshair_orientation_focused':'both',
				'all_chart_setting_instance22_crosshair_color_selected':'',
				'all_chart_setting_instance22_crosshair_opacity_selected':'1.0',
				'all_chart_setting_instance22_crosshair_orientation_selected':'both',
				
				'all_chart_setting_instance22_axis_titles_position':'out',
				'all_chart_setting_instance22_title_position':'out',
				
				'all_chart_setting_instance22_font_size_auto':'true',
				'all_chart_setting_instance22_font_size_px':'13',
				'all_chart_setting_instance22_font_name':'arial',
				'all_chart_setting_instance22_force_iframe':'false',
				'all_chart_setting_instance22_enable_interactivity':'true',
				'all_chart_setting_instance22_reverse_categories':'true',
				'all_chart_setting_instance22_title_text_style_overwrite':'false',
				'all_chart_setting_instance22_title_text_style_color':'#000000',
				'all_chart_setting_instance22_title_text_style_font_name':'arial',
				'all_chart_setting_instance22_title_text_style_font_size':'13',
				'all_chart_setting_instance22_title_text_style_bold':'true',
				'all_chart_setting_instance22_title_text_style_italic':'false',
				'all_chart_setting_instance22_background_color_fill':'#ffffff',
				'all_chart_setting_instance22_background_color_stroke_color':'#ddb880',
				'all_chart_setting_instance22_background_color_stroke_width':'0',
				'all_chart_setting_instance22_area_width_auto':'true',
				'all_chart_setting_instance22_area_width_px':'80%',
				'all_chart_setting_instance22_area_height_auto':'true',
				'all_chart_setting_instance22_area_height_px':'80%',
				'all_chart_setting_instance22_width_auto':'true',
				'all_chart_setting_instance22_width_px':'100%',
				'all_chart_setting_instance22_height_auto':'true',
				'all_chart_setting_instance22_height_px':'100%',
				'all_chart_setting_instance22_legend_max_lines':'',
				'all_chart_setting_instance22_legend_position':'right',
				'all_chart_setting_instance22_legend_alignment':'auto',
				'all_chart_setting_instance22_legend_text_style_overwrite':'false',
				'all_chart_setting_instance22_legend_text_style_color':'#000000',
				'all_chart_setting_instance22_legend_text_style_font_name':'',
				'all_chart_setting_instance22_legend_text_style_bold':'true',
				'all_chart_setting_instance22_legend_text_style_italic':'false',
				'all_chart_setting_instance22_legend_text_style_font_size':'13',
				'all_chart_setting_instance22_tooltip_ignore_bounds':'false',
				'all_chart_setting_instance22_tooltip_show_color':'true',
				'all_chart_setting_instance22_tooltip_trigger':'focus',
				'all_chart_setting_instance22_tooltip_text_style_overwrite':'false',
				'all_chart_setting_instance22_tooltip_text_style_color':'#000000',
				'all_chart_setting_instance22_tooltip_text_style_font_name':'arial',
				'all_chart_setting_instance22_tooltip_text_style_bold':'true',
				'all_chart_setting_instance22_tooltip_text_style_italic':'false',
				'all_chart_setting_instance22_tooltip_text_style_font_size':'13',
				
				'all_chart_setting_instance22_trendlines_enable_or_disable':'false',
				'all_chart_setting_instance22_annotations_enable_or_disable':'false',
			},
			'bar':{
				'all_chart_setting_instance22_trendlines_enable_or_disable':'false',
				'all_chart_setting_instance22_trendlines_type':'linear',
				'all_chart_setting_instance22_trendline_color':'',
				'all_chart_setting_instance22_trendline_line_width':'2',
				'all_chart_setting_instance22_trendline_opacity':'1.0',
				'all_chart_setting_instance22_trendline_show_r2':'false',
				'all_chart_setting_instance22_trendline_visible_in_legend':'false',
				'all_chart_setting_instance22_trendline_degree':'3',
				'all_chart_setting_instance22_trendline_point_size':'1',
				'all_chart_setting_instance22_trendline_points_visible':'true',
				
				'all_chart_setting_instance22_data_opacity':'1.0',
				'all_chart_setting_instance22_animation_startup':'false',
				'all_chart_setting_instance22_animation_duration':'1000',
				'all_chart_setting_instance22_animation_easing':'linear',
				'all_chart_setting_instance22_annotations_enable_or_disable':'false',
				'all_chart_setting_instance22_annotations_content':'element_number',
				'all_chart_setting_instance22_annotations_hover_content':'element_number',
				'all_chart_setting_instance22_annotations_separator_for_both_mode':':',
				'all_chart_setting_instance22_annotations_content_manual':'sample content',
				'all_chart_setting_instance22_annotations_hover_content_manual':'sample hover content',
				'all_chart_setting_instance22_annotations_always_outside':'false',
				'all_chart_setting_instance22_annotations_high_contrast':'true',
				'all_chart_setting_instance22_annotations_style':'point',
				'all_chart_setting_instance22_annotations_text_style_overwrite':'false',
				'all_chart_setting_instance22_annotations_text_style_color':'#000000',
				'all_chart_setting_instance22_annotations_text_style_font_name':'arial',
				'all_chart_setting_instance22_annotations_text_style_bold':'false',
				'all_chart_setting_instance22_annotations_text_style_italic':'false',
				'all_chart_setting_instance22_annotations_text_style_font_size':'13',
				'all_chart_setting_instance22_annotations_text_style_aura_color':'#000000',
				'all_chart_setting_instance22_annotations_text_style_opacity':'0.8',
				
				'all_chart_setting_instance22_axis_titles_position':'out',
				'all_chart_setting_instance22_title_position':'out',
				
				'all_chart_setting_instance22_font_size_auto':'true',
				'all_chart_setting_instance22_font_size_px':'13',
				'all_chart_setting_instance22_font_name':'arial',
				'all_chart_setting_instance22_force_iframe':'false',
				'all_chart_setting_instance22_enable_interactivity':'true',
				'all_chart_setting_instance22_reverse_categories':'false',
				'all_chart_setting_instance22_title_text_style_overwrite':'false',
				'all_chart_setting_instance22_title_text_style_color':'#000000',
				'all_chart_setting_instance22_title_text_style_font_name':'arial',
				'all_chart_setting_instance22_title_text_style_font_size':'13',
				'all_chart_setting_instance22_title_text_style_bold':'true',
				'all_chart_setting_instance22_title_text_style_italic':'false',
				'all_chart_setting_instance22_background_color_fill':'#ffffff',
				'all_chart_setting_instance22_background_color_stroke_color':'#ddb880',
				'all_chart_setting_instance22_background_color_stroke_width':'0',
				'all_chart_setting_instance22_area_width_auto':'true',
				'all_chart_setting_instance22_area_width_px':'80%',
				'all_chart_setting_instance22_area_height_auto':'true',
				'all_chart_setting_instance22_area_height_px':'80%',
				'all_chart_setting_instance22_width_auto':'true',
				'all_chart_setting_instance22_width_px':'100%',
				'all_chart_setting_instance22_height_auto':'true',
				'all_chart_setting_instance22_height_px':'100%',
				'all_chart_setting_instance22_legend_max_lines':'',
				'all_chart_setting_instance22_legend_position':'right',
				'all_chart_setting_instance22_legend_alignment':'auto',
				'all_chart_setting_instance22_legend_text_style_overwrite':'false',
				'all_chart_setting_instance22_legend_text_style_color':'#000000',
				'all_chart_setting_instance22_legend_text_style_font_name':'',
				'all_chart_setting_instance22_legend_text_style_bold':'true',
				'all_chart_setting_instance22_legend_text_style_italic':'false',
				'all_chart_setting_instance22_legend_text_style_font_size':'13',
				'all_chart_setting_instance22_tooltip_ignore_bounds':'false',
				'all_chart_setting_instance22_tooltip_show_color':'true',
				'all_chart_setting_instance22_tooltip_trigger':'focus',
				'all_chart_setting_instance22_tooltip_text_style_overwrite':'false',
				'all_chart_setting_instance22_tooltip_text_style_color':'#000000',
				'all_chart_setting_instance22_tooltip_text_style_font_name':'arial',
				'all_chart_setting_instance22_tooltip_text_style_bold':'true',
				'all_chart_setting_instance22_tooltip_text_style_italic':'false',
				'all_chart_setting_instance22_tooltip_text_style_font_size':'13',
				
				
			},
			'column':{
				'all_chart_setting_instance22_data_opacity':'1.0',
				'all_chart_setting_instance22_animation_startup':'false',
				'all_chart_setting_instance22_animation_duration':'1000',
				'all_chart_setting_instance22_animation_easing':'linear',
				'all_chart_setting_instance22_annotations_enable_or_disable':'false',
				'all_chart_setting_instance22_annotations_content':'element_number',
				'all_chart_setting_instance22_annotations_hover_content':'element_number',
				'all_chart_setting_instance22_annotations_separator_for_both_mode':':',
				'all_chart_setting_instance22_annotations_content_manual':'sample content',
				'all_chart_setting_instance22_annotations_hover_content_manual':'sample hover content',
				'all_chart_setting_instance22_annotations_always_outside':'false',
				'all_chart_setting_instance22_annotations_high_contrast':'true',
				'all_chart_setting_instance22_annotations_style':'point',
				'all_chart_setting_instance22_annotations_text_style_overwrite':'false',
				'all_chart_setting_instance22_annotations_text_style_color':'#000000',
				'all_chart_setting_instance22_annotations_text_style_font_name':'arial',
				'all_chart_setting_instance22_annotations_text_style_bold':'false',
				'all_chart_setting_instance22_annotations_text_style_italic':'false',
				'all_chart_setting_instance22_annotations_text_style_font_size':'13',
				'all_chart_setting_instance22_annotations_text_style_aura_color':'#000000',
				'all_chart_setting_instance22_annotations_text_style_opacity':'0.8',
				
				'all_chart_setting_instance22_axis_titles_position':'out',
				'all_chart_setting_instance22_title_position':'out',
				
				
				'all_chart_setting_instance22_font_size_auto':'true',
				'all_chart_setting_instance22_font_size_px':'13',
				'all_chart_setting_instance22_font_name':'arial',
				'all_chart_setting_instance22_force_iframe':'false',
				'all_chart_setting_instance22_enable_interactivity':'true',
				'all_chart_setting_instance22_reverse_categories':'false',
				'all_chart_setting_instance22_title_text_style_overwrite':'false',
				'all_chart_setting_instance22_title_text_style_color':'#000000',
				'all_chart_setting_instance22_title_text_style_font_name':'arial',
				'all_chart_setting_instance22_title_text_style_font_size':'13',
				'all_chart_setting_instance22_title_text_style_bold':'true',
				'all_chart_setting_instance22_title_text_style_italic':'false',
				'all_chart_setting_instance22_background_color_fill':'#ffffff',
				'all_chart_setting_instance22_background_color_stroke_color':'#ddb880',
				'all_chart_setting_instance22_background_color_stroke_width':'0',
				'all_chart_setting_instance22_area_width_auto':'true',
				'all_chart_setting_instance22_area_width_px':'80%',
				'all_chart_setting_instance22_area_height_auto':'true',
				'all_chart_setting_instance22_area_height_px':'80%',
				'all_chart_setting_instance22_width_auto':'true',
				'all_chart_setting_instance22_width_px':'100%',
				'all_chart_setting_instance22_height_auto':'true',
				'all_chart_setting_instance22_height_px':'100%',
				'all_chart_setting_instance22_legend_max_lines':'',
				'all_chart_setting_instance22_legend_position':'right',
				'all_chart_setting_instance22_legend_alignment':'auto',
				'all_chart_setting_instance22_legend_text_style_overwrite':'false',
				'all_chart_setting_instance22_legend_text_style_color':'#000000',
				'all_chart_setting_instance22_legend_text_style_font_name':'',
				'all_chart_setting_instance22_legend_text_style_bold':'true',
				'all_chart_setting_instance22_legend_text_style_italic':'false',
				'all_chart_setting_instance22_legend_text_style_font_size':'13',
				'all_chart_setting_instance22_tooltip_ignore_bounds':'false',
				'all_chart_setting_instance22_tooltip_show_color':'true',
				'all_chart_setting_instance22_tooltip_trigger':'focus',
				'all_chart_setting_instance22_tooltip_text_style_overwrite':'false',
				'all_chart_setting_instance22_tooltip_text_style_color':'#000000',
				'all_chart_setting_instance22_tooltip_text_style_font_name':'arial',
				'all_chart_setting_instance22_tooltip_text_style_bold':'true',
				'all_chart_setting_instance22_tooltip_text_style_italic':'false',
				'all_chart_setting_instance22_tooltip_text_style_font_size':'13',
				
				'all_chart_setting_instance22_trendlines_enable_or_disable':'false',
			},
			'line':{
				'all_chart_setting_instance22_line_width':'2',
				
				'all_chart_setting_instance22_curve_type':'none',
				'all_chart_setting_instance22_orientation':'vertical',
				'all_chart_setting_instance22_point_shape':'circle',
				'all_chart_setting_instance22_point_size':'0',
				'all_chart_setting_instance22_points_visible':'false',
				'all_chart_setting_instance22_crosshair_trigger':'both',
				'all_chart_setting_instance22_crosshair_color_focused':'',
				'all_chart_setting_instance22_crosshair_opacity_focused':'0.7',
				'all_chart_setting_instance22_crosshair_orientation_focused':'both',
				'all_chart_setting_instance22_crosshair_color_selected':'',
				'all_chart_setting_instance22_crosshair_opacity_selected':'1.0',
				'all_chart_setting_instance22_crosshair_orientation_selected':'both',
				
				'all_chart_setting_instance22_trendlines_enable_or_disable':'false',
				'all_chart_setting_instance22_trendlines_type':'linear',
				'all_chart_setting_instance22_trendline_color':'',
				'all_chart_setting_instance22_trendline_line_width':'2',
				'all_chart_setting_instance22_trendline_opacity':'1.0',
				'all_chart_setting_instance22_trendline_show_r2':'false',
				'all_chart_setting_instance22_trendline_visible_in_legend':'false',
				'all_chart_setting_instance22_trendline_degree':'3',
				'all_chart_setting_instance22_trendline_point_size':'1',
				'all_chart_setting_instance22_trendline_points_visible':'true',
				
				'all_chart_setting_instance22_data_opacity':'1.0',
				'all_chart_setting_instance22_animation_startup':'false',
				'all_chart_setting_instance22_animation_duration':'1000',
				'all_chart_setting_instance22_animation_easing':'linear',
				'all_chart_setting_instance22_annotations_enable_or_disable':'false',
				'all_chart_setting_instance22_annotations_content':'element_number',
				'all_chart_setting_instance22_annotations_hover_content':'element_number',
				'all_chart_setting_instance22_annotations_separator_for_both_mode':':',
				'all_chart_setting_instance22_annotations_content_manual':'sample content',
				'all_chart_setting_instance22_annotations_hover_content_manual':'sample hover content',
				'all_chart_setting_instance22_annotations_always_outside':'false',
				'all_chart_setting_instance22_annotations_high_contrast':'true',
				'all_chart_setting_instance22_annotations_style':'point',
				'all_chart_setting_instance22_annotations_text_style_overwrite':'false',
				'all_chart_setting_instance22_annotations_text_style_color':'#000000',
				'all_chart_setting_instance22_annotations_text_style_font_name':'arial',
				'all_chart_setting_instance22_annotations_text_style_bold':'false',
				'all_chart_setting_instance22_annotations_text_style_italic':'false',
				'all_chart_setting_instance22_annotations_text_style_font_size':'13',
				'all_chart_setting_instance22_annotations_text_style_aura_color':'#000000',
				'all_chart_setting_instance22_annotations_text_style_opacity':'0.8',
					
				'all_chart_setting_instance22_axis_titles_position':'out',
				'all_chart_setting_instance22_title_position':'out',	
					
				'all_chart_setting_instance22_font_size_auto':'true',
				'all_chart_setting_instance22_font_size_px':'13',
				'all_chart_setting_instance22_font_name':'arial',
				'all_chart_setting_instance22_force_iframe':'false',
				'all_chart_setting_instance22_enable_interactivity':'true',
				'all_chart_setting_instance22_reverse_categories':'false',
				'all_chart_setting_instance22_title_text_style_overwrite':'false',
				'all_chart_setting_instance22_title_text_style_color':'#000000',
				'all_chart_setting_instance22_title_text_style_font_name':'arial',
				'all_chart_setting_instance22_title_text_style_font_size':'13',
				'all_chart_setting_instance22_title_text_style_bold':'true',
				'all_chart_setting_instance22_title_text_style_italic':'false',
				'all_chart_setting_instance22_background_color_fill':'#ffffff',
				'all_chart_setting_instance22_background_color_stroke_color':'#ddb880',
				'all_chart_setting_instance22_background_color_stroke_width':'0',
				'all_chart_setting_instance22_area_width_auto':'true',
				'all_chart_setting_instance22_area_width_px':'80%',
				'all_chart_setting_instance22_area_height_auto':'true',
				'all_chart_setting_instance22_area_height_px':'80%',
				'all_chart_setting_instance22_width_auto':'true',
				'all_chart_setting_instance22_width_px':'100%',
				'all_chart_setting_instance22_height_auto':'true',
				'all_chart_setting_instance22_height_px':'100%',
				'all_chart_setting_instance22_legend_max_lines':'',
				'all_chart_setting_instance22_legend_position':'right',
				'all_chart_setting_instance22_legend_alignment':'auto',
				'all_chart_setting_instance22_legend_text_style_overwrite':'false',
				'all_chart_setting_instance22_legend_text_style_color':'#000000',
				'all_chart_setting_instance22_legend_text_style_font_name':'',
				'all_chart_setting_instance22_legend_text_style_bold':'true',
				'all_chart_setting_instance22_legend_text_style_italic':'false',
				'all_chart_setting_instance22_legend_text_style_font_size':'13',
				'all_chart_setting_instance22_tooltip_ignore_bounds':'false',
				'all_chart_setting_instance22_tooltip_show_color':'true',
				'all_chart_setting_instance22_tooltip_trigger':'focus',
				'all_chart_setting_instance22_tooltip_text_style_overwrite':'false',
				'all_chart_setting_instance22_tooltip_text_style_color':'#000000',
				'all_chart_setting_instance22_tooltip_text_style_font_name':'arial',
				'all_chart_setting_instance22_tooltip_text_style_bold':'true',
				'all_chart_setting_instance22_tooltip_text_style_italic':'false',
				'all_chart_setting_instance22_tooltip_text_style_font_size':'13',
				
			},
			'scatter':{
				'all_chart_setting_instance22_curve_type':'none',
				'all_chart_setting_instance22_orientation':'horizontal',
				'all_chart_setting_instance22_point_shape':'circle',
				'all_chart_setting_instance22_point_size':'7',
				'all_chart_setting_instance22_points_visible':'true',
				'all_chart_setting_instance22_crosshair_trigger':'both',
				'all_chart_setting_instance22_crosshair_color_focused':'',
				'all_chart_setting_instance22_crosshair_opacity_focused':'0.7',
				'all_chart_setting_instance22_crosshair_orientation_focused':'both',
				'all_chart_setting_instance22_crosshair_color_selected':'',
				'all_chart_setting_instance22_crosshair_opacity_selected':'1.0',
				'all_chart_setting_instance22_crosshair_orientation_selected':'both',
				
				'all_chart_setting_instance22_trendlines_enable_or_disable':'false',
				'all_chart_setting_instance22_trendlines_type':'linear',
				'all_chart_setting_instance22_trendline_color':'',
				'all_chart_setting_instance22_trendline_line_width':'2',
				'all_chart_setting_instance22_trendline_opacity':'1.0',
				'all_chart_setting_instance22_trendline_show_r2':'false',
				'all_chart_setting_instance22_trendline_visible_in_legend':'false',
				'all_chart_setting_instance22_trendline_degree':'3',
				'all_chart_setting_instance22_trendline_point_size':'1',
				'all_chart_setting_instance22_trendline_points_visible':'true',
				
				'all_chart_setting_instance22_axis_titles_position':'out',
				'all_chart_setting_instance22_title_position':'out',
				
				'all_chart_setting_instance22_font_size_auto':'true',
				'all_chart_setting_instance22_font_size_px':'13',
				'all_chart_setting_instance22_font_name':'arial',
				'all_chart_setting_instance22_force_iframe':'false',
				'all_chart_setting_instance22_enable_interactivity':'true',
				'all_chart_setting_instance22_reverse_categories':'false',
				'all_chart_setting_instance22_title_text_style_overwrite':'false',
				'all_chart_setting_instance22_title_text_style_color':'#000000',
				'all_chart_setting_instance22_title_text_style_font_name':'arial',
				'all_chart_setting_instance22_title_text_style_font_size':'13',
				'all_chart_setting_instance22_title_text_style_bold':'true',
				'all_chart_setting_instance22_title_text_style_italic':'false',
				'all_chart_setting_instance22_background_color_fill':'#ffffff',
				'all_chart_setting_instance22_background_color_stroke_color':'#ddb880',
				'all_chart_setting_instance22_background_color_stroke_width':'0',
				'all_chart_setting_instance22_area_width_auto':'true',
				'all_chart_setting_instance22_area_width_px':'80%',
				'all_chart_setting_instance22_area_height_auto':'true',
				'all_chart_setting_instance22_area_height_px':'80%',
				'all_chart_setting_instance22_width_auto':'true',
				'all_chart_setting_instance22_width_px':'100%',
				'all_chart_setting_instance22_height_auto':'true',
				'all_chart_setting_instance22_height_px':'100%',
				'all_chart_setting_instance22_legend_max_lines':'',
				'all_chart_setting_instance22_legend_position':'right',
				'all_chart_setting_instance22_legend_alignment':'auto',
				'all_chart_setting_instance22_legend_text_style_overwrite':'false',
				'all_chart_setting_instance22_legend_text_style_color':'#000000',
				'all_chart_setting_instance22_legend_text_style_font_name':'',
				'all_chart_setting_instance22_legend_text_style_bold':'true',
				'all_chart_setting_instance22_legend_text_style_italic':'false',
				'all_chart_setting_instance22_legend_text_style_font_size':'13',
				'all_chart_setting_instance22_tooltip_ignore_bounds':'false',
				'all_chart_setting_instance22_tooltip_show_color':'true',
				'all_chart_setting_instance22_tooltip_trigger':'focus',
				'all_chart_setting_instance22_tooltip_text_style_overwrite':'false',
				'all_chart_setting_instance22_tooltip_text_style_color':'#000000',
				'all_chart_setting_instance22_tooltip_text_style_font_name':'arial',
				'all_chart_setting_instance22_tooltip_text_style_bold':'true',
				'all_chart_setting_instance22_tooltip_text_style_italic':'false',
				'all_chart_setting_instance22_tooltip_text_style_font_size':'13',
				
			},
			'stepped':{
				'all_chart_setting_instance22_connect_steps':'true',
				
				'all_chart_setting_instance22_area_opacity':'0.3',
				
				'all_chart_setting_instance22_axis_titles_position':'out',
				'all_chart_setting_instance22_title_position':'out',
				
				'all_chart_setting_instance22_font_size_auto':'true',
				'all_chart_setting_instance22_font_size_px':'13',
				'all_chart_setting_instance22_font_name':'arial',
				'all_chart_setting_instance22_force_iframe':'false',
				'all_chart_setting_instance22_enable_interactivity':'true',
				'all_chart_setting_instance22_reverse_categories':'false',
				'all_chart_setting_instance22_title_text_style_overwrite':'false',
				'all_chart_setting_instance22_title_text_style_color':'#000000',
				'all_chart_setting_instance22_title_text_style_font_name':'arial',
				'all_chart_setting_instance22_title_text_style_font_size':'13',
				'all_chart_setting_instance22_title_text_style_bold':'true',
				'all_chart_setting_instance22_title_text_style_italic':'false',
				'all_chart_setting_instance22_background_color_fill':'#ffffff',
				'all_chart_setting_instance22_background_color_stroke_color':'#ddb880',
				'all_chart_setting_instance22_background_color_stroke_width':'0',
				'all_chart_setting_instance22_area_width_auto':'true',
				'all_chart_setting_instance22_area_width_px':'80%',
				'all_chart_setting_instance22_area_height_auto':'true',
				'all_chart_setting_instance22_area_height_px':'80%',
				'all_chart_setting_instance22_width_auto':'true',
				'all_chart_setting_instance22_width_px':'100%',
				'all_chart_setting_instance22_height_auto':'true',
				'all_chart_setting_instance22_height_px':'100%',
				'all_chart_setting_instance22_legend_max_lines':'',
				'all_chart_setting_instance22_legend_position':'right',
				'all_chart_setting_instance22_legend_alignment':'auto',
				'all_chart_setting_instance22_legend_text_style_overwrite':'false',
				'all_chart_setting_instance22_legend_text_style_color':'#000000',
				'all_chart_setting_instance22_legend_text_style_font_name':'',
				'all_chart_setting_instance22_legend_text_style_bold':'true',
				'all_chart_setting_instance22_legend_text_style_italic':'false',
				'all_chart_setting_instance22_legend_text_style_font_size':'13',
				'all_chart_setting_instance22_tooltip_ignore_bounds':'false',
				'all_chart_setting_instance22_tooltip_show_color':'true',
				'all_chart_setting_instance22_tooltip_trigger':'focus',
				'all_chart_setting_instance22_tooltip_text_style_overwrite':'false',
				'all_chart_setting_instance22_tooltip_text_style_color':'#000000',
				'all_chart_setting_instance22_tooltip_text_style_font_name':'arial',
				'all_chart_setting_instance22_tooltip_text_style_bold':'true',
				'all_chart_setting_instance22_tooltip_text_style_italic':'false',
				'all_chart_setting_instance22_tooltip_text_style_font_size':'13',
				
				'all_chart_setting_instance22_trendlines_enable_or_disable':'false',
				'all_chart_setting_instance22_annotations_enable_or_disable':'false',
			},
			'table':{
				'table_chart22_width_auto':'true',
				'table_chart22_width_px':'300px',
				'table_chart22_height_auto':'false',
				'table_chart22_height_px':'200px',
				'table_chart22_page':'true',
				'table_chart22_rtl_table':'false',
				'table_chart22_show_row_number':'false',
				'table_chart22_sort':'true',
				'table_chart22_sort_ascending':'true',
				'table_chart22_Start_Position':'0',
				'table_chart22_sort_column':'-1',
				'table_chart22_start_page':'0',
				'table_chart22_page_size':'12',

				
			},
			
		},
		'navigation_path_section':{
			'navigation_path_wrapper':{
				'all_element_setting_instance214_background_color':'#ffffff',
				'all_element_setting_instance214_border_enable':'true',
				'all_element_setting_instance214_border_type':'solid',
				'all_element_setting_instance214_border_width':'1px',
				'all_element_setting_instance214_border_color':'#aaaaaa',
				'all_element_setting_instance214_padding_right':'7px',
				'all_element_setting_instance214_padding_left':'7px',
				'all_element_setting_instance214_padding_top':'7px',
				'all_element_setting_instance214_padding_bottom':'7px',
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_font_color':'#000000',
				'all_element_setting_instance214_font_size':'14px',
				'all_element_setting_instance214_height_px':'auto',
				'all_element_setting_instance214_overflow_x':'auto',
				'all_element_setting_instance214_overflow_y':'auto',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_width_px':'100%',
				'all_element_setting_instance214_border_bottom_left_radius':'7px',
				'all_element_setting_instance214_border_bottom_right_radius':'7px',
				'all_element_setting_instance214_border_top_left_radius':'7px',
				'all_element_setting_instance214_border_top_right_radius':'7px',
			},
			'single_query':{
				'all_element_setting_instance214_direction':'ltr',
				
			},
			'first_static':{
				'nav_path11_first_static_alternative_text' : 'all',
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_padding_right':'5px',
			},
			'number_sign':{
				'nav_path11_number_sign_before_alternative_text' :'[',
				'nav_path11_number_sign_after_alternative_text' :']',
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_display_block':'block',
			},
			'group_element':{
				'nav_path11_group_element_alternative_text_basic' :'basic',
				'nav_path11_group_element_alternative_text_taxo' :'taxo',
				'nav_path11_group_element_alternative_text_field' :'field',
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_font_color':'#008000',
				'all_element_setting_instance214_margin_left':'7px',

			},
			'delete_sign':{
				'nav_path11_delete_sign_alternative_image_url' :'dynamic url',
				'nav_path11_delete_sign_alternative_text' :'',
				'nav_path11_delete_sign_image_width' :'14px',
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_padding_left':'4px',
			},
			'dimension_element':{
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_font_color':'#0000ff',
			},
			'number_element':{
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_display_block':'block',
			},
			'sign_after_dimension':{
				'nav_path11_sign_after_dimension_alternative_text' : " : ",
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_padding_right':'4px',
				'all_element_setting_instance214_padding_left':'4px',
			},
			'sign_after_group':{
				'nav_path11_sign_after_group_alternative_text' : ' : ',
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_padding_right':'4px',
				'all_element_setting_instance214_padding_left':'4px',
			},
			'value_element':{
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_font_color':'#ff0000',
				'all_element_setting_instance214_padding_right':'4px',
			},
		},
		'chart_section_manual':{
			'chart_section_box':{
				'all_element_setting_instance214_background_color':'#ffffff',
				'all_element_setting_instance214_border_enable':'true',
				'all_element_setting_instance214_border_type':'solid',
				'all_element_setting_instance214_border_width':'1px',
				'all_element_setting_instance214_border_color':'#aaaaaa',
				'all_element_setting_instance214_padding_bottom':'10px',
				'all_element_setting_instance214_padding_left':'6px',
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_font_color':'#000000',
				'all_element_setting_instance214_font_size':'14px',
				'all_element_setting_instance214_height_px':'auto',
				'all_element_setting_instance214_overflow_x':'auto',
				'all_element_setting_instance214_overflow_y':'auto',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_width_px':'100%',
				'all_element_setting_instance214_border_bottom_left_radius':'7px',
				'all_element_setting_instance214_border_bottom_right_radius':'7px',
				'all_element_setting_instance214_border_top_left_radius':'7px',
				'all_element_setting_instance214_border_top_right_radius':'7px',
				'all_element_setting_instance214_margin_top':'10px',
				'all_element_setting_instance214_overflow_x':'auto',
			},
			'single_chart_box':{
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_border_enable':'true',
				'all_element_setting_instance214_border_type':'dashed',
				'all_element_setting_instance214_border_width':'1px',
				'all_element_setting_instance214_border_color':'#aaaaaa',
				'all_element_setting_instance214_margin_left':'10px',
				'all_element_setting_instance214_margin_top':'10px',
				'all_element_setting_instance214_width_px':'405px',
				'all_element_setting_instance214_height_px':'204px',
			},	
		},
		'post_list_manual_section':{
			'post_list_box':{
				'all_element_setting_instance214_background_color':'#ffffff',
				'all_element_setting_instance214_border_enable':'true',
				'all_element_setting_instance214_border_type':'solid',
				'all_element_setting_instance214_border_width':'1px',
				'all_element_setting_instance214_border_color':'#aaaaaa',
				'all_element_setting_instance214_padding_bottom':'10px',
				'all_element_setting_instance214_padding_left':'3.5%',
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_font_color':'#000000',
				'all_element_setting_instance214_font_size':'14px',
				'all_element_setting_instance214_height_px':'auto',
				'all_element_setting_instance214_overflow_x':'auto',
				'all_element_setting_instance214_overflow_y':'auto',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_width_px':'100%',
				'all_element_setting_instance214_border_bottom_left_radius':'7px',
				'all_element_setting_instance214_border_bottom_right_radius':'7px',
				'all_element_setting_instance214_border_top_left_radius':'7px',
				'all_element_setting_instance214_border_top_right_radius':'7px',
				'all_element_setting_instance214_margin_top':'10px',
			},
			'post_list_item_box':{
				'all_element_setting_instance214_background_color':'#e9e9e9',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_border_enable':'true',
				'all_element_setting_instance214_border_type':'solid',
				'all_element_setting_instance214_border_width':'1px',
				'all_element_setting_instance214_border_color':'grey',
				'all_element_setting_instance214_margin_left':'10px',
				'all_element_setting_instance214_margin_top':'10px',
				'all_element_setting_instance214_height_px':'100px',
				'all_element_setting_instance214_width_px':'120px',
				'all_element_setting_instance214_border_bottom_left_radius':'7px',
				'all_element_setting_instance214_border_bottom_right_radius':'7px',
				'all_element_setting_instance214_border_top_left_radius':'7px',
				'all_element_setting_instance214_border_top_right_radius':'7px',
				'all_element_setting_instance214_overflow_x':'hidden',
				'all_element_setting_instance214_overflow_y':'auto',
			},
			'post_list_pagination_box':{
				'all_element_setting_instance214_background_color':'#ffffff',
				'all_element_setting_instance214_border_enable':'true',
				'all_element_setting_instance214_border_type':'solid',
				'all_element_setting_instance214_border_width':'1px',
				'all_element_setting_instance214_border_color':'#aaaaaa',
				'all_element_setting_instance214_padding_top':'7px',
				'all_element_setting_instance214_padding_bottom':'7px',
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_display_block':'block',
				'all_element_setting_instance214_float':'left',
				'all_element_setting_instance214_font_color':'#000000',
				'all_element_setting_instance214_font_size':'14px',
				'all_element_setting_instance214_height_px':'auto',
				'all_element_setting_instance214_overflow_x':'auto',
				'all_element_setting_instance214_overflow_y':'auto',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_width_px':'100%',
				'all_element_setting_instance214_border_bottom_left_radius':'7px',
				'all_element_setting_instance214_border_bottom_right_radius':'7px',
				'all_element_setting_instance214_border_top_left_radius':'7px',
				'all_element_setting_instance214_border_top_right_radius':'7px',
				'all_element_setting_instance214_margin_top':'10px',
				'all_element_setting_instance214_margin_bottom':'10px',
			},	
				
				
			
		},
		'no_gruop_name':{
			'browser_box':{
				'all_element_setting_instance214_background_color':'#ededed',
				'all_element_setting_instance214_border_enable':'false',
				'all_element_setting_instance214_border_type':'solid',
				'all_element_setting_instance214_border_width':'1px',
				'all_element_setting_instance214_border_color':'black',
				'all_element_setting_instance214_padding_top':'10px',
				'all_element_setting_instance214_padding_bottom':'10px',
				'all_element_setting_instance214_padding_left':'10px',
				'all_element_setting_instance214_padding_right':'10px',
				'all_element_setting_instance214_margin_left':'auto',
				'all_element_setting_instance214_margin_right':'auto',
				'all_element_setting_instance214_direction':'ltr',
				'all_element_setting_instance214_display_block':'table',
				'all_element_setting_instance214_float':'none',
				'all_element_setting_instance214_font_color':'#000000',
				'all_element_setting_instance214_font_size':'14px',
				'all_element_setting_instance214_height_px':'auto',
				'all_element_setting_instance214_overflow_x':'auto',
				'all_element_setting_instance214_overflow_y':'auto',
				'all_element_setting_instance214_text_align':'left',
				'all_element_setting_instance214_width_px':'876px',
				'all_element_setting_instance214_border_bottom_left_radius':'7px',
				'all_element_setting_instance214_border_bottom_right_radius':'7px',
				'all_element_setting_instance214_border_top_left_radius':'7px',
				'all_element_setting_instance214_border_top_right_radius':'7px',
				'all_element_setting_instance214_margin_top':'10px',
				'all_element_setting_instance214_margin_bottom':'10px',
			},
			
			
		},
		'post_list_section':{
			'field':{
				'_thumbnail_id':{
					'label':{
						'all_element_setting_instance214_display_block':'none',
						
					},
					'value':{
						'all_element_setting_instance214_width_px':'120px',
						'all_element_setting_instance214_height_px':'100px',
					},
					
				},
				
				
			},
			'basic':{
				'post_title':{
					'wrapper':{
						
						'all_element_setting_instance214_text_align':'center',
					},
					'label':{
						'all_element_setting_instance214_display_block':'none',
					},
					'value':{
						'all_element_setting_instance214_font_bold':'true',
						'all_element_setting_instance214_font_color':'#000000',
					},
				},
				'post_author':{
					'wrapper':{
						'all_element_setting_instance214_text_align':'center',
						'all_element_setting_instance214_display_block':'table',
						'all_element_setting_instance214_margin_right':'auto',
						'all_element_setting_instance214_margin_left':'auto',
					},
					'delimiter':{
						'post_list11_this_element_subject_visible_text':':',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						
					},
					'label':{
						'all_element_setting_instance214_font_color':'#000080',
						'post_list11_this_element_subject_visible_text':' by ',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
					},
					'value':{
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_font_color':'#804e00',
						'all_element_setting_instance214_display_block':'block',
					},
					
				},
				'post_date':{
					'wrapper':{
						'all_element_setting_instance214_text_align':'center',
						'all_element_setting_instance214_display_block':'table',
						'all_element_setting_instance214_margin_right':'auto',
						'all_element_setting_instance214_margin_left':'auto',
					},
					'delimiter':{
						'post_list11_this_element_subject_visible_text':'',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'none',
						
					},
					'label':{
						'post_list11_this_element_subject_visible_text':'',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'none',
					},
					'value':{
						'all_element_setting_instance214_font_color':'#000000',
						'all_element_setting_instance214_background_color':'#eeeec7',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_border_bottom_left_radius':'7px',
						'all_element_setting_instance214_border_bottom_right_radius':'7px',
						'all_element_setting_instance214_border_top_left_radius':'7px',
						'all_element_setting_instance214_border_top_right_radius':'7px',
						'all_element_setting_instance214_padding_left':'7px',
						'all_element_setting_instance214_padding_right':'7px',
					},
					
					
					
				},
				'post_type':{
					'wrapper':{
						'all_element_setting_instance214_text_align':'center',
						'all_element_setting_instance214_display_block':'table',
						'all_element_setting_instance214_margin_right':'auto',
						'all_element_setting_instance214_margin_left':'auto',
					},
					'delimiter':{
						'post_list11_this_element_subject_visible_text':':',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						
					},
					'label':{
						'all_element_setting_instance214_font_color':'#000000',
						'post_list11_this_element_subject_visible_text':'type',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
					},
					'value':{
						'all_element_setting_instance214_font_color':'#000000',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
					},
				},
				'ID':{
					'wrapper':{
						'all_element_setting_instance214_text_align':'center',
						'all_element_setting_instance214_display_block':'table',
						'all_element_setting_instance214_margin_right':'auto',
						'all_element_setting_instance214_margin_left':'auto',
						'all_element_setting_instance214_font_color':'#ff0000',
					},
					'delimiter':{
						'post_list11_this_element_subject_visible_text':':',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_font_color':'#ff0000',
						
					},
					'label':{
						'all_element_setting_instance214_font_color':'#ff0000',
						'post_list11_this_element_subject_visible_text':'id',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
					},
					'value':{
						'all_element_setting_instance214_font_color':'#ff0000',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
					},
					
				},
			},
			'taxo':{
				'category':{
					'wrapper':{
						'all_element_setting_instance214_text_align':'center',
					},
					'label':{
						'all_element_setting_instance214_display_block':'none',
					},
					'value':{
						'all_element_setting_instance214_font_color':'#0000ff',
						
					},
					'suffix':{
						'all_element_setting_instance214_display_block':'none',
					},
					
				},
				
				
				
			},
		},
		'single_post_manual_section':{
			'single_post_light_box':{
				'all_element_setting_instance214_min_height_px':'570px',
			},
		'single_post_box':{
				'all_element_setting_instance214_width_px':'96%',
				'all_element_setting_instance214_height_px':'550px',
				'all_element_setting_instance214_display_block':'table',
				'all_element_setting_instance214_border_bottom_left_radius':'7px',
				'all_element_setting_instance214_border_bottom_right_radius':'7px',
				'all_element_setting_instance214_border_top_left_radius':'7px',
				'all_element_setting_instance214_border_top_right_radius':'7px',
				'all_element_setting_instance214_background_color':'#ffffff',
				'all_element_setting_instance214_border_enable':'true',
				'all_element_setting_instance214_border_type':'solid',
				'all_element_setting_instance214_border_width':'1px',
				'all_element_setting_instance214_border_color':'#aaaaaa',
				'all_element_setting_instance214_margin_left':'2%',
				'all_element_setting_instance214_margin_right':'2%',
				'all_element_setting_instance214_margin_top':'1%',
				'all_element_setting_instance214_margin_bottom':'2%',
				'all_element_setting_instance214_padding_left':'10px',
				'all_element_setting_instance214_padding_right':'10px',
				'all_element_setting_instance214_padding_top':'10px',
				'all_element_setting_instance214_padding_bottom':'15px',
				
			},	
			
		},
		'single_post_section':{
			'field':{
				'_thumbnail_id':{
					'wrapper':{
						'all_element_setting_instance214_display_block':'table',
						'all_element_setting_instance214_margin_left':'auto',
						'all_element_setting_instance214_margin_right':'auto',
						'all_element_setting_instance214_float':'none',
						
					},
					'delimiter':{
						'all_element_setting_instance214_display_block':'none',
						
					},
					'label':{
						'all_element_setting_instance214_display_block':'none',
						
					},
					'suffix':{
						'all_element_setting_instance214_display_block':'none',
					},
					'value':{
						'all_element_setting_instance214_float':'none',
						'all_element_setting_instance214_background_color':'#ffffff',
						'all_element_setting_instance214_border_enable':'true',
						'all_element_setting_instance214_border_type':'solid',
						'all_element_setting_instance214_border_width':'0px',
						'all_element_setting_instance214_border_color':'#808080',
						'all_element_setting_instance214_padding_top':'3px',
						'all_element_setting_instance214_padding_bottom':'3px',
						'all_element_setting_instance214_padding_left':'3px',
						'all_element_setting_instance214_padding_right':'3px',
						'all_element_setting_instance214_border_bottom_left_radius':'7px',
						'all_element_setting_instance214_border_bottom_right_radius':'7px',
						'all_element_setting_instance214_border_top_left_radius':'7px',
						'all_element_setting_instance214_border_top_right_radius':'7px',
						'all_element_setting_instance214_box_shadow_blur':'2px',
						'all_element_setting_instance214_box_shadow_color':'#b5b5b5',
						'all_element_setting_instance214_box_shadow_direction':'outset',
						'all_element_setting_instance214_box_shadow_enable':'true',
						'all_element_setting_instance214_box_shadow_h_shadow':'0px',
						'all_element_setting_instance214_box_shadow_v_shadow':'0px',
						'all_element_setting_instance214_box_shadow_spread':'2px',
						'all_element_setting_instance214_max_width_px':'600px',
						
						
						
					},
					
					
					
				},
				
			},
			'basic':{
				'post_title':{
					'wrapper':{
						
						'all_element_setting_instance214_text_align':'center',
						'all_element_setting_instance214_margin_top':'10px',
						'all_element_setting_instance214_margin_bottom':'10px',
						'all_element_setting_instance214_float':'none',
					},
					'label':{
						'all_element_setting_instance214_display_block':'none',
					},
					'delimiter':{
						'all_element_setting_instance214_display_block':'none',
						
					},
					'value':{
						'all_element_setting_instance214_font_bold':'true',
						'all_element_setting_instance214_font_size':'18px',
						'all_element_setting_instance214_float':'none',
					},
					'suffix':{
						'all_element_setting_instance214_display_block':'none',
					},
					
				},
				'post_author':{
					'wrapper':{
						'all_element_setting_instance214_text_align':'center',
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_margin_right':'auto',
						'all_element_setting_instance214_margin_left':'auto',
						'all_element_setting_instance214_float':'left',
					},
					'delimiter':{
						'post_list11_this_element_subject_visible_text':':',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						
					},
					'label':{
						'all_element_setting_instance214_font_color':'#000080',
						'post_list11_this_element_subject_visible_text':' by ',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
					},
					'value':{
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_font_color':'#804e00',
						'all_element_setting_instance214_display_block':'block',
					},
					'suffix':{
						'all_element_setting_instance214_display_block':'none',
					},
					
				},
				'post_date':{
					'wrapper':{
						'all_element_setting_instance214_text_align':'center',
						'all_element_setting_instance214_display_block':'table',
						'all_element_setting_instance214_margin_right':'auto',
						'all_element_setting_instance214_margin_left':'auto',
						'all_element_setting_instance214_float':'left',
					},
					'delimiter':{
						'post_list11_this_element_subject_visible_text':'',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'none',
						
					},
					'label':{
						'post_list11_this_element_subject_visible_text':'',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'none',
					},
					'value':{
						'all_element_setting_instance214_background_color':'#eeeec7',
						'all_element_setting_instance214_font_color':'#000000',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_border_bottom_left_radius':'7px',
						'all_element_setting_instance214_border_bottom_right_radius':'7px',
						'all_element_setting_instance214_border_top_left_radius':'7px',
						'all_element_setting_instance214_border_top_right_radius':'7px',
						'all_element_setting_instance214_padding_left':'7px',
						'all_element_setting_instance214_padding_right':'7px',
					},
					'suffix':{
						'all_element_setting_instance214_display_block':'none',
					},
					
					
					
				},
				'post_content':{
					'wrapper':{
						
						'all_element_setting_instance214_width_px':'100%',
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_margin_bottom':'10px',
					},
					'delimiter':{
						'all_element_setting_instance214_display_block':'none',
						
						
					},
					'label':{
						'all_element_setting_instance214_display_block':'none',
					},
					'value':{
						'all_element_setting_instance214_float':'none',
						'all_element_setting_instance214_font_color':'#000000',
						'all_element_setting_instance214_display_block':'table',
						'all_element_setting_instance214_margin_right':'auto',
						'all_element_setting_instance214_margin_left':'auto',
						'all_element_setting_instance214_width_px':'100%',
						'all_element_setting_instance214_background_color':'#ebebe6',
						'all_element_setting_instance214_border_bottom_left_radius':'7px',
						'all_element_setting_instance214_border_bottom_right_radius':'7px',
						'all_element_setting_instance214_border_top_left_radius':'7px',
						'all_element_setting_instance214_border_top_right_radius':'7px',
						'all_element_setting_instance214_padding_left':'15px',
						'all_element_setting_instance214_padding_right':'15px',
						'all_element_setting_instance214_padding_top':'15px',
						'all_element_setting_instance214_padding_bottom':'15px',
					},
					'suffix':{
						'all_element_setting_instance214_display_block':'none',
					},
					
				},
				'post_type':{
					'wrapper':{
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_float':'left',
					},
					
					'label':{
						'post_list11_this_element_subject_visible_text':'post type',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_font_color':'#006200',
					},
					'delimiter':{
						'post_list11_this_element_subject_visible_text':':',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						
					},
					'value':{
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
					},
					'suffix':{
						'all_element_setting_instance214_display_block':'none',
					},
				},
				'ID':{
					'wrapper':{
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_float':'left',
					},
					
					'label':{
						'post_list11_this_element_subject_visible_text':'id',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_font_color':'#ff0000',
					},
					'delimiter':{
						'post_list11_this_element_subject_visible_text':':',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						
					},
					'value':{
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_font_color':'#ff0000',
					},
					'suffix':{
						'all_element_setting_instance214_display_block':'none',
					},
				},
			},
			'taxo':{
				'category':{
					'wrapper':{
						'all_element_setting_instance214_text_align':'center',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
					},
					'label':{
						'all_element_setting_instance214_font_color':'#006200',
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_float':'left',
					},
					'delimiter':{
						'post_list11_this_element_subject_visible_text':':',
						'all_element_setting_instance214_display_block':'block',
						'all_element_setting_instance214_float':'left',
						
					},
					'value':{
						'all_element_setting_instance214_font_color':'#0000ff',
						'all_element_setting_instance214_float':'left',
						'all_element_setting_instance214_display_block':'block',
						
					},
					'suffix':{
						'all_element_setting_instance214_display_block':'none',
						'all_element_setting_instance214_float':'left',
					},
					
				},
				
				
				
			}
			
		},
	};
}		

}	
//make this var global in first creation :object_all_style_stting_container
reset_all_var_in_document();

