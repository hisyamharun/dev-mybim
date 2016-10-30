<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_input_ui_for_default_query_tab' ) ) {
	function ws_db_input_ui_for_default_query_tab($all_setting)
	{
		if (isset($all_setting['default_queries'])){
		$default_queries=$all_setting['default_queries'];
		}else{
			$default_queries=array();
		}
		?>
		
		<div style="min-height: 600px;" >
			<h5  class="ws_db_setting_title" style="text-align: center;"  ><?php _e( 'Default Queries', 'data-browser-by-ws' ); ?> </h5>
			
			<div id="default_queries_container_id" style=" " > 
				<p class="ws_db_default_no_default_query_founded" <?php if(!empty($default_queries)){ ?> style="display:none;" <?php } ?> ><?php _e( 'No Default Query', 'data-browser-by-ws' ); ?></p>
				<?php  foreach($default_queries as $array){
							if($array['query_type']=="level_one"){
								?>
								<div class="ws_db_default_query_single_query" style=" background-color: #88b9ff;" >
									<span class="ws_db_default_query_type_part" style="display:none;"><?php echo $array['query_type']; ?></span>
									<span class=""><?php echo $array['group']; ?></span>
									<span class="ws_db_default_query_first_delimiter_part" style="display:none;"> : </span>
									<span class="ws_db_default_query_dimension_part" style="display:none;"><?php echo $array['dimension']; ?></span>
									<span  class="ws_db_default_query_second_delimiter_part" style="display:none;" > : </span>
									<span class="ws_db_default_query_value_part"  style="display:none;"><?php echo $array['value']; ?></span>
									<i class="fa fa-times-circle ws_db_default_query_delete_icon_part"  ></i>
								</div>
								<?php
							}elseif($array['query_type']=="level_two"){
								?>
								<div class="ws_db_default_query_single_query"  style=" background-color: #88b9ff;" >
									<span class="ws_db_default_query_type_part" style="display:none;"><?php echo $array['query_type']; ?></span>
									<span class="ws_db_default_query_group_part"><?php echo $array['group']; ?></span>
									<span  class="ws_db_default_query_first_delimiter_part" > : </span>
									<span class="ws_db_default_query_dimension_part" ><?php echo $array['dimension']; ?></span>
									<span  class="ws_db_default_query_second_delimiter_part" style="display:none;" > : </span>
									<span class="ws_db_default_query_value_part"  style="display:none;"><?php echo $array['value']; ?></span>
									<i class="fa fa-times-circle ws_db_default_query_delete_icon_part"  ></i>
								</div>
								<?php
							}elseif($array['query_type']=="level_three"){
								?>
								<div class="ws_db_default_query_single_query"  style=" background-color: #88b9ff;" >
									<span class="ws_db_default_query_type_part" style="display:none;"><?php echo $array['query_type']; ?></span>
									<span class="ws_db_default_query_group_part"><?php echo $array['group']; ?></span>
									<span  class="ws_db_default_query_first_delimiter_part" > : </span>
									<span class="ws_db_default_query_dimension_part" ><?php echo $array['dimension']; ?></span>
									<span  class="ws_db_default_query_second_delimiter_part"  > : </span>
									<span class="ws_db_default_query_value_part"  ><?php echo $array['value']; ?></span>
									<i class="fa fa-times-circle ws_db_default_query_delete_icon_part" ></i>
								</div>
								<?php
							}
				
				}   ?>
			</div>
			
			<div class="ws_db_default_query_add_new_query_system_box" >
				<button id="ws_db_default_query_add_new_query_botton" onclick="if_add_new_default_query_botton_in_setting_section_clicked();" style="margin:10px;background-color: #9cee1e;font-family: Verdana;font-size: 12px;" class="ws_db_save_botton  button tiny" type="button">Add New</button>
				<div id="ws_db_default_query_box_for_slect_query_system" style="display:none;" >
				
					<div id="group_select_box_default_query" style="overflow: hidden;" > 
						<div class="ws_db_setting_title"  style="margin-bottom: 4px;"  ><?php _e( 'Groups', 'data-browser-by-ws' ); ?></div>
						<select id="ws_db_default_query_group_select_input" class="ws_db_default_query_select_group" onchange="ws_db_default_query_group_select(this);" style="min-width: 100px; width: auto; padding-right: 20px;" >
							<option value="NOT SELECTED">NOT SELECTED</option>
							<option value="basic">basic</option>
							<option value="taxo">taxo</option>
							<option value="field">field</option>
						</select> 
					</div>		
					<?php 
					$static_dimensions = array('ID','post_author' ,'post_date' ,'post_status' ,'comment_status' ,'ping_status' ,'post_password','to_ping' ,'pinged','post_parent' ,'post_type' ,'post_mime_type','comment_count' ,'post_modified' ,'post_title'  );
					$taxonomies = get_taxonomies(array(),'objects'); 
					global $wpdb;
					$custom_fields = $wpdb->get_results("SELECT DISTINCT meta_key FROM  $wpdb->postmeta ");
					?>
					<div id="basic_select_box_default_query" style="overflow: hidden;display:none;" > 
						<div class="ws_db_setting_title"  style="margin-bottom: 4px;"  ><?php _e( 'Basic Dimensions', 'data-browser-by-ws' ); ?></div>
						<select id="ws_db_default_query_basic_select_input" class="ws_db_default_query_select_dimension" onchange="ws_db_default_query_dimension_select_box(this ,'basic');" style="min-width: 130px; width: auto; padding-right: 20px;" >
							<option value="NOT SELECTED">NOT SELECTED</option>
							<?php   foreach($static_dimensions as $dimension_name){
										?><option value="<?php echo $dimension_name; ?>"><?php echo $dimension_name; ?></option><?php
							} ?>
						</select>
					</div>		
					<div id="taxo_select_box_default_query" style="overflow: hidden;display:none;" > 
						<div class="ws_db_setting_title"  style="margin-bottom: 4px;" ><?php _e( 'Taxo Dimensions', 'data-browser-by-ws' ); ?></div>
						<select id="ws_db_default_query_taxo_select_input" class="ws_db_default_query_select_dimension" onchange="ws_db_default_query_dimension_select_box(this ,'taxo');" style="min-width: 130px; width: auto; padding-right: 20px;" >
							<option value="NOT SELECTED">NOT SELECTED</option>
							<?php   foreach($taxonomies as $object){
										$dimension_name = $object->name;
										$this_dimension_visible_name= $object->labels->name ;
										?><option value="<?php echo $dimension_name; ?>"><?php echo $this_dimension_visible_name; ?></option><?php
							} ?>
						</select> 
					</div>	
					<div id="field_select_box_default_query" style="overflow: hidden;display:none;" > 
						<div class="ws_db_setting_title" style="margin-bottom: 4px;" ><?php _e( 'Field Dimensions', 'data-browser-by-ws' ); ?></div>
						<select id="ws_db_default_query_field_select_input" class="ws_db_default_query_select_dimension" onchange="ws_db_default_query_dimension_select_box(this ,'field');" style="min-width: 130px; width: auto;  padding-right: 20px;" >
							<option value="NOT SELECTED">NOT SELECTED</option>
							<?php   foreach($custom_fields as $object){
										$dimension_name = $object->meta_key;
										?><option value="<?php echo $dimension_name; ?>"><?php echo $dimension_name; ?></option><?php
							} ?>
						</select> 
					</div>
					<i class="fa fa-spinner fa-pulse ws_db_default_query_during_ajax_sign" style="display:none;" ></i>
					<div id="values_of_Selected_dimension_container_id" style="overflow: hidden;" > 
				
					</div>
					<button id="ws_db_default_query_cancel_this_query_botton" onclick="if_cancel_this_query_botton_in_setting_section_clicked();"  style="margin:10px;background-color: #ffff71;font-family: Verdana;font-size: 12px;" style="margin:10px;" class="ws_db_save_botton  button tiny" type="button">Cancel</button>
					<button id="ws_db_default_query_add_this_query_botton" onclick="if_add_this_default_query_botton_in_setting_section_clicked();"  style="margin:10px;background-color: #9cee1e;font-family: Verdana;font-size: 12px;" class="ws_db_save_botton  button tiny" type="button">Add</button>
				</div>
			</div>
			
			
		</div>	
		<?php 

	}
}
?>