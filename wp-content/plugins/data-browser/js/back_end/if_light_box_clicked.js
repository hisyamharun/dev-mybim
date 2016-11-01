//make this var global
var_this_setting_container214={};

function if_light_box_for_data_browser_clicked(){
	var this_browser_id =jQuery( this ).find('.ws_db_browser_id_in_browser_list').text();
	var php_start_tag='<?php';
	var php_end_tag='?>';
	jQuery.magnificPopup.open({
	  items: {
		src: "#ws_db_light_box_for_data_browser_list",
		type: 'inline',
	   },
	   callbacks: {
		beforeOpen: function() {
			var html_for_use='\
				<div style="padding: 34px 15px 15px;">\
					<div class="ws_db_setting_section ws_db_post_list_specific_settings_item" >\
						<h4  class="ws_db_setting_title"  > shortcode </h4>\
						<div class="ws_db_setting_description" >paste this shortcode to posts , pages , widgets . </div>\
						<div style="width:50%;">\
							<input type="text" readonly="readonly" value="[ws_data_browser id=&quot;'+this_browser_id+'&quot;]" >\
						</div> \
					</div>\
					<div class="ws_db_setting_section ws_db_post_list_specific_settings_item" >\
						<h4  class="ws_db_setting_title"  > shortcode for templates</h4>\
						<div class="ws_db_setting_description" >paste this shortcode to templates .  </div>\
						<div style="width:80%;">\
							<input  type="text" readonly="readonly" value="&lt;?php echo do_shortcode(\'[ws_data_browser id=&quot;'+this_browser_id+'&quot;]\');  ?&gt;" > \
						</div> \
					</div>\
				</div>';
				jQuery("#ws_db_light_box_for_data_browser_list"  ).prepend( html_for_use );
		},
		close: function() {	
			jQuery( "#ws_db_light_box_for_data_browser_list" ).empty();
		},
	   },
	});	
}
jQuery(document).on("click",".code_botton_in_browsers_list", if_light_box_for_data_browser_clicked);




function if_light_box_option_sort_charts_clicked(){
	this_parent1 =jQuery( this ).parent();
	this_parent =jQuery( this_parent1 ).parent();
	clicked_dimension_element = jQuery(this_parent).find('.dimension_name_155');
	current_setting_gruop_name214 = jQuery(this_parent).find('.ws_db_setting_group_name214').text();
	current_dimension_gruop_name214 = jQuery(this_parent).children().find('.dimension_gruop_155').text();
	current_dimension_name214 = jQuery(this_parent).children().find(".dimension_name_156").text();
	current_dimension_name_visible_text = jQuery(this_parent).find('.dimension_name_155').justtext();
	if(object_all_style_stting_container 
	&& object_all_style_stting_container[current_setting_gruop_name214]
	&& object_all_style_stting_container[current_setting_gruop_name214][current_dimension_gruop_name214]  
	&& object_all_style_stting_container[current_setting_gruop_name214][current_dimension_gruop_name214][current_dimension_name214]){
		var_this_setting_container214=object_all_style_stting_container[current_setting_gruop_name214][current_dimension_gruop_name214][current_dimension_name214];
	}else{
		var_this_setting_container214={};
	}
	jQuery.magnificPopup.close();//reset magnificPopup behavior and callbacks
	jQuery.magnificPopup.open({
	  items: {
		src: "#ws_db_sort_charts_light_box_option",
		type: 'inline',
	   },
	   callbacks: {
		beforeOpen: function() {
			//
			if(var_this_setting_container214['sort_charts_setting_instance214_chart_type']){
				 jQuery("select[name=sort_charts_setting_instance214_chart_type]").val(var_this_setting_container214['sort_charts_setting_instance214_chart_type']);
			}else{
				jQuery("select[name=sort_charts_setting_instance214_chart_type]").val("Pie Chart");
			}
			//
			if(var_this_setting_container214['sort_charts_setting_instance214_chart_title']){
				 jQuery("input[name=sort_charts_setting_instance214_chart_title]").val(var_this_setting_container214['sort_charts_setting_instance214_chart_title']);
			}else{
				jQuery("input[name=sort_charts_setting_instance214_chart_title]").val(current_dimension_name_visible_text);
			}
		},
		close: function() {	
			this_instance_settings ={	
				'sort_charts_setting_instance214_chart_type' : jQuery("select[name=sort_charts_setting_instance214_chart_type]").val(),
				'sort_charts_setting_instance214_chart_title' : jQuery("input[name=sort_charts_setting_instance214_chart_title]").val(),				
			};
			if (typeof object_all_style_stting_container === "undefined"){
				object_all_style_stting_container ={};
			}
			if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ] === "undefined"){
				object_all_style_stting_container[ current_setting_gruop_name214 ]={};
			}
			if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214] === "undefined"){
				object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214]={};
			}
			object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214][current_dimension_name214] = this_instance_settings;
			console.log(object_all_style_stting_container);
		},
	   },
	});
}
jQuery(document).on("click",".ws_db_open_light_box_option_sort_charts", if_light_box_option_sort_charts_clicked);







function if_light_box_option_post_list_clicked(){
	this_parent1 =jQuery( this ).parent();
	this_parent =jQuery( this_parent1 ).parent();
	clicked_dimension_element = jQuery(this_parent).find('.dimension_name_154');
	jQuery.magnificPopup.open({
	  items: {
		src: "#ws_db_post_list_light_box_option",
		type: 'inline',
	   },
	   callbacks: {
		beforeOpen: function() {
			jQuery( "#ws_db_post_list_light_box_option .ws_db_post_list_light_box_option211x .dimension_name_154" ).remove();
			jQuery( clicked_dimension_element ).clone().appendTo( "#ws_db_post_list_light_box_option .ws_db_post_list_light_box_option211x" );
			jQuery( "#ws_db_post_list_light_box_option .ws_db_post_list_light_box_option211x .dimension_name_154" ).css("display","none")
		},
		close: function() {	
		// jQuery( "#ws_db_single_post_result_div" ).empty();
		},
	   },
	});	
}
jQuery(document).on("click",".ws_db_open_light_box_option_post_list", if_light_box_option_post_list_clicked);


function if_light_box_option_single_post_clicked(){
	this_parent1 =jQuery( this ).parent();
	this_parent =jQuery( this_parent1 ).parent();
	clicked_dimension_element = jQuery(this_parent).find('.dimension_name_155');
	jQuery.magnificPopup.open({
	  items: {
		src: "#ws_db_single_post_light_box_option",
		type: 'inline',
	   },
	   callbacks: {
		beforeOpen: function() {
			jQuery( "#ws_db_single_post_light_box_option .ws_db_single_post_light_box_option211x .dimension_name_155" ).remove();
			jQuery( clicked_dimension_element ).clone().appendTo( "#ws_db_single_post_light_box_option .ws_db_single_post_light_box_option211x" );
			jQuery( "#ws_db_single_post_light_box_option .ws_db_single_post_light_box_option211x .dimension_name_155" ).css("display","none")
		},
		close: function() {	
		// jQuery( "#ws_db_single_post_result_div" ).empty();
		},
	   },
	});
	
}
jQuery(document).on("click",".ws_db_open_light_box_option_single_post", if_light_box_option_single_post_clicked);




















//for charts
function if_light_box_of_a_chart_setting_clicked(){
	this_parent1 =jQuery( this ).parent();
	this_parent2 =jQuery( this_parent1 ).parent();
	current_setting_gruop_name214 = jQuery(this_parent2).find('.ws_db_setting_group_name214').text();
	if(current_setting_gruop_name214 =="chart_setting_section"){
		current_setting_element_name214 = jQuery(this_parent2).find('.ws_db_setting_element_name214').text();
		if(object_all_style_stting_container 
		&& object_all_style_stting_container[current_setting_gruop_name214]
		&& object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214] ){ 
			var_this_setting_container214=object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214];
		}else{
			var_this_setting_container214={};
		}
	}
	jQuery.magnificPopup.close();//reset magnificPopup behavior and callbacks
	jQuery.magnificPopup.open({
		items: {
			src: "#ws_db_light_box_for_chart_default_settings_id",
			type: 'inline',
	   },
	   callbacks:{
			beforeOpen: function() {
				jQuery( ".ws_db_hide_after_close" ).css("display","none");
				if(current_setting_element_name214 =="pie"){
					jQuery( ".ws_db_setting_for_pie , .ws_db_setting_for_pie_donut, .ws_db_setting_for_public" ).css("display","block");
				}else if(current_setting_element_name214 =="donut"){
					jQuery( ".ws_db_setting_for_donut , .ws_db_setting_for_pie_donut, .ws_db_setting_for_public" ).css("display","block");
				}else if(current_setting_element_name214 =="bar"){
					jQuery( ".ws_db_setting_for_bar_column_line_scatter , .ws_db_setting_for_bar_column_line_scatter_area, .ws_db_setting_for_bar_column_line_scatter_area_stepped, .ws_db_setting_for_public" ).css("display","block");
				}else if(current_setting_element_name214 =="column"){
					jQuery( ".ws_db_setting_for_bar_column_line_scatter , .ws_db_setting_for_bar_column_line_scatter_area,.ws_db_setting_for_bar_column_line_scatter_area_stepped, .ws_db_setting_for_public" ).css("display","block");
				}else if(current_setting_element_name214 =="line"){
					jQuery( ".ws_db_setting_for_line_area , .ws_db_setting_for_Line_Scatter_area,.ws_db_setting_for_bar_column_line_scatter,.ws_db_setting_for_bar_column_line_scatter_area,.ws_db_setting_for_bar_column_line_scatter_area_stepped, .ws_db_setting_for_public" ).css("display","block");
				}else if(current_setting_element_name214 =="scatter"){
					jQuery( ".ws_db_setting_for_Line_Scatter_area , .ws_db_setting_for_bar_column_line_scatter,.ws_db_setting_for_bar_column_line_scatter_area,.ws_db_setting_for_bar_column_line_scatter_area_stepped, .ws_db_setting_for_public" ).css("display","block");
				}else if(current_setting_element_name214 =="area"){
					jQuery( ".ws_db_setting_for_area_stepped , .ws_db_setting_for_line_area,.ws_db_setting_for_Line_Scatter_Area,.ws_db_setting_for_bar_column_line_scatter_area,.ws_db_setting_for_bar_column_line_scatter_area_stepped, .ws_db_setting_for_public" ).css("display","block");
				}else if(current_setting_element_name214 =="stepped"){
					jQuery( ".ws_db_setting_for_stapped , .ws_db_setting_for_area_stepped,.ws_db_setting_for_bar_column_line_scatter_area_stepped, .ws_db_setting_for_public" ).css("display","block");
				}else if(current_setting_element_name214 =="table"){
					jQuery( ".ws_db_setting_for_table" ).css("display","block");
				}
				
				
				////////////////////////////////////////////////////////////////////
				//********************************************************************************************************************************
				//Donut **************************************************************************************************************************
				//all_chart_setting_instance22_pie_hole
				if(var_this_setting_container214['all_chart_setting_instance22_pie_hole']){
					 jQuery("input[name=all_chart_setting_instance22_pie_hole]").val(var_this_setting_container214['all_chart_setting_instance22_pie_hole']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_pie_hole]").val("");
				}	
				//********************************************************************************************************************************
				//Pie ****************************************************************************************************************************
				//all_chart_setting_instance22_is_3d
				if(var_this_setting_container214['all_chart_setting_instance22_is_3d']){
					if (var_this_setting_container214['all_chart_setting_instance22_is_3d'] =='true'){
						jQuery( "#all_chart_setting_instance22_is_3d").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_is_3d").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_is_3d').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_is_3d").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_is_3d').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_is_3d").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//********************************************************************************************************************************
				//Stepped ************************************************************************************************************************
				//all_chart_setting_instance22_connect_steps
				if(var_this_setting_container214['all_chart_setting_instance22_connect_steps']){
					if (var_this_setting_container214['all_chart_setting_instance22_connect_steps'] =='true'){
						jQuery( "#all_chart_setting_instance22_connect_steps").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_connect_steps").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_connect_steps').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_connect_steps").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_connect_steps').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_connect_steps").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//********************************************************************************************************************************
				//Area Stepped *******************************************************************************************************************
				//all_chart_setting_instance22_area_opacity
				if(var_this_setting_container214['all_chart_setting_instance22_area_opacity']){
					 jQuery("input[name=all_chart_setting_instance22_area_opacity]").val(var_this_setting_container214['all_chart_setting_instance22_area_opacity']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_area_opacity]").val("");
				}	
				//********************************************************************************************************************************
				//Line  Area *********************************************************************************************************************
				//all_chart_setting_instance22_line_width
				if(var_this_setting_container214['all_chart_setting_instance22_line_width']){
					 jQuery("input[name=all_chart_setting_instance22_line_width]").val(var_this_setting_container214['all_chart_setting_instance22_line_width']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_line_width]").val("");
				}
				//********************************************************************************************************************************
				//pie donut **********************************************************************************************************************
				//all_chart_setting_instance22_slice_text_style_overwrite
				//all_chart_setting_instance22_slice_text_style_color
				//all_chart_setting_instance22_slice_text_style_font_name
				//all_chart_setting_instance22_slice_text_style_font_size
				//all_chart_setting_instance22_slice_text
				//all_chart_setting_instance22_start_angle
				//all_chart_setting_instance22_residue_slice_color
				//all_chart_setting_instance22_residue_slice_label
				if(var_this_setting_container214['all_chart_setting_instance22_slice_text_style_overwrite']){
					if (var_this_setting_container214['all_chart_setting_instance22_slice_text_style_overwrite'] =='true'){
						jQuery( "#all_chart_setting_instance22_slice_text_style_overwrite").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_slice_text_style_overwrite").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_slice_text_style_overwrite').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_slice_text_style_overwrite").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_slice_text_style_overwrite').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_slice_text_style_overwrite").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//slice_text_style_color
				if(var_this_setting_container214['all_chart_setting_instance22_slice_text_style_color']){
					 jQuery("input[name=all_chart_setting_instance22_slice_text_style_color]").val(var_this_setting_container214['all_chart_setting_instance22_slice_text_style_color']);
					 jQuery("input[name=all_chart_setting_instance22_slice_text_style_color]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_slice_text_style_color']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_slice_text_style_color]").val("");
					jQuery("input[name=all_chart_setting_instance22_slice_text_style_color]").next('input').trigger('click');
				}
				//slice_text_style_font_name
				if(var_this_setting_container214['all_chart_setting_instance22_slice_text_style_font_name']){
					 jQuery("input[name=all_chart_setting_instance22_slice_text_style_font_name]").val(var_this_setting_container214['all_chart_setting_instance22_slice_text_style_font_name']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_slice_text_style_font_name]").val("");
				}
				//slice_text_style_font_size
				if(var_this_setting_container214['all_chart_setting_instance22_slice_text_style_font_size']){
					 jQuery("input[name=all_chart_setting_instance22_slice_text_style_font_size]").val(var_this_setting_container214['all_chart_setting_instance22_slice_text_style_font_size']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_slice_text_style_font_size]").val("");
				}
				//slice_text
				if(var_this_setting_container214['all_chart_setting_instance22_slice_text']){
					 jQuery("select[name=all_chart_setting_instance22_slice_text]").val(var_this_setting_container214['all_chart_setting_instance22_slice_text']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_slice_text]").val("not_selected");
				}	
				//start_angle
				if(var_this_setting_container214['all_chart_setting_instance22_start_angle']){
					 jQuery("input[name=all_chart_setting_instance22_start_angle]").val(var_this_setting_container214['all_chart_setting_instance22_start_angle']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_start_angle]").val("");
				}
				//residue_slice_color
				if(var_this_setting_container214['all_chart_setting_instance22_residue_slice_color']){
					 jQuery("input[name=all_chart_setting_instance22_residue_slice_color]").val(var_this_setting_container214['all_chart_setting_instance22_residue_slice_color']);
					 jQuery("input[name=all_chart_setting_instance22_residue_slice_color]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_residue_slice_color']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_residue_slice_color]").val("");
					jQuery("input[name=all_chart_setting_instance22_residue_slice_color]").next('input').trigger('click');
				}
				//residue_slice_label
				if(var_this_setting_container214['all_chart_setting_instance22_residue_slice_label']){
					 jQuery("input[name=all_chart_setting_instance22_residue_slice_label]").val(var_this_setting_container214['all_chart_setting_instance22_residue_slice_label']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_residue_slice_label]").val("");
				}
				//tooltip.text
				//********************************************************************************************************************************
				//Line Scatter Area **************************************************************************************************************
				//all_chart_setting_instance22_curve_type
				//all_chart_setting_instance22_orientation
				//all_chart_setting_instance22_point_shape
				//all_chart_setting_instance22_point_size
				//all_chart_setting_instance22_points_visible
				//all_chart_setting_instance22_crosshair_trigger
				//all_chart_setting_instance22_crosshair_color_focused
				//all_chart_setting_instance22_crosshair_opacity_focused
				//all_chart_setting_instance22_crosshair_orientation_focused
				//all_chart_setting_instance22_crosshair_color_selected
				//all_chart_setting_instance22_crosshair_opacity_selected
				//all_chart_setting_instance22_crosshair_orientation_selected
				//curve_type
				if(var_this_setting_container214['all_chart_setting_instance22_curve_type']){
					 jQuery("select[name=all_chart_setting_instance22_curve_type]").val(var_this_setting_container214['all_chart_setting_instance22_curve_type']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_curve_type]").val("not_selected");
				}	
				//orientation
				if(var_this_setting_container214['all_chart_setting_instance22_orientation']){
					 jQuery("select[name=all_chart_setting_instance22_orientation]").val(var_this_setting_container214['all_chart_setting_instance22_orientation']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_orientation]").val("not_selected");
				}	
				//point_shape
				if(var_this_setting_container214['all_chart_setting_instance22_point_shape']){
					 jQuery("select[name=all_chart_setting_instance22_point_shape]").val(var_this_setting_container214['all_chart_setting_instance22_point_shape']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_point_shape]").val("not_selected");
				}	
				//point_size
				if(var_this_setting_container214['all_chart_setting_instance22_point_size']){
					 jQuery("input[name=all_chart_setting_instance22_point_size]").val(var_this_setting_container214['all_chart_setting_instance22_point_size']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_point_size]").val("");
				}
				//points_visible
				if(var_this_setting_container214['all_chart_setting_instance22_points_visible']){
					if (var_this_setting_container214['all_chart_setting_instance22_points_visible'] =='true'){
						jQuery( "#all_chart_setting_instance22_points_visible").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_points_visible").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_points_visible').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_points_visible").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_points_visible').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_points_visible").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//crosshair_trigger
				if(var_this_setting_container214['all_chart_setting_instance22_crosshair_trigger']){
					 jQuery("select[name=all_chart_setting_instance22_crosshair_trigger]").val(var_this_setting_container214['all_chart_setting_instance22_crosshair_trigger']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_crosshair_trigger]").val("not_selected");
				}	
				//crosshair_color_focused
				if(var_this_setting_container214['all_chart_setting_instance22_crosshair_color_focused']){
					 jQuery("input[name=all_chart_setting_instance22_crosshair_color_focused]").val(var_this_setting_container214['all_chart_setting_instance22_crosshair_color_focused']);
					 jQuery("input[name=all_chart_setting_instance22_crosshair_color_focused]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_crosshair_color_focused']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_crosshair_color_focused]").val("");
					jQuery("input[name=all_chart_setting_instance22_crosshair_color_focused]").next('input').trigger('click');
				}
				//crosshair_opacity_focused
				if(var_this_setting_container214['all_chart_setting_instance22_crosshair_opacity_focused']){
					 jQuery("input[name=all_chart_setting_instance22_crosshair_opacity_focused]").val(var_this_setting_container214['all_chart_setting_instance22_crosshair_opacity_focused']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_crosshair_opacity_focused]").val("");
				}
				//crosshair_orientation_focused
				if(var_this_setting_container214['all_chart_setting_instance22_crosshair_orientation_focused']){
					 jQuery("select[name=all_chart_setting_instance22_crosshair_orientation_focused]").val(var_this_setting_container214['all_chart_setting_instance22_crosshair_orientation_focused']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_crosshair_orientation_focused]").val("not_selected");
				}	
				//crosshair_color_selected
				if(var_this_setting_container214['all_chart_setting_instance22_crosshair_color_selected']){
					 jQuery("input[name=all_chart_setting_instance22_crosshair_color_selected]").val(var_this_setting_container214['all_chart_setting_instance22_crosshair_color_selected']);
					 jQuery("input[name=all_chart_setting_instance22_crosshair_color_selected]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_crosshair_color_selected']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_crosshair_color_selected]").val("");
					jQuery("input[name=all_chart_setting_instance22_crosshair_color_selected]").next('input').trigger('click');
				}
				//crosshair_opacity_selected
				if(var_this_setting_container214['all_chart_setting_instance22_crosshair_opacity_selected']){
					 jQuery("input[name=all_chart_setting_instance22_crosshair_opacity_selected]").val(var_this_setting_container214['all_chart_setting_instance22_crosshair_opacity_selected']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_crosshair_opacity_selected]").val("");
				}
				//crosshair_orientation_selected
				if(var_this_setting_container214['all_chart_setting_instance22_crosshair_orientation_selected']){
					 jQuery("select[name=all_chart_setting_instance22_crosshair_orientation_selected]").val(var_this_setting_container214['all_chart_setting_instance22_crosshair_orientation_selected']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_crosshair_orientation_selected]").val("not_selected");
				}	
				//********************************************************************************************************************************
				//bar column line scatter ********************************************************************************************************
				//all_chart_setting_instance22_trendlines_enable_or_disable
				//all_chart_setting_instance22_trendlines_type
				//all_chart_setting_instance22_trendline_color
				//all_chart_setting_instance22_trendline_line_width
				//all_chart_setting_instance22_trendline_opacity
				//all_chart_setting_instance22_trendline_show_r2
				//all_chart_setting_instance22_trendline_visible_in_legend
				//all_chart_setting_instance22_trendline_degree
				//all_chart_setting_instance22_trendline_point_size
				//all_chart_setting_instance22_trendline_points_visible
				//trendlines_enable_or_disable
				if(var_this_setting_container214['all_chart_setting_instance22_trendlines_enable_or_disable']){
					if (var_this_setting_container214['all_chart_setting_instance22_trendlines_enable_or_disable'] =='true'){
						jQuery( "#all_chart_setting_instance22_trendlines_enable_or_disable").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_trendlines_enable_or_disable").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_trendlines_enable_or_disable').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_trendlines_enable_or_disable").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_trendlines_enable_or_disable').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_trendlines_enable_or_disable").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//trendlines_type
				if(var_this_setting_container214['all_chart_setting_instance22_trendlines_type']){
					 jQuery("select[name=all_chart_setting_instance22_trendlines_type]").val(var_this_setting_container214['all_chart_setting_instance22_trendlines_type']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_trendlines_type]").val("not_selected");
				}	
				//trendline_color
				if(var_this_setting_container214['all_chart_setting_instance22_trendline_color']){
					 jQuery("input[name=all_chart_setting_instance22_trendline_color]").val(var_this_setting_container214['all_chart_setting_instance22_trendline_color']);
					 jQuery("input[name=all_chart_setting_instance22_trendline_color]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_trendline_color']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_trendline_color]").val("");
					jQuery("input[name=all_chart_setting_instance22_trendline_color]").next('input').trigger('click');
				}
				//trendline_line_width
				if(var_this_setting_container214['all_chart_setting_instance22_trendline_line_width']){
					 jQuery("input[name=all_chart_setting_instance22_trendline_line_width]").val(var_this_setting_container214['all_chart_setting_instance22_trendline_line_width']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_trendline_line_width]").val("");
				}
				//trendline_opacity
				if(var_this_setting_container214['all_chart_setting_instance22_trendline_opacity']){
					 jQuery("input[name=all_chart_setting_instance22_trendline_opacity]").val(var_this_setting_container214['all_chart_setting_instance22_trendline_opacity']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_trendline_opacity]").val("");
				}
				//trendline_show_r2
				if(var_this_setting_container214['all_chart_setting_instance22_trendline_show_r2']){
					if (var_this_setting_container214['all_chart_setting_instance22_trendline_show_r2'] =='true'){
						jQuery( "#all_chart_setting_instance22_trendline_show_r2").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_trendline_show_r2").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_trendline_show_r2').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_trendline_show_r2").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_trendline_show_r2').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_trendline_show_r2").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//trendline_visible_in_legend
				if(var_this_setting_container214['all_chart_setting_instance22_trendline_visible_in_legend']){
					if (var_this_setting_container214['all_chart_setting_instance22_trendline_visible_in_legend'] =='true'){
						jQuery( "#all_chart_setting_instance22_trendline_visible_in_legend").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_trendline_visible_in_legend").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_trendline_visible_in_legend').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_trendline_visible_in_legend").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_trendline_visible_in_legend').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_trendline_visible_in_legend").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//trendline_degree
				if(var_this_setting_container214['all_chart_setting_instance22_trendline_degree']){
					 jQuery("input[name=all_chart_setting_instance22_trendline_degree]").val(var_this_setting_container214['all_chart_setting_instance22_trendline_degree']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_trendline_degree]").val("");
				}
				//trendline_point_size
				if(var_this_setting_container214['all_chart_setting_instance22_trendline_point_size']){
					 jQuery("input[name=all_chart_setting_instance22_trendline_point_size]").val(var_this_setting_container214['all_chart_setting_instance22_trendline_point_size']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_trendline_point_size]").val("");
				}
				//trendline_points_visible
				if(var_this_setting_container214['all_chart_setting_instance22_trendline_points_visible']){
					if (var_this_setting_container214['all_chart_setting_instance22_trendline_points_visible'] =='true'){
						jQuery( "#all_chart_setting_instance22_trendline_points_visible").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_trendline_points_visible").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_trendline_points_visible').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_trendline_points_visible").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_trendline_points_visible').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_trendline_points_visible").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//********************************************************************************************************************************
				//bar column line scatter area ***************************************************************************************************
				//all_chart_setting_instance22_data_opacity
				//all_chart_setting_instance22_animation_startup
				//all_chart_setting_instance22_animation_duration
				//all_chart_setting_instance22_animation_easing
				//all_chart_setting_instance22_annotations_enable_or_disable
				//all_chart_setting_instance22_annotations_content
				//all_chart_setting_instance22_annotations_hover_content
				//all_chart_setting_instance22_annotations_separator_for_both_mode
				//all_chart_setting_instance22_annotations_content_manual
				//all_chart_setting_instance22_annotations_hover_content_manual
				//all_chart_setting_instance22_annotations_always_outside
				//all_chart_setting_instance22_annotations_high_contrast
				//all_chart_setting_instance22_annotations_style
				//all_chart_setting_instance22_annotations_text_style_overwrite
				//all_chart_setting_instance22_annotations_text_style_color
				//all_chart_setting_instance22_annotations_text_style_font_name
				//all_chart_setting_instance22_annotations_text_style_bold
				//all_chart_setting_instance22_annotations_text_style_italic
				//all_chart_setting_instance22_annotations_text_style_font_size
				//all_chart_setting_instance22_annotations_text_style_aura_color
				//all_chart_setting_instance22_annotations_text_style_opacity
				//data_opacity
				if(var_this_setting_container214['all_chart_setting_instance22_data_opacity']){
					 jQuery("input[name=all_chart_setting_instance22_data_opacity]").val(var_this_setting_container214['all_chart_setting_instance22_data_opacity']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_data_opacity]").val("");
				}
				//animation_startup
				if(var_this_setting_container214['all_chart_setting_instance22_animation_startup']){
					if (var_this_setting_container214['all_chart_setting_instance22_animation_startup'] =='true'){
						jQuery( "#all_chart_setting_instance22_animation_startup").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_animation_startup").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_animation_startup').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_animation_startup").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_animation_startup').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_animation_startup").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//animation_duration
				if(var_this_setting_container214['all_chart_setting_instance22_animation_duration']){
					 jQuery("input[name=all_chart_setting_instance22_animation_duration]").val(var_this_setting_container214['all_chart_setting_instance22_animation_duration']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_animation_duration]").val("");
				}
				//animation_easing
				if(var_this_setting_container214['all_chart_setting_instance22_animation_easing']){
					 jQuery("select[name=all_chart_setting_instance22_animation_easing]").val(var_this_setting_container214['all_chart_setting_instance22_animation_easing']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_animation_easing]").val("not_selected");
				}	
				//annotations_enable_or_disable
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_enable_or_disable']){
					if (var_this_setting_container214['all_chart_setting_instance22_annotations_enable_or_disable'] =='true'){
						jQuery( "#all_chart_setting_instance22_annotations_enable_or_disable").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_enable_or_disable").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_annotations_enable_or_disable').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_enable_or_disable").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_annotations_enable_or_disable').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_enable_or_disable").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//annotations_content
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_content']){
					 jQuery("select[name=all_chart_setting_instance22_annotations_content]").val(var_this_setting_container214['all_chart_setting_instance22_annotations_content']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_annotations_content]").val("not_selected");
				}	
				//annotations_hover_content
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_hover_content']){
					 jQuery("select[name=all_chart_setting_instance22_annotations_hover_content]").val(var_this_setting_container214['all_chart_setting_instance22_annotations_hover_content']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_annotations_hover_content]").val("not_selected");
				}	
				//annotations_separator_for_both_mode
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_separator_for_both_mode']){
					 jQuery("input[name=all_chart_setting_instance22_annotations_separator_for_both_mode]").val(var_this_setting_container214['all_chart_setting_instance22_annotations_separator_for_both_mode']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_annotations_separator_for_both_mode]").val("");
				}
				//annotations_content_manual
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_content_manual']){
					 jQuery("input[name=all_chart_setting_instance22_annotations_content_manual]").val(var_this_setting_container214['all_chart_setting_instance22_annotations_content_manual']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_annotations_content_manual]").val("");
				}
				//annotations_hover_content_manual
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_hover_content_manual']){
					 jQuery("input[name=all_chart_setting_instance22_annotations_hover_content_manual]").val(var_this_setting_container214['all_chart_setting_instance22_annotations_hover_content_manual']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_annotations_hover_content_manual]").val("");
				}
				//annotations_always_outside
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_always_outside']){
					if (var_this_setting_container214['all_chart_setting_instance22_annotations_always_outside'] =='true'){
						jQuery( "#all_chart_setting_instance22_annotations_always_outside").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_always_outside").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_annotations_always_outside').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_always_outside").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_annotations_always_outside').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_always_outside").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//annotations_high_contrast
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_high_contrast']){
					if (var_this_setting_container214['all_chart_setting_instance22_annotations_high_contrast'] =='true'){
						jQuery( "#all_chart_setting_instance22_annotations_high_contrast").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_high_contrast").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_annotations_high_contrast').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_high_contrast").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_annotations_high_contrast').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_high_contrast").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//annotations_style
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_style']){
					 jQuery("select[name=all_chart_setting_instance22_annotations_style]").val(var_this_setting_container214['all_chart_setting_instance22_annotations_style']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_annotations_style]").val("not_selected");
				}	
				//annotations_text_style_overwrite
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_overwrite']){
					if (var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_overwrite'] =='true'){
						jQuery( "#all_chart_setting_instance22_annotations_text_style_overwrite").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_text_style_overwrite").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_annotations_text_style_overwrite').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_text_style_overwrite").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_annotations_text_style_overwrite').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_text_style_overwrite").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//annotations_text_style_color
				//trendline_color
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_color']){
					 jQuery("input[name=all_chart_setting_instance22_annotations_text_style_color]").val(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_color']);
					 jQuery("input[name=all_chart_setting_instance22_annotations_text_style_color]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_color']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_annotations_text_style_color]").val("");
					jQuery("input[name=all_chart_setting_instance22_annotations_text_style_color]").next('input').trigger('click');
				}
				//annotations_text_style_font_name
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_font_name']){
					 jQuery("input[name=all_chart_setting_instance22_annotations_text_style_font_name]").val(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_font_name']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_annotations_text_style_font_name]").val("not_selected");
				}
				//annotations_text_style_bold
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_bold']){
					if (var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_bold'] =='true'){
						jQuery( "#all_chart_setting_instance22_annotations_text_style_bold").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_text_style_bold").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_annotations_text_style_bold').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_text_style_bold").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_annotations_text_style_bold').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_text_style_bold").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//annotations_text_style_italic
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_italic']){
					if (var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_italic'] =='true'){
						jQuery( "#all_chart_setting_instance22_annotations_text_style_italic").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_text_style_italic").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_annotations_text_style_italic').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_text_style_italic").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_annotations_text_style_italic').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_annotations_text_style_italic").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//annotations_text_style_font_size
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_font_size']){
					 jQuery("input[name=all_chart_setting_instance22_annotations_text_style_font_size]").val(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_font_size']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_annotations_text_style_font_size]").val("");
				}
				//annotations_text_style_aura_color
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_aura_color']){
					 jQuery("input[name=all_chart_setting_instance22_annotations_text_style_aura_color]").val(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_aura_color']);
					 jQuery("input[name=all_chart_setting_instance22_annotations_text_style_aura_color]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_aura_color']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_annotations_text_style_aura_color]").val("");
					jQuery("input[name=all_chart_setting_instance22_annotations_text_style_aura_color]").next('input').trigger('click');
				}
				//annotations_text_style_opacity
				if(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_opacity']){
					 jQuery("input[name=all_chart_setting_instance22_annotations_text_style_opacity]").val(var_this_setting_container214['all_chart_setting_instance22_annotations_text_style_opacity']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_annotations_text_style_opacity]").val("");
				}
				//********************************************************************************************************************************
				//pie donut Line Scatter Area  Stepped********************************************************************************************
				//legend.maxLines
				
				//********************************************************************************************************************************
				//bar column line scatter area stepped *******************************************************************************************
				//all_chart_setting_instance22_axis_titles_position
				//all_chart_setting_instance22_title_position
				//axis_titles_position
				if(var_this_setting_container214['all_chart_setting_instance22_axis_titles_position']){
					 jQuery("select[name=all_chart_setting_instance22_axis_titles_position]").val(var_this_setting_container214['all_chart_setting_instance22_axis_titles_position']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_axis_titles_position]").val("not_selected");
				}
				//title_position
				if(var_this_setting_container214['all_chart_setting_instance22_title_position']){
					 jQuery("select[name=all_chart_setting_instance22_title_position]").val(var_this_setting_container214['all_chart_setting_instance22_title_position']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_title_position]").val("not_selected");
				}
				//********************************************************************************************************************************
				//public *************************************************************************************************************************
				//all_chart_setting_instance22_font_size_auto
				//all_chart_setting_instance22_font_size_px
				//all_chart_setting_instance22_font_name
				//all_chart_setting_instance22_force_iframe
				//all_chart_setting_instance22_enable_interactivity
				//all_chart_setting_instance22_reverse_categories
				//all_chart_setting_instance22_title_text_style_overwrite
				//all_chart_setting_instance22_title_text_style_color
				//all_chart_setting_instance22_title_text_style_font_name
				//all_chart_setting_instance22_title_text_style_font_size
				//all_chart_setting_instance22_title_text_style_bold
				//all_chart_setting_instance22_title_text_style_italic
				//all_chart_setting_instance22_background_color_fill
				//all_chart_setting_instance22_background_color_stroke_color
				//all_chart_setting_instance22_background_color_stroke_width
				//all_chart_setting_instance22_area_width_auto
				//all_chart_setting_instance22_area_width_px
				//all_chart_setting_instance22_area_height_auto
				//all_chart_setting_instance22_area_height_px
				//all_chart_setting_instance22_width_auto
				//all_chart_setting_instance22_width_px
				//all_chart_setting_instance22_height_auto
				//all_chart_setting_instance22_height_px
				//all_chart_setting_instance22_legend_max_lines
				//all_chart_setting_instance22_legend_position
				//all_chart_setting_instance22_legend_alignment
				//all_chart_setting_instance22_legend_text_style_overwrite
				//all_chart_setting_instance22_legend_text_style_color
				//all_chart_setting_instance22_legend_text_style_font_name
				//all_chart_setting_instance22_legend_text_style_bold
				//all_chart_setting_instance22_legend_text_style_italic
				//all_chart_setting_instance22_legend_text_style_font_size
				//all_chart_setting_instance22_tooltip_ignore_bounds
				//all_chart_setting_instance22_tooltip_show_color
				//all_chart_setting_instance22_tooltip_trigger
				//all_chart_setting_instance22_tooltip_text_style_overwrite
				//all_chart_setting_instance22_tooltip_text_style_color
				//all_chart_setting_instance22_tooltip_text_style_font_name
				//all_chart_setting_instance22_tooltip_text_style_bold
				//all_chart_setting_instance22_tooltip_text_style_italic
				//all_chart_setting_instance22_tooltip_text_style_font_size
				//font_size_auto
				if(var_this_setting_container214['all_chart_setting_instance22_font_size_auto']){
					if (var_this_setting_container214['all_chart_setting_instance22_font_size_auto'] =='true'){
						jQuery( "#all_chart_setting_instance22_font_size_auto").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_font_size_auto").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_font_size_auto').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_font_size_auto").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_font_size_auto').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_font_size_auto").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//font_size_px
				if(var_this_setting_container214['all_chart_setting_instance22_font_size_px']){
					 jQuery("input[name=all_chart_setting_instance22_font_size_px]").val(var_this_setting_container214['all_chart_setting_instance22_font_size_px']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_font_size_px]").val("");
				}
				//font_name
				if(var_this_setting_container214['all_chart_setting_instance22_font_name']){
					 jQuery("input[name=all_chart_setting_instance22_font_name]").val(var_this_setting_container214['all_chart_setting_instance22_font_name']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_font_name]").val("");
				}
				//force_iframe
				if(var_this_setting_container214['all_chart_setting_instance22_force_iframe']){
					if (var_this_setting_container214['all_chart_setting_instance22_force_iframe'] =='true'){
						jQuery( "#all_chart_setting_instance22_force_iframe").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_force_iframe").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_force_iframe').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_force_iframe").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_force_iframe').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_force_iframe").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//enable_interactivity
				if(var_this_setting_container214['all_chart_setting_instance22_enable_interactivity']){
					if (var_this_setting_container214['all_chart_setting_instance22_enable_interactivity'] =='true'){
						jQuery( "#all_chart_setting_instance22_enable_interactivity").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_enable_interactivity").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_enable_interactivity').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_enable_interactivity").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_enable_interactivity').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_enable_interactivity").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//reverse_categories
				if(var_this_setting_container214['all_chart_setting_instance22_reverse_categories']){
					if (var_this_setting_container214['all_chart_setting_instance22_reverse_categories'] =='true'){
						jQuery( "#all_chart_setting_instance22_reverse_categories").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_reverse_categories").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_reverse_categories').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_reverse_categories").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_reverse_categories').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_reverse_categories").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//title_text_style_overwrite
				if(var_this_setting_container214['all_chart_setting_instance22_title_text_style_overwrite']){
					if (var_this_setting_container214['all_chart_setting_instance22_title_text_style_overwrite'] =='true'){
						jQuery( "#all_chart_setting_instance22_title_text_style_overwrite").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_title_text_style_overwrite").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_title_text_style_overwrite').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_title_text_style_overwrite").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_title_text_style_overwrite').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_title_text_style_overwrite").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//title_text_style_color
				if(var_this_setting_container214['all_chart_setting_instance22_title_text_style_color']){
					 jQuery("input[name=all_chart_setting_instance22_title_text_style_color]").val(var_this_setting_container214['all_chart_setting_instance22_title_text_style_color']);
					 jQuery("input[name=all_chart_setting_instance22_title_text_style_color]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_title_text_style_color']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_title_text_style_color]").val("");
					jQuery("input[name=all_chart_setting_instance22_title_text_style_color]").next('input').trigger('click');
				}
				//title_text_style_font_name
				if(var_this_setting_container214['all_chart_setting_instance22_title_text_style_font_name']){
					 jQuery("input[name=all_chart_setting_instance22_title_text_style_font_name]").val(var_this_setting_container214['all_chart_setting_instance22_title_text_style_font_name']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_title_text_style_font_name]").val("");
				}
				//title_text_style_font_size
				if(var_this_setting_container214['all_chart_setting_instance22_title_text_style_font_size']){
					 jQuery("input[name=all_chart_setting_instance22_title_text_style_font_size]").val(var_this_setting_container214['all_chart_setting_instance22_title_text_style_font_size']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_title_text_style_font_size]").val("");
				}
				//title_text_style_bold
				if(var_this_setting_container214['all_chart_setting_instance22_title_text_style_bold']){
					if (var_this_setting_container214['all_chart_setting_instance22_title_text_style_bold'] =='true'){
						jQuery( "#all_chart_setting_instance22_title_text_style_bold").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_title_text_style_bold").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_title_text_style_bold').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_title_text_style_bold").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_title_text_style_bold').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_title_text_style_bold").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//title_text_style_italic
				if(var_this_setting_container214['all_chart_setting_instance22_title_text_style_italic']){
					if (var_this_setting_container214['all_chart_setting_instance22_title_text_style_italic'] =='true'){
						jQuery( "#all_chart_setting_instance22_title_text_style_italic").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_title_text_style_italic").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_title_text_style_italic').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_title_text_style_italic").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_title_text_style_italic').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_title_text_style_italic").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//background_color_fill
				if(var_this_setting_container214['all_chart_setting_instance22_background_color_fill']){
					 jQuery("input[name=all_chart_setting_instance22_background_color_fill]").val(var_this_setting_container214['all_chart_setting_instance22_background_color_fill']);
					 jQuery("input[name=all_chart_setting_instance22_background_color_fill]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_background_color_fill']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_background_color_fill]").val("");
					jQuery("input[name=all_chart_setting_instance22_background_color_fill]").next('input').trigger('click');
				}
				//background_color_stroke_color
				if(var_this_setting_container214['all_chart_setting_instance22_background_color_stroke_color']){
					 jQuery("input[name=all_chart_setting_instance22_background_color_stroke_color]").val(var_this_setting_container214['all_chart_setting_instance22_background_color_stroke_color']);
					 jQuery("input[name=all_chart_setting_instance22_background_color_stroke_color]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_background_color_stroke_color']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_background_color_stroke_color]").val("");
					jQuery("input[name=all_chart_setting_instance22_background_color_stroke_color]").next('input').trigger('click');
				}
				//background_color_stroke_width
				if(var_this_setting_container214['all_chart_setting_instance22_background_color_stroke_width']){
					 jQuery("input[name=all_chart_setting_instance22_background_color_stroke_width]").val(var_this_setting_container214['all_chart_setting_instance22_background_color_stroke_width']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_background_color_stroke_width]").val("");
				}
				//area_width_auto
				if(var_this_setting_container214['all_chart_setting_instance22_area_width_auto']){
					if (var_this_setting_container214['all_chart_setting_instance22_area_width_auto'] =='true'){
						jQuery( "#all_chart_setting_instance22_area_width_auto").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_area_width_auto").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_area_width_auto').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_area_width_auto").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_area_width_auto').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_area_width_auto").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//area_width_px
				if(var_this_setting_container214['all_chart_setting_instance22_area_width_px']){
					 jQuery("input[name=all_chart_setting_instance22_area_width_px]").val(var_this_setting_container214['all_chart_setting_instance22_area_width_px']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_area_width_px]").val("");
				}
				//area_height_auto
				if(var_this_setting_container214['all_chart_setting_instance22_area_height_auto']){
					if (var_this_setting_container214['all_chart_setting_instance22_area_height_auto'] =='true'){
						jQuery( "#all_chart_setting_instance22_area_height_auto").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_area_height_auto").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_area_height_auto').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_area_height_auto").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_area_height_auto').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_area_height_auto").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//area_height_px
				if(var_this_setting_container214['all_chart_setting_instance22_area_height_px']){
					 jQuery("input[name=all_chart_setting_instance22_area_height_px]").val(var_this_setting_container214['all_chart_setting_instance22_area_height_px']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_area_height_px]").val("");
				}
				//width_auto
				if(var_this_setting_container214['all_chart_setting_instance22_width_auto']){
					if (var_this_setting_container214['all_chart_setting_instance22_width_auto'] =='true'){
						jQuery( "#all_chart_setting_instance22_width_auto").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_width_auto").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_width_auto').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_width_auto").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_width_auto').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_width_auto").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//width_px
				if(var_this_setting_container214['all_chart_setting_instance22_width_px']){
					 jQuery("input[name=all_chart_setting_instance22_width_px]").val(var_this_setting_container214['all_chart_setting_instance22_width_px']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_width_px]").val("");
				}
				//height_auto
				if(var_this_setting_container214['all_chart_setting_instance22_height_auto']){
					if (var_this_setting_container214['all_chart_setting_instance22_height_auto'] =='true'){
						jQuery( "#all_chart_setting_instance22_height_auto").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_height_auto").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_height_auto').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_height_auto").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_height_auto').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_height_auto").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//height_px
				if(var_this_setting_container214['all_chart_setting_instance22_height_px']){
					 jQuery("input[name=all_chart_setting_instance22_height_px]").val(var_this_setting_container214['all_chart_setting_instance22_height_px']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_height_px]").val("");
				}
				//legend_max_lines//
				if(var_this_setting_container214['all_chart_setting_instance22_legend_max_lines']){
					 jQuery("input[name=all_chart_setting_instance22_legend_max_lines]").val(var_this_setting_container214['all_chart_setting_instance22_legend_max_lines']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_legend_max_lines]").val("");
				}
				//legend_position
				if(var_this_setting_container214['all_chart_setting_instance22_legend_position']){
					 jQuery("select[name=all_chart_setting_instance22_legend_position]").val(var_this_setting_container214['all_chart_setting_instance22_legend_position']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_legend_position]").val("not_selected");
				}
				//legend_alignment
				if(var_this_setting_container214['all_chart_setting_instance22_legend_alignment']){
					 jQuery("select[name=all_chart_setting_instance22_legend_alignment]").val(var_this_setting_container214['all_chart_setting_instance22_legend_alignment']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_legend_alignment]").val("not_selected");
				}
				//legend_text_style_overwrite
				if(var_this_setting_container214['all_chart_setting_instance22_legend_text_style_overwrite']){
					if (var_this_setting_container214['all_chart_setting_instance22_legend_text_style_overwrite'] =='true'){
						jQuery( "#all_chart_setting_instance22_legend_text_style_overwrite").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_legend_text_style_overwrite").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_legend_text_style_overwrite').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_legend_text_style_overwrite").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_legend_text_style_overwrite').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_legend_text_style_overwrite").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//legend_text_style_color
				if(var_this_setting_container214['all_chart_setting_instance22_legend_text_style_color']){
					 jQuery("input[name=all_chart_setting_instance22_legend_text_style_color]").val(var_this_setting_container214['all_chart_setting_instance22_legend_text_style_color']);
					 jQuery("input[name=all_chart_setting_instance22_legend_text_style_color]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_legend_text_style_color']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_legend_text_style_color]").val("");
					jQuery("input[name=all_chart_setting_instance22_legend_text_style_color]").next('input').trigger('click');
				}
				//legend_text_style_font_name
				if(var_this_setting_container214['all_chart_setting_instance22_legend_text_style_font_name']){
					 jQuery("input[name=all_chart_setting_instance22_legend_text_style_font_name]").val(var_this_setting_container214['all_chart_setting_instance22_legend_text_style_font_name']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_legend_text_style_font_name]").val("");
				}
				//legend_text_style_bold
				if(var_this_setting_container214['all_chart_setting_instance22_legend_text_style_bold']){
					if (var_this_setting_container214['all_chart_setting_instance22_legend_text_style_bold'] =='true'){
						jQuery( "#all_chart_setting_instance22_legend_text_style_bold").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_legend_text_style_bold").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_legend_text_style_bold').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_legend_text_style_bold").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_legend_text_style_bold').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_legend_text_style_bold").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//legend_text_style_italic
				if(var_this_setting_container214['all_chart_setting_instance22_legend_text_style_italic']){
					if (var_this_setting_container214['all_chart_setting_instance22_legend_text_style_italic'] =='true'){
						jQuery( "#all_chart_setting_instance22_legend_text_style_italic").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_legend_text_style_italic").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_legend_text_style_italic').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_legend_text_style_italic").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_legend_text_style_italic').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_legend_text_style_italic").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//legend_text_style_font_size
				if(var_this_setting_container214['all_chart_setting_instance22_legend_text_style_font_size']){
					 jQuery("input[name=all_chart_setting_instance22_legend_text_style_font_size]").val(var_this_setting_container214['all_chart_setting_instance22_legend_text_style_font_size']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_legend_text_style_font_size]").val("");
				}
				//tooltip_ignore_bounds
				if(var_this_setting_container214['all_chart_setting_instance22_tooltip_ignore_bounds']){
					if (var_this_setting_container214['all_chart_setting_instance22_tooltip_ignore_bounds'] =='true'){
						jQuery( "#all_chart_setting_instance22_tooltip_ignore_bounds").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_ignore_bounds").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_tooltip_ignore_bounds').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_ignore_bounds").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_tooltip_ignore_bounds').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_ignore_bounds").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//tooltip_show_color
				if(var_this_setting_container214['all_chart_setting_instance22_tooltip_show_color']){
					if (var_this_setting_container214['all_chart_setting_instance22_tooltip_show_color'] =='true'){
						jQuery( "#all_chart_setting_instance22_tooltip_show_color").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_show_color").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_tooltip_show_color').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_show_color").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_tooltip_show_color').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_show_color").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//tooltip_trigger
				if(var_this_setting_container214['all_chart_setting_instance22_tooltip_trigger']){
					 jQuery("select[name=all_chart_setting_instance22_tooltip_trigger]").val(var_this_setting_container214['all_chart_setting_instance22_tooltip_trigger']);
				}else{
					jQuery("select[name=all_chart_setting_instance22_tooltip_trigger]").val("not_selected");
				}
				//tooltip_text_style_overwrite
				if(var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_overwrite']){
					if (var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_overwrite'] =='true'){
						jQuery( "#all_chart_setting_instance22_tooltip_text_style_overwrite").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_text_style_overwrite").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_tooltip_text_style_overwrite').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_text_style_overwrite").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_tooltip_text_style_overwrite').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_text_style_overwrite").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//tooltip_text_style_color
				if(var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_color']){
					 jQuery("input[name=all_chart_setting_instance22_tooltip_text_style_color]").val(var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_color']);
					 jQuery("input[name=all_chart_setting_instance22_tooltip_text_style_color]").wpColorPicker('color', var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_color']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_tooltip_text_style_color]").val("");
					jQuery("input[name=all_chart_setting_instance22_tooltip_text_style_color]").next('input').trigger('click');
				}
				//tooltip_text_style_font_name
				if(var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_font_name']){
					 jQuery("input[name=all_chart_setting_instance22_tooltip_text_style_font_name]").val(var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_font_name']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_tooltip_text_style_font_name]").val("");
				}
				//tooltip_text_style_bold
				if(var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_bold']){
					if (var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_bold'] =='true'){
						jQuery( "#all_chart_setting_instance22_tooltip_text_style_bold").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_text_style_bold").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_tooltip_text_style_bold').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_text_style_bold").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_tooltip_text_style_bold').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_text_style_bold").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//tooltip_text_style_italic
				if(var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_italic']){
					if (var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_italic'] =='true'){
						jQuery( "#all_chart_setting_instance22_tooltip_text_style_italic").prop('checked', true);
						var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_text_style_italic").parent();
						jQuery(this_parent22).children("span").addClass("checked");	
					}else{
						jQuery('#all_chart_setting_instance22_tooltip_text_style_italic').prop('checked', false);
						var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_text_style_italic").parent();
						jQuery(this_parent22).children("span").removeClass("checked");
					}
				}else{
					jQuery('#all_chart_setting_instance22_tooltip_text_style_italic').prop('checked', false);
					var this_parent22 = jQuery("#all_chart_setting_instance22_tooltip_text_style_italic").parent();
					jQuery(this_parent22).children("span").removeClass("checked");
				}
				//tooltip_text_style_font_size
				if(var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_font_size']){
					 jQuery("input[name=all_chart_setting_instance22_tooltip_text_style_font_size]").val(var_this_setting_container214['all_chart_setting_instance22_tooltip_text_style_font_size']);
				}else{
					jQuery("input[name=all_chart_setting_instance22_tooltip_text_style_font_size]").val("");
				}
				//////////////////////////////////////////////////////////////////////////////
				jQuery(document).foundation();
				/////
			},
			close: function() {	
				jQuery( ".ws_db_hide_after_close" ).css("display","none");
				if(jQuery('#all_chart_setting_instance22_is_3d').is(":checked")){ var all_chart_setting_instance22_is_3d = 'true'}else{var all_chart_setting_instance22_is_3d = 'false'}
				if(jQuery('#all_chart_setting_instance22_connect_steps').is(":checked")){ var all_chart_setting_instance22_connect_steps = 'true'}else{var all_chart_setting_instance22_connect_steps = 'false'}
				if(jQuery('#all_chart_setting_instance22_slice_text_style_overwrite').is(":checked")){ var all_chart_setting_instance22_slice_text_style_overwrite = 'true'}else{var all_chart_setting_instance22_slice_text_style_overwrite = 'false'}
				if(jQuery('#all_chart_setting_instance22_points_visible').is(":checked")){ var all_chart_setting_instance22_points_visible = 'true'}else{var all_chart_setting_instance22_points_visible = 'false'}
				if(jQuery('#all_chart_setting_instance22_trendlines_enable_or_disable').is(":checked")){ var all_chart_setting_instance22_trendlines_enable_or_disable = 'true'}else{var all_chart_setting_instance22_trendlines_enable_or_disable = 'false'}
				if(jQuery('#all_chart_setting_instance22_trendline_show_r2').is(":checked")){ var all_chart_setting_instance22_trendline_show_r2 = 'true'}else{var all_chart_setting_instance22_trendline_show_r2 = 'false'}
				if(jQuery('#all_chart_setting_instance22_trendline_visible_in_legend').is(":checked")){ var all_chart_setting_instance22_trendline_visible_in_legend = 'true'}else{var all_chart_setting_instance22_trendline_visible_in_legend = 'false'}
				if(jQuery('#all_chart_setting_instance22_trendline_points_visible').is(":checked")){ var all_chart_setting_instance22_trendline_points_visible = 'true'}else{var all_chart_setting_instance22_trendline_points_visible = 'false'}
				if(jQuery('#all_chart_setting_instance22_animation_startup').is(":checked")){ var all_chart_setting_instance22_animation_startup = 'true'}else{var all_chart_setting_instance22_animation_startup = 'false'}
				if(jQuery('#all_chart_setting_instance22_annotations_enable_or_disable').is(":checked")){ var all_chart_setting_instance22_annotations_enable_or_disable = 'true'}else{var all_chart_setting_instance22_annotations_enable_or_disable = 'false'}
				if(jQuery('#all_chart_setting_instance22_annotations_always_outside').is(":checked")){ var all_chart_setting_instance22_annotations_always_outside = 'true'}else{var all_chart_setting_instance22_annotations_always_outside = 'false'}
				if(jQuery('#all_chart_setting_instance22_annotations_high_contrast').is(":checked")){ var all_chart_setting_instance22_annotations_high_contrast = 'true'}else{var all_chart_setting_instance22_annotations_high_contrast = 'false'}
				if(jQuery('#all_chart_setting_instance22_annotations_text_style_overwrite').is(":checked")){ var all_chart_setting_instance22_annotations_text_style_overwrite = 'true'}else{var all_chart_setting_instance22_annotations_text_style_overwrite = 'false'}
				if(jQuery('#all_chart_setting_instance22_annotations_text_style_bold').is(":checked")){ var all_chart_setting_instance22_annotations_text_style_bold = 'true'}else{var all_chart_setting_instance22_annotations_text_style_bold = 'false'}
				if(jQuery('#all_chart_setting_instance22_annotations_text_style_italic').is(":checked")){ var all_chart_setting_instance22_annotations_text_style_italic = 'true'}else{var all_chart_setting_instance22_annotations_text_style_italic = 'false'}
				if(jQuery('#all_chart_setting_instance22_font_size_auto').is(":checked")){ var all_chart_setting_instance22_font_size_auto = 'true'}else{var all_chart_setting_instance22_font_size_auto = 'false'}
				if(jQuery('#all_chart_setting_instance22_force_iframe').is(":checked")){ var all_chart_setting_instance22_force_iframe = 'true'}else{var all_chart_setting_instance22_force_iframe = 'false'}
				if(jQuery('#all_chart_setting_instance22_enable_interactivity').is(":checked")){ var all_chart_setting_instance22_enable_interactivity = 'true'}else{var all_chart_setting_instance22_enable_interactivity = 'false'}
				if(jQuery('#all_chart_setting_instance22_reverse_categories').is(":checked")){ var all_chart_setting_instance22_reverse_categories = 'true'}else{var all_chart_setting_instance22_reverse_categories = 'false'}
				if(jQuery('#all_chart_setting_instance22_title_text_style_overwrite').is(":checked")){ var all_chart_setting_instance22_title_text_style_overwrite = 'true'}else{var all_chart_setting_instance22_title_text_style_overwrite = 'false'}
				if(jQuery('#all_chart_setting_instance22_title_text_style_bold').is(":checked")){ var all_chart_setting_instance22_title_text_style_bold = 'true'}else{var all_chart_setting_instance22_title_text_style_bold = 'false'}
				if(jQuery('#all_chart_setting_instance22_title_text_style_italic').is(":checked")){ var all_chart_setting_instance22_title_text_style_italic = 'true'}else{var all_chart_setting_instance22_title_text_style_italic = 'false'}
				if(jQuery('#all_chart_setting_instance22_area_width_auto').is(":checked")){ var all_chart_setting_instance22_area_width_auto = 'true'}else{var all_chart_setting_instance22_area_width_auto = 'false'}
				if(jQuery('#all_chart_setting_instance22_area_height_auto').is(":checked")){ var all_chart_setting_instance22_area_height_auto = 'true'}else{var all_chart_setting_instance22_area_height_auto = 'false'}
				if(jQuery('#all_chart_setting_instance22_width_auto').is(":checked")){ var all_chart_setting_instance22_width_auto = 'true'}else{var all_chart_setting_instance22_width_auto = 'false'}
				if(jQuery('#all_chart_setting_instance22_height_auto').is(":checked")){ var all_chart_setting_instance22_height_auto = 'true'}else{var all_chart_setting_instance22_height_auto = 'false'}
				if(jQuery('#all_chart_setting_instance22_legend_text_style_overwrite').is(":checked")){ var all_chart_setting_instance22_legend_text_style_overwrite = 'true'}else{var all_chart_setting_instance22_legend_text_style_overwrite = 'false'}
				if(jQuery('#all_chart_setting_instance22_legend_text_style_bold').is(":checked")){ var all_chart_setting_instance22_legend_text_style_bold = 'true'}else{var all_chart_setting_instance22_legend_text_style_bold = 'false'}
				if(jQuery('#all_chart_setting_instance22_legend_text_style_italic').is(":checked")){ var all_chart_setting_instance22_legend_text_style_italic = 'true'}else{var all_chart_setting_instance22_legend_text_style_italic = 'false'}
				if(jQuery('#all_chart_setting_instance22_tooltip_ignore_bounds').is(":checked")){ var all_chart_setting_instance22_tooltip_ignore_bounds = 'true'}else{var all_chart_setting_instance22_tooltip_ignore_bounds = 'false'}
				if(jQuery('#all_chart_setting_instance22_tooltip_show_color').is(":checked")){ var all_chart_setting_instance22_tooltip_show_color = 'true'}else{var all_chart_setting_instance22_tooltip_show_color = 'false'}
				if(jQuery('#all_chart_setting_instance22_tooltip_text_style_overwrite').is(":checked")){ var all_chart_setting_instance22_tooltip_text_style_overwrite = 'true'}else{var all_chart_setting_instance22_tooltip_text_style_overwrite = 'false'}
				if(jQuery('#all_chart_setting_instance22_tooltip_text_style_bold').is(":checked")){ var all_chart_setting_instance22_tooltip_text_style_bold = 'true'}else{var all_chart_setting_instance22_tooltip_text_style_bold = 'false'}
				if(jQuery('#all_chart_setting_instance22_tooltip_text_style_italic').is(":checked")){ var all_chart_setting_instance22_tooltip_text_style_italic = 'true'}else{var all_chart_setting_instance22_tooltip_text_style_italic = 'false'}
				/////////////////////////////////////////////////////////////////////////////////////////////////////
				this_instance_settings ={	
				'all_chart_setting_instance22_is_3d':all_chart_setting_instance22_is_3d,
				'all_chart_setting_instance22_connect_steps':all_chart_setting_instance22_connect_steps,
				'all_chart_setting_instance22_slice_text_style_overwrite':all_chart_setting_instance22_slice_text_style_overwrite,
				'all_chart_setting_instance22_points_visible':all_chart_setting_instance22_points_visible,
				'all_chart_setting_instance22_trendlines_enable_or_disable':all_chart_setting_instance22_trendlines_enable_or_disable,
				'all_chart_setting_instance22_trendline_show_r2':all_chart_setting_instance22_trendline_show_r2,
				'all_chart_setting_instance22_trendline_visible_in_legend':all_chart_setting_instance22_trendline_visible_in_legend,
				'all_chart_setting_instance22_trendline_points_visible':all_chart_setting_instance22_trendline_points_visible,
				'all_chart_setting_instance22_animation_startup':all_chart_setting_instance22_animation_startup,
				'all_chart_setting_instance22_annotations_enable_or_disable':all_chart_setting_instance22_annotations_enable_or_disable,
				'all_chart_setting_instance22_annotations_always_outside':all_chart_setting_instance22_annotations_always_outside,
				'all_chart_setting_instance22_annotations_high_contrast':all_chart_setting_instance22_annotations_high_contrast,
				'all_chart_setting_instance22_annotations_text_style_overwrite':all_chart_setting_instance22_annotations_text_style_overwrite,
				'all_chart_setting_instance22_annotations_text_style_bold':all_chart_setting_instance22_annotations_text_style_bold,
				'all_chart_setting_instance22_annotations_text_style_italic':all_chart_setting_instance22_annotations_text_style_italic,
				'all_chart_setting_instance22_font_size_auto':all_chart_setting_instance22_font_size_auto,
				'all_chart_setting_instance22_force_iframe':all_chart_setting_instance22_force_iframe,
				'all_chart_setting_instance22_enable_interactivity':all_chart_setting_instance22_enable_interactivity,
				'all_chart_setting_instance22_reverse_categories':all_chart_setting_instance22_reverse_categories,
				'all_chart_setting_instance22_title_text_style_overwrite':all_chart_setting_instance22_title_text_style_overwrite,
				'all_chart_setting_instance22_title_text_style_bold':all_chart_setting_instance22_title_text_style_bold,
				'all_chart_setting_instance22_title_text_style_italic':all_chart_setting_instance22_title_text_style_italic,
				'all_chart_setting_instance22_area_width_auto':all_chart_setting_instance22_area_width_auto,
				'all_chart_setting_instance22_area_height_auto':all_chart_setting_instance22_area_height_auto,
				'all_chart_setting_instance22_width_auto':all_chart_setting_instance22_width_auto,
				'all_chart_setting_instance22_height_auto':all_chart_setting_instance22_height_auto,
				'all_chart_setting_instance22_legend_text_style_overwrite':all_chart_setting_instance22_legend_text_style_overwrite,
				'all_chart_setting_instance22_legend_text_style_bold':all_chart_setting_instance22_legend_text_style_bold,
				'all_chart_setting_instance22_legend_text_style_italic':all_chart_setting_instance22_legend_text_style_italic,
				'all_chart_setting_instance22_tooltip_ignore_bounds':all_chart_setting_instance22_tooltip_ignore_bounds,
				'all_chart_setting_instance22_tooltip_show_color':all_chart_setting_instance22_tooltip_show_color,
				'all_chart_setting_instance22_tooltip_text_style_overwrite':all_chart_setting_instance22_tooltip_text_style_overwrite,
				'all_chart_setting_instance22_tooltip_text_style_bold':all_chart_setting_instance22_tooltip_text_style_bold,
				'all_chart_setting_instance22_tooltip_text_style_italic':all_chart_setting_instance22_tooltip_text_style_italic,
				//
				'all_chart_setting_instance22_pie_hole' : jQuery("input[name=all_chart_setting_instance22_pie_hole]").val(),
				'all_chart_setting_instance22_area_opacity' : jQuery("input[name=all_chart_setting_instance22_area_opacity]").val(),
				'all_chart_setting_instance22_line_width' : jQuery("input[name=all_chart_setting_instance22_line_width]").val(),
				'all_chart_setting_instance22_slice_text_style_color' : jQuery("input[name=all_chart_setting_instance22_slice_text_style_color]").val(),
				'all_chart_setting_instance22_slice_text_style_font_name' : jQuery("input[name=all_chart_setting_instance22_slice_text_style_font_name]").val(),
				'all_chart_setting_instance22_slice_text_style_font_size' : jQuery("input[name=all_chart_setting_instance22_slice_text_style_font_size]").val(),
				'all_chart_setting_instance22_start_angle' : jQuery("input[name=all_chart_setting_instance22_start_angle]").val(),
				'all_chart_setting_instance22_residue_slice_color' : jQuery("input[name=all_chart_setting_instance22_residue_slice_color]").val(),
				'all_chart_setting_instance22_residue_slice_label' : jQuery("input[name=all_chart_setting_instance22_residue_slice_label]").val(),
				'all_chart_setting_instance22_point_size' : jQuery("input[name=all_chart_setting_instance22_point_size]").val(),
				'all_chart_setting_instance22_crosshair_color_focused' : jQuery("input[name=all_chart_setting_instance22_crosshair_color_focused]").val(),
				'all_chart_setting_instance22_crosshair_opacity_focused' : jQuery("input[name=all_chart_setting_instance22_crosshair_opacity_focused]").val(),
				'all_chart_setting_instance22_crosshair_color_selected' : jQuery("input[name=all_chart_setting_instance22_crosshair_color_selected]").val(),
				'all_chart_setting_instance22_crosshair_opacity_selected' : jQuery("input[name=all_chart_setting_instance22_crosshair_opacity_selected]").val(),
				'all_chart_setting_instance22_trendline_color' : jQuery("input[name=all_chart_setting_instance22_trendline_color]").val(),
				'all_chart_setting_instance22_trendline_line_width' : jQuery("input[name=all_chart_setting_instance22_trendline_line_width]").val(),
				'all_chart_setting_instance22_trendline_opacity' : jQuery("input[name=all_chart_setting_instance22_trendline_opacity]").val(),
				'all_chart_setting_instance22_trendline_degree' : jQuery("input[name=all_chart_setting_instance22_trendline_degree]").val(),
				'all_chart_setting_instance22_trendline_point_size' : jQuery("input[name=all_chart_setting_instance22_trendline_point_size]").val(),
				'all_chart_setting_instance22_data_opacity' : jQuery("input[name=all_chart_setting_instance22_data_opacity]").val(),
				'all_chart_setting_instance22_animation_duration' : jQuery("input[name=all_chart_setting_instance22_animation_duration]").val(),
				'all_chart_setting_instance22_annotations_separator_for_both_mode' : jQuery("input[name=all_chart_setting_instance22_annotations_separator_for_both_mode]").val(),
				'all_chart_setting_instance22_annotations_content_manual' : jQuery("input[name=all_chart_setting_instance22_annotations_content_manual]").val(),
				'all_chart_setting_instance22_annotations_hover_content_manual' : jQuery("input[name=all_chart_setting_instance22_annotations_hover_content_manual]").val(),
				'all_chart_setting_instance22_annotations_text_style_color' : jQuery("input[name=all_chart_setting_instance22_annotations_text_style_color]").val(),
				'all_chart_setting_instance22_annotations_text_style_font_size' : jQuery("input[name=all_chart_setting_instance22_annotations_text_style_font_size]").val(),
				'all_chart_setting_instance22_annotations_text_style_aura_color' : jQuery("input[name=all_chart_setting_instance22_annotations_text_style_aura_color]").val(),
				'all_chart_setting_instance22_annotations_text_style_opacity' : jQuery("input[name=all_chart_setting_instance22_annotations_text_style_opacity]").val(),
				'all_chart_setting_instance22_font_size_px' : jQuery("input[name=all_chart_setting_instance22_font_size_px]").val(),
				'all_chart_setting_instance22_font_name' : jQuery("input[name=all_chart_setting_instance22_font_name]").val(),
				'all_chart_setting_instance22_title_text_style_color' : jQuery("input[name=all_chart_setting_instance22_title_text_style_color]").val(),
				'all_chart_setting_instance22_title_text_style_font_name' : jQuery("input[name=all_chart_setting_instance22_title_text_style_font_name]").val(),
				'all_chart_setting_instance22_title_text_style_font_size' : jQuery("input[name=all_chart_setting_instance22_title_text_style_font_size]").val(),
				'all_chart_setting_instance22_background_color_fill' : jQuery("input[name=all_chart_setting_instance22_background_color_fill]").val(),
				'all_chart_setting_instance22_background_color_stroke_color' : jQuery("input[name=all_chart_setting_instance22_background_color_stroke_color]").val(),
				'all_chart_setting_instance22_background_color_stroke_width' : jQuery("input[name=all_chart_setting_instance22_background_color_stroke_width]").val(),
				'all_chart_setting_instance22_area_width_px' : jQuery("input[name=all_chart_setting_instance22_area_width_px]").val(),
				'all_chart_setting_instance22_area_height_px' : jQuery("input[name=all_chart_setting_instance22_area_height_px]").val(),
				'all_chart_setting_instance22_width_px' : jQuery("input[name=all_chart_setting_instance22_width_px]").val(),
				'all_chart_setting_instance22_height_px' : jQuery("input[name=all_chart_setting_instance22_height_px]").val(),
				'all_chart_setting_instance22_legend_max_lines' : jQuery("input[name=all_chart_setting_instance22_legend_max_lines]").val(),
				'all_chart_setting_instance22_legend_text_style_color' : jQuery("input[name=all_chart_setting_instance22_legend_text_style_color]").val(),
				'all_chart_setting_instance22_legend_text_style_font_name' : jQuery("input[name=all_chart_setting_instance22_legend_text_style_font_name]").val(),
				'all_chart_setting_instance22_legend_text_style_font_size' : jQuery("input[name=all_chart_setting_instance22_legend_text_style_font_size]").val(),
				'all_chart_setting_instance22_tooltip_text_style_color' : jQuery("input[name=all_chart_setting_instance22_tooltip_text_style_color]").val(),
				'all_chart_setting_instance22_tooltip_text_style_font_name' : jQuery("input[name=all_chart_setting_instance22_tooltip_text_style_font_name]").val(),
				'all_chart_setting_instance22_tooltip_text_style_font_size' : jQuery("input[name=all_chart_setting_instance22_tooltip_text_style_font_size]").val(),
				'all_chart_setting_instance22_annotations_text_style_font_name' : jQuery("input[name=all_chart_setting_instance22_annotations_text_style_font_name]").val(),
				//
				'all_chart_setting_instance22_slice_text' : jQuery("select[name=all_chart_setting_instance22_slice_text]").val(),
				'all_chart_setting_instance22_curve_type' : jQuery("select[name=all_chart_setting_instance22_curve_type]").val(),
				'all_chart_setting_instance22_orientation' : jQuery("select[name=all_chart_setting_instance22_orientation]").val(),
				'all_chart_setting_instance22_point_shape' : jQuery("select[name=all_chart_setting_instance22_point_shape]").val(),
				'all_chart_setting_instance22_crosshair_trigger' : jQuery("select[name=all_chart_setting_instance22_crosshair_trigger]").val(),
				'all_chart_setting_instance22_crosshair_orientation_focused' : jQuery("select[name=all_chart_setting_instance22_crosshair_orientation_focused]").val(),
				'all_chart_setting_instance22_crosshair_orientation_selected' : jQuery("select[name=all_chart_setting_instance22_crosshair_orientation_selected]").val(),
				'all_chart_setting_instance22_trendlines_type' : jQuery("select[name=all_chart_setting_instance22_trendlines_type]").val(),
				'all_chart_setting_instance22_animation_easing' : jQuery("select[name=all_chart_setting_instance22_animation_easing]").val(),
				'all_chart_setting_instance22_annotations_content' : jQuery("select[name=all_chart_setting_instance22_annotations_content]").val(),
				'all_chart_setting_instance22_annotations_hover_content' : jQuery("select[name=all_chart_setting_instance22_annotations_hover_content]").val(),
				'all_chart_setting_instance22_annotations_style' : jQuery("select[name=all_chart_setting_instance22_annotations_style]").val(),
				'all_chart_setting_instance22_axis_titles_position' : jQuery("select[name=all_chart_setting_instance22_axis_titles_position]").val(),
				'all_chart_setting_instance22_title_position' : jQuery("select[name=all_chart_setting_instance22_title_position]").val(),
				'all_chart_setting_instance22_legend_position' : jQuery("select[name=all_chart_setting_instance22_legend_position]").val(),
				'all_chart_setting_instance22_legend_alignment' : jQuery("select[name=all_chart_setting_instance22_legend_alignment]").val(),
				'all_chart_setting_instance22_tooltip_trigger' : jQuery("select[name=all_chart_setting_instance22_tooltip_trigger]").val(),
				};
				if (typeof object_all_style_stting_container === "undefined"){
					object_all_style_stting_container ={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ]={};
				}
				object_all_style_stting_container[ current_setting_gruop_name214 ][current_setting_element_name214] = this_instance_settings;
				console.log(object_all_style_stting_container);
			},
	   },
		
	});
}
jQuery(document).on("click",".ws_db_open_light_box_of_a_chart_setting", if_light_box_of_a_chart_setting_clicked);



function if_light_box_opened(){
	this_parent1 =jQuery( this ).parent();
	this_parent =jQuery( this_parent1 ).parent();
	current_setting_gruop_name214 = jQuery(this_parent).find('.ws_db_setting_group_name214').text();
	current_setting_subject214 = jQuery( this ).text();
	jQuery.magnificPopup.close();//reset magnificPopup behavior and callbacks
	jQuery.magnificPopup.open({
	  items: {
		src: "#ws_db_light_box_for_all_default_settings_id",
		type: 'inline',
	   },
	   callbacks: {
		beforeOpen: function() {
		jQuery( ".ws_db_hide_after_close2" ).css("display","none");
		//alert("fffff" );
		jQuery( ".ws_db_single_post_specific_settings_item" ).remove();
		//jQuery( ".ws_db_post_list_specific_settings_item" ).find("input[type=text]").val("");
		jQuery( ".ws_db_post_list_specific_settings_item" ).remove();
		//
		if(current_setting_gruop_name214 =="post_list_section"){
			jQuery( ".ws_db_setting_for_public" ).css("display","block");
			current_dimension_gruop_name214 = jQuery(this_parent).children().find('.dimension_gruop_154').text();
			current_dimension_name214 = jQuery(this_parent).children().find(".dimension_name_153").text();
			current_dimension_name_visible_text = jQuery(this_parent).find('.dimension_name_154').justtext();
			if(object_all_style_stting_container 
			&& object_all_style_stting_container[current_setting_gruop_name214]
			&& object_all_style_stting_container[current_setting_gruop_name214][current_dimension_gruop_name214]  
			&& object_all_style_stting_container[current_setting_gruop_name214][current_dimension_gruop_name214][current_dimension_name214] 
			&& object_all_style_stting_container[current_setting_gruop_name214][current_dimension_gruop_name214][current_dimension_name214][current_setting_subject214] ){
				var_this_setting_container214=object_all_style_stting_container[current_setting_gruop_name214][current_dimension_gruop_name214][current_dimension_name214][current_setting_subject214];
			}else{
				var_this_setting_container214={};
			}
			if(current_setting_subject214 =="label"){
				if(var_this_setting_container214.hasOwnProperty("post_list11_this_element_subject_visible_text")=== false ){
					var post_list11_this_element_subject_visible_text=current_dimension_name_visible_text;
				}else{
					var post_list11_this_element_subject_visible_text=var_this_setting_container214['post_list11_this_element_subject_visible_text'];
				}
				var html_for_use='\
				<div class="ws_db_setting_section ws_db_post_list_specific_settings_item" >\
					<h4  class="ws_db_setting_title"  >visible text for "lable"</h4>\
					<div class="ws_db_setting_description" >your custom text to replace the default dimension name.   </div>\
					<div class="ws_db_option_max_length_in">\
						<input type="text"  name="post_list11_this_element_subject_visible_text"  value="'+post_list11_this_element_subject_visible_text+'"  >\
					</div> \
				</div>';
				jQuery("#ws_db_light_box_for_all_default_settings_id"  ).prepend( html_for_use );					
			}else if(current_setting_subject214 =="delimiter"){
				if(var_this_setting_container214.hasOwnProperty("post_list11_this_element_subject_visible_text")=== false ){
					var post_list11_this_element_subject_visible_text="";
				}else{
					var post_list11_this_element_subject_visible_text=var_this_setting_container214['post_list11_this_element_subject_visible_text'];
				}
				var html_for_use='\
				<div class="ws_db_setting_section ws_db_post_list_specific_settings_item" >\
					<h4  class="ws_db_setting_title"  >Sign for "delimiter"</h4>\
					<div class="ws_db_setting_description" >your custom text to use as delimiter Sign between label and value.   </div>\
					<div class="ws_db_option_max_length_in">\
						<input type="text"  name="post_list11_this_element_subject_visible_text"  value="'+post_list11_this_element_subject_visible_text+'"  >\
					</div> \
				</div>';
				jQuery("#ws_db_light_box_for_all_default_settings_id"  ).prepend( html_for_use );	
			}else if(current_setting_subject214 =="value"){
				
			}else if(current_setting_subject214 =="suffix"){
				if(var_this_setting_container214.hasOwnProperty("post_list11_this_element_subject_visible_text")=== false ){
					var post_list11_this_element_subject_visible_text="";
				}else{
					var post_list11_this_element_subject_visible_text=var_this_setting_container214['post_list11_this_element_subject_visible_text'];
				}
				var html_for_use='\
				<div class="ws_db_setting_section ws_db_post_list_specific_settings_item" >\
					<h4  class="ws_db_setting_title"  >Sign for "suffix"</h4>\
					<div class="ws_db_setting_description" >your custom text to use as suffix after value.   </div>\
					<div class="ws_db_option_max_length_in">\
						<input type="text"  name="post_list11_this_element_subject_visible_text"  value="'+post_list11_this_element_subject_visible_text+'"  >\
					</div> \
				</div>';
				jQuery("#ws_db_light_box_for_all_default_settings_id"  ).prepend( html_for_use );	
			}else if(current_setting_subject214 =="wrapper"){
				jQuery( ".ws_db_setting_for_wrappers" ).css("display","block");
			}
		}else if(current_setting_gruop_name214 =="chart_section_manual"){
			current_setting_element_name214 = jQuery(this_parent).find('.ws_db_setting_element_name214').text();
			if(object_all_style_stting_container 
			&& object_all_style_stting_container[current_setting_gruop_name214]
			&& object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214] ){ 
				var_this_setting_container214=object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214];
			}else{
				var_this_setting_container214={};
			}
			
			jQuery( ".ws_db_setting_for_public , .ws_db_setting_for_wrappers" ).css("display","block");
			
		}else if(current_setting_gruop_name214 =="navigation_path_section"){
			current_setting_element_name214 = jQuery(this_parent).find('.ws_db_setting_element_name214').text();	
			if(object_all_style_stting_container 
			&& object_all_style_stting_container[current_setting_gruop_name214]
			&& object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214] ){ 
				var_this_setting_container214=object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214];
			}else{
				var_this_setting_container214={};
			}
			
			if(current_setting_element_name214 =="navigation_path_wrapper"){
				jQuery( ".ws_db_setting_for_public ,.ws_db_setting_for_wrappers").css("display","block");
			}else if(current_setting_element_name214 =="single_query"){
				jQuery( ".ws_db_setting_for_public ,.ws_db_setting_for_wrappers" ).css("display","block");
				jQuery( ".ws_db_background_not_for_nav_path" ).css("display","none");
			}else if(current_setting_element_name214 =="first_static"){
				jQuery( ".ws_db_setting_for_public ,.ws_db_setting_for_navigation_path_section_first_static" ).css("display","block");
				jQuery( ".ws_db_background_not_for_nav_path" ).css("display","none");
			}else if(current_setting_element_name214 =="group_element"){
				jQuery( ".ws_db_setting_for_public,.ws_db_setting_for_navigation_path_section_group_element" ).css("display","block");
				jQuery( ".ws_db_background_not_for_nav_path" ).css("display","none");
			}else if(current_setting_element_name214 =="sign_after_group"){
				jQuery( ".ws_db_setting_for_public,.ws_db_setting_for_navigation_path_section_sign_after_group" ).css("display","block");
				jQuery( ".ws_db_background_not_for_nav_path" ).css("display","none");
			}else if(current_setting_element_name214 =="sign_after_dimension"){
				jQuery( ".ws_db_setting_for_public,.ws_db_setting_for_navigation_path_section_sign_after_dimension" ).css("display","block");
				jQuery( ".ws_db_background_not_for_nav_path" ).css("display","none");
			}else if(current_setting_element_name214 =="number_sign"){
				jQuery( ".ws_db_setting_for_public,.ws_db_setting_for_navigation_path_section_number_sign" ).css("display","block");
				jQuery( ".ws_db_background_not_for_nav_path" ).css("display","none");
			}else if(current_setting_element_name214 =="delete_sign"){
				jQuery( ".ws_db_setting_for_public,.ws_db_setting_for_navigation_path_section_delete_sign" ).css("display","block");
				jQuery( ".ws_db_background_not_for_nav_path" ).css("display","none");
			}else if(current_setting_element_name214 =="hover_unhover"){
				jQuery( ".ws_db_setting_for_navigation_path_section_hover_unhover" ).css("display","block");
				jQuery( ".ws_db_setting_for_public" ).css("display","none");
				jQuery( ".ws_db_background_not_for_nav_path" ).css("display","none");
			}else{
				jQuery( ".ws_db_setting_for_public" ).css("display","block");
				jQuery( ".ws_db_background_not_for_nav_path" ).css("display","none");
			}
			
		}else if(current_setting_gruop_name214 =="post_list_manual_section"){
			current_setting_element_name214 = jQuery(this_parent).find('.ws_db_setting_element_name214').text();	
			if(object_all_style_stting_container 
			&& object_all_style_stting_container[current_setting_gruop_name214]
			&& object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214] ){ 
				var_this_setting_container214=object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214];
			}else{
				var_this_setting_container214={};
			}
			if(current_setting_element_name214 =="post_list_pagination"){
				jQuery( ".ws_db_setting_for_post_list_manual_section_pagination").css("display","block");
				jQuery( ".ws_db_setting_for_public").css("display","none");
			}else if(current_setting_element_name214 =="post_list_pagination_box"){
				jQuery( ".ws_db_setting_for_public,.ws_db_setting_for_wrappers" ).css("display","block");
			}else if(current_setting_element_name214 =="post_list_box"){
				jQuery( ".ws_db_setting_for_public,.ws_db_setting_for_wrappers" ).css("display","block");
			}else if(current_setting_element_name214 =="post_list_item_box"){
				jQuery( ".ws_db_setting_for_public,.ws_db_setting_for_wrappers" ).css("display","block");
			}else{
				jQuery( ".ws_db_setting_for_public" ).css("display","block");
			}
		}else if(current_setting_gruop_name214 =="single_post_section"){
			current_dimension_gruop_name214 = jQuery(this_parent).children().find('.dimension_gruop_155').text();
			current_dimension_name214 = jQuery(this_parent).children().find(".dimension_name_156").text();
			current_dimension_name_visible_text = jQuery(this_parent).find('.dimension_name_155').justtext();
			if(object_all_style_stting_container 
			&& object_all_style_stting_container[current_setting_gruop_name214]
			&& object_all_style_stting_container[current_setting_gruop_name214][current_dimension_gruop_name214]  
			&& object_all_style_stting_container[current_setting_gruop_name214][current_dimension_gruop_name214][current_dimension_name214] 
			&& object_all_style_stting_container[current_setting_gruop_name214][current_dimension_gruop_name214][current_dimension_name214][current_setting_subject214] ){
				var_this_setting_container214=object_all_style_stting_container[current_setting_gruop_name214][current_dimension_gruop_name214][current_dimension_name214][current_setting_subject214];
			}else{
				var_this_setting_container214={};
			}
			jQuery( ".ws_db_setting_for_public" ).css("display","block");
			
			if(current_setting_subject214 =="label"){
				if(var_this_setting_container214.hasOwnProperty("single_post11_this_element_subject_visible_text")=== false){
					var single_post11_this_element_subject_visible_text=current_dimension_name_visible_text;
				}else{
					var single_post11_this_element_subject_visible_text=var_this_setting_container214['single_post11_this_element_subject_visible_text'];
				}
				var html_for_use='\
				<div class="ws_db_setting_section ws_db_single_post_specific_settings_item" >\
					<h4  class="ws_db_setting_title"  >visible text for "lable"</h4>\
					<div class="ws_db_setting_description" >your custom text to replace the default dimension name.   </div>\
					<div class="ws_db_option_max_length_in">\
						<input type="text"  name="single_post11_this_element_subject_visible_text"  value="'+single_post11_this_element_subject_visible_text+'"  >\
					</div> \
				</div>';
				jQuery("#ws_db_light_box_for_all_default_settings_id"  ).prepend( html_for_use );					
			}else if(current_setting_subject214 =="delimiter"){
				if(var_this_setting_container214.hasOwnProperty("single_post11_this_element_subject_visible_text")=== false ){
					var single_post11_this_element_subject_visible_text=":";
				}else{
					var single_post11_this_element_subject_visible_text=var_this_setting_container214['single_post11_this_element_subject_visible_text'];
				}
				var html_for_use='\
				<div class="ws_db_setting_section ws_db_single_post_specific_settings_item" >\
					<h4  class="ws_db_setting_title"  >visible text for "delimiter"</h4>\
					<div class="ws_db_setting_description" >your custom text to replace the default delimiter Sign.   </div>\
					<div class="ws_db_option_max_length_in">\
						<input type="text"  name="single_post11_this_element_subject_visible_text"  value="'+single_post11_this_element_subject_visible_text+'"  >\
					</div> \
				</div>';
				jQuery("#ws_db_light_box_for_all_default_settings_id"  ).prepend( html_for_use );	
			}else if(current_setting_subject214 =="value"){
				
			}else if(current_setting_subject214 =="suffix"){
				if(var_this_setting_container214.hasOwnProperty("single_post11_this_element_subject_visible_text")=== false ){
					var single_post11_this_element_subject_visible_text=".";
				}else{
					var single_post11_this_element_subject_visible_text=var_this_setting_container214['single_post11_this_element_subject_visible_text'];
				}
				var html_for_use='\
				<div class="ws_db_setting_section ws_db_single_post_specific_settings_item" >\
					<h4  class="ws_db_setting_title"  >visible text for "suffix"</h4>\
					<div class="ws_db_setting_description" >your custom text to replace the default suffix Sign.   </div>\
					<div class="ws_db_option_max_length_in">\
						<input type="text"  name="single_post11_this_element_subject_visible_text"  value="'+single_post11_this_element_subject_visible_text+'"  >\
					</div> \
				</div>';
				jQuery("#ws_db_light_box_for_all_default_settings_id"  ).prepend( html_for_use );	
			}else if(current_setting_subject214 =="wrapper"){
				jQuery( ".ws_db_setting_for_wrappers" ).css("display","block");
				
			}
		}else if(current_setting_gruop_name214 =="single_post_manual_section"){
			current_setting_element_name214 = jQuery(this_parent).find('.ws_db_setting_element_name214').text();	
			if(object_all_style_stting_container 
			&& object_all_style_stting_container[current_setting_gruop_name214]
			&& object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214] ){ 
				var_this_setting_container214=object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214];
			}else{
				var_this_setting_container214={};
			}
			jQuery( ".ws_db_setting_for_public,.ws_db_setting_for_wrappers" ).css("display","block");
		}else if(current_setting_gruop_name214 =="no_gruop_name"){
			current_setting_element_name214 = jQuery(this_parent).find('.ws_db_setting_element_name214').text();	
			if(object_all_style_stting_container 
			&& object_all_style_stting_container[current_setting_gruop_name214]
			&& object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214] ){ 
				var_this_setting_container214=object_all_style_stting_container[current_setting_gruop_name214][current_setting_element_name214];
			}else{
				var_this_setting_container214={};
			}
			jQuery( ".ws_db_setting_for_public,.ws_db_setting_for_wrappers" ).css("display","block");
		}
		/////////////////////////////////////////////////////////////////////////////////////////////////
		//background color
		if(var_this_setting_container214['all_element_setting_instance214_background_color']){
			 jQuery("input[name=all_element_setting_instance214_background_color]").val(var_this_setting_container214['all_element_setting_instance214_background_color']);
			 jQuery("input[name=all_element_setting_instance214_background_color]").wpColorPicker('color', var_this_setting_container214['all_element_setting_instance214_background_color']);
		}else{
			jQuery("input[name=all_element_setting_instance214_background_color]").val("");
			jQuery("input[name=all_element_setting_instance214_background_color]").next('input').trigger('click');
		}
		//font size
		if(var_this_setting_container214['all_element_setting_instance214_font_size']){
			 jQuery("input[name=all_element_setting_instance214_font_size]").val(var_this_setting_container214['all_element_setting_instance214_font_size']);
		}else{
			jQuery("input[name=all_element_setting_instance214_font_size]").val("");
		}
		//color
		if(var_this_setting_container214['all_element_setting_instance214_font_color']){
			 jQuery("input[name=all_element_setting_instance214_font_color]").val(var_this_setting_container214['all_element_setting_instance214_font_color']);
			 jQuery("input[name=all_element_setting_instance214_font_color]").wpColorPicker('color', var_this_setting_container214['all_element_setting_instance214_font_color']);
		}else{
			jQuery("input[name=all_element_setting_instance214_font_color]").val("");
			jQuery("input[name=all_element_setting_instance214_font_color]").next('input').trigger('click');
		}
		//font name
		if(var_this_setting_container214['all_element_setting_instance214_font_name']){
			 jQuery("input[name=all_element_setting_instance214_font_name]").val(var_this_setting_container214['all_element_setting_instance214_font_name']);
		}else{
			jQuery("input[name=all_element_setting_instance214_font_name]").val("");
		}
		//font bold
		if(var_this_setting_container214['all_element_setting_instance214_font_bold']){
			if (var_this_setting_container214['all_element_setting_instance214_font_bold'] =='true'){
				jQuery( "#all_element_setting_instance214_font_bold").prop('checked', true);
				var this_parent22 = jQuery("#all_element_setting_instance214_font_bold").parent();
				jQuery(this_parent22).children("span").addClass("checked");	
			}else{
				jQuery('#all_element_setting_instance214_font_bold').prop('checked', false);
				var this_parent22 = jQuery("#all_element_setting_instance214_font_bold").parent();
				jQuery(this_parent22).children("span").removeClass("checked");
			}
		}else{
			jQuery('#all_element_setting_instance214_font_bold').prop('checked', false);
			var this_parent22 = jQuery("#all_element_setting_instance214_font_bold").parent();
			jQuery(this_parent22).children("span").removeClass("checked");
		}
		//font italic
		if(var_this_setting_container214['all_element_setting_instance214_font_italic']){
			if (var_this_setting_container214['all_element_setting_instance214_font_italic'] =='true'){
				jQuery( "#all_element_setting_instance214_font_italic").prop('checked', true);
				var this_parent22 = jQuery("#all_element_setting_instance214_font_italic").parent();
				jQuery(this_parent22).children("span").addClass("checked");	
			}else{
				jQuery('#all_element_setting_instance214_font_italic').prop('checked', false);
				var this_parent22 = jQuery("#all_element_setting_instance214_font_italic").parent();
				jQuery(this_parent22).children("span").removeClass("checked");
			}
		}else{
			jQuery('#all_element_setting_instance214_font_italic').prop('checked', false);
			var this_parent22 = jQuery("#all_element_setting_instance214_font_italic").parent();
			jQuery(this_parent22).children("span").removeClass("checked");
		}
		//width
		if(var_this_setting_container214['all_element_setting_instance214_width_px']){
			 jQuery("input[name=all_element_setting_instance214_width_px]").val(var_this_setting_container214['all_element_setting_instance214_width_px']);
		}else{
			jQuery("input[name=all_element_setting_instance214_width_px]").val("");
		}
		//hight
		if(var_this_setting_container214['all_element_setting_instance214_height_px']){
			 jQuery("input[name=all_element_setting_instance214_height_px]").val(var_this_setting_container214['all_element_setting_instance214_height_px']);
		}else{
			jQuery("input[name=all_element_setting_instance214_height_px]").val("");
		}
		
		
		
		//min width
		if(var_this_setting_container214['all_element_setting_instance214_min_width_px']){
			 jQuery("input[name=all_element_setting_instance214_min_width_px]").val(var_this_setting_container214['all_element_setting_instance214_min_width_px']);
		}else{
			jQuery("input[name=all_element_setting_instance214_min_width_px]").val("");
		}
		//min hight
		if(var_this_setting_container214['all_element_setting_instance214_min_height_px']){
			 jQuery("input[name=all_element_setting_instance214_min_height_px]").val(var_this_setting_container214['all_element_setting_instance214_min_height_px']);
		}else{
			jQuery("input[name=all_element_setting_instance214_min_height_px]").val("");
		}
		//max width
		if(var_this_setting_container214['all_element_setting_instance214_max_width_px']){
			 jQuery("input[name=all_element_setting_instance214_max_width_px]").val(var_this_setting_container214['all_element_setting_instance214_max_width_px']);
		}else{
			jQuery("input[name=all_element_setting_instance214_max_width_px]").val("");
		}
		//max hight
		if(var_this_setting_container214['all_element_setting_instance214_max_height_px']){
			 jQuery("input[name=all_element_setting_instance214_max_height_px]").val(var_this_setting_container214['all_element_setting_instance214_max_height_px']);
		}else{
			jQuery("input[name=all_element_setting_instance214_max_height_px]").val("");
		}
		//text-align
		if(var_this_setting_container214['all_element_setting_instance214_text_align']){
			 jQuery("select[name=all_element_setting_instance214_text_align]").val(var_this_setting_container214['all_element_setting_instance214_text_align']);
		}else{
			jQuery("select[name=all_element_setting_instance214_text_align]").val("not_selected");
		}
		//float
		if(var_this_setting_container214['all_element_setting_instance214_float']){
			 jQuery("select[name=all_element_setting_instance214_float]").val(var_this_setting_container214['all_element_setting_instance214_float']);
		}else{
			jQuery("select[name=all_element_setting_instance214_float]").val("not_selected");
		}
		//direction
		if(var_this_setting_container214['all_element_setting_instance214_direction']){
			 jQuery("select[name=all_element_setting_instance214_direction]").val(var_this_setting_container214['all_element_setting_instance214_direction']);
		}else{
			jQuery("select[name=all_element_setting_instance214_direction]").val("not_selected");
		}
		//display
		if(var_this_setting_container214['all_element_setting_instance214_display_block']){
			 jQuery("select[name=all_element_setting_instance214_display_block]").val(var_this_setting_container214['all_element_setting_instance214_display_block']);
		}else{
			jQuery("select[name=all_element_setting_instance214_display_block]").val("not_selected");
		}
		//overflow-x
		if(var_this_setting_container214['all_element_setting_instance214_overflow_x']){
			 jQuery("select[name=all_element_setting_instance214_overflow_x]").val(var_this_setting_container214['all_element_setting_instance214_overflow_x']);
		}else{
			jQuery("select[name=all_element_setting_instance214_overflow_x]").val("not_selected");
		}
		//overflow-y
		if(var_this_setting_container214['all_element_setting_instance214_overflow_y']){
			 jQuery("select[name=all_element_setting_instance214_overflow_y]").val(var_this_setting_container214['all_element_setting_instance214_overflow_y']);
		}else{
			jQuery("select[name=all_element_setting_instance214_overflow_y]").val("not_selected");
		}
		//word-wrap
		if(var_this_setting_container214['all_element_setting_instance214_word_wrap']){
			 jQuery("select[name=all_element_setting_instance214_word_wrap]").val(var_this_setting_container214['all_element_setting_instance214_word_wrap']);
		}else{
			jQuery("select[name=all_element_setting_instance214_word_wrap]").val("not_selected");
		}
		//word-break
		if(var_this_setting_container214['all_element_setting_instance214_word_break']){
			 jQuery("select[name=all_element_setting_instance214_word_break]").val(var_this_setting_container214['all_element_setting_instance214_word_break']);
		}else{
			jQuery("select[name=all_element_setting_instance214_word_break]").val("not_selected");
		}
		//letter-spacing
		if(var_this_setting_container214['all_element_setting_instance214_letter_spacing']){
			 jQuery("input[name=all_element_setting_instance214_letter_spacing]").val(var_this_setting_container214['all_element_setting_instance214_letter_spacing']);
		}else{
			jQuery("input[name=all_element_setting_instance214_letter_spacing]").val("");
		}
		//word-spacing
		if(var_this_setting_container214['all_element_setting_instance214_word_spacing']){
			 jQuery("input[name=all_element_setting_instance214_word_spacing]").val(var_this_setting_container214['all_element_setting_instance214_word_spacing']);
		}else{
			jQuery("input[name=all_element_setting_instance214_word_spacing]").val("");
		}
		//margins-top
		if(var_this_setting_container214['all_element_setting_instance214_margin_top']){
			 jQuery("input[name=all_element_setting_instance214_margin_top]").val(var_this_setting_container214['all_element_setting_instance214_margin_top']);
		}else{
			jQuery("input[name=all_element_setting_instance214_margin_top]").val("");
		}
		//margins-bottom
		if(var_this_setting_container214['all_element_setting_instance214_margin_bottom']){
			 jQuery("input[name=all_element_setting_instance214_margin_bottom]").val(var_this_setting_container214['all_element_setting_instance214_margin_bottom']);
		}else{
			jQuery("input[name=all_element_setting_instance214_margin_bottom]").val("");
		}
		//margins-left
		if(var_this_setting_container214['all_element_setting_instance214_margin_left']){
			 jQuery("input[name=all_element_setting_instance214_margin_left]").val(var_this_setting_container214['all_element_setting_instance214_margin_left']);
		}else{
			jQuery("input[name=all_element_setting_instance214_margin_left]").val("");
		}
		//margins-right
		if(var_this_setting_container214['all_element_setting_instance214_margin_right']){
			 jQuery("input[name=all_element_setting_instance214_margin_right]").val(var_this_setting_container214['all_element_setting_instance214_margin_right']);
		}else{
			jQuery("input[name=all_element_setting_instance214_margin_right]").val("");
		}
		//padding-top
		if(var_this_setting_container214['all_element_setting_instance214_padding_top']){
			 jQuery("input[name=all_element_setting_instance214_padding_top]").val(var_this_setting_container214['all_element_setting_instance214_padding_top']);
		}else{
			jQuery("input[name=all_element_setting_instance214_padding_top]").val("");
		}
		//padding-bottom
		if(var_this_setting_container214['all_element_setting_instance214_padding_bottom']){
			 jQuery("input[name=all_element_setting_instance214_padding_bottom]").val(var_this_setting_container214['all_element_setting_instance214_padding_bottom']);
		}else{
			jQuery("input[name=all_element_setting_instance214_padding_bottom]").val("");
		}
		//padding-left
		if(var_this_setting_container214['all_element_setting_instance214_padding_left']){
			 jQuery("input[name=all_element_setting_instance214_padding_left]").val(var_this_setting_container214['all_element_setting_instance214_padding_left']);
		}else{
			jQuery("input[name=all_element_setting_instance214_padding_left]").val("");
		}
		//padding-right
		if(var_this_setting_container214['all_element_setting_instance214_padding_right']){
			 jQuery("input[name=all_element_setting_instance214_padding_right]").val(var_this_setting_container214['all_element_setting_instance214_padding_right']);
		}else{
			jQuery("input[name=all_element_setting_instance214_padding_right]").val("");
		}
		//border enable
		if(var_this_setting_container214['all_element_setting_instance214_border_enable']){
			if (var_this_setting_container214['all_element_setting_instance214_border_enable'] =='true'){
				jQuery( "#all_element_setting_instance214_border_enable").prop('checked', true);
				var this_parent22 = jQuery("#all_element_setting_instance214_border_enable").parent();
				jQuery(this_parent22).children("span").addClass("checked");	
			}else{
				jQuery('#all_element_setting_instance214_border_enable').prop('checked', false);
				var this_parent22 = jQuery("#all_element_setting_instance214_border_enable").parent();
				jQuery(this_parent22).children("span").removeClass("checked");
			}
		}else{
			jQuery('#all_element_setting_instance214_border_enable').prop('checked', false);
			var this_parent22 = jQuery("#all_element_setting_instance214_border_enable").parent();
			jQuery(this_parent22).children("span").removeClass("checked");
		}
		//border type
		if(var_this_setting_container214['all_element_setting_instance214_border_type']){
			 jQuery("select[name=all_element_setting_instance214_border_type]").val(var_this_setting_container214['all_element_setting_instance214_border_type']);
		}else{
			jQuery("select[name=all_element_setting_instance214_border_type]").val("not_selected");
		}
		//border width
		if(var_this_setting_container214['all_element_setting_instance214_border_width']){
			 jQuery("input[name=all_element_setting_instance214_border_width]").val(var_this_setting_container214['all_element_setting_instance214_border_width']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_width]").val("");
		}
		//border color
		if(var_this_setting_container214['all_element_setting_instance214_border_color']){
			 jQuery("input[name=all_element_setting_instance214_border_color]").val(var_this_setting_container214['all_element_setting_instance214_border_color']);
			 jQuery("input[name=all_element_setting_instance214_border_color]").wpColorPicker('color', var_this_setting_container214['all_element_setting_instance214_border_color']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_color]").val("");
			jQuery("input[name=all_element_setting_instance214_border_color]").next('input').trigger('click');
		}
		//border top enable
		if(var_this_setting_container214['all_element_setting_instance214_border_top_enable']){
			if (var_this_setting_container214['all_element_setting_instance214_border_top_enable'] =='true'){
				jQuery( "#all_element_setting_instance214_border_top_enable").prop('checked', true);
				var this_parent22 = jQuery("#all_element_setting_instance214_border_top_enable").parent();
				jQuery(this_parent22).children("span").addClass("checked");	
			}else{
				jQuery('#all_element_setting_instance214_border_top_enable').prop('checked', false);
				var this_parent22 = jQuery("#all_element_setting_instance214_border_top_enable").parent();
				jQuery(this_parent22).children("span").removeClass("checked");
			}
		}else{
			jQuery('#all_element_setting_instance214_border_top_enable').prop('checked', false);
			var this_parent22 = jQuery("#all_element_setting_instance214_border_top_enable").parent();
			jQuery(this_parent22).children("span").removeClass("checked");
		}
		//border top type
		if(var_this_setting_container214['all_element_setting_instance214_border_top_type']){
			 jQuery("select[name=all_element_setting_instance214_border_top_type]").val(var_this_setting_container214['all_element_setting_instance214_border_top_type']);
		}else{
			jQuery("select[name=all_element_setting_instance214_border_top_type]").val("not_selected");
		}
		//border top width
		if(var_this_setting_container214['all_element_setting_instance214_border_top_width']){
			 jQuery("input[name=all_element_setting_instance214_border_top_width]").val(var_this_setting_container214['all_element_setting_instance214_border_top_width']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_top_width]").val("");
		}
		//border top color
		if(var_this_setting_container214['all_element_setting_instance214_border_top_color']){
			 jQuery("input[name=all_element_setting_instance214_border_top_color]").val(var_this_setting_container214['all_element_setting_instance214_border_top_color']);
			 jQuery("input[name=all_element_setting_instance214_border_top_color]").wpColorPicker('color', var_this_setting_container214['all_element_setting_instance214_border_top_color']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_top_color]").val("");
			jQuery("input[name=all_element_setting_instance214_border_top_color]").next('input').trigger('click');
		}
		//border bottom enable
		if(var_this_setting_container214['all_element_setting_instance214_border_bottom_enable']){
			if (var_this_setting_container214['all_element_setting_instance214_border_bottom_enable'] =='true'){
				jQuery( "#all_element_setting_instance214_border_bottom_enable").prop('checked', true);
				var this_parent22 = jQuery("#all_element_setting_instance214_border_bottom_enable").parent();
				jQuery(this_parent22).children("span").addClass("checked");	
			}else{
				jQuery('#all_element_setting_instance214_border_bottom_enable').prop('checked', false);
				var this_parent22 = jQuery("#all_element_setting_instance214_border_bottom_enable").parent();
				jQuery(this_parent22).children("span").removeClass("checked");
			}
		}else{
			jQuery('#all_element_setting_instance214_border_bottom_enable').prop('checked', false);
			var this_parent22 = jQuery("#all_element_setting_instance214_border_bottom_enable").parent();
			jQuery(this_parent22).children("span").removeClass("checked");
		}
		//border bottom type
		if(var_this_setting_container214['all_element_setting_instance214_border_bottom_type']){
			 jQuery("select[name=all_element_setting_instance214_border_bottom_type]").val(var_this_setting_container214['all_element_setting_instance214_border_bottom_type']);
		}else{
			jQuery("select[name=all_element_setting_instance214_border_bottom_type]").val("not_selected");
		}
		//border bottom width
		if(var_this_setting_container214['all_element_setting_instance214_border_bottom_width']){
			 jQuery("input[name=all_element_setting_instance214_border_bottom_width]").val(var_this_setting_container214['all_element_setting_instance214_border_bottom_width']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_bottom_width]").val("");
		}
		//border bottom color
		if(var_this_setting_container214['all_element_setting_instance214_border_bottom_color']){
			 jQuery("input[name=all_element_setting_instance214_border_bottom_color]").val(var_this_setting_container214['all_element_setting_instance214_border_bottom_color']);
			 jQuery("input[name=all_element_setting_instance214_border_bottom_color]").wpColorPicker('color', var_this_setting_container214['all_element_setting_instance214_border_bottom_color']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_bottom_color]").val("");
			jQuery("input[name=all_element_setting_instance214_border_bottom_color]").next('input').trigger('click');
		}
		//border left enable
		if(var_this_setting_container214['all_element_setting_instance214_border_left_enable']){
			if (var_this_setting_container214['all_element_setting_instance214_border_left_enable'] =='true'){
				jQuery( "#all_element_setting_instance214_border_left_enable").prop('checked', true);
				var this_parent22 = jQuery("#all_element_setting_instance214_border_left_enable").parent();
				jQuery(this_parent22).children("span").addClass("checked");	
			}else{
				jQuery('#all_element_setting_instance214_border_left_enable').prop('checked', false);
				var this_parent22 = jQuery("#all_element_setting_instance214_border_left_enable").parent();
				jQuery(this_parent22).children("span").removeClass("checked");
			}
		}else{
			jQuery('#all_element_setting_instance214_border_left_enable').prop('checked', false);
			var this_parent22 = jQuery("#all_element_setting_instance214_border_left_enable").parent();
			jQuery(this_parent22).children("span").removeClass("checked");
		}
		//border left type
		if(var_this_setting_container214['all_element_setting_instance214_border_left_type']){
			 jQuery("select[name=all_element_setting_instance214_border_left_type]").val(var_this_setting_container214['all_element_setting_instance214_border_left_type']);
		}else{
			jQuery("select[name=all_element_setting_instance214_border_left_type]").val("not_selected");
		}
		//border left width
		if(var_this_setting_container214['all_element_setting_instance214_border_left_width']){
			 jQuery("input[name=all_element_setting_instance214_border_left_width]").val(var_this_setting_container214['all_element_setting_instance214_border_left_width']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_left_width]").val("");
		}
		//border left color
		if(var_this_setting_container214['all_element_setting_instance214_border_left_color']){
			 jQuery("input[name=all_element_setting_instance214_border_left_color]").val(var_this_setting_container214['all_element_setting_instance214_border_left_color']);
			 jQuery("input[name=all_element_setting_instance214_border_left_color]").wpColorPicker('color', var_this_setting_container214['all_element_setting_instance214_border_left_color']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_left_color]").val("");
			jQuery("input[name=all_element_setting_instance214_border_left_color]").next('input').trigger('click');
		}
		//border right enable
		if(var_this_setting_container214['all_element_setting_instance214_border_right_enable']){
			if (var_this_setting_container214['all_element_setting_instance214_border_right_enable'] =='true'){
				jQuery( "#all_element_setting_instance214_border_right_enable").prop('checked', true);
				var this_parent22 = jQuery("#all_element_setting_instance214_border_right_enable").parent();
				jQuery(this_parent22).children("span").addClass("checked");	
			}else{
				jQuery('#all_element_setting_instance214_border_right_enable').prop('checked', false);
				var this_parent22 = jQuery("#all_element_setting_instance214_border_right_enable").parent();
				jQuery(this_parent22).children("span").removeClass("checked");
			}
		}else{
			jQuery('#all_element_setting_instance214_border_right_enable').prop('checked', false);
			var this_parent22 = jQuery("#all_element_setting_instance214_border_right_enable").parent();
			jQuery(this_parent22).children("span").removeClass("checked");
		}
		//border right type
		if(var_this_setting_container214['all_element_setting_instance214_border_right_type']){
			 jQuery("select[name=all_element_setting_instance214_border_right_type]").val(var_this_setting_container214['all_element_setting_instance214_border_right_type']);
		}else{
			jQuery("select[name=all_element_setting_instance214_border_right_type]").val("not_selected");
		}
		//border right width
		if(var_this_setting_container214['all_element_setting_instance214_border_right_width']){
			 jQuery("input[name=all_element_setting_instance214_border_right_width]").val(var_this_setting_container214['all_element_setting_instance214_border_right_width']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_right_width]").val("");
		}
		//border right color
		if(var_this_setting_container214['all_element_setting_instance214_border_right_color']){
			 jQuery("input[name=all_element_setting_instance214_border_right_color]").val(var_this_setting_container214['all_element_setting_instance214_border_right_color']);
			 jQuery("input[name=all_element_setting_instance214_border_right_color]").wpColorPicker('color', var_this_setting_container214['all_element_setting_instance214_border_right_color']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_right_color]").val("");
			jQuery("input[name=all_element_setting_instance214_border_right_color]").next('input').trigger('click');
		}
		//top left radius
		if(var_this_setting_container214['all_element_setting_instance214_border_top_left_radius']){
			 jQuery("input[name=all_element_setting_instance214_border_top_left_radius]").val(var_this_setting_container214['all_element_setting_instance214_border_top_left_radius']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_top_left_radius]").val("");
		}
		//top right radius
		if(var_this_setting_container214['all_element_setting_instance214_border_top_right_radius']){
			 jQuery("input[name=all_element_setting_instance214_border_top_right_radius]").val(var_this_setting_container214['all_element_setting_instance214_border_top_right_radius']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_top_right_radius]").val("");
		}
		//bottom right radius
		if(var_this_setting_container214['all_element_setting_instance214_border_bottom_right_radius']){
			 jQuery("input[name=all_element_setting_instance214_border_bottom_right_radius]").val(var_this_setting_container214['all_element_setting_instance214_border_bottom_right_radius']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_bottom_right_radius]").val("");
		}
		//bottom left radius
		if(var_this_setting_container214['all_element_setting_instance214_border_bottom_left_radius']){
			 jQuery("input[name=all_element_setting_instance214_border_bottom_left_radius]").val(var_this_setting_container214['all_element_setting_instance214_border_bottom_left_radius']);
		}else{
			jQuery("input[name=all_element_setting_instance214_border_bottom_left_radius]").val("");
		}
		//text-shadow enable
		if(var_this_setting_container214['all_element_setting_instance214_text_shadow_enable']){
			if (var_this_setting_container214['all_element_setting_instance214_text_shadow_enable'] =='true'){
				jQuery( "#all_element_setting_instance214_text_shadow_enable").prop('checked', true);
				var this_parent22 = jQuery("#all_element_setting_instance214_text_shadow_enable").parent();
				jQuery(this_parent22).children("span").addClass("checked");	
			}else{
				jQuery('#all_element_setting_instance214_text_shadow_enable').prop('checked', false);
				var this_parent22 = jQuery("#all_element_setting_instance214_text_shadow_enable").parent();
				jQuery(this_parent22).children("span").removeClass("checked");
			}
		}else{
			jQuery('#all_element_setting_instance214_text_shadow_enable').prop('checked', false);
			var this_parent22 = jQuery("#all_element_setting_instance214_text_shadow_enable").parent();
			jQuery(this_parent22).children("span").removeClass("checked");
		}
		//text-shadow h-shadow
		if(var_this_setting_container214['all_element_setting_instance214_text_shadow_h_shadow']){
			 jQuery("input[name=all_element_setting_instance214_text_shadow_h_shadow]").val(var_this_setting_container214['all_element_setting_instance214_text_shadow_h_shadow']);
		}else{
			jQuery("input[name=all_element_setting_instance214_text_shadow_h_shadow]").val("");
		}
		//text-shadow v-shadow
		if(var_this_setting_container214['all_element_setting_instance214_text_shadow_v_shadow']){
			 jQuery("input[name=all_element_setting_instance214_text_shadow_v_shadow]").val(var_this_setting_container214['all_element_setting_instance214_text_shadow_v_shadow']);
		}else{
			jQuery("input[name=all_element_setting_instance214_text_shadow_v_shadow]").val("");
		}
		//text-shadow blur
		if(var_this_setting_container214['all_element_setting_instance214_text_shadow_blur']){
			 jQuery("input[name=all_element_setting_instance214_text_shadow_blur]").val(var_this_setting_container214['all_element_setting_instance214_text_shadow_blur']);
		}else{
			jQuery("input[name=all_element_setting_instance214_text_shadow_blur]").val("");
		}
		//text-shadow color
		if(var_this_setting_container214['all_element_setting_instance214_text_shadow_color']){
			 jQuery("input[name=all_element_setting_instance214_text_shadow_color]").val(var_this_setting_container214['all_element_setting_instance214_text_shadow_color']);
			 jQuery("input[name=all_element_setting_instance214_text_shadow_color]").wpColorPicker('color', var_this_setting_container214['all_element_setting_instance214_text_shadow_color']);
		}else{
			jQuery("input[name=all_element_setting_instance214_text_shadow_color]").val("");
			jQuery("input[name=all_element_setting_instance214_text_shadow_color]").next('input').trigger('click');
		}
		//box-shadow enable
		if(var_this_setting_container214['all_element_setting_instance214_box_shadow_enable']){
			if (var_this_setting_container214['all_element_setting_instance214_box_shadow_enable'] =='true'){
				jQuery( "#all_element_setting_instance214_box_shadow_enable").prop('checked', true);
				var this_parent22 = jQuery("#all_element_setting_instance214_box_shadow_enable").parent();
				jQuery(this_parent22).children("span").addClass("checked");	
			}else{
				jQuery('#all_element_setting_instance214_box_shadow_enable').prop('checked', false);
				var this_parent22 = jQuery("#all_element_setting_instance214_box_shadow_enable").parent();
				jQuery(this_parent22).children("span").removeClass("checked");
			}
		}else{
			jQuery('#all_element_setting_instance214_box_shadow_enable').prop('checked', false);
			var this_parent22 = jQuery("#all_element_setting_instance214_box_shadow_enable").parent();
			jQuery(this_parent22).children("span").removeClass("checked");
		}
		//box-shadow h-shadow
		if(var_this_setting_container214['all_element_setting_instance214_box_shadow_h_shadow']){
			 jQuery("input[name=all_element_setting_instance214_box_shadow_h_shadow]").val(var_this_setting_container214['all_element_setting_instance214_box_shadow_h_shadow']);
		}else{
			jQuery("input[name=all_element_setting_instance214_box_shadow_h_shadow]").val("");
		}
		//box-shadow v-shadow
		if(var_this_setting_container214['all_element_setting_instance214_box_shadow_v_shadow']){
			 jQuery("input[name=all_element_setting_instance214_box_shadow_v_shadow]").val(var_this_setting_container214['all_element_setting_instance214_box_shadow_v_shadow']);
		}else{
			jQuery("input[name=all_element_setting_instance214_box_shadow_v_shadow]").val("");
		}
		//box-shadow blur
		if(var_this_setting_container214['all_element_setting_instance214_box_shadow_blur']){
			 jQuery("input[name=all_element_setting_instance214_box_shadow_blur]").val(var_this_setting_container214['all_element_setting_instance214_box_shadow_blur']);
		}else{
			jQuery("input[name=all_element_setting_instance214_box_shadow_blur]").val("");
		}
		//box-shadow spread
		if(var_this_setting_container214['all_element_setting_instance214_box_shadow_spread']){
			 jQuery("input[name=all_element_setting_instance214_box_shadow_spread]").val(var_this_setting_container214['all_element_setting_instance214_box_shadow_spread']);
		}else{
			jQuery("input[name=all_element_setting_instance214_box_shadow_spread]").val("");
		}
		//box-shadow color
		if(var_this_setting_container214['all_element_setting_instance214_box_shadow_color']){
			 jQuery("input[name=all_element_setting_instance214_box_shadow_color]").val(var_this_setting_container214['all_element_setting_instance214_box_shadow_color']);
			 jQuery("input[name=all_element_setting_instance214_box_shadow_color]").wpColorPicker('color', var_this_setting_container214['all_element_setting_instance214_box_shadow_color']);
		}else{
			jQuery("input[name=all_element_setting_instance214_box_shadow_color]").val("");
			jQuery("input[name=all_element_setting_instance214_box_shadow_color]").next('input').trigger('click');
		}
		//box-shadow direction
		if(var_this_setting_container214['all_element_setting_instance214_box_shadow_direction']){
			 jQuery("select[name=all_element_setting_instance214_box_shadow_direction]").val(var_this_setting_container214['all_element_setting_instance214_box_shadow_direction']);
		}else{
			jQuery("select[name=all_element_setting_instance214_box_shadow_direction]").val("not_selected");
		}
		//z-index
		if(var_this_setting_container214['all_element_setting_instance214_z_index']){
			 jQuery("input[name=all_element_setting_instance214_z_index]").val(var_this_setting_container214['all_element_setting_instance214_z_index']);
		}else{
			jQuery("input[name=all_element_setting_instance214_z_index]").val("");
		}
		//vertical-align
		if(var_this_setting_container214['all_element_setting_instance214_vertical_align']){
			 jQuery("input[name=all_element_setting_instance214_vertical_align]").val(var_this_setting_container214['all_element_setting_instance214_vertical_align']);
		}else{
			jQuery("input[name=all_element_setting_instance214_vertical_align]").val("");
		}
		jQuery(document).foundation();
			
		},
		close: function() {	
			
			//get data from fields to save
		    if(jQuery('#all_element_setting_instance214_font_bold').is(":checked")){ var all_element_setting_instance214_font_bold = 'true'}else{var all_element_setting_instance214_font_bold = 'false'}
			if(jQuery('#all_element_setting_instance214_font_italic').is(":checked")){ var all_element_setting_instance214_font_italic = 'true'}else{var all_element_setting_instance214_font_italic = 'false'}
			if(jQuery('#all_element_setting_instance214_border_enable').is(":checked")){ var all_element_setting_instance214_border_enable = 'true'}else{var all_element_setting_instance214_border_enable = 'false'}
			if(jQuery('#all_element_setting_instance214_border_top_enable').is(":checked")){ var all_element_setting_instance214_border_top_enable = 'true'}else{var all_element_setting_instance214_border_top_enable = 'false'}
			if(jQuery('#all_element_setting_instance214_border_bottom_enable').is(":checked")){ var all_element_setting_instance214_border_bottom_enable = 'true'}else{var all_element_setting_instance214_border_bottom_enable = 'false'}
			if(jQuery('#all_element_setting_instance214_border_left_enable').is(":checked")){ var all_element_setting_instance214_border_left_enable = 'true'}else{var all_element_setting_instance214_border_left_enable = 'false'}
			if(jQuery('#all_element_setting_instance214_border_right_enable').is(":checked")){ var all_element_setting_instance214_border_right_enable = 'true'}else{var all_element_setting_instance214_border_right_enable = 'false'}
			if(jQuery('#all_element_setting_instance214_text_shadow_enable').is(":checked")){ var all_element_setting_instance214_text_shadow_enable = 'true'}else{var all_element_setting_instance214_text_shadow_enable = 'false'}
			if(jQuery('#all_element_setting_instance214_box_shadow_enable').is(":checked")){ var all_element_setting_instance214_box_shadow_enable = 'true'}else{var all_element_setting_instance214_box_shadow_enable = 'false'}
			this_instance_settings ={	
				'all_element_setting_instance214_background_color' : jQuery("input[name=all_element_setting_instance214_background_color]").val(),
				//font
				'all_element_setting_instance214_font_size' : jQuery("input[name=all_element_setting_instance214_font_size]").val(),
				'all_element_setting_instance214_font_color' : jQuery("input[name=all_element_setting_instance214_font_color]").val(),
				'all_element_setting_instance214_font_name' : jQuery("input[name=all_element_setting_instance214_font_name]").val(),
				'all_element_setting_instance214_font_bold' : all_element_setting_instance214_font_bold,
				'all_element_setting_instance214_font_italic' : all_element_setting_instance214_font_italic,
				'all_element_setting_instance214_width_px' : jQuery("input[name=all_element_setting_instance214_width_px]").val(),
				'all_element_setting_instance214_height_px' : jQuery("input[name=all_element_setting_instance214_height_px]").val(),
				'all_element_setting_instance214_max_width_px' : jQuery("input[name=all_element_setting_instance214_max_width_px]").val(),//
				'all_element_setting_instance214_max_height_px' : jQuery("input[name=all_element_setting_instance214_max_height_px]").val(),
				'all_element_setting_instance214_min_width_px' : jQuery("input[name=all_element_setting_instance214_min_width_px]").val(),//
				'all_element_setting_instance214_min_height_px' : jQuery("input[name=all_element_setting_instance214_min_height_px]").val(),
				'all_element_setting_instance214_text_align' : jQuery("select[name=all_element_setting_instance214_text_align]").val(),//
				'all_element_setting_instance214_float' : jQuery("select[name=all_element_setting_instance214_float]").val(),//
				'all_element_setting_instance214_direction' : jQuery("select[name=all_element_setting_instance214_direction]").val(),//
				'all_element_setting_instance214_display_block' : jQuery("select[name=all_element_setting_instance214_display_block]").val(),//
				'all_element_setting_instance214_overflow_x' : jQuery("select[name=all_element_setting_instance214_overflow_x]").val(),
				'all_element_setting_instance214_overflow_y' : jQuery("select[name=all_element_setting_instance214_overflow_y]").val(),
				'all_element_setting_instance214_word_break' : jQuery("select[name=all_element_setting_instance214_word_break]").val(),//
				'all_element_setting_instance214_letter_spacing' : jQuery("input[name=all_element_setting_instance214_letter_spacing]").val(),
				'all_element_setting_instance214_word_spacing' : jQuery("input[name=all_element_setting_instance214_word_spacing]").val(),
				//margin
				'all_element_setting_instance214_margin_top' : jQuery("input[name=all_element_setting_instance214_margin_top]").val(),
				'all_element_setting_instance214_margin_bottom' : jQuery("input[name=all_element_setting_instance214_margin_bottom]").val(),
				'all_element_setting_instance214_margin_left' : jQuery("input[name=all_element_setting_instance214_margin_left]").val(),
				'all_element_setting_instance214_margin_right' : jQuery("input[name=all_element_setting_instance214_margin_right]").val(),
				//padding
				'all_element_setting_instance214_padding_top' : jQuery("input[name=all_element_setting_instance214_padding_top]").val(),
				'all_element_setting_instance214_padding_bottom' : jQuery("input[name=all_element_setting_instance214_padding_bottom]").val(),
				'all_element_setting_instance214_padding_left' : jQuery("input[name=all_element_setting_instance214_padding_left]").val(),
				'all_element_setting_instance214_padding_right' : jQuery("input[name=all_element_setting_instance214_padding_right]").val(),
				//border
				'all_element_setting_instance214_border_enable' : all_element_setting_instance214_border_enable,
				'all_element_setting_instance214_border_type' : jQuery("select[name=all_element_setting_instance214_border_type]").val(),
				'all_element_setting_instance214_border_width' : jQuery("input[name=all_element_setting_instance214_border_width]").val(),
				'all_element_setting_instance214_border_color' : jQuery("input[name=all_element_setting_instance214_border_color]").val(),
				//border top
				'all_element_setting_instance214_border_top_enable' : all_element_setting_instance214_border_top_enable,
				'all_element_setting_instance214_border_top_type' : jQuery("select[name=all_element_setting_instance214_border_top_type]").val(),
				'all_element_setting_instance214_border_top_width' : jQuery("input[name=all_element_setting_instance214_border_top_width]").val(),
				'all_element_setting_instance214_border_top_color' : jQuery("input[name=all_element_setting_instance214_border_top_color]").val(),
				//border bottom
				'all_element_setting_instance214_border_bottom_enable' : all_element_setting_instance214_border_bottom_enable,
				'all_element_setting_instance214_border_bottom_type' : jQuery("select[name=all_element_setting_instance214_border_bottom_type]").val(),
				'all_element_setting_instance214_border_bottom_width' : jQuery("input[name=all_element_setting_instance214_border_bottom_width]").val(),
				'all_element_setting_instance214_border_bottom_color' : jQuery("input[name=all_element_setting_instance214_border_bottom_color]").val(),
				//border left
				'all_element_setting_instance214_border_left_enable' : all_element_setting_instance214_border_left_enable,
				'all_element_setting_instance214_border_left_type' : jQuery("select[name=all_element_setting_instance214_border_left_type]").val(),
				'all_element_setting_instance214_border_left_width' : jQuery("input[name=all_element_setting_instance214_border_left_width]").val(),
				'all_element_setting_instance214_border_left_color' : jQuery("input[name=all_element_setting_instance214_border_left_color]").val(),
				//border right
				'all_element_setting_instance214_border_right_enable' : all_element_setting_instance214_border_right_enable,
				'all_element_setting_instance214_border_right_type' : jQuery("select[name=all_element_setting_instance214_border_right_type]").val(),
				'all_element_setting_instance214_border_right_width' : jQuery("input[name=all_element_setting_instance214_border_right_width]").val(),
				'all_element_setting_instance214_border_right_color' : jQuery("input[name=all_element_setting_instance214_border_right_color]").val(),
				//radius
				'all_element_setting_instance214_border_top_left_radius' : jQuery("input[name=all_element_setting_instance214_border_top_left_radius]").val(),
				'all_element_setting_instance214_border_top_right_radius' : jQuery("input[name=all_element_setting_instance214_border_top_right_radius]").val(),
				'all_element_setting_instance214_border_bottom_right_radius' : jQuery("input[name=all_element_setting_instance214_border_bottom_right_radius]").val(),
				'all_element_setting_instance214_border_bottom_left_radius' : jQuery("input[name=all_element_setting_instance214_border_bottom_left_radius]").val(),
				//text shadow
				'all_element_setting_instance214_text_shadow_enable' : all_element_setting_instance214_text_shadow_enable,
				'all_element_setting_instance214_text_shadow_h_shadow' : jQuery("input[name=all_element_setting_instance214_text_shadow_h_shadow]").val(),
				'all_element_setting_instance214_text_shadow_v_shadow' : jQuery("input[name=all_element_setting_instance214_text_shadow_v_shadow]").val(),
				'all_element_setting_instance214_text_shadow_blur' : jQuery("input[name=all_element_setting_instance214_text_shadow_blur]").val(),
				'all_element_setting_instance214_text_shadow_color' : jQuery("input[name=all_element_setting_instance214_text_shadow_color]").val(),
				//box shadow
				'all_element_setting_instance214_box_shadow_enable' : all_element_setting_instance214_box_shadow_enable,
				'all_element_setting_instance214_box_shadow_h_shadow' : jQuery("input[name=all_element_setting_instance214_box_shadow_h_shadow]").val(),
				'all_element_setting_instance214_box_shadow_v_shadow' : jQuery("input[name=all_element_setting_instance214_box_shadow_v_shadow]").val(),
				'all_element_setting_instance214_box_shadow_blur' : jQuery("input[name=all_element_setting_instance214_box_shadow_blur]").val(),
				'all_element_setting_instance214_box_shadow_spread' : jQuery("input[name=all_element_setting_instance214_box_shadow_spread]").val(),
				'all_element_setting_instance214_box_shadow_color' : jQuery("input[name=all_element_setting_instance214_box_shadow_color]").val(),
				'all_element_setting_instance214_box_shadow_direction' : jQuery("select[name=all_element_setting_instance214_box_shadow_direction]").val(),
			};
			
			//result is "this_instance_settings" //   it will add to the wrapper object
			 if(current_setting_gruop_name214 =="chart_section_manual"){
				if (typeof object_all_style_stting_container === "undefined"){
				object_all_style_stting_container ={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ]={};
				}
				object_all_style_stting_container[ current_setting_gruop_name214 ][current_setting_element_name214] = this_instance_settings;
			 }else if(current_setting_gruop_name214 =="navigation_path_section"){
				if (typeof object_all_style_stting_container === "undefined"){
				object_all_style_stting_container ={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ]={};
				}
				object_all_style_stting_container[ current_setting_gruop_name214 ][current_setting_element_name214] = this_instance_settings;
			}else if(current_setting_gruop_name214 =="post_list_section"){
				if (typeof object_all_style_stting_container === "undefined"){
				object_all_style_stting_container ={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ]={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214]={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214][current_dimension_name214] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214][current_dimension_name214]={};
				}
				//post_list11_this_element_subject_visible_text
				this_instance_settings['post_list11_this_element_subject_visible_text']= jQuery("input[name=post_list11_this_element_subject_visible_text]").val();
				object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214][current_dimension_name214][current_setting_subject214] = this_instance_settings;
			}else if(current_setting_gruop_name214 =="post_list_manual_section"){
				if (typeof object_all_style_stting_container === "undefined"){
				object_all_style_stting_container ={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ]={};
				}
				object_all_style_stting_container[ current_setting_gruop_name214 ][current_setting_element_name214] = this_instance_settings;
			}else if(current_setting_gruop_name214 =="single_post_section"){
				if (typeof object_all_style_stting_container === "undefined"){
				object_all_style_stting_container ={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ]={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214]={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214][current_dimension_name214] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214][current_dimension_name214]={};
				}
				//single_post11_this_element_subject_visible_text
				this_instance_settings['single_post11_this_element_subject_visible_text']= jQuery("input[name=single_post11_this_element_subject_visible_text]").val();
				object_all_style_stting_container[ current_setting_gruop_name214 ][current_dimension_gruop_name214][current_dimension_name214][current_setting_subject214] = this_instance_settings;
			}else if(current_setting_gruop_name214 =="single_post_manual_section"){
				if (typeof object_all_style_stting_container === "undefined"){
				object_all_style_stting_container ={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ]={};
				}
				object_all_style_stting_container[ current_setting_gruop_name214 ][current_setting_element_name214] = this_instance_settings;
			}else if(current_setting_gruop_name214 =="no_gruop_name"){
				if (typeof object_all_style_stting_container === "undefined"){
				object_all_style_stting_container ={};
				}
				if (typeof object_all_style_stting_container[ current_setting_gruop_name214 ] === "undefined"){
					object_all_style_stting_container[ current_setting_gruop_name214 ]={};
				}
				object_all_style_stting_container[ current_setting_gruop_name214 ][current_setting_element_name214] = this_instance_settings;
			}
			jQuery( ".ws_db_background_not_for_nav_path" ).css("display","block");
			console.log(object_all_style_stting_container);
		},
	   },
	});
}







//post_list_item_settings46
//post_list_item_settings46 ={};


jQuery(document).on("click",".ws_db_open_css_setting_light_box", if_light_box_opened);






