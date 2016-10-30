<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_echo_data_tables' ) ) {
function ws_db_echo_data_tables($all_dimensions){
	global $ws_db_all_setting;
	 ?><div id="chart_div"></div><?php
	if (is_array($ws_db_all_setting['sort_charts_rr_content_for_sort_charts'])){
		//var_dump($all_dimensions);
		//{"#3366cc","#dc3912","#ff9900","#109618","#990099","#0099c6","#dd4477","#66aa00","#b82e2e","#316395","#994499","#22aa99","#aaaa11","#6633cc","#e67300","#8b0707","#651067","#329262","#5574a6","#3b3eac","#b77322","#16d620","#b91383","#f4359e","#9c5935","#a9c413","#2a778d","#668d1c","#bea413","#0c5922","#743411"}
		$color_array=array("#3366cc","#dc3912","#ff9900","#109618","#990099","#0099c6","#dd4477","#66aa00","#b82e2e","#316395","#994499","#22aa99","#aaaa11","#6633cc","#e67300","#8b0707","#651067","#329262","#5574a6","#3b3eac","#b77322","#16d620","#b91383","#f4359e","#9c5935","#a9c413","#2a778d","#668d1c","#bea413","#0c5922","#743411","#3366cc","#dc3912","#ff9900","#109618","#990099","#0099c6","#dd4477","#66aa00","#b82e2e","#316395","#994499","#22aa99","#aaaa11","#6633cc","#e67300","#8b0707","#651067","#329262","#5574a6","#3b3eac","#b77322","#16d620","#b91383","#f4359e","#9c5935","#a9c413","#2a778d","#668d1c","#bea413","#0c5922","#743411","#3366cc","#dc3912","#ff9900","#109618","#990099","#0099c6","#dd4477","#66aa00","#b82e2e","#316395","#994499","#22aa99","#aaaa11","#6633cc","#e67300","#8b0707","#651067","#329262","#5574a6","#3b3eac","#b77322","#16d620","#b91383","#f4359e","#9c5935","#a9c413","#2a778d","#668d1c","#bea413","#0c5922","#743411","#3366cc","#dc3912","#ff9900","#109618","#990099","#0099c6","#dd4477","#66aa00","#b82e2e","#316395","#994499","#22aa99","#aaaa11","#6633cc","#e67300","#8b0707","#651067","#329262","#5574a6","#3b3eac","#b77322","#16d620","#b91383","#f4359e","#9c5935","#a9c413","#2a778d","#668d1c","#bea413","#0c5922","#743411","#3366cc","#dc3912","#ff9900","#109618","#990099","#0099c6","#dd4477","#66aa00","#b82e2e","#316395","#994499","#22aa99","#aaaa11","#6633cc","#e67300","#8b0707","#651067","#329262","#5574a6","#3b3eac","#b77322","#16d620","#b91383","#f4359e","#9c5935","#a9c413","#2a778d","#668d1c","#bea413","#0c5922","#743411","#3366cc","#dc3912","#ff9900","#109618","#990099","#0099c6","#dd4477","#66aa00","#b82e2e","#316395","#994499","#22aa99","#aaaa11","#6633cc","#e67300","#8b0707","#651067","#329262","#5574a6","#3b3eac","#b77322","#16d620","#b91383","#f4359e","#9c5935","#a9c413","#2a778d","#668d1c","#bea413","#0c5922","#743411","#3366cc","#dc3912","#ff9900","#109618","#990099","#0099c6","#dd4477","#66aa00","#b82e2e","#316395","#994499","#22aa99","#aaaa11","#6633cc","#e67300","#8b0707","#651067","#329262","#5574a6","#3b3eac","#b77322","#16d620","#b91383","#f4359e","#9c5935","#a9c413","#2a778d","#668d1c","#bea413","#0c5922","#743411");
		//
		$object_all_style_stting_container= $ws_db_all_setting['object_all_style_stting_container'];
		$current_setting_gruop_name='chart_setting_section';
		$current_setting_gruop_name2='sort_charts_section';
		//
		$all_dimensions_sorted = $ws_db_all_setting['sort_charts_rr_content_for_sort_charts'];
		//$all_dimensions_group_sorted = $ws_db_all_setting['all_dimensions_user_sort'];
		$pie_chart_default_settings = $object_all_style_stting_container[$current_setting_gruop_name]['pie'];
		$donut_chart_default_settings = $object_all_style_stting_container[$current_setting_gruop_name]['donut'];
		$bar_chart_default_settings = $object_all_style_stting_container[$current_setting_gruop_name]['bar'];
		$column_chart_default_settings = $object_all_style_stting_container[$current_setting_gruop_name]['column'];
		$line_chart_default_settings = $object_all_style_stting_container[$current_setting_gruop_name]['line'];
		$scatter_chart_default_settings = $object_all_style_stting_container[$current_setting_gruop_name]['scatter'];
		$area_chart_default_settings = $object_all_style_stting_container[$current_setting_gruop_name]['area'];
		$stapped_area_chart_default_settings = $object_all_style_stting_container[$current_setting_gruop_name]['stepped'];
		$table_chart_default_settings = $ws_db_all_setting['table_chart_default_settings'];
		//
		$counter3 = 0;
		$chart_section_box_info_array=array('current_gruop_name'=>'chart_section_manual','current_element_name'=>'chart_section_box');
		$single_chart_box_info_array=array('current_gruop_name'=>'chart_section_manual','current_element_name'=>'single_chart_box');
		?><div id="screen_tabs_ddddddd" style="<?php echo ws_db_inline_style_creator($chart_section_box_info_array); ?>"><?php
		foreach( $all_dimensions_sorted as $key=>$array_options ){
			$group_nick_name=$array_options['dimension_gruop']; 
			if($group_nick_name=='basic'){$group_name='all_dimensions_static';}elseif($group_nick_name=='taxo'){$group_name='all_dimensions_taxonomy';}elseif($group_nick_name=='field'){$group_name='all_dimensions_custom_field';}
			$dimension_name=$array_options['dimension_name'];
			$dimension_name_visible_text_defualt=$array_options['dimension_name_visible_text'];
			//
			
			if(isset($object_all_style_stting_container[$current_setting_gruop_name2][$group_nick_name][$dimension_name]['sort_charts_setting_instance214_chart_type'])){
				$chart_type=$object_all_style_stting_container[$current_setting_gruop_name2][$group_nick_name][$dimension_name]['sort_charts_setting_instance214_chart_type'];
			}else{
				$chart_type='Pie Chart';
			}
			if(isset($object_all_style_stting_container[$current_setting_gruop_name2][$group_nick_name][$dimension_name]['sort_charts_setting_instance214_chart_title'])){
				$dimension_name_visible_text=$object_all_style_stting_container[$current_setting_gruop_name2][$group_nick_name][$dimension_name]['sort_charts_setting_instance214_chart_title'];
			}else{
				$dimension_name_visible_text=$dimension_name_visible_text_defualt;
			}
			
						if(array_key_exists($dimension_name,$all_dimensions[$group_name]) and !empty($all_dimensions[$group_name][$dimension_name])){
						?><div class="ws_db_single_chart_box_class" style="<?php echo ws_db_inline_style_creator($single_chart_box_info_array); ?>" ><?php				
							$current_dimensions_values=$all_dimensions[$group_name][$dimension_name];
							$th_dimension_name=$dimension_name_visible_text;
							//alternative_text_for_empty_values
							foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){
								if($dimension_value_key == ''){
									if(is_int($dimension_value_key)){
										//do not change it it is "0" and can be viewed . we had check for empty not 0 ,the check has bug
									}else{
										$alternative_text_for_empty_values = $ws_db_all_setting['alternative_text_for_empty_values'];
										unset($current_dimensions_values[$dimension_value_key]);
										$current_dimensions_values[$alternative_text_for_empty_values]=$dimension_value_number;
									}
								}elseif($dimension_value_key == ' '){
									$alternative_text_for_one_space_values = $ws_db_all_setting['alternative_text_for_one_space_values'];
									unset($current_dimensions_values[$dimension_value_key]);
									$current_dimensions_values[$alternative_text_for_one_space_values]=$dimension_value_number;
								}
							}
							arsort($current_dimensions_values);
							if($chart_type=='Pie Chart'){
								$counter3++; 
								?><div id="ws_db_charts_id_<?php echo $counter3; ?>" class="ws_db_well222"></div><?php
								?><script> function ws_db_chart_<?php echo $counter3; ?>() {
									var data = new google.visualization.DataTable();
									data.addColumn('string', '<?php echo $th_dimension_name; ?>');
									data.addColumn('number', 'number');
									data.addRows([
									<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
									  ['<?php echo $dimension_value_key;?>', <?php echo $dimension_value_number;?>],
									<?php } ?>
									]);
									//$pie_chart_default_settings
									var options = {
									   //is3D
									   is3D:<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_is_3d']) and $pie_chart_default_settings['all_chart_setting_instance22_is_3d']=='true'){ echo 'true';}else{ echo 'false'; }?> ,
									  // pieSliceText
									   <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_slice_text']) and $pie_chart_default_settings['all_chart_setting_instance22_slice_text']!= ''){ echo 'pieSliceText:"'.$pie_chart_default_settings['all_chart_setting_instance22_slice_text'].'",';}?>
									   //pieStartAngle
									   <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_start_angle']) and $pie_chart_default_settings['all_chart_setting_instance22_start_angle']!= ''){ echo 'pieStartAngle:"'.$pie_chart_default_settings['all_chart_setting_instance22_start_angle'].'",';}?>
									  //pieResidueSliceColor
									   <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_residue_slice_color']) and $pie_chart_default_settings['all_chart_setting_instance22_residue_slice_color']!= ''){ echo 'pieResidueSliceColor:"'.$pie_chart_default_settings['all_chart_setting_instance22_residue_slice_color'].'",';}?>
									  //pieResidueSliceLabel
									   <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_residue_slice_label']) and $pie_chart_default_settings['all_chart_setting_instance22_residue_slice_label']!= ''){ echo 'pieResidueSliceLabel:"'.$pie_chart_default_settings['all_chart_setting_instance22_residue_slice_label'].'",';}?>
									  <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_slice_text_style_overwrite']) and $pie_chart_default_settings['all_chart_setting_instance22_slice_text_style_overwrite']=='true'){ ?> 
										 pieSliceTextStyle:{
											 //color
											 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_slice_text_style_color']) and $pie_chart_default_settings['all_chart_setting_instance22_slice_text_style_color']!= ''){  ?> color:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_slice_text_style_color']?>", <?php } ?>
											 //fontName
											 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_name']) and $pie_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_name']!= ''){  ?> fontName:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_name']?>", <?php } ?>
											 //fontSize     
											 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_size']) and $pie_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_size']!= ''){  ?> fontSize:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_size']?>, <?php } ?>
										 },
										 <?php } ?> 
									   //public///
									   'title':'<?php echo $th_dimension_name; ?>',
										//enableInteractivity
										 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_enable_interactivity']) and $pie_chart_default_settings['all_chart_setting_instance22_enable_interactivity']!= ''){  ?> enableInteractivity:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_enable_interactivity']?>, <?php } ?>
										 //fontSize 
										 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_font_size_auto']) and $pie_chart_default_settings['all_chart_setting_instance22_font_size_auto']=='false' and $pie_chart_default_settings['all_chart_setting_instance22_font_size_px']!= ''){  ?> fontSize:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_font_size_px']?>, <?php } ?>
										 //fontName
										 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_font_name']) and $pie_chart_default_settings['all_chart_setting_instance22_font_name']!= ''){  ?> fontName:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_font_name']?>", <?php } ?>
										//forceIFrame
										 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_force_iframe']) and $pie_chart_default_settings['all_chart_setting_instance22_force_iframe']!= ''){  ?> forceIFrame:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_force_iframe']?>, <?php } ?>
										 //height
										 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_height_auto']) and $pie_chart_default_settings['all_chart_setting_instance22_height_auto']=='false' and $pie_chart_default_settings['all_chart_setting_instance22_height_px']!= ''){  ?> height:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_height_px']?>", <?php } ?>
										 //width
										 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_width_auto']) and $pie_chart_default_settings['all_chart_setting_instance22_width_auto']=='false' and $pie_chart_default_settings['all_chart_setting_instance22_width_px']!= ''){  ?> width:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_width_px']?>", <?php } ?>
										 //reverseCategories
										 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_reverse_categories']) and $pie_chart_default_settings['all_chart_setting_instance22_reverse_categories']!= ''){  ?> reverseCategories:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_reverse_categories']?>, <?php } ?>
										 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']) and $pie_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']=='true'){ ?> 
										 titleTextStyle:{
											 //color
											 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_title_text_style_color']) and $pie_chart_default_settings['all_chart_setting_instance22_title_text_style_color']!= ''){  ?> color:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_title_text_style_color']?>", <?php } ?>
											 //fontName
											 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']) and $pie_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']!= ''){  ?> fontName:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']?>", <?php } ?>
											 //fontSize      +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']) and $pie_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']!= ''){  ?> fontSize:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']?>, <?php } ?>
											 //bold
											 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']) and $pie_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']!= ''){  ?> bold:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']?>, <?php } ?>
											 //italic
											 <?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']) and $pie_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']!= ''){  ?> italic:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']?>, <?php } ?>
										 },
										 <?php } ?> 
										 backgroundColor:{
											//stroke			// string		//The color of the chart border, as an HTML color string
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']) and $pie_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']!= ''){  ?> stroke:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']?>", <?php } ?>
											//strokeWidth		//	number		//The border width, in pixels.
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']) and $pie_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']!= ''){  ?> strokeWidth:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']?>, <?php } ?>
											//fill			// string		//The chart fill color, as an HTML color string
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_background_color_fill']) and $pie_chart_default_settings['all_chart_setting_instance22_background_color_fill']!= ''){  ?> fill:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_background_color_fill']?>", <?php } ?>
										},
										chartArea:{
											//width				// number or string
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_area_width_auto']) and $pie_chart_default_settings['all_chart_setting_instance22_area_width_auto']=='false' and $pie_chart_default_settings['all_chart_setting_instance22_area_width_px']!= ''){  ?> width:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_area_width_px']?>", <?php } ?>
											//height				// number or string	
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_area_height_auto']) and $pie_chart_default_settings['all_chart_setting_instance22_area_height_auto']=='false' and $pie_chart_default_settings['all_chart_setting_instance22_area_height_px']!= ''){  ?> height:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_area_height_px']?>", <?php } ?>
										},
										legend:{
											//maxLines			// number ///////////////////////////specific to pie chart
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_legend_max_lines']) and $pie_chart_default_settings['all_chart_setting_instance22_legend_max_lines']!= ''){  ?> maxLines:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_legend_max_lines']?>, <?php } ?>
											//position			// string
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_legend_position']) and $pie_chart_default_settings['all_chart_setting_instance22_legend_position']!= ''){  ?> position:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_legend_position']?>", <?php } ?>
											//alignment			// string
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_legend_alignment']) and $pie_chart_default_settings['all_chart_setting_instance22_legend_alignment']!= ''){  ?> alignment:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_legend_alignment']?>", <?php } ?>
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']) and $pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			// string
												<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']) and $pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']!= ''){  ?> color:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']?>", <?php } ?>
												//fontName			// string
												<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']) and $pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']!= ''){  ?> fontName:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']?>", <?php } ?>
												//fontSize			// number
												<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']) and $pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']!= ''){  ?> fontSize:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']?>, <?php } ?>
												//bold			// bool
												<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']) and $pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']!= ''){  ?> bold:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']?>, <?php } ?>
												//italic			// bool
												<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']) and $pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']!= ''){  ?> italic:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']?>, <?php } ?>
											},
											<?php } ?>
										},
										tooltip:{
											//ignoreBounds			- bool
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']) and $pie_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']!= ''){  ?> ignoreBounds:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']?>, <?php } ?>
											//showColorCode		- bool
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']) and $pie_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']!= ''){  ?> showColorCode:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']?>, <?php } ?>
											//text			- string -specific to pie chart
											//<?php //if($pie_chart_default_settings['all_chart_setting_instance22_tooltip_text'] and $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text']!= ''){  //?>// color:"//<?php// echo $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text']//?>//", //<?php// } ?>//
											<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']) and $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			- string
												<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']) and $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']!= ''){  ?> color:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']?>", <?php } ?>
												//fontName			-string
												<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']) and $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']!= ''){  ?> fontName:"<?php echo $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']?>", <?php } ?>
												//fontSize			- number
												<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']) and $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']!= ''){  ?> fontSize:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']?>, <?php } ?>
												//bold			- bool
												<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']) and $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']!= ''){  ?> bold:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']?>, <?php } ?>
												//italic			- bool
												<?php if(isset($pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']) and $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']!= ''){  ?> italic:<?php echo $pie_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic'] ?>,<?php } ?>
											},
											<?php } ?>
										},
									   };
									var chart = new google.visualization.PieChart(document.getElementById('ws_db_charts_id_<?php echo $counter3; ?>'));
									var handler_<?php echo $counter3; ?> = function(e) {
										var parts = e.targetID.split('#');
										if (parts[0]== 'title') {
											ws_db_call_ajax_php('th_row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>');
										}
									};
									google.visualization.events.addListener(chart, 'click', handler_<?php echo $counter3; ?>);
									function selectHandler_<?php echo $counter3; ?>() {
										  var selectedItem = chart.getSelection()[0];
										  if (selectedItem) {
											var dimension_value_key = data.getValue(selectedItem.row, 0);
											var dimension_value_number = data.getValue(selectedItem.row, 1);
											//alert( dimension_value_number);
											ws_db_call_ajax_php('row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>', dimension_value_key,dimension_value_number);
										  }
										}
									google.visualization.events.addListener(chart, 'select', selectHandler_<?php echo $counter3; ?>);  
									google.visualization.events.addListener(chart, 'onmouseover', uselessHandler2<?php echo $counter3; ?>);
									google.visualization.events.addListener(chart, 'onmouseout', uselessHandler3<?php echo $counter3; ?>);
									function uselessHandler2<?php echo $counter3; ?>() {
									 document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "pointer";
									  }  
											function uselessHandler3<?php echo $counter3; ?>() {
									document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "default";
									} 
										chart.draw(data, options);  
									} 
									</script><?php
							}elseif($chart_type=='Donut Chart'){
								$counter3++; 
								?><div id="ws_db_charts_id_<?php echo $counter3; ?>" class="ws_db_well22"></div><?php
								?><script> function ws_db_chart_<?php echo $counter3; ?>() {
									var data = new google.visualization.DataTable();
									data.addColumn('string', '<?php echo $th_dimension_name; ?>');
									data.addColumn('number', 'number');
									data.addRows([
									<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
									  ['<?php echo $dimension_value_key;?>', <?php echo $dimension_value_number;?>],//  ['Olives', 1],
									<?php } ?>
									]);
									var options = {
									   //pieHole
									  pieHole: <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_pie_hole']) and $donut_chart_default_settings['all_chart_setting_instance22_pie_hole']!= ''){ echo $donut_chart_default_settings['all_chart_setting_instance22_pie_hole'];}else{ echo '0.4'; } ?>,
									  // pieSliceText
									   <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_slice_text']) and $donut_chart_default_settings['all_chart_setting_instance22_slice_text']!= ''){ echo 'pieSliceText:"'.$donut_chart_default_settings['all_chart_setting_instance22_slice_text'].'",';}?>
									   //pieStartAngle
									   <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_start_angle']) and $donut_chart_default_settings['all_chart_setting_instance22_start_angle']!= ''){ echo 'pieStartAngle:"'.$donut_chart_default_settings['all_chart_setting_instance22_start_angle'].'",';}?>
									  //pieResidueSliceColor
									   <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_residue_slice_color']) and $donut_chart_default_settings['all_chart_setting_instance22_residue_slice_color']!= ''){ echo 'pieResidueSliceColor:"'.$donut_chart_default_settings['all_chart_setting_instance22_residue_slice_color'].'",';}?>
									  //pieResidueSliceLabel
									   <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_residue_slice_label']) and $donut_chart_default_settings['all_chart_setting_instance22_residue_slice_label']!= ''){ echo 'pieResidueSliceLabel:"'.$donut_chart_default_settings['all_chart_setting_instance22_residue_slice_label'].'",';}?>
									  <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_slice_text_style_overwrite']) and $donut_chart_default_settings['all_chart_setting_instance22_slice_text_style_overwrite']=='true'){ ?> 
										 pieSliceTextStyle:{
											 //color
											 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_slice_text_style_color']) and $donut_chart_default_settings['all_chart_setting_instance22_slice_text_style_color']!= ''){  ?> color:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_slice_text_style_color']?>", <?php } ?>
											 //fontName
											 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_name']) and $donut_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_name']!= ''){  ?> fontName:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_name']?>", <?php } ?>
											 //fontSize     
											 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_size']) and $donut_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_size']!= ''){  ?> fontSize:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_slice_text_style_font_size']?>, <?php } ?>
											 
										 },
										 <?php } ?> 
									   //public
									   'title':'<?php echo $th_dimension_name; ?>',
										//enableInteractivity
										 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_enable_interactivity']) and $donut_chart_default_settings['all_chart_setting_instance22_enable_interactivity']!= ''){  ?> enableInteractivity:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_enable_interactivity']?>, <?php } ?>
										 //fontSize 
										 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_font_size_auto']) and $donut_chart_default_settings['all_chart_setting_instance22_font_size_auto']=='false' and $donut_chart_default_settings['all_chart_setting_instance22_font_size_px']!= ''){  ?> fontSize:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_font_size_px']?>, <?php } ?>
										 //fontName
										 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_font_name']) and $donut_chart_default_settings['all_chart_setting_instance22_font_name']!= ''){  ?> fontName:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_font_name']?>", <?php } ?>
										//forceIFrame
										 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_force_iframe']) and $donut_chart_default_settings['all_chart_setting_instance22_force_iframe']!= ''){  ?> forceIFrame:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_force_iframe']?>, <?php } ?>
										 //height
										 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_height_auto']) and $donut_chart_default_settings['all_chart_setting_instance22_height_auto']=='false' and $donut_chart_default_settings['all_chart_setting_instance22_height_px']!= ''){  ?> height:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_height_px']?>", <?php } ?>
										 //width
										 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_width_auto']) and $donut_chart_default_settings['all_chart_setting_instance22_width_auto']=='false' and $donut_chart_default_settings['all_chart_setting_instance22_width_px']!= ''){  ?> width:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_width_px']?>", <?php } ?>
										 //reverseCategories
										 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_reverse_categories']) and $donut_chart_default_settings['all_chart_setting_instance22_reverse_categories']!= ''){  ?> reverseCategories:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_reverse_categories']?>, <?php } ?>
										 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']) and $donut_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']=='true'){ ?> 
										 titleTextStyle:{
											 //color
											 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_title_text_style_color']) and $donut_chart_default_settings['all_chart_setting_instance22_title_text_style_color']!= ''){  ?> color:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_title_text_style_color']?>", <?php } ?>
											 //fontName
											 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']) and $donut_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']!= ''){  ?> fontName:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']?>", <?php } ?>
											 //fontSize      
											 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']) and $donut_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']!= ''){  ?> fontSize:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']?>, <?php } ?>
											 //bold
											 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']) and $donut_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']!= ''){  ?> bold:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']?>, <?php } ?>
											 //italic
											 <?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']) and $donut_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']!= ''){  ?> italic:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']?>, <?php } ?>
										 },
										 <?php } ?> 
										 backgroundColor:{
											//stroke			-string		-The color of the chart border, as an HTML color string
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']) and $donut_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']!= ''){  ?> stroke:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']?>", <?php } ?>
											//strokeWidth		-number		-The border width, in pixels.
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']) and $donut_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']!= ''){  ?> strokeWidth:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']?>, <?php } ?>
											//fill			-string		-The chart fill color, as an HTML color string
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_background_color_fill']) and $donut_chart_default_settings['all_chart_setting_instance22_background_color_fill']!= ''){  ?> fill:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_background_color_fill']?>", <?php } ?>
										},
										chartArea:{
											//width				-number or string
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_area_width_auto']) and $donut_chart_default_settings['all_chart_setting_instance22_area_width_auto']=='false' and $donut_chart_default_settings['all_chart_setting_instance22_area_width_px']!= ''){  ?> width:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_area_width_px']?>", <?php } ?>
											//height				// number or string	
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_area_height_auto']) and $donut_chart_default_settings['all_chart_setting_instance22_area_height_auto']=='false' and $donut_chart_default_settings['all_chart_setting_instance22_area_height_px']!= ''){  ?> height:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_area_height_px']?>", <?php } ?>
										},
										legend:{
											//maxLines			-number -specific to pie chart
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_legend_max_lines']) and $donut_chart_default_settings['all_chart_setting_instance22_legend_max_lines']!= ''){  ?> maxLines:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_legend_max_lines']?>, <?php } ?>
											//position			-string
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_legend_position']) and $donut_chart_default_settings['all_chart_setting_instance22_legend_position']!= ''){  ?> position:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_legend_position']?>", <?php } ?>
											//alignment			-string
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_legend_alignment']) and $donut_chart_default_settings['all_chart_setting_instance22_legend_alignment']!= ''){  ?> alignment:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_legend_alignment']?>", <?php } ?>
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']) and $donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			-string
												<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']) and $donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']!= ''){  ?> color:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']?>", <?php } ?>
												//fontName			-string
												<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']) and $donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']!= ''){  ?> fontName:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']?>", <?php } ?>
												//fontSize			- number
												<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']) and $donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']!= ''){  ?> fontSize:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']?>, <?php } ?>
												//bold			-bool
												<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']) and $donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']!= ''){  ?> bold:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']?>, <?php } ?>
												//italic			-bool
												<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']) and $donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']!= ''){  ?> italic:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']?>, <?php } ?>
											},
											<?php } ?>
										},
										tooltip:{
											//ignoreBounds			-bool
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']) and $donut_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']!= ''){  ?> ignoreBounds:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']?>, <?php } ?>
											//showColorCode			-bool
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']) and $donut_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']!= ''){  ?> showColorCode:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']?>, <?php } ?>
											//text			-string -specific to pie chart
											<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']) and $donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			-string
												<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']) and $donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']!= ''){  ?> color:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']?>", <?php } ?>
												//fontName			-string
												<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']) and $donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']!= ''){  ?> fontName:"<?php echo $donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']?>", <?php } ?>
												//fontSize			-number
												<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']) and $donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']!= ''){  ?> fontSize:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']?>, <?php } ?>
												//bold		- bool
												<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']) and $donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']!= ''){  ?> bold:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']?>, <?php } ?>
												//italic	- bool
												<?php if(isset($donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']) and $donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']!= ''){  ?> italic:<?php echo $donut_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic'] ?>,<?php } ?>
											},
											<?php } ?>
										},
									   };
									var chart = new google.visualization.PieChart(document.getElementById('ws_db_charts_id_<?php echo $counter3; ?>'));
									var handler_<?php echo $counter3; ?> = function(e) {
										var parts = e.targetID.split('#');
										if (parts[0]== 'title') {
											ws_db_call_ajax_php('th_row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>');
										}
									};
									google.visualization.events.addListener(chart, 'click', handler_<?php echo $counter3; ?>);
									function selectHandler_<?php echo $counter3; ?>() {
										  var selectedItem = chart.getSelection()[0];
										  if (selectedItem) {
											var dimension_value_key = data.getValue(selectedItem.row, 0);
											var dimension_value_number = data.getValue(selectedItem.row, 1);
											ws_db_call_ajax_php('row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>', dimension_value_key,dimension_value_number);
										  }
										}
									google.visualization.events.addListener(chart, 'select', selectHandler_<?php echo $counter3; ?>);  
									google.visualization.events.addListener(chart, 'onmouseover', uselessHandler2<?php echo $counter3; ?>);
									google.visualization.events.addListener(chart, 'onmouseout', uselessHandler3<?php echo $counter3; ?>);
									function uselessHandler2<?php echo $counter3; ?>() {
									 document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "pointer";
									  }  
											function uselessHandler3<?php echo $counter3; ?>() {
									document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "default";
									} 
										chart.draw(data, options);  
									} 
									</script><?php
							}elseif($chart_type=='Bar Chart'){
								$counter3++; 
								?><div id="ws_db_charts_id_<?php echo $counter3; ?>" class="ws_db_well22"></div><?php
								?><script> function ws_db_chart_<?php echo $counter3; ?>() {
									<?php //detecting first column data type
									foreach ($current_dimensions_values as $dimension_value_key => $dimension_value_number) {
											if (is_numeric($dimension_value_key)) {
												$first_column_data_type = 'number';
											} else {
												$first_column_data_type = 'string';
												break;
											}
										} ?>
									<?php if ($first_column_data_type=='number' and $bar_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']=='true'){  //so we can have trendline?>
									//note thate if first column set to number type the chart will generate vAxis atomatically and will not use default column key
										//start
										var data = new google.visualization.DataTable();
										data.addColumn('<?php echo $first_column_data_type; ?>', '<?php echo $th_dimension_name; ?>');
										data.addColumn('number', 'number');
										data.addColumn({type: 'string', role: 'style'});
										//if annotation enabled add annotation column
										<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
											data.addColumn({type:'string', role:'annotation'}); // annotation role col. -- not enabled for bar charts
											data.addColumn({type:'string', role:'annotationText'}); // annotationText col. -- not enabled for bar charts
										<?php } ?> 
										<?php $color_index_counter=0; ?>
										data.addRows([
										<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
										  [
										  <?php echo $dimension_value_key;?>,
										   <?php echo $dimension_value_number;?> ,
										  'color:<?php echo $color_array[$color_index_counter];?>' ,
										  <?php $color_index_counter++; ?>
										  //if annotation enabled add annotation data
										  <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										  // annotation data in chart 
											<?php  $bar_annotations_content = $bar_chart_default_settings['all_chart_setting_instance22_annotations_content'];
													if($bar_annotations_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_content=='both'){
														 ?>'<?php echo $dimension_value_key.$bar_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_content=='manual'){
														 ?>'<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_content_manual'];?>',<?php
													} ?>
											// annotation data for hover on annotation
											<?php		
													$bar_annotations_hover_content = $bar_chart_default_settings['all_chart_setting_instance22_annotations_hover_content'];
													if($bar_annotations_hover_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_hover_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_hover_content=='both'){
														 ?>'<?php echo $dimension_value_key.$bar_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_hover_content=='manual'){
														 ?>'<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_hover_content_manual'];?>',<?php
													} ?>
										   <?php } ?> 
										  ],
										  
										<?php } ?>
										]);
									//end
										<?php }else{ //so we can't have trendline ?>
										//////////////////////////////start
											var data = new google.visualization.DataTable();
										data.addColumn('string', '<?php echo $th_dimension_name; ?>');
										data.addColumn('number', 'number');
										data.addColumn({type: 'string', role: 'style'});
										//if annotation enabled add annotation column
										<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
											data.addColumn({type:'string', role:'annotation'}); // annotation role col. -- not enabled for bar charts
											data.addColumn({type:'string', role:'annotationText'}); // annotationText col. -- not enabled for bar charts
										<?php } ?> 
										<?php $color_index_counter=0; ?>
										data.addRows([
										<?php $color_index_counter=0; ?>
										<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
										  [
										  '<?php echo $dimension_value_key;?>',
										   <?php echo $dimension_value_number;?> ,
										   'color:<?php echo $color_array[$color_index_counter];?>' ,
										  <?php $color_index_counter++; ?>
										  //if annotation enabled add annotation data
										  <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										  // annotation data in chart 
											<?php  $bar_annotations_content = $bar_chart_default_settings['all_chart_setting_instance22_annotations_content'];
													if($bar_annotations_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_content=='both'){
														 ?>'<?php echo $dimension_value_key.$bar_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_content=='manual'){
														 ?>'<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_content_manual'];?>',<?php
													} ?>
											// annotation data for hover on annotation
											<?php		
													$bar_annotations_hover_content = $bar_chart_default_settings['all_chart_setting_instance22_annotations_hover_content'];
													if($bar_annotations_hover_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_hover_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_hover_content=='both'){
														 ?>'<?php echo $dimension_value_key.$bar_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_hover_content=='manual'){
														 ?>'<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_hover_content_manual'];?>',<?php
													} ?>
										   <?php } ?> 
										  ],
										<?php } ?>
										]);
									//end
									<?php } ?> 
									var options = {
										'title':'<?php echo $th_dimension_name; ?>',
										//axisTitlesPosition
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_axis_titles_position']) and $bar_chart_default_settings['all_chart_setting_instance22_axis_titles_position']!= ''){  ?> axisTitlesPosition:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_axis_titles_position']?>", <?php } ?>
										//dataOpacity
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_data_opacity']) and $bar_chart_default_settings['all_chart_setting_instance22_data_opacity']!= ''){  ?> dataOpacity:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_data_opacity']?>, <?php } ?>
										//enableInteractivity
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_enable_interactivity']) and $bar_chart_default_settings['all_chart_setting_instance22_enable_interactivity']!= ''){  ?> enableInteractivity:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_enable_interactivity']?>, <?php } ?>
										 //fontSize 
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_font_size_auto']) and $bar_chart_default_settings['all_chart_setting_instance22_font_size_auto']=='false' and $bar_chart_default_settings['all_chart_setting_instance22_font_size_px']!= ''){  ?> fontSize:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_font_size_px']?>, <?php } ?>
										 //fontName
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_font_name']) and $bar_chart_default_settings['all_chart_setting_instance22_font_name']!= ''){  ?> fontName:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_font_name']?>", <?php } ?>
										//forceIFrame
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_force_iframe']) and $bar_chart_default_settings['all_chart_setting_instance22_force_iframe']!= ''){  ?> forceIFrame:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_force_iframe']?>, <?php } ?>
										 //height
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_height_auto']) and $bar_chart_default_settings['all_chart_setting_instance22_height_auto']=='false' and $bar_chart_default_settings['all_chart_setting_instance22_height_px']!= ''){  ?> height:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_height_px']?>", <?php } ?>
										 //width
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_width_auto']) and $bar_chart_default_settings['all_chart_setting_instance22_width_auto']=='false' and $bar_chart_default_settings['all_chart_setting_instance22_width_px']!= ''){  ?> width:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_width_px']?>", <?php } ?>
										 //reverseCategories
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_reverse_categories']) and $bar_chart_default_settings['all_chart_setting_instance22_reverse_categories']!= ''){  ?> reverseCategories:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_reverse_categories']?>, <?php } ?>
										 //titlePosition
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_title_position']) and $bar_chart_default_settings['all_chart_setting_instance22_title_position']!= ''){  ?> titlePosition:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_title_position']?>", <?php } ?>
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']) and $bar_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']=='true'){ ?> 
										 titleTextStyle:{
											 //color
											 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_title_text_style_color']) and $bar_chart_default_settings['all_chart_setting_instance22_title_text_style_color']!= ''){  ?> color:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_title_text_style_color']?>", <?php } ?>
											 //fontName
											 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']) and $bar_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']!= ''){  ?> fontName:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']?>", <?php } ?>
											 //fontSize      +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']) and $bar_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']!= ''){  ?> fontSize:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']?>, <?php } ?>
											 //bold
											 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']) and $bar_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']!= ''){  ?> bold:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']?>, <?php } ?>
											 //italic
											 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']) and $bar_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']!= ''){  ?> italic:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']?>, <?php } ?>
										 },
										 <?php } ?> 
										 animation:{
											 //duration
											 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_animation_duration']) and $bar_chart_default_settings['all_chart_setting_instance22_animation_duration']!= ''){  ?> duration:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_animation_duration']?>, <?php } ?>
											 //easing
											 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_animation_easing']) and $bar_chart_default_settings['all_chart_setting_instance22_animation_easing']!= ''){  ?> easing:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_animation_easing']?>", <?php } ?>
											 //startup
											 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_animation_startup']) and $bar_chart_default_settings['all_chart_setting_instance22_animation_startup']!= ''){  ?> startup:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_animation_startup']?>, <?php } ?>
										 },
										 //annotations
										 <?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										 annotations:{
											//alwaysOutside  -Type: boolean-Default: false
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']!= ''){  ?> alwaysOutside:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']?>, <?php } ?>
											//highContrast  -Type:-boolean-Default: true
											<?php if(isset($bar_chart_default_settings['']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']!= ''){  ?> highContrast:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']?>, <?php } ?>
											//style:Type -string-Default- 'point'  
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_style']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_style']!= ''){  ?> style:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_style']?>", <?php } ?>
											// textStyle /object
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_overwrite']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_overwrite']=='true'){ ?>
											textStyle:{ 
												//fontName   -'string'
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']!= ''){  ?> fontName:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']?>", <?php } ?>
												//fontSize  :number,
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']!= ''){  ?> fontSize:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']?>, <?php } ?>
												//bold :bool,
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']!= ''){  ?> bold:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']?>, <?php } ?>
												//italic		bool
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']!= ''){  ?> italic:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']?>, <?php } ?>
												//color		'string'
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']!= ''){  ?> color:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']?>", <?php } ?>
												//auraColor		'string'
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']!= ''){  ?> auraColor:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']?>", <?php } ?>
												//opacity		0.8
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']) and $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']!= ''){  ?> opacity:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']?>, <?php } ?>
											},
											<?php } ?> 
										 },
										 <?php } ?> 
										 backgroundColor:{
											//stroke			- string		-The color of the chart border, as an HTML color string
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']) and $bar_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']!= ''){  ?> stroke:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']?>", <?php } ?>
											//strokeWidth		-number		-The border width, in pixels.
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']) and $bar_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']!= ''){  ?> strokeWidth:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']?>, <?php } ?>
											//fill			-string		-The chart fill color, as an HTML color string
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_background_color_fill']) and $bar_chart_default_settings['all_chart_setting_instance22_background_color_fill']!= ''){  ?> fill:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_background_color_fill']?>", <?php } ?>
										},
										chartArea:{
											//width				-number or string
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_area_width_auto']) and $bar_chart_default_settings['all_chart_setting_instance22_area_width_auto']=='false' and $bar_chart_default_settings['all_chart_setting_instance22_area_width_px']!= ''){  ?> width:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_area_width_px']?>", <?php } ?>
											//height				-number or string	
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_area_height_auto']) and $bar_chart_default_settings['all_chart_setting_instance22_area_height_auto']=='false' and $bar_chart_default_settings['all_chart_setting_instance22_area_height_px']!= ''){  ?> height:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_area_height_px']?>", <?php } ?>
										},
										legend:{
											//position			- string
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_legend_position']) and $bar_chart_default_settings['all_chart_setting_instance22_legend_position']!= ''){  ?> position:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_legend_position']?>", <?php } ?>
											//alignment			- string
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_legend_alignment']) and $bar_chart_default_settings['all_chart_setting_instance22_legend_alignment']!= ''){  ?> alignment:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_legend_alignment']?>", <?php } ?>
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']) and $bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			- string
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']) and $bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']!= ''){  ?> color:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']?>", <?php } ?>
												//fontName			- string
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']) and $bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']!= ''){  ?> fontName:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']?>", <?php } ?>
												//fontSize			- number
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']) and $bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']!= ''){  ?> fontSize:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']?>, <?php } ?>
												//bold			- bool
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']) and $bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']!= ''){  ?> bold:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']?>, <?php } ?>
												//italic			-bool
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']) and $bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']!= ''){  ?> italic:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']?>, <?php } ?>
											},
											<?php } ?>
										},
										tooltip:{
											//ignoreBounds			- bool
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']) and $bar_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']!= ''){  ?> ignoreBounds:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']?>, <?php } ?>
											//showColorCode			- bool
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']) and $bar_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']!= ''){  ?> showColorCode:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']?>, <?php } ?>
											//
											<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']) and $bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			- string
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']) and $bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']!= ''){  ?> color:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']?>", <?php } ?>
												//fontName			- string
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']) and $bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']!= ''){  ?> fontName:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']?>", <?php } ?>
												//fontSize			- number
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']) and $bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']!= ''){  ?> fontSize:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']?>, <?php } ?>
												//bold			- bool
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']) and $bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']!= ''){  ?> bold:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']?>, <?php } ?>
												//italic			- bool
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']) and $bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']!= ''){  ?> italic:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic'] ?>,<?php } ?>
											},
											<?php } ?>
										},
										<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']) and $bar_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']=='true'){   //so we can have trendline?>
										<?php if ($first_column_data_type=='number'){  //so we can have trendline ?>
										trendlines:{
											0:{
												//type			-string    -linear
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_trendlines_type']) and $bar_chart_default_settings['all_chart_setting_instance22_trendlines_type']!= ''){  ?> type:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_trendlines_type']?>", <?php } ?>
												//color			-string
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_trendline_color']) and $bar_chart_default_settings['all_chart_setting_instance22_trendline_color']!= ''){  ?> color:"<?php echo $bar_chart_default_settings['all_chart_setting_instance22_trendline_color']?>", <?php } ?>
												//lineWidth		-number
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_trendline_line_width']) and $bar_chart_default_settings['all_chart_setting_instance22_trendline_line_width']!= ''){  ?> lineWidth:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_trendline_line_width']?>, <?php } ?>
												//opacity		-number
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_trendline_opacity']) and $bar_chart_default_settings['all_chart_setting_instance22_trendline_opacity']!= ''){  ?> opacity:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_trendline_opacity']?>, <?php } ?>
												//showR2		-bool
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']) and $bar_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']!= ''){  ?> showR2:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']?>, <?php } ?>
												//visibleInLegend	-bool
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']) and $bar_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']!= ''){  ?> visibleInLegend:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']?>, <?php } ?>
												//degree		- number
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_trendline_degree']) and $bar_chart_default_settings['all_chart_setting_instance22_trendline_degree']!= ''){  ?> degree:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_trendline_degree']?>, <?php } ?>
												//pointSize		-number
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_trendline_point_size']) and $bar_chart_default_settings['all_chart_setting_instance22_trendline_point_size']!= ''){  ?> pointSize:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_trendline_point_size']?>, <?php } ?>
												//pointsVisible		- bool
												<?php if(isset($bar_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']) and $bar_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']!= ''){  ?> pointsVisible:<?php echo $bar_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']?>, <?php } ?>
											},
										},
									<?php } ?>	
									<?php } ?>
									   };
									var chart = new google.visualization.BarChart(document.getElementById('ws_db_charts_id_<?php echo $counter3; ?>'));
									var handler_<?php echo $counter3; ?> = function(e) {
										var parts = e.targetID.split('#');
										if (parts[0]== 'title') {
											ws_db_call_ajax_php('th_row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>');
										}
									};
									google.visualization.events.addListener(chart, 'click', handler_<?php echo $counter3; ?>);
									function selectHandler_<?php echo $counter3; ?>() {
										  var selectedItem = chart.getSelection()[0];
										  if (selectedItem) {
											var dimension_value_key = data.getValue(selectedItem.row, 0);
											var dimension_value_number = data.getValue(selectedItem.row, 1);
											//alert( dimension_value_number);
											ws_db_call_ajax_php('row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>', dimension_value_key,dimension_value_number);
										  }
										}
									google.visualization.events.addListener(chart, 'select', selectHandler_<?php echo $counter3; ?>);  
									google.visualization.events.addListener(chart, 'onmouseover', uselessHandler2<?php echo $counter3; ?>);
									google.visualization.events.addListener(chart, 'onmouseout', uselessHandler3<?php echo $counter3; ?>);
									function uselessHandler2<?php echo $counter3; ?>() {
									 document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "pointer";
									  }  
											function uselessHandler3<?php echo $counter3; ?>() {
									document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "default";
									} 
										chart.draw(data, options);  
									} 
									</script><?php
							}elseif($chart_type=='Column Chart'){
								$counter3++; 
								?><div id="ws_db_charts_id_<?php echo $counter3; ?>" class="ws_db_well22"></div><?php
								?><script> function ws_db_chart_<?php echo $counter3; ?>() {
									<?php //detecting first column data type
									foreach ($current_dimensions_values as $dimension_value_key => $dimension_value_number) {
											if (is_numeric($dimension_value_key)) {
												$first_column_data_type = 'number';
											} else {
												$first_column_data_type = 'string';
												break;
											}
										} ?>
									<?php if ($first_column_data_type=='number' and $column_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']=='true'){  //so we can have trendline?>
									//note thate if first column set to number type the chart will generate vAxis atomatically and will not use default column key
										//start
										var data = new google.visualization.DataTable();
										data.addColumn('<?php echo $first_column_data_type; ?>', '<?php echo $th_dimension_name; ?>');
										data.addColumn('number', 'number');
										data.addColumn({type: 'string', role: 'style'});
										//if annotation enabled add annotation column
										<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
											data.addColumn({type:'string', role:'annotation'}); // annotation role col. -- not enabled for bar charts
											data.addColumn({type:'string', role:'annotationText'}); // annotationText col. -- not enabled for bar charts
										<?php } ?> 
										<?php $color_index_counter=0; ?>
										data.addRows([
										<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
										  [
										  <?php echo $dimension_value_key;?>,
										   <?php echo $dimension_value_number;?> ,
										   'color:<?php echo $color_array[$color_index_counter];?>' ,
										  <?php $color_index_counter++; ?>
										  //if annotation enabled add annotation data
										  <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										  // annotation data in chart 
											<?php  $bar_annotations_content = $column_chart_default_settings['all_chart_setting_instance22_annotations_content'];
													if($bar_annotations_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_content=='both'){
														 ?>'<?php echo $dimension_value_key.$column_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_content=='manual'){
														 ?>'<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_content_manual'];?>',<?php
													} ?>
											// annotation data for hover on annotation
											<?php		
													$bar_annotations_hover_content = $column_chart_default_settings['all_chart_setting_instance22_annotations_hover_content'];
													if($bar_annotations_hover_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_hover_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_hover_content=='both'){
														 ?>'<?php echo $dimension_value_key.$column_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_hover_content=='manual'){
														 ?>'<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_hover_content_manual'];?>',<?php
													} ?>
										   <?php } ?> 
										  ],
										<?php } ?>
										]);
									//end
										<?php }else{ //so we can't have trendline ?>
										//////////////////////////////start
											var data = new google.visualization.DataTable();
										data.addColumn('string', '<?php echo $th_dimension_name; ?>');
										data.addColumn('number', 'number');
										data.addColumn({type: 'string', role: 'style'});
										//if annotation enabled add annotation column
										<?php if($column_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
											data.addColumn({type:'string', role:'annotation'}); // annotation role col. -- not enabled for bar charts
											data.addColumn({type:'string', role:'annotationText'}); // annotationText col. -- not enabled for bar charts
										<?php } ?> 
										<?php $color_index_counter=0; ?>
										data.addRows([
										<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
										  [
										  '<?php echo $dimension_value_key;?>',
										   <?php echo $dimension_value_number;?> ,
										   'color:<?php echo $color_array[$color_index_counter];?>' ,
										  <?php $color_index_counter++; ?>
										  //if annotation enabled add annotation data
										  <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										  // annotation data in chart 
											<?php  $bar_annotations_content = $column_chart_default_settings['all_chart_setting_instance22_annotations_content'];
													if($bar_annotations_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_content=='both'){
														 ?>'<?php echo $dimension_value_key.$column_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_content=='manual'){
														 ?>'<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_content_manual'];?>',<?php
													} ?>
											// annotation data for hover on annotation
											<?php		
													$bar_annotations_hover_content = $column_chart_default_settings['all_chart_setting_instance22_annotations_hover_content'];
													if($bar_annotations_hover_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_hover_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_hover_content=='both'){
														 ?>'<?php echo $dimension_value_key.$column_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_hover_content=='manual'){
														 ?>'<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_hover_content_manual'];?>',<?php
													} ?>
										   <?php } ?> 
										  ],
										<?php } ?>
										]);
									//////////////////////////////end
									<?php } ?> 
									var options = {
										'title':'<?php echo $th_dimension_name; ?>',
										//axisTitlesPosition
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_axis_titles_position']) and $column_chart_default_settings['all_chart_setting_instance22_axis_titles_position']!= ''){  ?> axisTitlesPosition:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_axis_titles_position']?>", <?php } ?>
										//dataOpacity
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_data_opacity']) and $column_chart_default_settings['all_chart_setting_instance22_data_opacity']!= ''){  ?> dataOpacity:<?php echo $column_chart_default_settings['all_chart_setting_instance22_data_opacity']?>, <?php } ?>
										//enableInteractivity
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_enable_interactivity']) and $column_chart_default_settings['all_chart_setting_instance22_enable_interactivity']!= ''){  ?> enableInteractivity:<?php echo $column_chart_default_settings['all_chart_setting_instance22_enable_interactivity']?>, <?php } ?>
										 //fontSize 
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_font_size_auto']) and $column_chart_default_settings['all_chart_setting_instance22_font_size_auto']=='false' and $column_chart_default_settings['all_chart_setting_instance22_font_size_px']!= ''){  ?> fontSize:<?php echo $column_chart_default_settings['all_chart_setting_instance22_font_size_px']?>, <?php } ?>
										 //fontName
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_font_name']) and $column_chart_default_settings['all_chart_setting_instance22_font_name']!= ''){  ?> fontName:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_font_name']?>", <?php } ?>
										//forceIFrame
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_force_iframe']) and $column_chart_default_settings['all_chart_setting_instance22_force_iframe']!= ''){  ?> forceIFrame:<?php echo $column_chart_default_settings['all_chart_setting_instance22_force_iframe']?>, <?php } ?>
										 //height
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_height_auto']) and $column_chart_default_settings['all_chart_setting_instance22_height_auto']=='false' and $column_chart_default_settings['all_chart_setting_instance22_height_px']!= ''){  ?> height:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_height_px']?>", <?php } ?>
										 //width
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_width_auto']) and $column_chart_default_settings['all_chart_setting_instance22_width_auto']=='false' and $column_chart_default_settings['all_chart_setting_instance22_width_px']!= ''){  ?> width:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_width_px']?>", <?php } ?>
										 //reverseCategories
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_reverse_categories']) and $column_chart_default_settings['all_chart_setting_instance22_reverse_categories']!= ''){  ?> reverseCategories:<?php echo $column_chart_default_settings['all_chart_setting_instance22_reverse_categories']?>, <?php } ?>
										 //titlePosition
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_title_position']) and $column_chart_default_settings['all_chart_setting_instance22_title_position']!= ''){  ?> titlePosition:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_title_position']?>", <?php } ?>
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']) and $column_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']=='true'){ ?> 
										 titleTextStyle:{
											 //color
											 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_title_text_style_color']) and $column_chart_default_settings['all_chart_setting_instance22_title_text_style_color']!= ''){  ?> color:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_title_text_style_color']?>", <?php } ?>
											 //fontName
											 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']) and $column_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']!= ''){  ?> fontName:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']?>", <?php } ?>
											 //fontSize      +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']) and $column_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']!= ''){  ?> fontSize:<?php echo $column_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']?>, <?php } ?>
											 //bold
											 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']) and $column_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']!= ''){  ?> bold:<?php echo $column_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']?>, <?php } ?>
											 //italic
											 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']) and $column_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']!= ''){  ?> italic:<?php echo $column_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']?>, <?php } ?>
										 },
										 <?php } ?> 
										 animation:{
											 //duration
											 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_animation_duration']) and $column_chart_default_settings['all_chart_setting_instance22_animation_duration']!= ''){  ?> duration:<?php echo $column_chart_default_settings['all_chart_setting_instance22_animation_duration']?>, <?php } ?>
											 //easing
											 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_animation_easing']) and $column_chart_default_settings['all_chart_setting_instance22_animation_easing']!= ''){  ?> easing:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_animation_easing']?>", <?php } ?>
											 //startup
											 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_animation_startup']) and $column_chart_default_settings['all_chart_setting_instance22_animation_startup']!= ''){  ?> startup:<?php echo $column_chart_default_settings['all_chart_setting_instance22_animation_startup']?>, <?php } ?>
										 },
										 //annotations
										 <?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										 annotations:{
											//alwaysOutside  :/Type: boolean/Default: false
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']!= ''){  ?> alwaysOutside:<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']?>, <?php } ?>
											//highContrast   :Type: /boolean/Default: true
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']!= ''){  ?> highContrast:<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']?>, <?php } ?>
											//style:Type  : /string/Default: 'point'  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_style']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_style']!= ''){  ?> style:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_style']?>", <?php } ?>
											// textStyle /object
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_overwrite']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_overwrite']=='true'){ ?>
											textStyle:{ 
												//fontName   :'string',
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']!= ''){  ?> fontName:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']?>", <?php } ?>
												//fontSize  :number,
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']!= ''){  ?> fontSize:<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']?>, <?php } ?>
												//bold :bool,
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']!= ''){  ?> bold:<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']?>, <?php } ?>
												//italic		:bool,
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']!= ''){  ?> italic:<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']?>, <?php } ?>
												//color		:'string',//The color of the text
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']!= ''){  ?> color:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']?>", <?php } ?>
												//auraColor		:'string',//The color of the text outline
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']!= ''){  ?> auraColor:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']?>", <?php } ?>
												//opacity		: 0.8,
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']) and $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']!= ''){  ?> opacity:<?php echo $column_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']?>, <?php } ?>
											},
											<?php } ?> 
										 },
										 <?php } ?> 
										 backgroundColor:{
											//stroke			// string		//The color of the chart border, as an HTML color string
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']) and $column_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']!= ''){  ?> stroke:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']?>", <?php } ?>
											//strokeWidth		//	number		//The border width, in pixels.
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']) and $column_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']!= ''){  ?> strokeWidth:<?php echo $column_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']?>, <?php } ?>
											//fill			// string		//The chart fill color, as an HTML color string
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_background_color_fill']) and $column_chart_default_settings['all_chart_setting_instance22_background_color_fill']!= ''){  ?> fill:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_background_color_fill']?>", <?php } ?>
										},
										chartArea:{
											//width				// number or string
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_area_width_auto']) and $column_chart_default_settings['all_chart_setting_instance22_area_width_auto']=='false' and $column_chart_default_settings['all_chart_setting_instance22_area_width_px']!= ''){  ?> width:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_area_width_px']?>", <?php } ?>
											//height				// number or string	
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_area_height_auto']) and $column_chart_default_settings['all_chart_setting_instance22_area_height_auto']=='false' and $column_chart_default_settings['all_chart_setting_instance22_area_height_px']!= ''){  ?> height:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_area_height_px']?>", <?php } ?>
										},
										legend:{
											//position			// string
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_legend_position']) and $column_chart_default_settings['all_chart_setting_instance22_legend_position']!= ''){  ?> position:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_legend_position']?>", <?php } ?>
											//alignment			// string
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_legend_alignment']) and $column_chart_default_settings['all_chart_setting_instance22_legend_alignment']!= ''){  ?> alignment:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_legend_alignment']?>", <?php } ?>
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']) and $column_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			// string
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']) and $column_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']!= ''){  ?> color:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']?>", <?php } ?>
												//fontName			// string
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']) and $column_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']!= ''){  ?> fontName:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']?>", <?php } ?>
												//fontSize			// number
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']) and $column_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']!= ''){  ?> fontSize:<?php echo $column_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']?>, <?php } ?>
												//bold			// bool
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']) and $column_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']!= ''){  ?> bold:<?php echo $column_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']?>, <?php } ?>
												//italic			// bool
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']) and $column_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']!= ''){  ?> italic:<?php echo $column_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']?>, <?php } ?>
											},
											<?php } ?>
										},
										tooltip:{
											//ignoreBounds			// bool
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']) and $column_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']!= ''){  ?> ignoreBounds:<?php echo $column_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']?>, <?php } ?>
											//showColorCode			// bool
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']) and $column_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']!= ''){  ?> showColorCode:<?php echo $column_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']?>, <?php } ?>
											//
											<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']) and $column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			// string
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']) and $column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']!= ''){  ?> color:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']?>", <?php } ?>
												//fontName			// string
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']) and $column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']!= ''){  ?> fontName:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']?>", <?php } ?>
												//fontSize			// number
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']) and $column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']!= ''){  ?> fontSize:<?php echo $column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']?>, <?php } ?>
												//bold			// bool
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']) and $column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']!= ''){  ?> bold:<?php echo $column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']?>, <?php } ?>
												//italic			// bool
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']) and $column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']!= ''){  ?> italic:<?php echo $column_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic'] ?>,<?php } ?>
											},
											<?php } ?>
										},
										<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']) and $column_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']=='true'){   //so we can have trendline?>
										<?php if ($first_column_data_type=='number'){  //so we can have trendline?>
										trendlines:{
											0:{
												//type			// string                      :linear
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_trendlines_type']) and $column_chart_default_settings['all_chart_setting_instance22_trendlines_type']!= ''){  ?> type:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_trendlines_type']?>", <?php } ?>
												//color			// string
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_trendline_color']) and $column_chart_default_settings['all_chart_setting_instance22_trendline_color']!= ''){  ?> color:"<?php echo $column_chart_default_settings['all_chart_setting_instance22_trendline_color']?>", <?php } ?>
												//lineWidth			// number
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_trendline_line_width']) and $column_chart_default_settings['all_chart_setting_instance22_trendline_line_width']!= ''){  ?> lineWidth:<?php echo $column_chart_default_settings['all_chart_setting_instance22_trendline_line_width']?>, <?php } ?>
												//opacity			// number
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_trendline_opacity']) and $column_chart_default_settings['all_chart_setting_instance22_trendline_opacity']!= ''){  ?> opacity:<?php echo $column_chart_default_settings['all_chart_setting_instance22_trendline_opacity']?>, <?php } ?>
												//showR2			// bool
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']) and $column_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']!= ''){  ?> showR2:<?php echo $column_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']?>, <?php } ?>
												//visibleInLegend			// bool
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']) and $column_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']!= ''){  ?> visibleInLegend:<?php echo $column_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']?>, <?php } ?>
												//degree		// number
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_trendline_degree']) and $column_chart_default_settings['all_chart_setting_instance22_trendline_degree']!= ''){  ?> degree:<?php echo $column_chart_default_settings['all_chart_setting_instance22_trendline_degree']?>, <?php } ?>
												//pointSize		// number
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_trendline_point_size']) and $column_chart_default_settings['all_chart_setting_instance22_trendline_point_size']!= ''){  ?> pointSize:<?php echo $column_chart_default_settings['all_chart_setting_instance22_trendline_point_size']?>, <?php } ?>
												//pointsVisible			// bool
												<?php if(isset($column_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']) and $column_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']!= ''){  ?> pointsVisible:<?php echo $column_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']?>, <?php } ?>
											},
										},
									<?php } ?>	
									<?php } ?>
									   };
									var chart = new google.visualization.ColumnChart(document.getElementById('ws_db_charts_id_<?php echo $counter3; ?>'));
									var handler_<?php echo $counter3; ?> = function(e) {
										var parts = e.targetID.split('#');
										if (parts[0]== 'title') {
											ws_db_call_ajax_php('th_row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>');
										}
									};
									google.visualization.events.addListener(chart, 'click', handler_<?php echo $counter3; ?>);
									function selectHandler_<?php echo $counter3; ?>() {
										  var selectedItem = chart.getSelection()[0];
										  if (selectedItem) {
											var dimension_value_key = data.getValue(selectedItem.row, 0);
											var dimension_value_number = data.getValue(selectedItem.row, 1);
											//alert( dimension_value_number);
											ws_db_call_ajax_php('row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>', dimension_value_key,dimension_value_number);
										  }
										}
									google.visualization.events.addListener(chart, 'select', selectHandler_<?php echo $counter3; ?>);  
									google.visualization.events.addListener(chart, 'onmouseover', uselessHandler2<?php echo $counter3; ?>);
									google.visualization.events.addListener(chart, 'onmouseout', uselessHandler3<?php echo $counter3; ?>);
									function uselessHandler2<?php echo $counter3; ?>() {
									 document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "pointer";
									  }  
											function uselessHandler3<?php echo $counter3; ?>() {
									document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "default";
									} 
										chart.draw(data, options);  
									} 
									</script><?php
							}elseif($chart_type=='Table'){
								$counter3++; 
								?><div id="ws_db_charts_id_<?php echo $counter3; ?>" style="display: table;float: none;margin: auto;" class="ws_db_well22"></div><?php
								?><script> function ws_db_chart_<?php echo $counter3; ?>() {
									var data = new google.visualization.DataTable();
									data.addColumn('string', '<?php echo $th_dimension_name; ?>');
									data.addColumn('number', 'number');
									//data.addColumn({type: 'string', role: 'style'});
									<?php $color_index_counter=0; ?>
									data.addRows([
									<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
									  [
									  '<?php echo $dimension_value_key;?>',
									  <?php echo $dimension_value_number;?>,
									 // 'color:<?php // echo $color_array[$color_index_counter];?> //' ,
										  <?php $color_index_counter++; ?>
									  ],
									<?php } ?>
									]);
									var options = {
										'title':'<?php echo $th_dimension_name; ?>',
										 //height
										 <?php if(isset($table_chart_default_settings['table_chart22_height_auto']) and $table_chart_default_settings['table_chart22_height_auto']=='false' and $table_chart_default_settings['table_chart22_height_px']!= ''){  ?> height:"<?php echo $table_chart_default_settings['table_chart22_height_px']?>", <?php } ?>
										 //width
										 <?php if(isset($table_chart_default_settings['table_chart22_width_auto']) and $table_chart_default_settings['table_chart22_width_auto']=='false' and $table_chart_default_settings['table_chart22_width_px']!= ''){  ?> width:"<?php echo $table_chart_default_settings['table_chart22_width_px']?>", <?php } ?>
										 //page
										 <?php if(isset($table_chart_default_settings['table_chart22_page']) and $table_chart_default_settings['table_chart22_page']=='true'){  ?> page:"enable", <?php } ?>
										 //rtlTable
										 <?php if(isset($table_chart_default_settings['table_chart22_rtl_table']) and $table_chart_default_settings['table_chart22_rtl_table']!= ''){  ?> rtlTable:<?php echo $table_chart_default_settings['table_chart22_rtl_table']?>, <?php } ?>
										 //showRowNumber
										 <?php if(isset($table_chart_default_settings['table_chart22_show_row_number']) and $table_chart_default_settings['table_chart22_show_row_number']!= ''){  ?> showRowNumber:<?php echo $table_chart_default_settings['table_chart22_show_row_number']?>, <?php } ?>
										 //sort
										 <?php if(isset($table_chart_default_settings['table_chart22_sort']) and $table_chart_default_settings['table_chart22_sort']=='true'){  ?> sort:"enable", <?php } ?>
										//sortAscending
										 <?php if(isset($table_chart_default_settings['table_chart22_sort_ascending']) and $table_chart_default_settings['table_chart22_sort_ascending']!= ''){  ?> sortAscending:<?php echo $table_chart_default_settings['table_chart22_sort_ascending']?>, <?php } ?>
										 //scrollLeftStartPosition
										 <?php if(isset($table_chart_default_settings['table_chart22_Start_Position']) and $table_chart_default_settings['table_chart22_Start_Position']!= ''){  ?> scrollLeftStartPosition:<?php echo $table_chart_default_settings['table_chart22_Start_Position']?>, <?php } ?>
										 //sortColumn
										 <?php if(isset($table_chart_default_settings['table_chart22_sort_column']) and $table_chart_default_settings['table_chart22_sort_column']!= ''){  ?> sortColumn:<?php echo $table_chart_default_settings['table_chart22_sort_column']?>, <?php } ?>
										 //startPage
										 <?php if(isset($table_chart_default_settings['table_chart22_start_page']) and $table_chart_default_settings['table_chart22_start_page']!= ''){  ?> startPage:<?php echo $table_chart_default_settings['table_chart22_start_page']?>, <?php } ?>
										 //pageSize
										 <?php if(isset($table_chart_default_settings['table_chart22_page_size']) and $table_chart_default_settings['table_chart22_page_size']!= ''){  ?> pageSize:<?php echo $table_chart_default_settings['table_chart22_page_size']?>, <?php } ?>
									   };
									var chart = new google.visualization.Table(document.getElementById('ws_db_charts_id_<?php echo $counter3; ?>'));
									var handler_<?php echo $counter3; ?> = function(e) {
										var parts = e.targetID.split('#');
										if (parts[0]== 'title') {
											ws_db_call_ajax_php('th_row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>');
										}
									};
									google.visualization.events.addListener(chart, 'click', handler_<?php echo $counter3; ?>);
									function selectHandler_<?php echo $counter3; ?>() {
										  var selectedItem = chart.getSelection()[0];
										  if (selectedItem) {
											var dimension_value_key = data.getValue(selectedItem.row, 0);
											var dimension_value_number = data.getValue(selectedItem.row, 1);
											//alert( dimension_value_number);
											ws_db_call_ajax_php('row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>', dimension_value_key,dimension_value_number);
										  }
										}
									google.visualization.events.addListener(chart, 'select', selectHandler_<?php echo $counter3; ?>);  
									google.visualization.events.addListener(chart, 'onmouseover', uselessHandler2<?php echo $counter3; ?>);
									google.visualization.events.addListener(chart, 'onmouseout', uselessHandler3<?php echo $counter3; ?>);
									function uselessHandler2<?php echo $counter3; ?>() {
									 document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "pointer";
									  }  
											function uselessHandler3<?php echo $counter3; ?>() {
									document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "default";
									} 
										chart.draw(data, options);  
									} 
									</script><?php
							}elseif($chart_type=='Area Chart'){
								$counter3++; 
								?><div id="ws_db_charts_id_<?php echo $counter3; ?>" class="ws_db_well22"></div><?php
								?><script> function ws_db_chart_<?php echo $counter3; ?>() {
										var data = new google.visualization.DataTable();
										data.addColumn('string', '<?php echo $th_dimension_name; ?>');
										data.addColumn('number', 'number');
										data.addColumn({type: 'string', role: 'style'});
										//if annotation enabled add annotation column
										<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
											data.addColumn({type:'string', role:'annotation'}); // annotation role col. -- not enabled for bar charts
											data.addColumn({type:'string', role:'annotationText'}); // annotationText col. -- not enabled for bar charts
										<?php } ?> 
										<?php $color_index_counter=0; ?>
										data.addRows([
										<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
										  [
										  '<?php echo $dimension_value_key;?>',
										   <?php echo $dimension_value_number;?> ,
										   'color:<?php echo $color_array[$color_index_counter];?>' ,
										  <?php $color_index_counter++; ?>
										  //if annotation enabled add annotation data
										  <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										  // annotation data in chart 
											<?php  $bar_annotations_content = $area_chart_default_settings['all_chart_setting_instance22_annotations_content'];
													if($bar_annotations_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_content=='both'){
														 ?>'<?php echo $dimension_value_key.$area_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_content=='manual'){
														 ?>'<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_content_manual'];?>',<?php
													} ?>
											// annotation data for hover on annotation
											<?php		
													$bar_annotations_hover_content = $area_chart_default_settings['all_chart_setting_instance22_annotations_hover_content'];
													if($bar_annotations_hover_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_hover_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_hover_content=='both'){
														 ?>'<?php echo $dimension_value_key.$area_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_hover_content=='manual'){
														 ?>'<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_hover_content_manual'];?>',<?php
													} ?>
										   <?php } ?> 
										  ],
										<?php } ?>
										]);
									//////////////////////////////end
									var options = {
										'title':'<?php echo $th_dimension_name; ?>',
										//axisTitlesPosition
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_axis_titles_position']) and $area_chart_default_settings['all_chart_setting_instance22_axis_titles_position']!= ''){  ?> axisTitlesPosition:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_axis_titles_position']?>", <?php } ?>
										//dataOpacity
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_data_opacity']) and $area_chart_default_settings['all_chart_setting_instance22_data_opacity']!= ''){  ?> dataOpacity:<?php echo $area_chart_default_settings['all_chart_setting_instance22_data_opacity']?>, <?php } ?>
										//enableInteractivity
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_enable_interactivity']) and $area_chart_default_settings['all_chart_setting_instance22_enable_interactivity']!= ''){  ?> enableInteractivity:<?php echo $area_chart_default_settings['all_chart_setting_instance22_enable_interactivity']?>, <?php } ?>
										 //fontSize 
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_font_size_auto']) and $area_chart_default_settings['all_chart_setting_instance22_font_size_auto']=='false' and $area_chart_default_settings['all_chart_setting_instance22_font_size_px']!= ''){  ?> fontSize:<?php echo $area_chart_default_settings['all_chart_setting_instance22_font_size_px']?>, <?php } ?>
										 //fontName
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_font_name']) and $area_chart_default_settings['all_chart_setting_instance22_font_name']!= ''){  ?> fontName:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_font_name']?>", <?php } ?>
										//forceIFrame
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_force_iframe']) and $area_chart_default_settings['all_chart_setting_instance22_force_iframe']!= ''){  ?> forceIFrame:<?php echo $area_chart_default_settings['all_chart_setting_instance22_force_iframe']?>, <?php } ?>
										 //height
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_height_auto']) and $area_chart_default_settings['all_chart_setting_instance22_height_auto']=='false' and $area_chart_default_settings['all_chart_setting_instance22_height_px']!= ''){  ?> height:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_height_px']?>", <?php } ?>
										 //width
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_width_auto']) and $area_chart_default_settings['all_chart_setting_instance22_width_auto']=='false' and $area_chart_default_settings['all_chart_setting_instance22_width_px']!= ''){  ?> width:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_width_px']?>", <?php } ?>
										 //reverseCategories
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_reverse_categories']) and $area_chart_default_settings['all_chart_setting_instance22_reverse_categories']!= ''){  ?> reverseCategories:<?php echo $area_chart_default_settings['all_chart_setting_instance22_reverse_categories']?>, <?php } ?>
										 //titlePosition
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_title_position']) and $area_chart_default_settings['all_chart_setting_instance22_title_position']!= ''){  ?> titlePosition:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_title_position']?>", <?php } ?>
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']) and $area_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']=='true'){ ?> 
										 titleTextStyle:{
											 //color
											 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_title_text_style_color']) and $area_chart_default_settings['all_chart_setting_instance22_title_text_style_color']!= ''){  ?> color:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_title_text_style_color']?>", <?php } ?>
											 //fontName
											 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']) and $area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']!= ''){  ?> fontName:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']?>", <?php } ?>
											 //fontSize      +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']) and $area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']!= ''){  ?> fontSize:<?php echo $area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']?>, <?php } ?>
											 //bold
											 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']) and $area_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']!= ''){  ?> bold:<?php echo $area_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']?>, <?php } ?>
											 //italic
											 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']) and $area_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']!= ''){  ?> italic:<?php echo $area_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']?>, <?php } ?>
										 },
										 <?php } ?> 
										 animation:{
											 //duration
											 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_animation_duration']) and $area_chart_default_settings['all_chart_setting_instance22_animation_duration']!= ''){  ?> duration:<?php echo $area_chart_default_settings['all_chart_setting_instance22_animation_duration']?>, <?php } ?>
											 //easing
											 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_animation_easing']) and $area_chart_default_settings['all_chart_setting_instance22_animation_easing']!= ''){  ?> easing:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_animation_easing']?>", <?php } ?>
											 //startup
											 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_animation_startup']) and $area_chart_default_settings['all_chart_setting_instance22_animation_startup']!= ''){  ?> startup:<?php echo $area_chart_default_settings['all_chart_setting_instance22_animation_startup']?>, <?php } ?>
										 },
										 //annotations
										 <?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										 annotations:{
											//alwaysOutside  :/Type: boolean/Default: false
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']!= ''){  ?> alwaysOutside:<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']?>, <?php } ?>
											//highContrast   :Type: /boolean/Default: true
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']!= ''){  ?> highContrast:<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']?>, <?php } ?>
											//style:Type  : /string/Default: 'point'  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_style']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_style']!= ''){  ?> style:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_style']?>", <?php } ?>
											// textStyle /object
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_overwrite']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_overwrite']=='true'){ ?>
											textStyle:{ 
												//fontName   :'string',
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']!= ''){  ?> fontName:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']?>", <?php } ?>
												//fontSize  :number,
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']!= ''){  ?> fontSize:<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']?>, <?php } ?>
												//bold :bool,
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']!= ''){  ?> bold:<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']?>, <?php } ?>
												//italic		:bool,
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']!= ''){  ?> italic:<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']?>, <?php } ?>
												//color		:'string',//The color of the text
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']!= ''){  ?> color:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']?>", <?php } ?>
												//auraColor		:'string',//The color of the text outline
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']!= ''){  ?> auraColor:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']?>", <?php } ?>
												//opacity		: 0.8,
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']) and $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']!= ''){  ?> opacity:<?php echo $area_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']?>, <?php } ?>
											},
											<?php } ?> 
										 },
										 <?php } ?> 
										 backgroundColor:{
											//stroke			// string		//The color of the chart border, as an HTML color string
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']) and $area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']!= ''){  ?> stroke:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']?>", <?php } ?>
											//strokeWidth		//	number		//The border width, in pixels.
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']) and $area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']!= ''){  ?> strokeWidth:<?php echo $area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']?>, <?php } ?>
											//fill			// string		//The chart fill color, as an HTML color string
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_background_color_fill']) and $area_chart_default_settings['all_chart_setting_instance22_background_color_fill']!= ''){  ?> fill:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_background_color_fill']?>", <?php } ?>
										},
										chartArea:{
											//width				// number or string
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_area_width_auto']) and $area_chart_default_settings['all_chart_setting_instance22_area_width_auto']=='false' and $area_chart_default_settings['all_chart_setting_instance22_area_width_px']!= ''){  ?> width:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_area_width_px']?>", <?php } ?>
											//height				// number or string	
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_area_height_auto']) and $area_chart_default_settings['all_chart_setting_instance22_area_height_auto']=='false' and $area_chart_default_settings['all_chart_setting_instance22_area_height_px']!= ''){  ?> height:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_area_height_px']?>", <?php } ?>
										},
										legend:{
											//position			// string
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_legend_position']) and $area_chart_default_settings['all_chart_setting_instance22_legend_position']!= ''){  ?> position:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_legend_position']?>", <?php } ?>
											//alignment			// string
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_legend_alignment']) and $area_chart_default_settings['all_chart_setting_instance22_legend_alignment']!= ''){  ?> alignment:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_legend_alignment']?>", <?php } ?>
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']) and $area_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			// string
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']) and $area_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']!= ''){  ?> color:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']?>", <?php } ?>
												//fontName			// string
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']) and $area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']!= ''){  ?> fontName:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']?>", <?php } ?>
												//fontSize			// number
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']) and $area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']!= ''){  ?> fontSize:<?php echo $area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']?>, <?php } ?>
												//bold			// bool
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']) and $area_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']!= ''){  ?> bold:<?php echo $area_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']?>, <?php } ?>
												//italic			// bool
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']) and $area_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']!= ''){  ?> italic:<?php echo $area_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']?>, <?php } ?>
											},
											<?php } ?>
										},
										tooltip:{
											//ignoreBounds			// bool
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']) and $area_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']!= ''){  ?> ignoreBounds:<?php echo $area_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']?>, <?php } ?>
											//showColorCode			// bool
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']) and $area_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']!= ''){  ?> showColorCode:<?php echo $area_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']?>, <?php } ?>
											//
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']) and $area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			// string
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']) and $area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']!= ''){  ?> color:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']?>", <?php } ?>
												//fontName			// string
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']) and $area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']!= ''){  ?> fontName:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']?>", <?php } ?>
												//fontSize			// number
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']) and $area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']!= ''){  ?> fontSize:<?php echo $area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']?>, <?php } ?>
												//bold			// bool
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']) and $area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']!= ''){  ?> bold:<?php echo $area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']?>, <?php } ?>
												//italic			// bool
												<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']) and $area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']!= ''){  ?> italic:<?php echo $area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic'] ?>,<?php } ?>
											},
											<?php } ?>
										},
									//curveType
									<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_curve_type']) and $area_chart_default_settings['all_chart_setting_instance22_curve_type']!= ''){  ?> curveType:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_curve_type']?>", <?php } ?>
									//lineWidth
									<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_line_width']) and $area_chart_default_settings['all_chart_setting_instance22_line_width']!= ''){  ?> lineWidth:<?php echo $area_chart_default_settings['all_chart_setting_instance22_line_width']?>, <?php } ?>
									//orientation
									<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_orientation']) and $area_chart_default_settings['all_chart_setting_instance22_orientation']!= ''){  ?> orientation:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_orientation']?>", <?php } ?>
									//pointShape
									<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_point_shape']) and $area_chart_default_settings['all_chart_setting_instance22_point_shape']!= ''){  ?> pointShape:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_point_shape']?>", <?php } ?>
									//pointSize
									<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_point_size']) and $area_chart_default_settings['all_chart_setting_instance22_point_size']!= ''){  ?> pointSize:<?php echo $area_chart_default_settings['all_chart_setting_instance22_point_size']?>, <?php } ?>
									//pointsVisible
									<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_points_visible']) and $area_chart_default_settings['all_chart_setting_instance22_points_visible']!= ''){  ?> pointsVisible:<?php echo $area_chart_default_settings['all_chart_setting_instance22_points_visible']?>, <?php } ?>  
									crosshair:{
										//trigger
										<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_crosshair_trigger']) and $area_chart_default_settings['all_chart_setting_instance22_crosshair_trigger']!= ''){  ?> trigger:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_crosshair_trigger']?>", <?php } ?>
										focused:{
											//color
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_crosshair_color_focused']) and $area_chart_default_settings['all_chart_setting_instance22_crosshair_color_focused']!= ''){  ?> color:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_crosshair_color_focused']?>", <?php } ?>
											//opacity
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_focused']) and $area_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_focused']!= ''){  ?> opacity:<?php echo $area_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_focused']?>, <?php } ?>
											//orientation
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_focused']) and $area_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_focused']!= ''){  ?> orientation:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_focused']?>", <?php } ?>
										},
										selected:{
											//color
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_crosshair_color_selected']) and $area_chart_default_settings['all_chart_setting_instance22_crosshair_color_selected']!= ''){  ?> color:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_crosshair_color_selected']?>", <?php } ?>
											//opacity
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_selected']) and $area_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_selected']!= ''){  ?> opacity:<?php echo $area_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_selected']?>, <?php } ?>
											//orientation
											<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_selected']) and $area_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_selected']!= ''){  ?> orientation:"<?php echo $area_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_selected']?>", <?php } ?>
										},
									},
									//areaOpacity
									<?php if(isset($area_chart_default_settings['all_chart_setting_instance22_area_opacity']) and $area_chart_default_settings['all_chart_setting_instance22_area_opacity']!= ''){  ?> areaOpacity:<?php echo $area_chart_default_settings['all_chart_setting_instance22_area_opacity']?>, <?php } ?>
									  };
									var chart = new google.visualization.AreaChart(document.getElementById('ws_db_charts_id_<?php echo $counter3; ?>'));
									var handler_<?php echo $counter3; ?> = function(e) {
										var parts = e.targetID.split('#');
										if (parts[0]== 'title') {
											ws_db_call_ajax_php('th_row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>');
										}
									};
									google.visualization.events.addListener(chart, 'click', handler_<?php echo $counter3; ?>);
									function selectHandler_<?php echo $counter3; ?>() {
										  var selectedItem = chart.getSelection()[0];
										  if (selectedItem) {
											var dimension_value_key = data.getValue(selectedItem.row, 0);
											var dimension_value_number = data.getValue(selectedItem.row, 1);
											//alert( dimension_value_number);
											ws_db_call_ajax_php('row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>', dimension_value_key,dimension_value_number);
										  }
										}
									google.visualization.events.addListener(chart, 'select', selectHandler_<?php echo $counter3; ?>);  
									google.visualization.events.addListener(chart, 'onmouseover', uselessHandler2<?php echo $counter3; ?>);
									google.visualization.events.addListener(chart, 'onmouseout', uselessHandler3<?php echo $counter3; ?>);
									function uselessHandler2<?php echo $counter3; ?>() {
									 document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "pointer";
									  }  
											function uselessHandler3<?php echo $counter3; ?>() {
									document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "default";
									} 
										chart.draw(data, options);  
									} 
									</script><?php
							}elseif($chart_type=='Line Chart'){
								$counter3++; 
								?><div id="ws_db_charts_id_<?php echo $counter3; ?>" class="ws_db_well22"></div><?php
								?><script> function ws_db_chart_<?php echo $counter3; ?>() {
									<?php //detecting first column data type
									foreach ($current_dimensions_values as $dimension_value_key => $dimension_value_number) {
											if (is_numeric($dimension_value_key)) {
												$first_column_data_type = 'number';
											} else {
												$first_column_data_type = 'string';
												break;
											}
										} ?>
									<?php if ($first_column_data_type=='number' and $line_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']=='true'){  //so we can have trendline?>
									//note thate if first column set to number type the chart will generate vAxis atomatically and will not use default column key
										//////////////////////////////start
										var data = new google.visualization.DataTable();
										data.addColumn('<?php echo $first_column_data_type; ?>', '<?php echo $th_dimension_name; ?>');
										data.addColumn('number', 'number');
										data.addColumn({type: 'string', role: 'style'});
										//if annotation enabled add annotation column
										<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and  $line_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
											data.addColumn({type:'string', role:'annotation'}); // annotation role col. -- not enabled for bar charts
											data.addColumn({type:'string', role:'annotationText'}); // annotationText col. -- not enabled for bar charts
										<?php } ?> 
										<?php $color_index_counter=0; ?>
										data.addRows([
										<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
										  [
										  <?php echo $dimension_value_key;?>,
										   <?php echo $dimension_value_number;?> ,
										   'color:<?php echo $color_array[$color_index_counter];?>' ,
										  <?php $color_index_counter++; ?>
										  //if annotation enabled add annotation data
										  <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										  // annotation data in chart 
											<?php  $bar_annotations_content = $line_chart_default_settings['all_chart_setting_instance22_annotations_content'];
													if($bar_annotations_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_content=='both'){
														 ?>'<?php echo $dimension_value_key.$line_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_content=='manual'){
														 ?>'<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_content_manual'];?>',<?php
													} ?>
											// annotation data for hover on annotation
											<?php		
													$bar_annotations_hover_content = $line_chart_default_settings['all_chart_setting_instance22_annotations_hover_content'];
													if($bar_annotations_hover_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_hover_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_hover_content=='both'){
														 ?>'<?php echo $dimension_value_key.$line_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_hover_content=='manual'){
														 ?>'<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_hover_content_manual'];?>',<?php
													} ?>
										   <?php } ?> 
										  ],
										<?php } ?>
										]);
									//////////////////////////////end
										<?php }else{ //so we can't have trendline ?>
										//////////////////////////////start
										var data = new google.visualization.DataTable();
										data.addColumn('string', '<?php echo $th_dimension_name; ?>');
										data.addColumn('number', 'number');
										data.addColumn({type: 'string', role: 'style'});
										//if annotation enabled add annotation column
										<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
											data.addColumn({type:'string', role:'annotation'}); // annotation role col. -- not enabled for bar charts
											data.addColumn({type:'string', role:'annotationText'}); // annotationText col. -- not enabled for bar charts
										<?php } ?> 
										<?php $color_index_counter=0; ?>
										data.addRows([
										<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
										  [
										  '<?php echo $dimension_value_key;?>',
										   <?php echo $dimension_value_number;?> ,
										   'color:<?php echo $color_array[$color_index_counter];?>' ,
										  <?php $color_index_counter++; ?>
										  //if annotation enabled add annotation data
										  <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										  // annotation data in chart 
											<?php  $bar_annotations_content = $line_chart_default_settings['all_chart_setting_instance22_annotations_content'];
													if($bar_annotations_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_content=='both'){
														 ?>'<?php echo $dimension_value_key.$line_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_content=='manual'){
														 ?>'<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_content_manual'];?>',<?php
													} ?>
											// annotation data for hover on annotation
											<?php		
													$bar_annotations_hover_content = $line_chart_default_settings['all_chart_setting_instance22_annotations_hover_content'];
													if($bar_annotations_hover_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_hover_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_hover_content=='both'){
														 ?>'<?php echo $dimension_value_key.$line_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_hover_content=='manual'){
														 ?>'<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_hover_content_manual'];?>',<?php
													} ?>
										   <?php } ?> 
										  ],
										<?php } ?>
										]);
									//////////////////////////////end
									<?php } ?> 
									var options = {
										'title':'<?php echo $th_dimension_name; ?>',
										//axisTitlesPosition
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_axis_titles_position']) and $line_chart_default_settings['all_chart_setting_instance22_axis_titles_position']!= ''){  ?> axisTitlesPosition:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_axis_titles_position']?>", <?php } ?>
										//dataOpacity
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_data_opacity']) and $line_chart_default_settings['all_chart_setting_instance22_data_opacity']!= ''){  ?> dataOpacity:<?php echo $line_chart_default_settings['all_chart_setting_instance22_data_opacity']?>, <?php } ?>
										//enableInteractivity
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_enable_interactivity']) and $line_chart_default_settings['all_chart_setting_instance22_enable_interactivity']!= ''){  ?> enableInteractivity:<?php echo $line_chart_default_settings['all_chart_setting_instance22_enable_interactivity']?>, <?php } ?>
										 //fontSize 
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_font_size_auto']) and $line_chart_default_settings['all_chart_setting_instance22_font_size_auto']=='false' and $line_chart_default_settings['all_chart_setting_instance22_font_size_px']!= ''){  ?> fontSize:<?php echo $line_chart_default_settings['all_chart_setting_instance22_font_size_px']?>, <?php } ?>
										 //fontName
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_font_name']) and $line_chart_default_settings['all_chart_setting_instance22_font_name']!= ''){  ?> fontName:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_font_name']?>", <?php } ?>
										//forceIFrame
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_force_iframe']) and $line_chart_default_settings['all_chart_setting_instance22_force_iframe']!= ''){  ?> forceIFrame:<?php echo $line_chart_default_settings['all_chart_setting_instance22_force_iframe']?>, <?php } ?>
										 //height
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_height_auto']) and $line_chart_default_settings['all_chart_setting_instance22_height_auto']=='false' and $line_chart_default_settings['all_chart_setting_instance22_height_px']!= ''){  ?> height:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_height_px']?>", <?php } ?>
										 //width
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_width_auto']) and $line_chart_default_settings['all_chart_setting_instance22_width_auto']=='false' and $line_chart_default_settings['all_chart_setting_instance22_width_px']!= ''){  ?> width:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_width_px']?>", <?php } ?>
										 //reverseCategories
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_reverse_categories']) and $line_chart_default_settings['all_chart_setting_instance22_reverse_categories']!= ''){  ?> reverseCategories:<?php echo $line_chart_default_settings['all_chart_setting_instance22_reverse_categories']?>, <?php } ?>
										 //titlePosition
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_title_position']) and $line_chart_default_settings['all_chart_setting_instance22_title_position']!= ''){  ?> titlePosition:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_title_position']?>", <?php } ?>
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']) and $line_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']=='true'){ ?> 
										 titleTextStyle:{
											 //color
											 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_title_text_style_color']) and $line_chart_default_settings['all_chart_setting_instance22_title_text_style_color']!= ''){  ?> color:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_title_text_style_color']?>", <?php } ?>
											 //fontName
											 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']) and $line_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']!= ''){  ?> fontName:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']?>", <?php } ?>
											 //fontSize      +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']) and $line_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']!= ''){  ?> fontSize:<?php echo $line_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']?>, <?php } ?>
											 //bold
											 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']) and $line_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']!= ''){  ?> bold:<?php echo $line_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']?>, <?php } ?>
											 //italic
											 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']) and $line_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']!= ''){  ?> italic:<?php echo $line_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']?>, <?php } ?>
										 },
										 <?php } ?> 
										 animation:{
											 //duration
											 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_animation_duration']) and $line_chart_default_settings['all_chart_setting_instance22_animation_duration']!= ''){  ?> duration:<?php echo $line_chart_default_settings['all_chart_setting_instance22_animation_duration']?>, <?php } ?>
											 //easing
											 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_animation_easing']) and $line_chart_default_settings['all_chart_setting_instance22_animation_easing']!= ''){  ?> easing:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_animation_easing']?>", <?php } ?>
											 //startup
											 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_animation_startup']) and $line_chart_default_settings['all_chart_setting_instance22_animation_startup']!= ''){  ?> startup:<?php echo $line_chart_default_settings['all_chart_setting_instance22_animation_startup']?>, <?php } ?>
										 },
										 //annotations
										 <?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										 annotations:{
											//alwaysOutside  :/Type: boolean/Default: false
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']!= ''){  ?> alwaysOutside:<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']?>, <?php } ?>
											//highContrast   :Type: /boolean/Default: true
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']!= ''){  ?> highContrast:<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']?>, <?php } ?>
											//style:Type  : /string/Default: 'point'  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_style']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_style']!= ''){  ?> style:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_style']?>", <?php } ?>
											// textStyle /object
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_overwrite']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_overwrite']=='true'){ ?>
											textStyle:{ 
												//fontName   :'string',
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']!= ''){  ?> fontName:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']?>", <?php } ?>
												//fontSize  :number,
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']!= ''){  ?> fontSize:<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']?>, <?php } ?>
												//bold :bool,
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']!= ''){  ?> bold:<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']?>, <?php } ?>
												//italic		:bool,
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']!= ''){  ?> italic:<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']?>, <?php } ?>
												//color		:'string',//The color of the text
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']!= ''){  ?> color:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']?>", <?php } ?>
												//auraColor		:'string',//The color of the text outline
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']!= ''){  ?> auraColor:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']?>", <?php } ?>
												//opacity		: 0.8,
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']) and $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']!= ''){  ?> opacity:<?php echo $line_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']?>, <?php } ?>
											},
											<?php } ?> 
										 },
										 <?php } ?> 
										 backgroundColor:{
											//stroke			// string		//The color of the chart border, as an HTML color string
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']) and $line_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']!= ''){  ?> stroke:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']?>", <?php } ?>
											//strokeWidth		//	number		//The border width, in pixels.
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']) and $line_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']!= ''){  ?> strokeWidth:<?php echo $line_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']?>, <?php } ?>
											//fill			// string		//The chart fill color, as an HTML color string
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_background_color_fill']) and $line_chart_default_settings['all_chart_setting_instance22_background_color_fill']!= ''){  ?> fill:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_background_color_fill']?>", <?php } ?>
										},
										chartArea:{
											//width				// number or string
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_area_width_auto']) and $line_chart_default_settings['all_chart_setting_instance22_area_width_auto']=='false' and $line_chart_default_settings['all_chart_setting_instance22_area_width_px']!= ''){  ?> width:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_area_width_px']?>", <?php } ?>
											//height				// number or string	
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_area_height_auto']) and $line_chart_default_settings['all_chart_setting_instance22_area_height_auto']=='false' and $line_chart_default_settings['all_chart_setting_instance22_area_height_px']!= ''){  ?> height:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_area_height_px']?>", <?php } ?>
										},
										legend:{
											//position			// string
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_legend_position']) and $line_chart_default_settings['all_chart_setting_instance22_legend_position']!= ''){  ?> position:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_legend_position']?>", <?php } ?>
											//alignment			// string
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_legend_alignment']) and $line_chart_default_settings['all_chart_setting_instance22_legend_alignment']!= ''){  ?> alignment:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_legend_alignment']?>", <?php } ?>
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']) and $line_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			// string
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']) and $line_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']!= ''){  ?> color:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']?>", <?php } ?>
												//fontName			// string
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']) and $line_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']!= ''){  ?> fontName:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']?>", <?php } ?>
												//fontSize			// number
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']) and $line_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']!= ''){  ?> fontSize:<?php echo $line_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']?>, <?php } ?>
												//bold			// bool
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']) and $line_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']!= ''){  ?> bold:<?php echo $line_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']?>, <?php } ?>
												//italic			// bool
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']) and $line_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']!= ''){  ?> italic:<?php echo $line_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']?>, <?php } ?>
											},
											<?php } ?>
										},
										tooltip:{
											//ignoreBounds			// bool
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']) and $line_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']!= ''){  ?> ignoreBounds:<?php echo $line_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']?>, <?php } ?>
											//showColorCode			// bool
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']) and $line_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']!= ''){  ?> showColorCode:<?php echo $line_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']?>, <?php } ?>
											//
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']) and $line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			// string
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']) and $line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']!= ''){  ?> color:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']?>", <?php } ?>
												//fontName			// string
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']) and $line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']!= ''){  ?> fontName:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']?>", <?php } ?>
												//fontSize			// number
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']) and $line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']!= ''){  ?> fontSize:<?php echo $line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']?>, <?php } ?>
												//bold			// bool
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']) and $line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']!= ''){  ?> bold:<?php echo $line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']?>, <?php } ?>
												//italic			// bool
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']) and $line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']!= ''){  ?> italic:<?php echo $line_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic'] ?>,<?php } ?>
											},
											<?php } ?>
										},
										<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']) and $line_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']=='true'){   //so we can have trendline?>
										<?php if ($first_column_data_type=='number'){  //so we can have trendline?>
										trendlines:{
											0:{
												//type			// string                      :linear
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_trendlines_type']) and $line_chart_default_settings['all_chart_setting_instance22_trendlines_type']!= ''){  ?> type:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_trendlines_type']?>", <?php } ?>
												//color			// string
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_trendline_color']) and $line_chart_default_settings['all_chart_setting_instance22_trendline_color']!= ''){  ?> color:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_trendline_color']?>", <?php } ?>
												//lineWidth			// number
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_trendline_line_width']) and $line_chart_default_settings['all_chart_setting_instance22_trendline_line_width']!= ''){  ?> lineWidth:<?php echo $line_chart_default_settings['all_chart_setting_instance22_trendline_line_width']?>, <?php } ?>
												//opacity			// number
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_trendline_opacity']) and $line_chart_default_settings['all_chart_setting_instance22_trendline_opacity']!= ''){  ?> opacity:<?php echo $line_chart_default_settings['all_chart_setting_instance22_trendline_opacity']?>, <?php } ?>
												//showR2			// bool
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']) and $line_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']!= ''){  ?> showR2:<?php echo $line_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']?>, <?php } ?>
												//visibleInLegend			// bool
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']) and $line_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']!= ''){  ?> visibleInLegend:<?php echo $line_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']?>, <?php } ?>
												//degree		// number
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_trendline_degree']) and $line_chart_default_settings['all_chart_setting_instance22_trendline_degree']!= ''){  ?> degree:<?php echo $line_chart_default_settings['all_chart_setting_instance22_trendline_degree']?>, <?php } ?>
												//pointSize		// number
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_trendline_point_size']) and $line_chart_default_settings['all_chart_setting_instance22_trendline_point_size']!= ''){  ?> pointSize:<?php echo $line_chart_default_settings['all_chart_setting_instance22_trendline_point_size']?>, <?php } ?>
												//pointsVisible			// bool
												<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']) and $line_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']!= ''){  ?> pointsVisible:<?php echo $line_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']?>, <?php } ?>
											},
										},
									<?php } ?>	
									<?php } ?>
									//curveType
									<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_curve_type']) and $line_chart_default_settings['all_chart_setting_instance22_curve_type']!= ''){  ?> curveType:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_curve_type']?>", <?php } ?>
									//lineWidth
									<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_line_width']) and $line_chart_default_settings['all_chart_setting_instance22_line_width']!= ''){  ?> lineWidth:<?php echo $line_chart_default_settings['all_chart_setting_instance22_line_width']?>, <?php } ?>
									//orientation
									<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_orientation']) and $line_chart_default_settings['all_chart_setting_instance22_orientation']!= ''){  ?> orientation:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_orientation']?>", <?php } ?>
									//pointShape
									<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_point_shape']) and $line_chart_default_settings['all_chart_setting_instance22_point_shape']!= ''){  ?> pointShape:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_point_shape']?>", <?php } ?>
									//pointSize
									<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_point_size']) and $line_chart_default_settings['all_chart_setting_instance22_point_size']!= ''){  ?> pointSize:<?php echo $line_chart_default_settings['all_chart_setting_instance22_point_size']?>, <?php } ?>
									//pointsVisible
									<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_points_visible']) and $line_chart_default_settings['all_chart_setting_instance22_points_visible']!= ''){  ?> pointsVisible:<?php echo $line_chart_default_settings['all_chart_setting_instance22_points_visible']?>, <?php } ?>  
									crosshair:{
										//trigger
										<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_crosshair_trigger']) and $line_chart_default_settings['all_chart_setting_instance22_crosshair_trigger']!= ''){  ?> trigger:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_crosshair_trigger']?>", <?php } ?>
										focused:{
											//color
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_crosshair_color_focused']) and $line_chart_default_settings['all_chart_setting_instance22_crosshair_color_focused']!= ''){  ?> color:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_crosshair_color_focused']?>", <?php } ?>
											//opacity
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_focused']) and $line_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_focused']!= ''){  ?> opacity:<?php echo $line_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_focused']?>, <?php } ?>
											//orientation
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_focused']) and $line_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_focused']!= ''){  ?> orientation:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_focused']?>", <?php } ?>
										},
										selected:{
											//color
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_crosshair_color_selected']) and $line_chart_default_settings['all_chart_setting_instance22_crosshair_color_selected']!= ''){  ?> color:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_crosshair_color_selected']?>", <?php } ?>
											//opacity
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_selected']) and $line_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_selected']!= ''){  ?> opacity:<?php echo $line_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_selected']?>, <?php } ?>
											//orientation
											<?php if(isset($line_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_selected']) and $line_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_selected']!= ''){  ?> orientation:"<?php echo $line_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_selected']?>", <?php } ?>
										}
									}
									  };
									var chart = new google.visualization.LineChart(document.getElementById('ws_db_charts_id_<?php echo $counter3; ?>'));
									var handler_<?php echo $counter3; ?> = function(e) {
										var parts = e.targetID.split('#');
										if (parts[0]== 'title') {
											ws_db_call_ajax_php('th_row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>');
										}
									};
									google.visualization.events.addListener(chart, 'click', handler_<?php echo $counter3; ?>);
									function selectHandler_<?php echo $counter3; ?>() {
										  var selectedItem = chart.getSelection()[0];
										  if (selectedItem) {
											var dimension_value_key = data.getValue(selectedItem.row, 0);
											var dimension_value_number = data.getValue(selectedItem.row, 1);
											//alert( dimension_value_number);
											ws_db_call_ajax_php('row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>', dimension_value_key,dimension_value_number);
										  }
										}
									google.visualization.events.addListener(chart, 'select', selectHandler_<?php echo $counter3; ?>);  
									google.visualization.events.addListener(chart, 'onmouseover', uselessHandler2<?php echo $counter3; ?>);
									google.visualization.events.addListener(chart, 'onmouseout', uselessHandler3<?php echo $counter3; ?>);
									function uselessHandler2<?php echo $counter3; ?>() {
									 document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "pointer";
									  }  
											function uselessHandler3<?php echo $counter3; ?>() {
									document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "default";
									} 
										chart.draw(data, options);  
									} 
									</script><?php
							}elseif($chart_type=='Scatter Chart'){
								$counter3++; 
								?><div id="ws_db_charts_id_<?php echo $counter3; ?>" class="ws_db_well22"></div><?php
								?><script> function ws_db_chart_<?php echo $counter3; ?>() {
									<?php //detecting first column data type
									foreach ($current_dimensions_values as $dimension_value_key => $dimension_value_number) {
											if (is_numeric($dimension_value_key)) {
												$first_column_data_type = 'number';
											} else {
												$first_column_data_type = 'string';
												break;
											}
										} ?>
									<?php if ($first_column_data_type=='number' and $scatter_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']=='true'){  //so we can have trendline?>
									//note thate if first column set to number type the chart will generate vAxis atomatically and will not use default column key
										//////////////////////////////start
										var data = new google.visualization.DataTable();
										data.addColumn('<?php echo $first_column_data_type; ?>', '<?php echo $th_dimension_name; ?>');
										data.addColumn('number', 'number');
										data.addColumn({type: 'string', role: 'style'});
										//if annotation enabled add annotation column
										<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
											data.addColumn({type:'string', role:'annotation'}); // annotation role col. -- not enabled for bar charts
											data.addColumn({type:'string', role:'annotationText'}); // annotationText col. -- not enabled for bar charts
										<?php } ?> 
										<?php $color_index_counter=0; ?>
										data.addRows([
										<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
										  [
										  <?php echo $dimension_value_key;?>,
										   <?php echo $dimension_value_number;?> ,
										   'color:<?php echo $color_array[$color_index_counter];?>' ,
										  <?php $color_index_counter++; ?>
										  //if annotation enabled add annotation data
										  <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										  // annotation data in chart 
											<?php  $bar_annotations_content = $scatter_chart_default_settings['all_chart_setting_instance22_annotations_content'];
													if($bar_annotations_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_content=='both'){
														 ?>'<?php echo $dimension_value_key.$scatter_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_content=='manual'){
														 ?>'<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_content_manual'];?>',<?php
													} ?>
											// annotation data for hover on annotation
											<?php		
													$bar_annotations_hover_content = $scatter_chart_default_settings['all_chart_setting_instance22_annotations_hover_content'];
													if($bar_annotations_hover_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_hover_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_hover_content=='both'){
														 ?>'<?php echo $dimension_value_key.$scatter_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_hover_content=='manual'){
														 ?>'<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_hover_content_manual'];?>',<?php
													} ?>
										   <?php } ?> 
										  ],
										<?php } ?>
										]);
									//////////////////////////////end
										<?php }else{ //so we can't have trendline ?>
										//////////////////////////////start
										var data = new google.visualization.DataTable();
										data.addColumn('string', '<?php echo $th_dimension_name; ?>');
										data.addColumn('number', 'number');
										data.addColumn({type: 'string', role: 'style'});
										//if annotation enabled add annotation column
										<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
											data.addColumn({type:'string', role:'annotation'}); // annotation role col. -- not enabled for bar charts
											data.addColumn({type:'string', role:'annotationText'}); // annotationText col. -- not enabled for bar charts
										<?php } ?> 
										<?php $color_index_counter=0; ?>
										data.addRows([
										<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
										  [
										  '<?php echo $dimension_value_key;?>',
										   <?php echo $dimension_value_number;?> ,
										   'color:<?php echo $color_array[$color_index_counter];?>' ,
										  <?php $color_index_counter++; ?>
										  //if annotation enabled add annotation data
										  <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										  // annotation data in chart 
											<?php  $bar_annotations_content = $scatter_chart_default_settings['all_chart_setting_instance22_annotations_content'];
													if($bar_annotations_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_content=='both'){
														 ?>'<?php echo $dimension_value_key.$scatter_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_content=='manual'){
														 ?>'<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_content_manual'];?>',<?php
													} ?>
											// annotation data for hover on annotation
											<?php		
													$bar_annotations_hover_content = $scatter_chart_default_settings['all_chart_setting_instance22_annotations_hover_content'];
													if($bar_annotations_hover_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_hover_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_hover_content=='both'){
														 ?>'<?php echo $dimension_value_key.$scatter_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_hover_content=='manual'){
														 ?>'<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_hover_content_manual'];?>',<?php
													} ?>
										   <?php } ?> 
										  ],
										<?php } ?>
										]);
									//////////////////////////////end
									<?php } ?> 
									var options = {
										'title':'<?php echo $th_dimension_name; ?>',
										//axisTitlesPosition
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_axis_titles_position']) and $scatter_chart_default_settings['all_chart_setting_instance22_axis_titles_position']!= ''){  ?> axisTitlesPosition:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_axis_titles_position']?>", <?php } ?>
										//dataOpacity
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_data_opacity']) and $scatter_chart_default_settings['all_chart_setting_instance22_data_opacity']!= ''){  ?> dataOpacity:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_data_opacity']?>, <?php } ?>
										//enableInteractivity
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_enable_interactivity']) and $scatter_chart_default_settings['all_chart_setting_instance22_enable_interactivity']!= ''){  ?> enableInteractivity:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_enable_interactivity']?>, <?php } ?>
										 //fontSize 
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_font_size_auto']) and $scatter_chart_default_settings['all_chart_setting_instance22_font_size_auto']=='false' and $scatter_chart_default_settings['all_chart_setting_instance22_font_size_px']!= ''){  ?> fontSize:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_font_size_px']?>, <?php } ?>
										 //fontName
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_font_name']) and $scatter_chart_default_settings['all_chart_setting_instance22_font_name']!= ''){  ?> fontName:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_font_name']?>", <?php } ?>
										//forceIFrame
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_force_iframe']) and $scatter_chart_default_settings['all_chart_setting_instance22_force_iframe']!= ''){  ?> forceIFrame:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_force_iframe']?>, <?php } ?>
										 //height
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_height_auto']) and $scatter_chart_default_settings['all_chart_setting_instance22_height_auto']=='false' and $scatter_chart_default_settings['all_chart_setting_instance22_height_px']!= ''){  ?> height:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_height_px']?>", <?php } ?>
										 //width
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_width_auto']) and $scatter_chart_default_settings['all_chart_setting_instance22_width_auto']=='false' and $scatter_chart_default_settings['all_chart_setting_instance22_width_px']!= ''){  ?> width:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_width_px']?>", <?php } ?>
										 //reverseCategories
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_reverse_categories']) and $scatter_chart_default_settings['all_chart_setting_instance22_reverse_categories']!= ''){  ?> reverseCategories:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_reverse_categories']?>, <?php } ?>
										 //titlePosition
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_title_position']) and $scatter_chart_default_settings['all_chart_setting_instance22_title_position']!= ''){  ?> titlePosition:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_title_position']?>", <?php } ?>
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']) and $scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']=='true'){ ?> 
										 titleTextStyle:{
											 //color
											 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_color']) and $scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_color']!= ''){  ?> color:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_color']?>", <?php } ?>
											 //fontName
											 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']) and $scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']!= ''){  ?> fontName:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']?>", <?php } ?>
											 //fontSize      +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']) and $scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']!= ''){  ?> fontSize:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']?>, <?php } ?>
											 //bold
											 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']) and $scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']!= ''){  ?> bold:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']?>, <?php } ?>
											 //italic
											 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']) and $scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']!= ''){  ?> italic:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']?>, <?php } ?>
										 },
										 <?php } ?> 
										 animation:{
											 //duration
											 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_animation_duration']) and $scatter_chart_default_settings['all_chart_setting_instance22_animation_duration']!= ''){  ?> duration:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_animation_duration']?>, <?php } ?>
											 //easing
											 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_animation_easing']) and $scatter_chart_default_settings['all_chart_setting_instance22_animation_easing']!= ''){  ?> easing:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_animation_easing']?>", <?php } ?>
											 //startup
											 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_animation_startup']) and $scatter_chart_default_settings['all_chart_setting_instance22_animation_startup']!= ''){  ?> startup:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_animation_startup']?>, <?php } ?>
										 },
										 //annotations
										 <?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										 annotations:{
											//alwaysOutside  :/Type: boolean/Default: false
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']!= ''){  ?> alwaysOutside:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_always_outside']?>, <?php } ?>
											//highContrast   :Type: /boolean/Default: true
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']!= ''){  ?> highContrast:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_high_contrast']?>, <?php } ?>
											//style:Type  : /string/Default: 'point'  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_style']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_style']!= ''){  ?> style:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_style']?>", <?php } ?>
											// textStyle /object
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_overwrite']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_overwrite']=='true'){ ?>
											textStyle:{ 
												//fontName   :'string',
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']!= ''){  ?> fontName:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_name']?>", <?php } ?>
												//fontSize  :number,
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']!= ''){  ?> fontSize:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_font_size']?>, <?php } ?>
												//bold :bool,
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']!= ''){  ?> bold:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_bold']?>, <?php } ?>
												//italic		:bool,
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']!= ''){  ?> italic:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_italic']?>, <?php } ?>
												//color		:'string',//The color of the text
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']!= ''){  ?> color:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_color']?>", <?php } ?>
												//auraColor		:'string',//The color of the text outline
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']!= ''){  ?> auraColor:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_aura_color']?>", <?php } ?>
												//opacity		: 0.8,
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']) and $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']!= ''){  ?> opacity:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_annotations_text_style_opacity']?>, <?php } ?>
											},
											<?php } ?> 
										 },
										 <?php } ?> 
										 backgroundColor:{
											//stroke			// string		//The color of the chart border, as an HTML color string
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']) and $scatter_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']!= ''){  ?> stroke:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']?>", <?php } ?>
											//strokeWidth		//	number		//The border width, in pixels.
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']) and $scatter_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']!= ''){  ?> strokeWidth:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']?>, <?php } ?>
											//fill			// string		//The chart fill color, as an HTML color string
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_background_color_fill']) and $scatter_chart_default_settings['all_chart_setting_instance22_background_color_fill']!= ''){  ?> fill:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_background_color_fill']?>", <?php } ?>
										},
										chartArea:{
											//width				// number or string
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_area_width_auto']) and $scatter_chart_default_settings['all_chart_setting_instance22_area_width_auto']=='false' and $scatter_chart_default_settings['all_chart_setting_instance22_area_width_px']!= ''){  ?> width:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_area_width_px']?>", <?php } ?>
											//height				// number or string	
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_area_height_auto']) and $scatter_chart_default_settings['all_chart_setting_instance22_area_height_auto']=='false' and $scatter_chart_default_settings['all_chart_setting_instance22_area_height_px']!= ''){  ?> height:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_area_height_px']?>", <?php } ?>
										},
										legend:{
											//position			// string
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_legend_position']) and $scatter_chart_default_settings['all_chart_setting_instance22_legend_position']!= ''){  ?> position:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_legend_position']?>", <?php } ?>
											//alignment			// string
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_legend_alignment']) and $scatter_chart_default_settings['all_chart_setting_instance22_legend_alignment']!= ''){  ?> alignment:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_legend_alignment']?>", <?php } ?>
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']) and $scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			// string
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']) and $scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']!= ''){  ?> color:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']?>", <?php } ?>
												//fontName			// string
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']) and $scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']!= ''){  ?> fontName:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']?>", <?php } ?>
												//fontSize			// number
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']) and $scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']!= ''){  ?> fontSize:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']?>, <?php } ?>
												//bold			// bool
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']) and $scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']!= ''){  ?> bold:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']?>, <?php } ?>
												//italic			// bool
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']) and $scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']!= ''){  ?> italic:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']?>, <?php } ?>
											},
											<?php } ?>
										},
										tooltip:{
											//ignoreBounds			// bool
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']) and $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']!= ''){  ?> ignoreBounds:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']?>, <?php } ?>
											//showColorCode			// bool
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']) and $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']!= ''){  ?> showColorCode:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']?>, <?php } ?>
											//
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']) and $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			// string
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']) and $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']!= ''){  ?> color:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']?>", <?php } ?>
												//fontName			// string
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']) and $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']!= ''){  ?> fontName:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']?>", <?php } ?>
												//fontSize			// number
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']) and $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']!= ''){  ?> fontSize:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']?>, <?php } ?>
												//bold			// bool
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']) and $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']!= ''){  ?> bold:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']?>, <?php } ?>
												//italic			// bool
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']) and $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']!= ''){  ?> italic:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic'] ?>,<?php } ?>
											},
											<?php } ?>
										},
										<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']) and $scatter_chart_default_settings['all_chart_setting_instance22_trendlines_enable_or_disable']=='true'){   //so we can have trendline?>
										<?php if ($first_column_data_type=='number'){  //so we can have trendline?>
										trendlines:{
											0:{
												//type			// string                      :linear
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_trendlines_type']) and $scatter_chart_default_settings['all_chart_setting_instance22_trendlines_type']!= ''){  ?> type:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_trendlines_type']?>", <?php } ?>
												//color			// string
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_trendline_color']) and $scatter_chart_default_settings['all_chart_setting_instance22_trendline_color']!= ''){  ?> color:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_trendline_color']?>", <?php } ?>
												//lineWidth			// number
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_trendline_line_width']) and $scatter_chart_default_settings['all_chart_setting_instance22_trendline_line_width']!= ''){  ?> lineWidth:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_trendline_line_width']?>, <?php } ?>
												//opacity			// number
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_trendline_opacity']) and $scatter_chart_default_settings['all_chart_setting_instance22_trendline_opacity']!= ''){  ?> opacity:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_trendline_opacity']?>, <?php } ?>
												//showR2			// bool
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']) and $scatter_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']!= ''){  ?> showR2:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_trendline_show_r2']?>, <?php } ?>
												//visibleInLegend			// bool
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']) and $scatter_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']!= ''){  ?> visibleInLegend:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_trendline_visible_in_legend']?>, <?php } ?>
												//degree		// number
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_trendline_degree']) and $scatter_chart_default_settings['all_chart_setting_instance22_trendline_degree']!= ''){  ?> degree:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_trendline_degree']?>, <?php } ?>
												//pointSize		// number
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_trendline_point_size']) and $scatter_chart_default_settings['all_chart_setting_instance22_trendline_point_size']!= ''){  ?> pointSize:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_trendline_point_size']?>, <?php } ?>
												//pointsVisible			// bool
												<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']) and $scatter_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']!= ''){  ?> pointsVisible:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_trendline_points_visible']?>, <?php } ?>
											},
										},
									<?php } ?>	
									<?php } ?>
									//curveType
									<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_curve_type']) and $scatter_chart_default_settings['all_chart_setting_instance22_curve_type']!= ''){  ?> curveType:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_curve_type']?>", <?php } ?>
									//orientation
									<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_orientation']) and $scatter_chart_default_settings['all_chart_setting_instance22_orientation']!= ''){  ?> orientation:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_orientation']?>", <?php } ?>
									//pointShape
									<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_point_shape']) and $scatter_chart_default_settings['all_chart_setting_instance22_point_shape']!= ''){  ?> pointShape:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_point_shape']?>", <?php } ?>
									//pointSize
									<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_point_size']) and $scatter_chart_default_settings['all_chart_setting_instance22_point_size']!= ''){  ?> pointSize:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_point_size']?>, <?php } ?>
									//pointsVisible
									<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_points_visible']) and $scatter_chart_default_settings['all_chart_setting_instance22_points_visible']!= ''){  ?> pointsVisible:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_points_visible']?>, <?php } ?>  
									crosshair:{
										//trigger
										<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_crosshair_trigger']) and $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_trigger']!= ''){  ?> trigger:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_trigger']?>", <?php } ?>
										focused:{
											//color
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_crosshair_color_focused']) and $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_color_focused']!= ''){  ?> color:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_color_focused']?>", <?php } ?>
											//opacity
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_focused']) and $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_focused']!= ''){  ?> opacity:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_focused']?>, <?php } ?>
											//orientation
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_focused']) and $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_focused']!= ''){  ?> orientation:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_focused']?>", <?php } ?>
										},
										selected:{
											//color
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_crosshair_color_selected']) and $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_color_selected']!= ''){  ?> color:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_color_selected']?>", <?php } ?>
											//opacity
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_selected']) and $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_selected']!= ''){  ?> opacity:<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_opacity_selected']?>, <?php } ?>
											//orientation
											<?php if(isset($scatter_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_selected']) and $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_selected']!= ''){  ?> orientation:"<?php echo $scatter_chart_default_settings['all_chart_setting_instance22_crosshair_orientation_selected']?>", <?php } ?>
										}
									}
									  };
									var chart = new google.visualization.ScatterChart(document.getElementById('ws_db_charts_id_<?php echo $counter3; ?>'));
									var handler_<?php echo $counter3; ?> = function(e) {
										var parts = e.targetID.split('#');
										if (parts[0]== 'title') {
											ws_db_call_ajax_php('th_row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>');
										}
									};
									google.visualization.events.addListener(chart, 'click', handler_<?php echo $counter3; ?>);
									function selectHandler_<?php echo $counter3; ?>() {
										  var selectedItem = chart.getSelection()[0];
										  if (selectedItem) {
											var dimension_value_key = data.getValue(selectedItem.row, 0);
											var dimension_value_number = data.getValue(selectedItem.row, 1);
											//alert( dimension_value_number);
											ws_db_call_ajax_php('row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>', dimension_value_key,dimension_value_number);
										  }
										}
									google.visualization.events.addListener(chart, 'select', selectHandler_<?php echo $counter3; ?>);  
									google.visualization.events.addListener(chart, 'onmouseover', uselessHandler2<?php echo $counter3; ?>);
									google.visualization.events.addListener(chart, 'onmouseout', uselessHandler3<?php echo $counter3; ?>);
									function uselessHandler2<?php echo $counter3; ?>() {
									 document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "pointer";
									  }  
											function uselessHandler3<?php echo $counter3; ?>() {
									document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "default";
									} 
										chart.draw(data, options);  
									} 
									</script><?php
							}elseif($chart_type=='Stepped Area Chart'){
								$counter3++; 
								?><div id="ws_db_charts_id_<?php echo $counter3; ?>" class="ws_db_well22"></div><?php
								?><script> function ws_db_chart_<?php echo $counter3; ?>() {
									var data = new google.visualization.DataTable();
										data.addColumn('string', '<?php echo $th_dimension_name; ?>');
										data.addColumn('number', 'number');
										data.addColumn({type: 'string', role: 'style'});
										//if annotation enabled add annotation column
										<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
											data.addColumn({type:'string', role:'annotation'}); // annotation role col. -- not enabled for bar charts
											data.addColumn({type:'string', role:'annotationText'}); // annotationText col. -- not enabled for bar charts
										<?php } ?> 
										<?php $color_index_counter=0; ?>
										data.addRows([
										<?php foreach( $current_dimensions_values as $dimension_value_key => $dimension_value_number ){ ?>
										  [
										  '<?php echo $dimension_value_key;?>',
										   <?php echo $dimension_value_number;?> ,
										   'color:<?php echo $color_array[$color_index_counter];?>' ,
										  <?php $color_index_counter++; ?>
										  //if annotation enabled add annotation data
										  <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_annotations_enable_or_disable']=='true'){ ?>
										  // annotation data in chart 
											<?php  $bar_annotations_content = $stapped_area_chart_default_settings['all_chart_setting_instance22_annotations_content'];
													if($bar_annotations_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_content=='both'){
														 ?>'<?php echo $dimension_value_key.$stapped_area_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_content=='manual'){
														 ?>'<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_annotations_content_manual'];?>',<?php
													} ?>
											// annotation data for hover on annotation
											<?php		
													$bar_annotations_hover_content = $stapped_area_chart_default_settings['all_chart_setting_instance22_annotations_hover_content'];
													if($bar_annotations_hover_content=='element_number'){
														 ?>'<?php echo $dimension_value_number;?>',<?php
													}elseif($bar_annotations_hover_content=='element_name'){
														 ?>'<?php echo $dimension_value_key;?>',<?php
													}elseif($bar_annotations_hover_content=='both'){
														 ?>'<?php echo $dimension_value_key.$stapped_area_chart_default_settings['all_chart_setting_instance22_annotations_separator_for_both_mode'].$dimension_value_number  ;?>',<?php
													}elseif($bar_annotations_hover_content=='manual'){
														 ?>'<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_annotations_hover_content_manual'];?>',<?php
													} ?>
										   <?php } ?> 
										  ],
										<?php } ?>
										]);
									//////////////////////////////end
									var options = {
										'title':'<?php echo $th_dimension_name; ?>',
										//connectSteps
										<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_connect_steps']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_connect_steps']!= ''){  ?> connectSteps:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_connect_steps']?>, <?php } ?>  
										//areaOpacity
										<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_area_opacity']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_area_opacity']!= ''){  ?> areaOpacity:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_area_opacity']?>, <?php } ?>
										//axisTitlesPosition
										 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_axis_titles_position']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_axis_titles_position']!= ''){  ?> axisTitlesPosition:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_axis_titles_position']?>", <?php } ?>
										//enableInteractivity
										 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_enable_interactivity']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_enable_interactivity']!= ''){  ?> enableInteractivity:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_enable_interactivity']?>, <?php } ?>
										 //fontSize 
										 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_font_size_auto']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_font_size_auto']=='false' and $stapped_area_chart_default_settings['all_chart_setting_instance22_font_size_px']!= ''){  ?> fontSize:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_font_size_px']?>, <?php } ?>
										 //fontName
										 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_font_name']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_font_name']!= ''){  ?> fontName:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_font_name']?>", <?php } ?>
										//forceIFrame
										 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_force_iframe']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_force_iframe']!= ''){  ?> forceIFrame:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_force_iframe']?>, <?php } ?>
										 //height
										 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_height_auto']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_height_auto']=='false' and $stapped_area_chart_default_settings['all_chart_setting_instance22_height_px']!= ''){  ?> height:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_height_px']?>", <?php } ?>
										 //width
										 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_width_auto']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_width_auto']=='false' and $stapped_area_chart_default_settings['all_chart_setting_instance22_width_px']!= ''){  ?> width:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_width_px']?>", <?php } ?>
										 //reverseCategories
										 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_reverse_categories']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_reverse_categories']!= ''){  ?> reverseCategories:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_reverse_categories']?>, <?php } ?>
										 //titlePosition
										 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_title_position']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_title_position']!= ''){  ?> titlePosition:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_title_position']?>", <?php } ?>
										 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_overwrite']=='true'){ ?> 
										 titleTextStyle:{
											 //color
											 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_color']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_color']!= ''){  ?> color:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_color']?>", <?php } ?>
											 //fontName
											 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']!= ''){  ?> fontName:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_name']?>", <?php } ?>
											 //fontSize      +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
											 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']!= ''){  ?> fontSize:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_font_size']?>, <?php } ?>
											 //bold
											 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']!= ''){  ?> bold:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_bold']?>, <?php } ?>
											 //italic
											 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']!= ''){  ?> italic:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_title_text_style_italic']?>, <?php } ?>
										 },
										 <?php } ?> 
										 animation:{
											 //duration
											 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_animation_duration']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_animation_duration']!= ''){  ?> duration:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_animation_duration']?>, <?php } ?>
											 //easing
											 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_animation_easing']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_animation_easing']!= ''){  ?> easing:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_animation_easing']?>", <?php } ?>
											 //startup
											 <?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_animation_startup']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_animation_startup']!= ''){  ?> startup:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_animation_startup']?>, <?php } ?>
										 },
										 backgroundColor:{
											//stroke			// string		//The color of the chart border, as an HTML color string
											<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']!= ''){  ?> stroke:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_color']?>", <?php } ?>
											//strokeWidth		//	number		//The border width, in pixels.
											<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']!= ''){  ?> strokeWidth:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_background_color_stroke_width']?>, <?php } ?>
											//fill			// string		//The chart fill color, as an HTML color string
											<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_background_color_fill']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_background_color_fill']!= ''){  ?> fill:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_background_color_fill']?>", <?php } ?>
										},
										chartArea:{
											//width				// number or string
											<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_area_width_auto']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_area_width_auto']=='false' and $stapped_area_chart_default_settings['all_chart_setting_instance22_area_width_px']!= ''){  ?> width:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_area_width_px']?>", <?php } ?>
											//height				// number or string	
											<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_area_height_auto']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_area_height_auto']=='false' and $stapped_area_chart_default_settings['all_chart_setting_instance22_area_height_px']!= ''){  ?> height:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_area_height_px']?>", <?php } ?>
										},
										legend:{
											//position			// string
											<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_legend_position']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_position']!= ''){  ?> position:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_position']?>", <?php } ?>
											//alignment			// string
											<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_legend_alignment']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_alignment']!= ''){  ?> alignment:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_alignment']?>", <?php } ?>
											<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			// string
												<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']!= ''){  ?> color:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_color']?>", <?php } ?>
												//fontName			// string
												<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']!= ''){  ?> fontName:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_name']?>", <?php } ?>
												//fontSize			// number
												<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']!= ''){  ?> fontSize:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_font_size']?>, <?php } ?>
												//bold			// bool
												<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']!= ''){  ?> bold:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_bold']?>, <?php } ?>
												//italic			// bool
												<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']!= ''){  ?> italic:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_legend_text_style_italic']?>, <?php } ?>
											},
											<?php } ?>
										},
										tooltip:{
											//ignoreBounds			// bool
											<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']!= ''){  ?> ignoreBounds:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_ignore_bounds']?>, <?php } ?>
											//showColorCode			// bool
											<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']!= ''){  ?> showColorCode:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_show_color']?>, <?php } ?>
											//
											<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_overwrite']=='true'){ ?>
											textStyle:{
												//color			// string
												<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']!= ''){  ?> color:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_color']?>", <?php } ?>
												//fontName			// string
												<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']!= ''){  ?> fontName:"<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_name']?>", <?php } ?>
												//fontSize			// number
												<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']!= ''){  ?> fontSize:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_font_size']?>, <?php } ?>
												//bold			// bool
												<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']!= ''){  ?> bold:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_bold']?>, <?php } ?>
												//italic			// bool
												<?php if(isset($stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']) and $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic']!= ''){  ?> italic:<?php echo $stapped_area_chart_default_settings['all_chart_setting_instance22_tooltip_text_style_italic'] ?>,<?php } ?>
											},
											<?php } ?>
										},
									  };
									var chart = new google.visualization.SteppedAreaChart(document.getElementById('ws_db_charts_id_<?php echo $counter3; ?>'));
									var handler_<?php echo $counter3; ?> = function(e) {
										var parts = e.targetID.split('#');
										if (parts[0]== 'title') {
											ws_db_call_ajax_php('th_row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>');
										}
									};
									google.visualization.events.addListener(chart, 'click', handler_<?php echo $counter3; ?>);
									function selectHandler_<?php echo $counter3; ?>() {
										  var selectedItem = chart.getSelection()[0];
										  if (selectedItem) {
											var dimension_value_key = data.getValue(selectedItem.row, 0);
											var dimension_value_number = data.getValue(selectedItem.row, 1);
											//alert( dimension_value_number);
											ws_db_call_ajax_php('row_of_data_table_clicked','<?php echo $group_name ?>','<?php echo $dimension_name ?>', dimension_value_key,dimension_value_number);
										  }
										}
									google.visualization.events.addListener(chart, 'select', selectHandler_<?php echo $counter3; ?>);  
									google.visualization.events.addListener(chart, 'onmouseover', uselessHandler2<?php echo $counter3; ?>);
									google.visualization.events.addListener(chart, 'onmouseout', uselessHandler3<?php echo $counter3; ?>);
									function uselessHandler2<?php echo $counter3; ?>() {
									 document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "pointer";
									  }  
											function uselessHandler3<?php echo $counter3; ?>() {
									document.getElementById("ws_db_charts_id_<?php echo $counter3; ?>").style.cursor = "default";
									} 
										chart.draw(data, options);  
									} 
									</script><?php
							}
					?></div><?php	
						}
		}		
		?></div><?php
////////////////////////////////////////////////////		
	}else{
		echo 'go to setting section and press save botton to generate base setting ptoper to your data';
	}
		?><script>
		if (typeof google_charts_load_has_been_called !== 'undefined') {
			// the google_charts_load_has_been_called is defined
		}else{
			var google_charts_load_has_been_called = false ;
			google.charts.load('current', {'packages':['corechart', 'table']});
			var google_charts_load_has_been_called = true ;
		}
		// Callback that creates and populates a data table,
		// draws it.
		function ws_db_draw_chart() {
			<?php	
			$function_counter=1;
			while($function_counter <= $counter3) {
				?>ws_db_chart_<?php echo $function_counter ?>(); 
				<?php
				$function_counter++;
			} ?>
		}
		// Set a callback to run when the Google Visualization API is loaded.
		google.charts.setOnLoadCallback(ws_db_draw_chart);
		</script><?php
	}
}
?>