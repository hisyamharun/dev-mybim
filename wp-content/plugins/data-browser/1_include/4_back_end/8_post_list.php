<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_input_ui_for_post_list_tab' ) ) {
	function ws_db_input_ui_for_post_list_tab($all_setting)
	{
		global $ws_db_all_setting;
		$all_setting=$ws_db_all_setting;
		?>
			
			
			
			<div id="post_list_tab_sortable_xid"  class="ws_db_sort_section_12">  
				<h5  class="ws_db_setting_title"  style="text-align: center;max-width: 800px;"><?php _e( 'Post list item content', 'data-browser-by-ws' ); ?></h5>
				<div  class="ws_db_setting_description"  style="text-align: center;max-width: 800px;"><?php _e( 'Drag and drape your favorit content to the box for post list items', 'data-browser-by-ws' ); ?></div>
				<br/>
				<?php if(!array_key_exists('post_list_rr_content_for_list_items',$all_setting)){
					$existing_dimensions=array('static_dimensions'=>array('ID','post_title','post_author','post_date','post_type') ,'taxonomies'=>array('category') ,'custom_fields'=>array('_thumbnail_id') );
					$this_settings =array(
										array('dimension_gruop'=> 'field','dimension_name'=> '_thumbnail_id','dimension_name_visible_text'=> '_thumbnail_id'),
										array('dimension_gruop'=> 'basic','dimension_name'=> 'post_title','dimension_name_visible_text'=> 'post_title'),
										array('dimension_gruop'=> 'basic','dimension_name'=> 'post_author','dimension_name_visible_text'=> 'post_author'),
										array('dimension_gruop'=> 'basic','dimension_name'=> 'post_date','dimension_name_visible_text'=> 'post_date'),
										array('dimension_gruop'=> 'basic','dimension_name'=> 'post_type','dimension_name_visible_text'=> 'post_type'),
										array('dimension_gruop'=> 'taxo','dimension_name'=> 'category','dimension_name_visible_text'=> 'categories'),
										array('dimension_gruop'=> 'basic','dimension_name'=> 'ID','dimension_name_visible_text'=> 'ID'),
										);
				}else{
					$this_settings=$all_setting['post_list_rr_content_for_list_items'];
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
					$existing_dimensions=array('static_dimensions'=>$this_settings_basic ,'taxonomies'=>$this_settings_taxo ,'custom_fields'=>$this_settings_field );
					//var_dump($this_settings);
				}
					$static_dimensions = array('ID','post_author' ,'post_date' ,'post_status' ,'comment_status' ,'ping_status' ,'post_password','to_ping' ,'pinged','post_parent' ,'post_type' ,'post_mime_type','comment_count' ,'post_modified' ,'post_title' ,'post_content' ,'post_excerpt' );
					$taxonomies = get_taxonomies(array(),'objects'); 
					global $wpdb;
					$custom_fields = $wpdb->get_results("SELECT DISTINCT meta_key FROM  $wpdb->postmeta ");
					$dimensions_groups = array('static_dimensions'=>$static_dimensions ,'taxonomies'=>$taxonomies ,'custom_fields'=>$custom_fields );

					//var_dump($this_settings);
					?>
					
					
					
						<fieldset style="border: medium none; text-align: center;width: 49.8%;float: left;padding: 0;max-width: 400px;">
							<legend  class="ws_db_setting_description_lit" style="padding: 0 0 10px;width: 100%;border: medium none;margin-bottom: 0 !important;" >Available Content Sources</legend>
								<ul id="post_list_sortable2" class="post_list_droptrue ready_to_use_dimensions list_of_available_post_list_contents" style="padding:20px;background:#a9a9a9;   height: 400px; overflow: auto; text-align:center;border: 1px solid #a9a9a9;word-break: break-all;">
									
									<?php foreach($dimensions_groups as $dimension_group_name=>$dimension_array){	?>
										<?php  foreach($dimension_array as $dimension){ ?>
											<?php if($dimension_group_name=='static_dimensions'){  $this_dimension_name= $dimension ; $this_dimension_visible_name= $dimension ; $this_group_key='basic';}elseif($dimension_group_name=='taxonomies'){$this_dimension_name= $dimension->name ; $this_dimension_visible_name= $dimension->labels->name ; $this_group_key='taxo';}elseif($dimension_group_name=='custom_fields'){$this_dimension_name= $dimension->meta_key ; $this_dimension_visible_name= $dimension->meta_key ; $this_group_key='field';} ?>
												<?php if(!in_array($this_dimension_name, $existing_dimensions[$dimension_group_name])){?>
													<li class="ui-state-default" style="margin-bottom: 10px;padding: 2px;" >
														<div class="ws_db_setting_group_name214" style="display:none;">post_list_section</div>
														<div class="dimension_name_154" style="font-family: 'Open Sans';cursor: grab; width:100%; clear: both;font-size: 12px;font-weight: bold;"><span class="ws_db_open_light_box_option_post_list ws_db_float_left_only glyphicon glyphicon-edit" style="font-size: 14px;padding-left:4px;padding-right:4px;cursor: pointer;" ></span><?php  echo $this_dimension_visible_name;?><sup class="dimension_gruop_154" style="font-size:10px;font-weight: bold;padding-left:5px;" ><?php echo $this_group_key; ?></sup><div class="dimension_name_153" style="display:none;"><?php  echo  $this_dimension_name;?></div></div>
													</li>
											<?php } ?>
										<?php } ?>	
									<?php  }	?>	
								</ul>
								<div onclick="ws_db_transfer_all_li_to_another_ul('list_of_available_post_list_contents','list_of_active_post_list_contents' )"   style="padding: 3px 20px;background-color: #dddda3;margin-left: 18px;margin-top: 3px;cursor: pointer;"  ><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size: 22px;"></i></div>	
						</fieldset>
						
					<fieldset style="border: medium none; text-align: center;width: 49.8%;float: left;padding: 0;max-width: 400px;">
						<legend  class="ws_db_setting_description_lit" style="padding: 0 0 10px;width: 100%;border: medium none;margin-bottom: 0 !important;" >Content of single post</legend>
						<ul id="post_list_sortable_target" class="post_list_droptrue list_of_active_post_list_contents"style="text-align:center; min-height: 400px;background-color: #f5f5dc; padding:20px;border: 1px solid #a9a9a9; word-break: break-all; max-height: 400px;overflow: auto;">
							<?php  foreach($this_settings as $number =>$array){	?>
								<li class="ui-state-default ui-sortable-handle" style="margin-bottom: 10px;padding: 2px;">
									<div class="ws_db_setting_group_name214" style="display:none;">post_list_section</div>
									<div class="dimension_name_154" style="font-family: 'Open Sans';cursor: grab; width:100%; clear: both;font-size: 12px;font-weight: bold;"><span class="ws_db_open_light_box_option_post_list ws_db_float_left_only glyphicon glyphicon-edit" style="font-size: 14px;padding-left:4px;padding-right:4px;cursor: pointer;" ></span><?php  echo $array['dimension_name_visible_text'];?><sup class="dimension_gruop_154" style="font-size:10px;font-weight: bold;padding-left:5px;"><?php  echo $array['dimension_gruop'];?></sup><div class="dimension_name_153" style="display:none;"><?php echo $array['dimension_name']; ?></div></div>
								</li>
							<?php  }	?>
						</ul>
						<div onclick="ws_db_transfer_all_li_to_another_ul('list_of_active_post_list_contents' , 'list_of_available_post_list_contents')"   style="padding: 3px 20px;background-color: #dddda3;margin-left: 18px;margin-top: 3px;cursor: pointer;"  ><i class="fa fa-angle-double-left" aria-hidden="true" style="font-size: 22px;"></i></div>	

					</fieldset>
					
				<br style="clear:both">
			</div>
			

			<div style="display:block;clear: both;"> </div>
			
		    <?php 
			
			ws_db_boot('back_end','post_list_section_in_setting_page_of_a_browser_is_printing','ws_db_input_ui_for_post_list_tab','echoing_light_box_and_its_fields_for_post_list_to_setting_page_of_a_browser',$all_setting);
	}
}
?>