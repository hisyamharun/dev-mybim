<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_input_ui_for_edit_boxes_tab' ) ) {
	function ws_db_input_ui_for_edit_boxes_tab($all_setting)
	{
		?>
		 
			<div class="ws_db_setting_b_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'Edit data browser box ', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_DATA_BROWSER_BOX_PATH; ?>" width="193px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">no_gruop_name</div>
						<div class="ws_db_setting_element_name214" style="display:none;">browser_box</div>
					</div>	
				</div>
			</div>
		    <div   class="ws_db_setting_b_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'Navigation path section', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_NAV_PATH_SECTION_PATH; ?>" width="193px">
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">navigation_path_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">navigation_path_wrapper</div>
					</div>	
				</div>
			</div>
			<div id="" class="ws_db_setting_b_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'Chart section box style', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_CHART_SECTION_PATH; ?>" width="193px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">chart_section_manual</div>
						<div class="ws_db_setting_element_name214" style="display:none;">chart_section_box</div>
					</div>	
				</div>
			</div> 
			<div id="" class="ws_db_setting_b_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'single chart box style', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_SINGLE_CHART_BOX_PATH; ?>" width="193px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">chart_section_manual</div>
						<div class="ws_db_setting_element_name214" style="display:none;">single_chart_box</div>
					</div>	
				</div>
			</div>
			<div id="post_list_tab_list_box_xid"  class="ws_db_setting_b_block" >  
				<h5  class="ws_db_setting_title"  ><?php _e( 'Post list box', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_POST_LIST_BOX_PATH; ?>" width="193px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">post_list_manual_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">post_list_box</div>
					</div>	
				</div>
			</div>
			<div id="post_list_tab_list_item_box_xid"  class="ws_db_setting_b_block" >  
				<h5 class="ws_db_setting_title" ><?php _e( 'Post list item box', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_POST_LIST_ITEM_BOX_PATH; ?>" width="193px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">post_list_manual_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">post_list_item_box</div>
					</div>	
				</div>
			</div>
			<div id="post_list_tab_list_pagination_xid"  class="ws_db_setting_b_block" >  
				<h5 class="ws_db_setting_title" ><?php _e( 'Post list pagination', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_PAGINATION_CONTENT_PATH; ?>" width="193px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">post_list_manual_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">post_list_pagination</div>
					</div>	
				</div>
			</div>
			<div class="ws_db_setting_b_block" >  
				<h5 class="ws_db_setting_title" ><?php _e( 'Pagination box', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_PAGINATION_BOX_PATH; ?>" width="193px"> 
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">post_list_manual_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">post_list_pagination_box</div>
					</div>	
				</div>
			</div>
			
			<div id=""  class="ws_db_setting_b_block" >  
				<h5 class="ws_db_setting_title" ><?php _e( 'single post light box', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_SINGLE_POST_LIGHT_BOX_PATH; ?>" width="193px">
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">single_post_manual_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">single_post_light_box</div>
					</div>	
				</div>
			</div>
			<div id=""  class="ws_db_setting_b_block">  
				<h5 class="ws_db_setting_title" ><?php _e( 'single post box', 'data-browser-by-ws' ); ?></h5>
				<img src="<?php echo WS_DB_SINGLE_POST_BOX_PATH; ?>" width="193px">
				<div class="ws_db_setting_section" >
					<div>
						<div>
							<button type="button" class="button expand  round ws_db_open_css_setting_light_box" ><?php _e( 'Edit', 'data-browser-by-ws' ); ?></button>
						</div>
						<div class="ws_db_setting_group_name214" style="display:none;">single_post_manual_section</div>
						<div class="ws_db_setting_element_name214" style="display:none;">single_post_box</div>
					</div>	
				</div>
			</div>
		  
		  
		<?php	
	}
}
?>