<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_light_box_for_chart_default_settings' ) ) {
	function ws_db_light_box_for_chart_default_settings($all_setting)
	{
		
	?>
	<span  style="display:none" >
		<div id="ws_db_light_box_for_chart_default_settings_id" class="ws_db_light_box_for_chart" style="background-color:white;padding: 38px 20px;" >
			<!--  Donut ********************************************************************** -->
			<div class="ws_db_setting_for_donut ws_db_hide_after_close"  >
				<!--   pieHole  -->
				<div class="ws_db_setting_section"  >
					<h5  class="ws_db_setting_title"  ><?php _e( 'pie hole ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'If between 0 and 1, displays a donut chart. The hole with have a radius equal to number times the radius of the chart. ', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="text" name="all_chart_setting_instance22_pie_hole" value="">
					</div>
				</div>
			</div>
			<!--  Pie ********************************************************************** -->
			<div class="ws_db_setting_for_pie ws_db_hide_after_close"  >
				<!--   is3D  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Is 3D', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( ' If turned on, displays a three-dimensional chart.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_switch_block">
						<div class="data_table switch tiny">
							<input id="all_chart_setting_instance22_is_3d" type="checkbox" >
							<label for="all_chart_setting_instance22_is_3d"></label>
						</div> 
					</div>
				</div>
			</div>
			<!--  Stepped ********************************************************************** -->
			<div class="ws_db_setting_for_stapped ws_db_hide_after_close"  >
				<!-- connectSteps -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Connect steps', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( ' If ON, will connect the steps to form a stepped line. Otherwise, only a top line appears. The default is to connect the steps.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_switch_block">
						<div class="data_table switch tiny">
							<input id="all_chart_setting_instance22_connect_steps" type="checkbox" >
							<label for="all_chart_setting_instance22_connect_steps"></label>
						</div> 
					</div>
				</div>	
			</div>
			<!--  Area Stepped ********************************************************************** -->
			<div class="ws_db_setting_for_area_stepped ws_db_hide_after_close"  >
				<!-- areaOpacity -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Area opacity', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'The default opacity of the colored area under an area chart series, where 0.0 is fully transparent and 1.0 is fully opaque.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="text" name="all_chart_setting_instance22_area_opacity" >
					</div>
				</div>
			</div>
			<!--  Line  Area ********************************************************************** -->
			<div class="ws_db_setting_for_line_area ws_db_hide_after_close"  >
				<!--   lineWidth  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Line width', 'data-browser-by-ws' ); ?> </h5>
					<div class="ws_db_setting_description" ><?php _e( 'Data line width in pixels. ', 'data-browser-by-ws' ); ?> </div>
					<div class="ws_db_option_max_length_in">
						<input type="number" name="all_chart_setting_instance22_line_width" >
					</div>
				</div>
			</div>
			<!--  pie donut ********************************************************************** -->
			<div class="ws_db_setting_for_pie_donut ws_db_hide_after_close"  >
				<!--   pieSliceTextStyle  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Slice text style', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Specifying the slice text style.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
					<span class="ws_db_setting_description" ><?php _e( 'Overwrite global text style for slice text?', 'data-browser-by-ws' ); ?> </span>
					<div class="switch tiny">
						<input id="all_chart_setting_instance22_slice_text_style_overwrite" type="checkbox" >
						<label for="all_chart_setting_instance22_slice_text_style_overwrite"></label>
					</div> 
					</div> 
					<div class="ws_db_setting_section" >
					<div><?php _e( 'Text color', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_slice_text_style_color"  >
						</div> 
					</div> 		
					<div class="ws_db_setting_section" >
					<div><?php _e( 'Font name', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">	
							<input type="text" name="all_chart_setting_instance22_slice_text_style_font_name" >
						</div> 
					</div> 				
					<div class="ws_db_setting_section" >
						<div><?php _e( 'Font size', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">	
							<input type="number" name="all_chart_setting_instance22_slice_text_style_font_size" >
						</div> 
					</div> 
				</div>
				<!--   pieSliceText  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Pie Slice Text', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'The content of the text displayed on the slice.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
					 <select name="all_chart_setting_instance22_slice_text">
					  <option value="percentage" >percentage</option>
					  <option value="value">value</option>
					  <option value="label">label</option>
					  <option value="none">none</option>
					</select>
					</div>							
				</div>
				<!--   pieStartAngle  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Pie Start Angle', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'The angle, in degrees, to rotate the chart by. The default of 0 will orient the leftmost edge of the first slice directly up.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">	
						<input type="number" name="all_chart_setting_instance22_start_angle" >		
					</div>
				</div>
				<!--   pieResidueSliceColor  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Pie Residue Slice Color', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Color for the combination slice that holds all slices below slice Visibility Threshold. ', 'data-browser-by-ws' ); ?></div>
					<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_residue_slice_color">
				</div>
				<!--   pieResidueSliceLabel  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Pie Residue Slice Label', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'A label for the combination slice that holds all slices below slice Visibility Threshold.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">	
						<input type="text" name="all_chart_setting_instance22_residue_slice_label" >		
					</div>
				</div>
				<!--   tooltip.text  -->
			</div>
			<!--  Line Scatter Area ********************************************************************** -->
			<div class="ws_db_setting_for_Line_Scatter_area ws_db_hide_after_close"  >
				<!--   curveType  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Curve type', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Controls the curve of the lines when the line width is not zero. Can be one of the following:1-"none" / Straight lines without curve.2-"function" / The angles of the line will be smoothed.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<select name="all_chart_setting_instance22_curve_type">
						  <option value="none"   >none</option>
						  <option value="function"  >function</option>
						</select>
					</div>
				</div>
				<!--   orientation  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Orientation', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'The orientation of the chart. When set to "vertical", rotates the axes of the chart.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<select name="all_chart_setting_instance22_orientation">
						  <option value="horizontal" >horizontal</option>
						  <option value="vertical"  >vertical</option>
						</select>
					</div>
				</div>
				<!--   pointShape  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Point shape', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'The shape of individual data elements.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<select name="all_chart_setting_instance22_point_shape">
						  <option value="circle">circle</option>
						  <option value="triangle" >triangle</option>
						  <option value="square" >square</option>
						  <option value="diamond" >diamond</option>
						  <option value="star"  >star</option>
						  <option value="polygon" >polygon</option>
						</select>
					</div>
					<img src="<?php echo WS_DB_POINT_SHAPE_PATH; ?>" width="300px"> 
				</div>
				<!--   pointSize  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Point size ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Diameter of displayed points in pixels. if zero , default size will be used . ', 'data-browser-by-ws' ); ?> </div>
					<div class="ws_db_option_max_length_in">
						<input type="number" name="all_chart_setting_instance22_point_size" >
					</div>
				</div>
				<!-- pointsVisible -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Points visible', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Determines whether points will be displayed. Set to OFF to hide all points.  If you are usign a trendline, the pointsVisible option will affect the visibility of the points on all trendlines  .', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_switch_block">
						<div class="data_table switch tiny">
							<input id="all_chart_setting_instance22_points_visible" type="checkbox" >
							<label for="all_chart_setting_instance22_points_visible"></label>
						</div> 
					</div>
				</div>	
				<!-- crosshair -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Crosshair', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Trigger', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'When to display crosshairs.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<select name="all_chart_setting_instance22_crosshair_trigger">
							  <option value="both" >both</option>
							  <option value="selection" >selection</option>
							  <option value="focus">focus</option>
							</select>
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Focused', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Color', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'The crosshair color.leave empty to use auto color ', 'data-browser-by-ws' ); ?></div>
							<div class="ws_db_option_max_length_in">
								<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_crosshair_color_focused" >
							</div>
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Opacity', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" > <?php _e( 'Between 0 and 1', 'data-browser-by-ws' ); ?></div>
							<div class="ws_db_option_max_length_in">
								<input type="text" name="all_chart_setting_instance22_crosshair_opacity_focused">
							</div>
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Orientation', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'The crosshair orientation, which can be "vertical" for vertical hairs only, "horizontal" for horizontal hairs only, or "both" for traditional crosshairs.  ', 'data-browser-by-ws' ); ?></div>
							<div class="ws_db_option_max_length_in">
								<select name="all_chart_setting_instance22_crosshair_orientation_focused">
								  <option value="both" >both</option>
								  <option value="vertical">vertical</option>
								  <option value="horizontal" >horizontal</option>
								</select>
							</div>
						</div>
					</div>
					
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Selected', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Color', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'The crosshair color.leave empty to use auto color ', 'data-browser-by-ws' ); ?></div>
							<div class="ws_db_option_max_length_in">
								<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_crosshair_color_selected" >
							</div>
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Opacity', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" > <?php _e( 'Between 0 and 1', 'data-browser-by-ws' ); ?></div>
							<div class="ws_db_option_max_length_in">
								<input type="text" name="all_chart_setting_instance22_crosshair_opacity_selected" >
							</div>
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Orientation', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'The crosshair orientation, which can be"vertical" for vertical hairs only, "horizontal" for horizontal hairs only, or "both" for traditional crosshairs.  ', 'data-browser-by-ws' ); ?></div>
							<div class="ws_db_option_max_length_in">
								<select name="all_chart_setting_instance22_crosshair_orientation_selected">
								  <option value="both"  >both</option>
								  <option value="vertical" >vertical</option>
								  <option value="horizontal" >horizontal</option>
								</select>
							</div>
						</div>	
					</div>
					
				</div>
			</div>
			<!--  bar column line scatter ********************************************************************** -->
			<div class="ws_db_setting_for_bar_column_line_scatter ws_db_hide_after_close"  >
				<!-- trendlines -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Trendlines', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Enable trendlines ', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'The trendline is only available when the vertical chart axis and horizontal chart axis are numbers .', 'data-browser-by-ws' ); ?></div>
						<img src="<?php echo WS_DB_TRENDLINE_BAR_CHART_PATH; ?>" > 
						<div class="ws_db_option_switch_block">
							<div class="data_table switch tiny">
								<input id="all_chart_setting_instance22_trendlines_enable_or_disable" type="checkbox" >
								<label for="all_chart_setting_instance22_trendlines_enable_or_disable"></label>
							</div> 
						</div>
					</div>	
					<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Trendlines type', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( ' Whether the trendlines is "linear" (the default), "exponential", or "polynomial".', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<select name="all_chart_setting_instance22_trendlines_type">
							  <option value="linear" >linear</option>
							  <option value="exponential">exponential</option>
							  <option value="polynomial" >polynomial</option>
							</select>
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Color', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( ' The color of the trendline.', 'data-browser-by-ws' ); ?></div>
						<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_trendline_color"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Line Width', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'The line width of the trendline , in pixels. ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="number" name="all_chart_setting_instance22_trendline_line_width"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Opacity', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'The transparency of the trendline , from 0.0 (transparent) to 1.0 (opaque). ', 'data-browser-by-ws' ); ?> </div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_chart_setting_instance22_trendline_opacity"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Show R2', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Whether to show the coefficient of determination in the legend or trendline tooltip.', 'data-browser-by-ws' ); ?> </div>
						<div class="ws_db_option_max_length_in">
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_trendline_show_r2" type="checkbox"  >
								<label for="all_chart_setting_instance22_trendline_show_r2"></label>
							</div> 
						</div> 
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Visible in legend', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Whether the trendline equation appears in the legend. (It will appear in the trendline tooltip.) ', 'data-browser-by-ws' ); ?> </div>
						<div class="ws_db_option_max_length_in">
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_trendline_visible_in_legend" type="checkbox"  >
								<label for="all_chart_setting_instance22_trendline_visible_in_legend"></label>
							</div> 
						</div> 
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Degree', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Whether the trendline equation appears in the legend. (It will appear in the trendline tooltip.)', 'data-browser-by-ws' ); ?>  </div>
						<div class="ws_db_option_max_length_in">
							<input type="number" name="all_chart_setting_instance22_trendline_degree"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Point size', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Trendlines are constucted by stamping a bunch of dots on the chart. this rarely-needed option lets you customize the size of the dots. The trendlines lineWidth option will usually be preferable. However, youll need this option if you want a different point size for your trendlines. ', 'data-browser-by-ws' ); ?>  </div>
						<div class="ws_db_option_max_length_in">
							<input type="number" name="all_chart_setting_instance22_trendline_point_size" >
						</div>
						</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Points visible', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Trendlines are constucted by stamping a bunch of dots on the chart. The trendlines pointsVisible option determines whether the points for a particular trendline are visible.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_trendline_points_visible" type="checkbox"   >
								<label for="all_chart_setting_instance22_trendline_points_visible"></label>
							</div> 
						</div> 
					</div> 
				</div>
			</div>
			<!--  bar column line scatter area ********************************************************************** -->
			<div class="ws_db_setting_for_bar_column_line_scatter_area ws_db_hide_after_close"  >
				<!--   dataOpacity  -->
				<div class="ws_db_setting_section" style="display:none" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Data opacity ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'The transparency of data points ,between 0 and 1.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="text" name="all_chart_setting_instance22_data_opacity"  >
					</div>
				</div>
				<!-- animation -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Animation', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Startup', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( ' Determines if the chart will animate on the initial draw. If ON, the chart will start at the baseline and animate to its final state.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_animation_startup" type="checkbox"  >
								<label for="all_chart_setting_instance22_animation_startup"></label>
							</div> 
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Duration', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'The duration of the animation, in milliseconds. For details.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_chart_setting_instance22_animation_duration"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'easing', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( ' The easing function applied to the animation.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<select name="all_chart_setting_instance22_animation_easing">
							  <option value="linear">linear</option>
							  <option value="in" >in</option>
							  <option value="out" >out</option>
							  <option value="inAndOut">inAndOut</option>
							</select>
						</div>
					</div>
				</div>
				<!-- annotations -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Annotations', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Enable annotations ', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'Whether the annotations enabled or disabled.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_switch_block">
							<div class="data_table switch tiny">
								<input id="all_chart_setting_instance22_annotations_enable_or_disable" type="checkbox"  >
								<label for="all_chart_setting_instance22_annotations_enable_or_disable"></label>
							</div> 
						</div>
					</div>	
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Annotations content', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'The annotations content .', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<select name="all_chart_setting_instance22_annotations_content">
							  <option value="element_number"  >element number</option>
							  <option value="element_name"  <?php if($all_setting['Bar_chart_default_settings']['all_chart_setting_instance22_annotations_content'] == "element_name" ){ echo 'selected="selected"'; }?> >element name</option>
							  <option value="both" >both</option>
							  <option value="manual" >manual</option>
							</select>
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Annotations hover content', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( ' The annotations hover content .', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<select name="all_chart_setting_instance22_annotations_hover_content">
							  <option value="element_number" >element number</option>
							  <option value="element_name"  >element name</option>
							  <option value="both" >both</option>
							  <option value="manual" >manual</option>
							</select>
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Annotations both mode separator', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Separator used when "both" option of abave field selected', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_chart_setting_instance22_annotations_separator_for_both_mode"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Annotations content manual', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Your custom content / used when "manual" option of abave field selected', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_chart_setting_instance22_annotations_content_manual"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Annotations hover content manual', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Your custom content / used when "manual" option of abave field selected', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_chart_setting_instance22_annotations_hover_content_manual"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Always outside', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'If ON, draws all annotations outside of the Bar.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_annotations_always_outside" type="checkbox"  >
								<label for="all_chart_setting_instance22_annotations_always_outside"></label>
							</div> 
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'High contrast', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'High contrast.', 'data-browser-by-ws' ); ?></div>
						<img src="<?php echo WS_DB_HIGH_CONTRAST_PATH; ?>" > 
						<div class="ws_db_option_max_length_in">
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_annotations_high_contrast" type="checkbox"  >
								<label for="all_chart_setting_instance22_annotations_high_contrast"></label>
							</div> 
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Style', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'Annotation type.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<select name="all_chart_setting_instance22_annotations_style">
							  <option value="point"  >point</option>
							  <option value="line" >line</option>
							</select>
						</div>
					</div>
				</div>
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Annotations text style', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( ' Specifying the annotations text style.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
					<span class="ws_db_setting_description_lit" ><?php _e( 'Overwrite global text style for annotations?  ', 'data-browser-by-ws' ); ?></span>
					<div class="switch tiny">
						<input id="all_chart_setting_instance22_annotations_text_style_overwrite" type="checkbox" >
						<label for="all_chart_setting_instance22_annotations_text_style_overwrite"></label>
					</div> 
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_setting_description_lit" ><?php _e( 'Text color', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_annotations_text_style_color"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_setting_description_lit" ><?php _e( 'Font name', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">		
							<input type="text" name="all_chart_setting_instance22_annotations_text_style_font_name" >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
							<span class="ws_db_setting_description_lit" ><?php _e( 'Bold', 'data-browser-by-ws' ); ?></span>
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_annotations_text_style_bold" type="checkbox"  >
								<label for="all_chart_setting_instance22_annotations_text_style_bold"></label>
							</div> 
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
							<span class="ws_db_setting_description_lit" ><?php _e( 'Italic', 'data-browser-by-ws' ); ?></span>
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_annotations_text_style_italic" type="checkbox"  >
								<label for="all_chart_setting_instance22_annotations_text_style_italic"></label>
							</div> 
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_setting_description_lit" ><?php _e( 'Font size', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="number" name="all_chart_setting_instance22_annotations_text_style_font_size"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_setting_description_lit" ><?php _e( 'Aura color / The color of the text outline', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_annotations_text_style_aura_color"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_setting_description_lit" ><?php _e( 'Opacity', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="number" name="all_chart_setting_instance22_annotations_text_style_opacity" >
						</div>
					</div> 
				</div>
			</div>
			<!--   pie donut Line Scatter Area  Stepped   ********************************************************************** -->
			<!--   legend.maxLines  -->
			<!--  bar column line scatter area stepped ********************************************************************** -->
			<div class="ws_db_setting_for_bar_column_line_scatter_area_stepped ws_db_hide_after_close"  >
				<!--   axisTitlesPosition  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Axis titles position', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Where to place the axis titles, compared to the chart area.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
					<select name="all_chart_setting_instance22_axis_titles_position">
					 <option value="out">out</option>
					  <option value="in">in</option>
					  <option value="none" >none</option>
					</select>
					</div>
				</div>
				<!-- titlePosition -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Title position', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Where to place the chart title, compared to the chart area.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
					 <select name="all_chart_setting_instance22_title_position">
					 <option value="out">out</option>
					  <option value="in">in</option>
					  <option value="none">none</option>
					</select>
					</div>
				</div>
			</div>	
			<!--  public **************************************************************************************************************** -->
			<div class="ws_db_setting_for_public ws_db_hide_after_close"  >
				<!-- fontSize -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Font size', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'The default font size, in pixels, of all text in the chart.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<span class="ws_db_setting_description_lit" ><?php _e( 'Auto or manual', 'data-browser-by-ws' ); ?></span>
						<div class="switch tiny">
							<input id="all_chart_setting_instance22_font_size_auto" type="checkbox" >
							<label for="all_chart_setting_instance22_font_size_auto"></label>
						</div> 
						<input type="number" name="all_chart_setting_instance22_font_size_px" >		
					</div>
				</div>
				<!-- fontName -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Font name ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'The default font face for all text in the chart.', 'data-browser-by-ws' ); ?> </div>
					<div class="ws_db_option_max_length_in">
					<input type="text" name="all_chart_setting_instance22_font_name"  >
					</div>
				</div>
				<!-- forceIFrame -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Force iframe ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Draws the chart inside an inline frame. (Note that on IE8, this option is ignored; all IE8 charts are drawn in i-frames.) ', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_switch_block">
						<div class="switch tiny">
							<input id="all_chart_setting_instance22_force_iframe" type="checkbox" >
							<label for="all_chart_setting_instance22_force_iframe"></label>
						</div> 
					</div> 
				</div>
				<!-- enableInteractivity -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Enable interactivity', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Whether the chart throws user-based events or reacts to user interaction. if off, the chart will not throw "select" or other interaction-based events (but will throw ready or error events).', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_switch_block">
						<div class="data_table switch tiny">
							<input id="all_chart_setting_instance22_enable_interactivity" type="checkbox" >
							<label for="all_chart_setting_instance22_enable_interactivity"></label>
						</div> 
					</div>
				</div>	
				<!-- reverseCategories -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Reverse Categories', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'If turned on, will draw series from bottom to top. The default is to draw top-to-bottom.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_switch_block">
						<div class="data_table switch tiny">
							<input id="all_chart_setting_instance22_reverse_categories" type="checkbox">
							<label for="all_chart_setting_instance22_reverse_categories"></label>
						</div> 
					</div>
				</div>
				<!-- titleTextStyle -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Title text style', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Specifying the title text style.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
						<span class="ws_db_setting_description_lit" ><?php _e( 'Overwrite global text style for title?', 'data-browser-by-ws' ); ?></span>
						<div class="switch tiny">
							<input id="all_chart_setting_instance22_title_text_style_overwrite" type="checkbox">
							<label for="all_chart_setting_instance22_title_text_style_overwrite"></label>
						</div> 
						</div>
					<div class="ws_db_setting_section" >	
						<div class="ws_db_option_max_length_in">
							<div class="ws_db_setting_description_lit" ><?php _e( 'Text color', 'data-browser-by-ws' ); ?></div>
							<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_title_text_style_color">
						</div>	
					</div>
					<div class="ws_db_setting_section" >
					<div class="ws_db_option_max_length_in">	
						<span class="ws_db_setting_description_lit" ><?php _e( 'Font name', 'data-browser-by-ws' ); ?></span>
						<input type="text" name="all_chart_setting_instance22_title_text_style_font_name" >	
					</div>
					</div>
					<div class="ws_db_setting_section" >
					<div class="ws_db_option_max_length_in">	
						<span class="ws_db_setting_description_lit" ><?php _e( 'Font size', 'data-browser-by-ws' ); ?></span>
						<input type="number" name="all_chart_setting_instance22_title_text_style_font_size">	
					</div>
					</div>
					<div class="ws_db_setting_section" >	
					<div class="ws_db_option_max_length_in">	
						<span class="ws_db_setting_description_lit" ><?php _e( 'Bold', 'data-browser-by-ws' ); ?> </span>
						<div class="switch tiny">
							<input id="all_chart_setting_instance22_title_text_style_bold" type="checkbox">
							<label for="all_chart_setting_instance22_title_text_style_bold"></label>
						</div> 
					</div>	
					</div>
					<div class="ws_db_setting_section" >	
					<div class="ws_db_option_max_length_in">
						<span class="ws_db_setting_description_lit" ><?php _e( 'Italic', 'data-browser-by-ws' ); ?></span>
						<div class="switch tiny">
							<input id="all_chart_setting_instance22_title_text_style_italic" type="checkbox">
							<label for="all_chart_setting_instance22_title_text_style_italic"></label>
						</div> 
					</div> 
					</div>
				</div>
				
				

				<!-- backgroundColor -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Background color', 'data-browser-by-ws' ); ?></h5>
					<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_background_color_fill" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Border color', 'data-browser-by-ws' ); ?></h5>
					<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_background_color_stroke_color" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Border width in pixels', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_option_max_length_in">
						<input type="number" name="all_chart_setting_instance22_background_color_stroke_width">
					</div>
				</div>
				<!-- chartArea -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Width and height', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Chart area width', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Chart area width.', 'data-browser-by-ws' ); ?></div>
						<span class="ws_db_setting_description_lit" ><?php _e( 'Auto or manual', 'data-browser-by-ws' ); ?></span>
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_area_width_auto" type="checkbox" >
								<label for="all_chart_setting_instance22_area_width_auto"></label>
							</div> 
							<input type="text" name="all_chart_setting_instance22_area_width_px">
							
						</div>
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Chart area height', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Chart area height.', 'data-browser-by-ws' ); ?></div>
						<span class="ws_db_setting_description_lit" ><?php _e( 'Auto or manual', 'data-browser-by-ws' ); ?></span>
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_area_height_auto" type="checkbox" >
								<label for="all_chart_setting_instance22_area_height_auto"></label>
						</div> 
							<input type="text" name="all_chart_setting_instance22_area_height_px" >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Chart width', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Width of the chart, in pixels.', 'data-browser-by-ws' ); ?></div>
						<span class="ws_db_setting_description_lit" ><?php _e( 'Auto or manual', 'data-browser-by-ws' ); ?></span>
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_width_auto" type="checkbox">
								<label for="all_chart_setting_instance22_width_auto"></label>
							</div> 
							<input type="text" name="all_chart_setting_instance22_width_px" >	
						</div>
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Chart height', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Height of the chart, you can use : 100% , 500 ,190 ,... (without px) .', 'data-browser-by-ws' ); ?></div>
						<span class="ws_db_setting_description_lit" ><?php _e( 'Auto or manual', 'data-browser-by-ws' ); ?></span>
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_height_auto" type="checkbox" >
								<label for="all_chart_setting_instance22_height_auto"></label>
							</div> 
							<input type="text" name="all_chart_setting_instance22_height_px">
						</div>
					</div>
				</div>
				<!-- legend -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Legend', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Legend max lines', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Maximum number of lines in the legend. Set this to a number greater than one to add lines to your legend.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">	
							<input type="number" name="all_chart_setting_instance22_legend_max_lines">
						</div>
					</div>	
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Position', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Position of the legend.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
						 <select name="all_chart_setting_instance22_legend_position">
						  <option value="right" >right</option>
						  <option value="left">left</option>
						  <option value="top" >top</option>
						  <option value="bottom" >bottom</option>
						  <option value="labeled" >labeled</option>
						  <option value="none">none</option>
						</select>
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Alignment', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Alignment of the legend.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
						 <select name="all_chart_setting_instance22_legend_alignment">
						  <option value="auto" >auto</option>
						  <option value="start"  >start</option>
						  <option value="center" >center</option>
						  <option value="end">end</option>
						</select>
						</div>
					</div>
				</div>	
				<div class="ws_db_setting_section" >	
					<h5  class="ws_db_setting_title"  ><?php _e( 'Legend text style', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Specifying the legend text style.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
					<span class="ws_db_setting_description_lit" ><?php _e( 'Overwrite global text style for legend? ', 'data-browser-by-ws' ); ?></span>
					<div class="switch tiny">
						<input id="all_chart_setting_instance22_legend_text_style_overwrite" type="checkbox" >
						<label for="all_chart_setting_instance22_legend_text_style_overwrite"></label>
					</div> 
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_setting_description_lit" ><?php _e( 'Text color', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_legend_text_style_color" >
						</div>
					</div>		
					<div class="ws_db_setting_section" >
						<div class="ws_db_setting_description_lit" ><?php _e( 'Font name', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">	
							<input type="text" name="all_chart_setting_instance22_legend_text_style_font_name">
						</div>
					</div>		
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">	
							<span class="ws_db_setting_description_lit" ><?php _e( 'Bold or normal', 'data-browser-by-ws' ); ?></span>
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_legend_text_style_bold" type="checkbox" >
								<label for="all_chart_setting_instance22_legend_text_style_bold"></label>
							</div> 
						</div>
					</div>		
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">	
							<span class="ws_db_setting_description_lit" ><?php _e( 'Italic or normal', 'data-browser-by-ws' ); ?></span>
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_legend_text_style_italic" type="checkbox" >
								<label for="all_chart_setting_instance22_legend_text_style_italic"></label>
							</div> 
						</div>
					</div>		
					<div class="ws_db_setting_section" >
						<div class="ws_db_setting_description_lit" ><?php _e( 'Font size', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">	
							<input type="number" name="all_chart_setting_instance22_legend_text_style_font_size"  >
						</div> 
					</div>	
				</div>
				<!-- tooltip -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Tooltip', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Ignore bounds', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'If turned on, allows the drawing of tooltips to flow outside of the bounds of the chart on all sides.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_switch_block">
							<div class="data_table switch tiny">
								<input id="all_chart_setting_instance22_tooltip_ignore_bounds" type="checkbox"  >
								<label for="all_chart_setting_instance22_tooltip_ignore_bounds"></label>
							</div> 
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Tooltip show color Code', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'If turned on,  show colored squares next to the slice information in the tooltip.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_switch_block">
							<div class="data_table switch tiny">
								<input id="all_chart_setting_instance22_tooltip_show_color" type="checkbox">
								<label for="all_chart_setting_instance22_tooltip_show_color"></label>
							</div> 
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Tooltip trigger', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'The user interaction that causes the tooltip to be displayed.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
						 <select name="all_chart_setting_instance22_tooltip_trigger">
						  <option value="focus"  >focus</option>
						  <option value="selection" >selection</option>
						  <option value="none" >none</option>							  
						</select>
						</div>
					</div>
				</div>	
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Tooltip text style', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Specifying the tooltip text style.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
					<span> <?php _e( 'Overwrite global text style for tooltip?', 'data-browser-by-ws' ); ?> </span>
					<div class="switch tiny">
						<input id="all_chart_setting_instance22_tooltip_text_style_overwrite" type="checkbox" >
						<label for="all_chart_setting_instance22_tooltip_text_style_overwrite"></label>
					</div> 
					</div> 
					<div class="ws_db_setting_section" >
					<div class="ws_db_setting_description_lit" > <?php _e( 'Text color', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" class="ws_db_color_field" name="all_chart_setting_instance22_tooltip_text_style_color"  >
						</div> 
					</div> 		
					<div class="ws_db_setting_section" >
					<div class="ws_db_setting_description_lit" > <?php _e( 'Font name', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">	
							<input type="text" name="all_chart_setting_instance22_tooltip_text_style_font_name"  >
						</div> 
					</div> 		
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">	
							<span class="ws_db_setting_description_lit" > <?php _e( 'Bold or normal', 'data-browser-by-ws' ); ?></span>
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_tooltip_text_style_bold" type="checkbox"  >
								<label for="all_chart_setting_instance22_tooltip_text_style_bold"></label>
							</div> 
						</div> 
					</div> 		
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">	
							<span class="ws_db_setting_description_lit" > <?php _e( 'Italic or normal', 'data-browser-by-ws' ); ?></span>
							<div class="switch tiny">
								<input id="all_chart_setting_instance22_tooltip_text_style_italic" type="checkbox" >
								<label for="all_chart_setting_instance22_tooltip_text_style_italic"></label>
							</div> 
						</div> 
					</div> 		
					<div class="ws_db_setting_section" >
						<div class="ws_db_setting_description_lit" > <?php _e( 'Font size', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">	
							<input type="number" name="all_chart_setting_instance22_tooltip_text_style_font_size"  >
						</div> 
					</div> 
				</div>	
			</div>
			<!-- table ********************************************************************** -->
			<div class="ws_db_setting_for_table ws_db_hide_after_close" >
				<!-- width and height  -->
				<div class="ws_db_setting_section" >
					<div class="ws_db_option_max_length_in">
					<h5  class="ws_db_setting_title"  > <?php _e( 'Table width', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Width of the table, in pixels.', 'data-browser-by-ws' ); ?></div>
					<span class="ws_db_setting_description_lit" > <?php _e( 'Auto or manual', 'data-browser-by-ws' ); ?></span>
						<div class="switch tiny">
							<input id="table_chart22_width_auto" type="checkbox" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_width_auto'])){if($all_setting['table_chart_default_settings']['table_chart22_width_auto']=='true' ){ ?> checked <?php } }else{ ?> checked <?php }  ?> >
							<label for="table_chart22_width_auto"></label>
						</div> 
						<input type="text" name="table_chart22_width_px" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_width_px'])){ ?> value="<?php echo $all_setting['table_chart_default_settings']['table_chart22_width_px'];?>"<?php  }else{ ?> value="300px" <?php }  ?> >
					</div>
					<div class="ws_db_option_max_length_in">
					<h5  class="ws_db_setting_title"  > <?php _e( 'Table height', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Height of the table, in pixels.', 'data-browser-by-ws' ); ?></div>
					<span class="ws_db_setting_description_lit" > <?php _e( 'Auto or manual', 'data-browser-by-ws' ); ?></span>
						<div class="switch tiny">
							<input id="table_chart22_height_auto" type="checkbox" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_height_auto']) and $all_setting['table_chart_default_settings']['table_chart22_height_auto']=='true' ){?> checked <?php } ?> >
							<label for="table_chart22_height_auto"></label>
						</div> 
						<input type="text" name="table_chart22_height_px" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_height_px'])){ ?> value="<?php echo $all_setting['table_chart_default_settings']['table_chart22_height_px'];?>"<?php  }else{ ?> value="200px" <?php }  ?> >
					</div>
				</div>
				<!-- page -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  > <?php _e( 'Page', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Enable or disable paging through the data.', 'data-browser-by-ws' ); ?>  </div>
					<div class="ws_db_option_max_length_in">
					<div class="switch tiny">
						<input id="table_chart22_page" type="checkbox" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_page'])){if($all_setting['table_chart_default_settings']['table_chart22_page']=='true'){ ?> checked <?php } }else{ ?> checked <?php }  ?> >
						<label for="table_chart22_page"></label>
					</div> 
					</div> 
				</div>
				<!-- pageSize -->
				<div class="ws_db_setting_section" >
					<div class="ws_db_setting_title" > <?php _e( 'Page size', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_setting_description" > <?php _e( 'The number of rows in each page, when paging is enabled with the page option.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="number" name="table_chart22_page_size" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_page_size'])){ ?> value="<?php echo $all_setting['table_chart_default_settings']['table_chart22_page_size'];?>"<?php  }else{ ?> value="12"<?php } ?>   >
					</div>
				</div>
				<!-- pagingButtons 
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  >paging buttons</h5>
					<div> Sets a specified option for the paging buttons. </div>
					<div class="ws_db_option_max_length_in">
						<select name="table_chart22_paging_buttons">
						  <option value="auto"  <?php// if($all_setting['table_chart_default_settings']['table_chart22_paging_buttons'] == "auto" ){ echo 'selected="selected"'; }?> >auto</option>
						  <option value="prev"  <?php //if($all_setting['table_chart_default_settings']['table_chart22_paging_buttons'] == "prev" ){ echo 'selected="selected"'; }?> >prev</option>
						  <option value="next"  <?php// if($all_setting['table_chart_default_settings']['table_chart22_paging_buttons'] == "next" ){ echo 'selected="selected"'; }?> >next</option>
						  <option value="both"  <?php// if($all_setting['table_chart_default_settings']['table_chart22_paging_buttons'] == "both" ){ echo 'selected="selected"'; }?> >both</option>
						  <option value="number"  <?php// if($all_setting['table_chart_default_settings']['table_chart22_paging_buttons'] == "number" ){ echo 'selected="selected"'; }?> >number</option>
						</select>
					</div>
				</div>
				 rtlTable -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  > <?php _e( 'Rtl table', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Adds basic support for right-to-left languages (such as Arabic or Hebrew) by reversign the column order of the table, so that column zero is the rightmost column, and the last column is the leftmost column.  ', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
					<div class="switch tiny">
						<input id="table_chart22_rtl_table" type="checkbox" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_rtl_table']) and $all_setting['table_chart_default_settings']['table_chart22_rtl_table']=='true'){ ?> checked <?php } ?> >
						<label for="table_chart22_rtl_table"></label>
					</div>
					</div> 
				</div>
				<!-- scrollLeftStartPosition -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  > <?php _e( 'Scroll left start position', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Sets the horizontal scrolling position, in pixels, if the table has horizontal scroll bars because you have set the width property. The table will open scrolled that many pixels past the leftmost column. ', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="number" name="table_chart22_Start_Position" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_Start_Position'])){ ?> value="<?php echo $all_setting['table_chart_default_settings']['table_chart22_Start_Position'];?>"<?php  }else{ ?> value="0"<?php } ?>   >
					</div>
				</div>
				<!-- showRowNumber -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  > <?php _e( 'Show row number', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'If ON . shows the row number as the first column of the table. ', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
					<div class="switch tiny">
						<input id="table_chart22_show_row_number" type="checkbox" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_show_row_number']) and $all_setting['table_chart_default_settings']['table_chart22_show_row_number']=='true' ){ ?>  checked <?php } ?> >
						<label for="table_chart22_show_row_number"></label>
					</div>
					</div> 
				</div>
				<!-- sort -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  > <?php _e( 'Sort', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'If ON . sort columns when the user clicks a column heading. ', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
					<div class="switch tiny">
						<input id="table_chart22_sort" type="checkbox" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_sort'])){if($all_setting['table_chart_default_settings']['table_chart22_sort']=='true'){ ?> checked <?php } }else{ ?> checked <?php } ?> >
						<label for="table_chart22_sort"></label>
					</div> 
					</div> 
				</div>
				<!-- sortAscending -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  > <?php _e( 'Sort ascending', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'The order in which the initial sort column is sorted. ON for ascending, OFF for descending. Ignored if sortColumn is not specified.', 'data-browser-by-ws' ); ?>  </div>
					<div class="ws_db_option_max_length_in">
					<div class="switch tiny">
						<input id="table_chart22_sort_ascending" type="checkbox" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_sort_ascending'])){if($all_setting['table_chart_default_settings']['table_chart22_sort_ascending']=='true'){ ?> checked <?php } }else{ ?> checked <?php } ?> >
						<label for="table_chart22_sort_ascending"></label>
					</div> 
					</div> 
				</div>
				<!-- sortColumn -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  >  <?php _e( 'Sort column', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'An index of a column in the data table, by which the table is initially sorted. The column will be marked with a small arrow indicating the sort order.', 'data-browser-by-ws' ); ?> </div>
					<div class="ws_db_option_max_length_in">
						<input type="number" name="table_chart22_sort_column" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_sort_column'])){ ?> value="<?php echo $all_setting['table_chart_default_settings']['table_chart22_sort_column'];?>"<?php  }else{ ?> value="-1"<?php } ?>   >
					</div>
				</div>
				<!-- startPage -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  >   <?php _e( 'Start page', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'The first table page to display. Used only if page is in mode enable/event. ', 'data-browser-by-ws' ); ?> </div>
					<div class="ws_db_option_max_length_in">
						<input type="number" name="table_chart22_start_page" <?php if(isset($all_setting['table_chart_default_settings']['table_chart22_start_page'])){ ?> value="<?php echo $all_setting['table_chart_default_settings']['table_chart22_start_page'];?>"<?php  }else{ ?> value="0"<?php } ?>   >
					</div>
				</div>
			</div>
		</div>
	</span>
				
	<?php 
		
	}
}
?>