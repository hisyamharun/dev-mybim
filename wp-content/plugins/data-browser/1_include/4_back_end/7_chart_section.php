<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_input_ui_for_analys_section_tab' ) ) {
	function ws_db_input_ui_for_analys_section_tab($all_setting)
	{
		global $ws_db_all_setting;
		$all_setting=$ws_db_all_setting;


	?>
	
	
	
	<div id="sort_analys_screen_243id"   class="ws_db_sort_section_12">  	
			<div id="sort_charts_sortable_element_yid" >  
				<h5  class="ws_db_setting_title" style="text-align: center;max-width: 800px;"><?php _e( 'Sort the charts', 'data-browser-by-ws' ); ?></h5>
				<div  class="ws_db_setting_description"  style="text-align: center;max-width: 800px;"><?php _e( 'Drag and drape your favorit source to the box . ', 'data-browser-by-ws' ); ?></div>
				<br/>
					<?php if(!array_key_exists("sort_charts_rr_content_for_sort_charts",$all_setting)){
						//
						$all_dimensions = ws_db_boot('back_end','chart_section_in_setting_page_of_a_browser_is_printing','ws_db_input_ui_for_analys_section_tab','get_all_dimension_of_selected_post_to_use_them_as_chart','');
						//
						$all_dimensions_static_t2=$all_dimensions['all_dimensions_static'];
						$all_dimensions_taxonomy_t2=$all_dimensions['all_dimensions_taxonomy'];
						$all_dimensions_custom_field_t2=$all_dimensions['all_dimensions_custom_field'];	
						//
						$all_dimensions_static_black_list=array();
						$all_dimensions_taxonomy_black_list=array();
						$all_dimensions_custom_field_black_list=array();
						//
						foreach($all_dimensions_static_t2 as $dimension_name=> $dimension_value_array){
							if (count($dimension_value_array)<$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_load_basic']){
								$all_dimensions_static_black_list[$dimension_name]=$dimension_name;
								unset($all_dimensions_static_t2[$dimension_name]);
							}
						}
						foreach($all_dimensions_taxonomy_t2 as $dimension_name=> $dimension_value_array){
							if (count($dimension_value_array)<$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_load_basic']){
								$all_dimensions_taxonomy_black_list[$dimension_name]=$dimension_name;
								unset($all_dimensions_taxonomy_t2[$dimension_name]);
							}
						}
						foreach($all_dimensions_custom_field_t2 as $dimension_name=> $dimension_value_array){
							if (count($dimension_value_array)<$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_load_basic']){
								$all_dimensions_custom_field_black_list[$dimension_name]=$dimension_name;
								unset($all_dimensions_custom_field_t2[$dimension_name]);
							}
						}
						$all_dimensions['all_dimensions_static']=$all_dimensions_static_t2;
						$all_dimensions['all_dimensions_taxonomy']=$all_dimensions_taxonomy_t2;
						$all_dimensions['all_dimensions_custom_field']=$all_dimensions_custom_field_t2;
						//					
						$existing_dimensions=array('basic'=>array() ,'taxo'=>array() ,'field'=>array() );
						foreach($all_dimensions['all_dimensions_static'] as $dimension_name => $array_of_values ){
							$existing_dimensions['basic'][]=$dimension_name;
						}
						foreach($all_dimensions['all_dimensions_taxonomy'] as $dimension_name => $array_of_values ){
							$existing_dimensions['taxo'][]=$dimension_name;
						}
						foreach($all_dimensions['all_dimensions_custom_field'] as $dimension_name => $array_of_values ){
							$existing_dimensions['field'][]=$dimension_name;
						}
						//
						$this_settings =array();
						//creat settings array for existing_dimensions
						foreach($existing_dimensions as $dimensions_group => $dimensions_array){
							foreach($dimensions_array as $key => $dimension_name){
								$this_settings[]=array('dimension_gruop'=> $dimensions_group,'dimension_name'=> $dimension_name,'dimension_name_visible_text'=> $dimension_name);
							}
						}
						//repair taxo visible name
						foreach($this_settings as $key=>$this_array){
							if($this_array['dimension_gruop']=='taxo'){
								$this_taxo_object=get_taxonomy( $this_array['dimension_name']);
								//$this_taxo_object->labels->name
								$this_settings[$key]['dimension_name_visible_text']=$this_taxo_object->labels->name;
							}
						}
					}else{
						$this_settings=$all_setting['sort_charts_rr_content_for_sort_charts'];
						$this_settings_basic=array();
						$this_settings_taxo=array();
						$this_settings_field=array();
						foreach($this_settings as $number =>$array){
							if($array['dimension_gruop']=='basic'){
								$this_settings_basic[]=$array['dimension_name'];
							}elseif($array['dimension_gruop']=='taxo'){
								$this_settings_taxo[]=$array['dimension_name'];
							}elseif($array['dimension_gruop']=='field'){
								$this_settings_field[]=$array['dimension_name'];
							}
						}
						$existing_dimensions=array('basic'=>$this_settings_basic ,'taxo'=>$this_settings_taxo ,'field'=>$this_settings_field );
					}
					$static_dimensions = array('post_author' ,'post_date' ,'post_status' ,'comment_status' ,'ping_status' ,'post_password','to_ping' ,'pinged','post_parent' ,'post_type' ,'post_mime_type','comment_count' ,'post_modified' ,'post_title' ,'post_content' ,'post_excerpt' );
					$taxonomies = get_taxonomies(array(),'objects'); 
					global $wpdb;
					$custom_fields = $wpdb->get_results("SELECT DISTINCT meta_key FROM  $wpdb->postmeta ");
					$dimensions_groups = array('basic'=>$static_dimensions ,'taxo'=>$taxonomies ,'field'=>$custom_fields );

					//var_dump($this_settings);
					?>
					
					
						<fieldset style="border: medium none; text-align: center;width: 49.8%;float: left;padding: 0;max-width: 400px;">
							<legend  class="ws_db_setting_description_lit"  style="padding: 0 0 10px;width: 100%;border: medium none;margin-bottom: 0 !important;" >Available Chart Sources</legend>
								<ul id="post_list_sortable2" class="list_of_available_chart_sources post_list_droptrue ready_to_use_dimensions" style="padding:20px;background:#a9a9a9;   height: 400px; overflow: auto; text-align:center;border: 1px solid #a9a9a9;word-break: break-all;">
									
									<?php foreach($dimensions_groups as $dimension_group_name=>$dimension_array){	?>
									
										<?php  foreach($dimension_array as $dimension){ ?>
											<?php if($dimension_group_name=='basic'){  $this_dimension_name= $dimension ;  $this_dimension_visible_name= $dimension ;$this_group_key='basic';}elseif($dimension_group_name=='taxo'){$this_dimension_name= $dimension->name ; $this_dimension_visible_name= $dimension->labels->name ; $this_group_key='taxo';}elseif($dimension_group_name=='field'){$this_dimension_name= $dimension->meta_key ;$this_dimension_visible_name= $dimension->meta_key ;$this_group_key='field';} ?>
												<?php if(!in_array($this_dimension_name, $existing_dimensions[$dimension_group_name])){?>
													<li class="ui-state-default" style="margin-bottom: 10px;padding: 2px;" >
														<div class="ws_db_setting_group_name214" style="display:none;">sort_charts_section</div>
														<div class="dimension_name_155" style="font-family: 'Open Sans';cursor: grab; width:100%; clear: both;font-size: 12px;font-weight: bold;"><span class="ws_db_open_light_box_option_sort_charts ws_db_float_left_only glyphicon glyphicon-edit" style="padding-left:4px;padding-right:4px;cursor: pointer;font-size: 14px;" ></span><?php  echo $this_dimension_visible_name;?><sup class="dimension_gruop_155" style=" font-size:10px;font-weight: bold;padding-left:5px;" ><?php echo $this_group_key; ?></sup><div class="dimension_name_156" style="display:none;"><?php  echo  $this_dimension_name;?></div></div>
													</li>
											<?php } ?>
										<?php } ?>	
									
									<?php  }	?>
									
								</ul>
								<div onclick="ws_db_transfer_all_li_to_another_ul('list_of_available_chart_sources','list_of_active_chart_Sources')" style="padding: 3px 20px;background-color: #dddda3;margin-left: 18px;margin-top: 3px;cursor: pointer;" ><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size: 22px;"></i></div>
						</fieldset>
						
						
					<fieldset style="border: medium none;text-align: center;width: 49.8%;float: left;padding: 0;max-width: 400px;">
						<legend   class="ws_db_setting_description_lit"  style="padding: 0 0 10px;width: 100%;border: medium none;margin-bottom: 0 !important;" >Content of chart section</legend>
						<ul id="sort_charts_sortable_target" class="list_of_active_chart_Sources post_list_droptrue" style="text-align:center; min-height: 400px;background-color: #f5f5dc; padding:20px;border: 1px solid #a9a9a9; word-break: break-all; max-height: 400px;overflow: auto;">
							<?php  foreach($this_settings as $number =>$array){	?>
								<li class="ui-state-default ui-sortable-handle" style="margin-bottom: 10px;padding: 2px;">
									<div class="ws_db_setting_group_name214" style="display:none;">sort_charts_section</div>
									<div class="dimension_name_155" style="font-family: 'Open Sans';cursor: grab; width:100%; clear: both;font-size: 12px;font-weight: bold;"><span class="ws_db_open_light_box_option_sort_charts ws_db_float_left_only glyphicon glyphicon-edit" style="font-size: 14px;padding-left:4px;padding-right:4px;cursor: pointer;" ></span><?php  echo $array['dimension_name_visible_text'];?><sup class="dimension_gruop_155" style=" font-size:10px;font-weight: bold;padding-left:5px;"><?php  echo $array['dimension_gruop'];?></sup><div class="dimension_name_156" style="display:none;"><?php echo $array['dimension_name']; ?></div></div>
								</li>
							<?php  }	?>
						</ul>
						<div onclick="ws_db_transfer_all_li_to_another_ul('list_of_active_chart_Sources' , 'list_of_available_chart_sources')"   style="padding: 3px 20px;background-color: #dddda3;margin-left: 18px;margin-top: 3px;cursor: pointer;"  ><i class="fa fa-angle-double-left" aria-hidden="true" style="font-size: 22px;"></i></div>	
					</fieldset> 
					

				<div style="display:block;clear: both;"> </div>
			</div>
			
			<div style="display:block;clear: both;"> </div>	
	</div>
			

	
	
	<?php 
	ws_db_boot('back_end','chart_section_in_setting_page_of_a_browser_is_printing','ws_db_input_ui_for_analys_section_tab','echoing_light_box_and_its_fields_for_sort_charts_to_setting_page_of_a_browser',$all_setting);
	}
}
?>