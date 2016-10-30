<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_input_ui_for_nav_path_tab' ) ) {
	function ws_db_input_ui_for_nav_path_tab($all_setting)
	{
		?>
			<div style="display:block;clear: both;"> </div>
			
			
			<div id="query_statment_wrapper_tid"  class="ws_db_setting_section_nav_path_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'Single query wrapper', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_QUERY_STATMENT_WRAPPER_TID_PATH; ?>" width="280px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">single_query</div>
					</div>	
				</div>
			</div>
			<div id="first_static_tid"  class="ws_db_setting_section_nav_path_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'First static (all count)', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_FIRST_STATIC_TID_PATH; ?>" width="280px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">first_static</div>
					</div>	
				</div>
			</div>
			<div id="group_element_tid"  class="ws_db_setting_section_nav_path_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'Group element', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_GROUP_ELEMENT_TID_PATH; ?>" width="280px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">group_element</div>
					</div>	
				</div>
			</div>
			<div id="the_sign_after_group_element_tid"  class="ws_db_setting_section_nav_path_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'The sign after group element', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_THE_SIGN_AFTER_GROUP_ELEMENT_TID_PATH; ?>" width="280px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">sign_after_group</div>
					</div>	
				</div>
			</div>
			<div id="dimension_element_tid"  class="ws_db_setting_section_nav_path_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'Dimension element', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_DIMENSION_ELEMENT_TID_PATH; ?>" width="280px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">dimension_element</div>
					</div>	
				</div>
			</div>
			<div id="the_sign_after_dimension_element_tid"  class="ws_db_setting_section_nav_path_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'The sign after dimension element', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_THE_SIGN_AFTER_DIMENSION_ELEMENT_TID_PATH; ?>" width="280px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">sign_after_dimension</div>
					</div>	
				</div>
			</div>
			<div id="value_element_tid"  class="ws_db_setting_section_nav_path_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'Value element', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_VALUE_ELEMENT_TID_PATH; ?>" width="280px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">value_element</div>
					</div>	
				</div>
			</div>
			<div id="number_element_tid"  class="ws_db_setting_section_nav_path_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'Number element', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_NUMBER_ELEMENT_TID_PATH; ?>" width="280px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">number_element</div>
					</div>	
				</div>
			</div>
			<div id="sign_before_and_after_number_element_tid"  class="ws_db_setting_section_nav_path_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'Sign before and after number element', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_SIGN_BEFORE_AND_AFTER_NUMBER_ELEMENT_TID_PATH; ?>" width="280px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">number_sign</div>
					</div>	
				</div>
			</div>
			<div id="delete_sign_tid"  class="ws_db_setting_section_nav_path_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'Delete sign', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_DELETE_SIGN_TID_PATH; ?>" width="280px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">delete_sign</div>
					</div>	
				</div>
			</div>
		  <div id="nav_path_hover_tid"  class="ws_db_setting_section_nav_path_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'Nav path hover', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_NAV_PATH_HOVER_UNHOVER_PATH; ?>" width="280px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">hover_unhover</div>
					</div>	
				</div>
			</div>
		  
		  
		<?php
///////////////////////////////////////////////////////////////////////	
//////////////////////////////////////////////////////////////////
	}
}
?>