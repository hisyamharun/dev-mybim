<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_input_ui_for_chart_customizer_tab' ) ) {
	function ws_db_input_ui_for_chart_customizer_tab($all_setting)
	{
		
		?>
			
					<div id="pie_chart_div_id"  class="ws_db_setting_section_nav_path_block"  >  
						<h5 class="ws_db_setting_title" ><?php _e( 'Pie Chart', 'data-browser-by-ws' ); ?></h5>
						<div  style="min-height:200px;max-height:200px;"><img src="<?php echo WS_DB_PIE_CHART_SAMPLE_PATH; ?>" width="160px"></div>	
						<div class="ws_db_setting_section" >
							<div>
								<div>
									<button type="button" class="button expand  round ws_db_open_light_box_of_a_chart_setting" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
								</div>
								<div class="ws_db_setting_group_name214" style="display:none;">chart_setting_section</div>
								<div class="ws_db_setting_element_name214" style="display:none;">pie</div>
							</div>	
						</div>
					</div>  
					<div id="donut_chart_div_id"  class="ws_db_setting_section_nav_path_block" >  
						<h5 class="ws_db_setting_title" ><?php _e( 'Donut Chart', 'data-browser-by-ws' ); ?></h5>
						<div  style="min-height:200px;max-height:200px;"><img src="<?php echo WS_DB_DONUT_CHART_SAMPLE_PATH; ?>" width="160px"></div>
						<div class="ws_db_setting_section" >
							<div>
								<div>
									<button type="button" class="button expand  round ws_db_open_light_box_of_a_chart_setting" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
								</div>
								<div class="ws_db_setting_group_name214" style="display:none;">chart_setting_section</div>
								<div class="ws_db_setting_element_name214" style="display:none;">donut</div>
							</div>	
						</div>
					</div> 
					<div id="bar_chart_div_id" class="ws_db_setting_section_nav_path_block" >  
						<h5 class="ws_db_setting_title" ><?php _e( 'Bar Chart', 'data-browser-by-ws' ); ?></h5>
						<div  style="min-height:200px;max-height:200px;"><img src="<?php echo WS_DB_BAR_CHART_SAMPLE_PATH; ?>" width="197px"></div>
						<div class="ws_db_setting_section" >
							<div>
								<div>
									<?php if(WS_DB_F == false){ ?>
									<button type="button" class="button expand  round ws_db_open_light_box_of_a_chart_setting" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
									<?php }else{ ?>
									<button type="button" class="button expand  round ws_db_open_light_box_of_a_chart_settings" disabled><?php _e( 'only in pro version', 'data-browser-by-ws' ); ?></button>
									<?php } ?>
								</div>
								<div class="ws_db_setting_group_name214" style="display:none;">chart_setting_section</div>
								<div class="ws_db_setting_element_name214" style="display:none;">bar</div>
							</div>	
						</div>
					</div> 
					<div id="column_chart_div_id" class="ws_db_setting_section_nav_path_block" >  
						<h5 class="ws_db_setting_title" ><?php _e( 'Column Chart', 'data-browser-by-ws' ); ?></h5>
						<div  style="min-height:200px;max-height:200px;"><img src="<?php echo WS_DB_COLUMN_CHART_SAMPLE_PATH; ?>" width="197px"></div>
						<div class="ws_db_setting_section" >
							<div>
								<div>
									<?php if(WS_DB_F == false){ ?>
									<button type="button" class="button expand  round ws_db_open_light_box_of_a_chart_setting" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
									<?php }else{ ?>
									<button type="button" class="button expand  round ws_db_open_light_box_of_a_chart_settings" disabled><?php _e( 'only in pro version', 'data-browser-by-ws' ); ?></button>
									<?php } ?>
								</div>
								<div class="ws_db_setting_group_name214" style="display:none;">chart_setting_section</div>
								<div class="ws_db_setting_element_name214" style="display:none;">column</div>
							</div>	
						</div>
					</div> 
					<div id="line_chart_div_id"  class="ws_db_setting_section_nav_path_block" >  
						<h5 class="ws_db_setting_title" ><?php _e( 'Line Chart', 'data-browser-by-ws' ); ?></h5>
						<div  style="min-height:200px;max-height:200px;"><img src="<?php echo WS_DB_LINE_CHART_SAMPLE_PATH; ?>" width="197px"></div>
						<div class="ws_db_setting_section" >
							<div>
								<div>
									<button type="button" class="button expand  round ws_db_open_light_box_of_a_chart_setting" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
								</div>
								<div class="ws_db_setting_group_name214" style="display:none;">chart_setting_section</div>
								<div class="ws_db_setting_element_name214" style="display:none;">line</div>
							</div>	
						</div>
					</div> 
					<div id="scatter_chart_div_id" class="ws_db_setting_section_nav_path_block" >  
						<h5 class="ws_db_setting_title" ><?php _e( 'Scatter Chart', 'data-browser-by-ws' ); ?></h5>
						<div  style="min-height:200px;max-height:200px;"><img src="<?php echo WS_DB_SCATTER_CHART_SAMPLE_PATH; ?>" width="182px"></div>
						<div class="ws_db_setting_section" >
							<div>
								<div>
									<button type="button" class="button expand  round ws_db_open_light_box_of_a_chart_setting" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
								</div>
								<div class="ws_db_setting_group_name214" style="display:none;">chart_setting_section</div>
								<div class="ws_db_setting_element_name214" style="display:none;">scatter</div>
							</div>	
						</div>
					</div> 
					<div id="area_chart_div_id" class="ws_db_setting_section_nav_path_block" >  
						<h5 class="ws_db_setting_title" ><?php _e( 'Area Chart', 'data-browser-by-ws' ); ?></h5>
						<div  style="min-height:200px;max-height:200px;"><img src="<?php echo WS_DB_AREA_CHART_SAMPLE_PATH; ?>" width="197px"></div>
						<div class="ws_db_setting_section" >
							<div>
								<div>
									<button type="button" class="button expand  round ws_db_open_light_box_of_a_chart_setting" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
								</div>
								<div class="ws_db_setting_group_name214" style="display:none;">chart_setting_section</div>
								<div class="ws_db_setting_element_name214" style="display:none;">area</div>
							</div>	
						</div>
					</div> 
					<div id="stepped_chart_div_id" class="ws_db_setting_section_nav_path_block" >  
						<h5 class="ws_db_setting_title" ><?php _e( 'Stepped Area Chart', 'data-browser-by-ws' ); ?></h5>
						<div  style="min-height:200px;max-height:200px;"><img src="<?php echo WS_DB_STEPPED_AREA_CHART_SAMPLE_PATH; ?>" width="182px"></div>
						<div class="ws_db_setting_section" >
							<div>
								<div>
									<button type="button" class="button expand  round ws_db_open_light_box_of_a_chart_setting" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
								</div>
								<div class="ws_db_setting_group_name214" style="display:none;">chart_setting_section</div>
								<div class="ws_db_setting_element_name214" style="display:none;">stepped</div>
							</div>	
						</div>
					</div> 
					<div id="table_chart_div_id" class="ws_db_setting_section_nav_path_block" >  
						<h5 class="ws_db_setting_title" ><?php _e( 'Table', 'data-browser-by-ws' ); ?></h5>
						<div  style="min-height:200px;max-height:200px;"><img src="<?php echo WS_DB_TABLE_SAMPLE_PATH; ?>" width="100px"></div>
						<div class="ws_db_setting_section" >
							<div>
								<div>
									<button type="button" class="button expand  round ws_db_open_light_box_of_a_chart_setting" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
								</div>
								<div class="ws_db_setting_group_name214" style="display:none;">chart_setting_section</div>
								<div class="ws_db_setting_element_name214" style="display:none;">table</div>
							</div>	
						</div>
					</div> 
						
					<?php 
						ws_db_boot('back_end','chart_customizer_section_in_setting_page_of_a_browser_is_printing','ws_db_input_ui_for_chart_customizer_tab','echoing_light_box_and_its_fields_for_chart_customizer_to_setting_page_of_a_browser',$all_setting);

	}
}
?>