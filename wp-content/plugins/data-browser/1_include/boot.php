<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_boot' ) ) {
	function ws_db_boot($where,$when,$who,$why,$data)
	{
		/* $where = data_browser_by_wide_soft_file  **********************************************/
		if($where=='data_browser_by_wide_soft_file'){
			if($when=='wsdb_initialization' and $who=='data_browser_by_wide_soft_file' and $why=='create_wsdb_item_in_admin_menu' ){
				add_action( 'admin_menu', 'ws_db_add_menu_page' );
			}elseif($when=='wsdb_initialization' and $who=='data_browser_by_wide_soft_file' and $why=='add_style_and_script'){
				ws_db_add_style_and_script_to_back_end();
				ws_db_add_style_and_script_to_front_end();
				ws_db_add_style_and_script_to_both();
			}elseif($when=='wsdb_initialization' and $who=='data_browser_by_wide_soft_file' and $why=='add_wsdb_shortcode_in_int'){
				add_action('init', 'ws_db_add_ws_data_browser_shortcode', 99); 
			}
		}
		/* $where = ws_db_ajax_php_file  **********************************************/
		elseif($where=='ws_db_ajax_php_file'){
			if($when=='an_ajax_call_run' and $who=='ws_db_ajax_php_file' and $why==''){
				$type_of_ajax_request=$_POST['type_of_ajax_request'];
				if($type_of_ajax_request=="row_of_data_table_clicked"
					or $type_of_ajax_request=="th_row_of_data_table_clicked"
					or $type_of_ajax_request=="dimension_type_element_of_data_clicked"
					or $type_of_ajax_request=="reset_element_of_path_clicked"
					or $type_of_ajax_request=="dimension_type_element_of_path_clicked"
					or $type_of_ajax_request=="dimension_element_of_path_clicked"
					or $type_of_ajax_request=="value_element_of_path_clicked"
					or $type_of_ajax_request=="number_element_of_path_clicked"
					or $type_of_ajax_request=="dimension_sign_of_path_clicked"
					or $type_of_ajax_request=="dimension_group_sign_of_path_clicked"
					or $type_of_ajax_request=="delete_element_of_path_clicked" ){
						$extracted_data = ws_db_extract_encrypted_data($_POST,'browser_screen_temporary_data');
						//
						//var_dump($extracted_data);
						if (isset($extracted_data['all_basic_info']['all_dimensions_black_list'])){
						global $all_dimensions_black_list;//also send black_list 
						$all_dimensions_black_list=$extracted_data['all_basic_info']['all_dimensions_black_list'];
						}
						//
						$this_browser_id =$_POST['this_browser_id'];
						$this_browser_id =(int)$this_browser_id;
						$browser_post_id = ws_db_get_browser_post_id($this_browser_id);
						ws_db_create_global_setting_variable($browser_post_id);
						ws_db_echo_all_data_browser_screen_content($extracted_data);
					}elseif($type_of_ajax_request=="post_list_pagination_number_clicked"){
						$extracted_data = ws_db_extract_encrypted_data($_POST,'browser_screen_temporary_data');
						$this_browser_id =$_POST['this_browser_id'];
						$this_browser_id =(int)$this_browser_id;
						$browser_post_id = ws_db_get_browser_post_id($this_browser_id);
						ws_db_create_global_setting_variable($browser_post_id);
						ws_db_echo_post_list($extracted_data);
					}elseif($type_of_ajax_request=="post_list_item_in_borwser_screen_item_clicked"){
						$this_browser_id =$_POST['this_browser_id'];
						$this_browser_id =(int)$this_browser_id;
						$browser_post_id = ws_db_get_browser_post_id($this_browser_id);
						ws_db_create_global_setting_variable($browser_post_id);
						ws_db_get_single_post($_POST['selected_post_id_in_post_list']);
					}elseif($type_of_ajax_request=="save_botton_in_setting_section_clicked"){
						$extracted_data = ws_db_extract_encrypted_data($_POST,'setting_interface_uploaded_data');
						if($_POST['type_of_save_request']=='saving_settings_to_unselected_browser_id'){
							$post_object = array(
							  'post_title'    => $_POST['this_browser_title_name'] ,
							  'post_content'  => $_POST['this_browser_title_name'],
							  'post_status'   => 'publish',
							  'post_type'   => 'browser_screens_cpt',
							);
							$browser_post_id = wp_insert_post( $post_object );
							$this_new_browser_id = ws_db_get_a_new_id_for_new_browser();
							update_post_meta($browser_post_id, 'wsdb_browser_id', $this_new_browser_id);
							$this_browser_id=$this_new_browser_id;
							///echo 'new browser create <br/>';
						}else{
							$this_browser_id =$_POST['this_browser_id'];
							$this_browser_id =(int)$this_browser_id;
							$browser_post_id = ws_db_get_browser_post_id($this_browser_id);
							$post_object = array(
							  'ID'   => $browser_post_id,
							  'post_title'    => $_POST['this_browser_title_name'] ,
							  'post_content'  => $_POST['this_browser_title_name'],
							  'post_status'   => 'publish',
							  'post_type'   => 'browser_screens_cpt',
							);
							wp_insert_post( $post_object );
							//echo 'a browser exsits <br/>';
						}
						$browser_post_id =(int)$browser_post_id;
						ws_db_ajax_save_base_setting($extracted_data,$browser_post_id);
						ws_db_create_global_setting_variable($browser_post_id);
						ws_db_option_menu_content($this_browser_id);
					}elseif($type_of_ajax_request=="save_and_close_botton_in_setting_section_clicked"){
						$extracted_data = ws_db_extract_encrypted_data($_POST,'setting_interface_uploaded_data');
						if($_POST['type_of_save_request']=='saving_settings_to_unselected_browser_id'){
							$post_object = array(
							  'post_title'    => $_POST['this_browser_title_name'] ,
							  'post_content'  => $_POST['this_browser_title_name'],
							  'post_status'   => 'publish',
							  'post_type'   => 'browser_screens_cpt',
							);
							$browser_post_id = wp_insert_post( $post_object );
							$this_new_browser_id = ws_db_get_a_new_id_for_new_browser();
							update_post_meta($browser_post_id, 'wsdb_browser_id', $this_new_browser_id);
							$this_browser_id=$this_new_browser_id;
							//echo 'new browser create <br/>';
						}else{
							$this_browser_id =$_POST['this_browser_id'];
							$this_browser_id =(int)$this_browser_id;
							$browser_post_id = ws_db_get_browser_post_id($this_browser_id);
							$post_object = array(
							  'ID'   => $browser_post_id,
							  'post_title'    => $_POST['this_browser_title_name'] ,
							  'post_content'  => $_POST['this_browser_title_name'],
							  'post_status'   => 'publish',
							  'post_type'   => 'browser_screens_cpt',
							);
							wp_insert_post( $post_object );
							//echo 'a browser exsits <br/>';
						}
						$browser_post_id =(int)$browser_post_id;
						//var_dump($browser_post_id);
						ws_db_ajax_save_base_setting($extracted_data,$browser_post_id);
						ws_db_get_browser_list(); 
					}elseif($type_of_ajax_request=="close_botton_in_setting_section_clicked"){
						ws_db_get_browser_list(); 
					}elseif($type_of_ajax_request=="reset_botton_in_setting_section_clicked"){
						if($_POST['type_of_save_request']=='saving_settings_to_unselected_browser_id'){
							$post_object = array(
							  'post_title'    => $_POST['this_browser_title_name'] ,
							  'post_content'  => $_POST['this_browser_title_name'],
							  'post_status'   => 'publish',
							  'post_type'   => 'browser_screens_cpt',
							);
							$browser_post_id = wp_insert_post( $post_object );
							$this_new_browser_id = ws_db_get_a_new_id_for_new_browser();
							update_post_meta($browser_post_id, 'wsdb_browser_id', $this_new_browser_id);
							//echo 'new browser create <br/>';
						}else{
							$this_browser_id =$_POST['this_browser_id'];
							$browser_post_id = ws_db_get_browser_post_id($this_browser_id);
							//echo 'a browser exsits <br/>';
						}
						$browser_post_id =(int)$browser_post_id;
						$an_empty_array = array();
						$returns = update_post_meta($browser_post_id, 'ws_db_all_setting', $an_empty_array );
						//echo 'the settings of this browser removed to complete reset oporion you most save this page<br/>';
						ws_db_create_global_setting_variable($browser_post_id);
						ws_db_option_menu_content($this_browser_id); 
					}elseif($type_of_ajax_request=="create_new_browser_botton_clicked"){
						$browser_post_id=0;
						$this_browser_id=0;
						ws_db_create_global_setting_variable($browser_post_id);
						ws_db_option_menu_content($this_browser_id);
					}elseif($type_of_ajax_request=="edit_botton_in_browsers_list_clicked"){
						$this_browser_id =$_POST['this_browser_id'];
						$this_browser_id =(int)$this_browser_id;
						$browser_post_id = ws_db_get_browser_post_id($this_browser_id);
						ws_db_create_global_setting_variable($browser_post_id);
						ws_db_option_menu_content($this_browser_id);
					}elseif($type_of_ajax_request=="delete_botton_in_browsers_list_clicked"){
						$this_browser_id =$_POST['this_browser_id'];
						$this_browser_id =(int)$this_browser_id;
						$browser_post_id = ws_db_get_browser_post_id($this_browser_id);
						wp_delete_post( $browser_post_id, true ); 
						ws_db_get_browser_list(); 
					}elseif($type_of_ajax_request=="duplicate_botton_in_browsers_list_clicked"){
						$this_browser_id =$_POST['this_browser_id'];
						$this_browser_id =(int)$this_browser_id;
						$browser_post_id = ws_db_get_browser_post_id($this_browser_id);
						$this_browser_object = get_post( $browser_post_id );
						$post_object = array(
							  'post_title'    => $this_browser_object->post_title .' -Copy' ,
							  'post_content'  => $this_browser_object->post_content .' -Copy' ,
							  'post_status'   => 'publish',
							  'post_type'   => 'browser_screens_cpt',
							);
							$duplicated_browser_post_id = wp_insert_post( $post_object );
							$this_new_browser_id = ws_db_get_a_new_id_for_new_browser();
							update_post_meta($duplicated_browser_post_id, 'wsdb_browser_id', $this_new_browser_id);
							$ws_db_all_setting_from_meta = get_post_meta($browser_post_id, 'ws_db_all_setting');
							$ws_db_all_setting_ss = $ws_db_all_setting_from_meta[0];
							$returns = update_post_meta($duplicated_browser_post_id, 'ws_db_all_setting', $ws_db_all_setting_ss);
							if($returns!== false){
							}else{
								echo 'An error occured<br/>';
								
							}
							ws_db_get_browser_list(); 
					}elseif($type_of_ajax_request=="get_values_of_Selected_dimension"){
						
						if($_POST['selected_value']!="NOT SELECTED"){
							?><div class="ws_db_setting_title"  style="margin-bottom: 4px;"  ><?php _e( 'Values', 'data-browser-by-ws' ); ?></div><?php
						}	
						
						if($_POST['selected_value']!="NOT SELECTED"){
							if($_POST['group'] == 'basic'){
								global $wpdb;
								$basic_query = "SELECT DISTINCT ".$_POST['selected_value']." FROM  $wpdb->posts; ";
								$this_basic_values = $wpdb->get_results($basic_query);
								?>
								<select  id="ws_db_default_query_part_select_input_value" onchange="" style="min-width: 130px;max-width: 200px; width: auto;  padding-right: 20px;" >
									<option value="NOT SELECTED">NOT SELECTED</option>
									<?php   foreach($this_basic_values as $object){
												$value = $object->$_POST['selected_value'];
												if($value==""){$value="EMPTY_STRING";}
												elseif($value==" "){$value="ONE_SPACE_STRING";}
												?><option value="<?php echo $value; ?>"><?php echo $value; ?></option><?php
									} ?>
								</select>
								<?php
								//var_dump($this_basic_values);
							
							}
						}
						if($_POST['selected_value']!="NOT SELECTED"){
							if($_POST['group'] == 'taxo'){
								$terms = get_terms( $_POST['selected_value'], array(
									'orderby'    => 'count',
									'hide_empty' => 0
								) );
								?>
								<select  id="ws_db_default_query_part_select_input_value" onchange="" style="min-width: 130px;max-width: 200px; width: auto;  padding-right: 20px;" >
									
									<?php  if(empty($terms)){ $not_selected="NO VALUE EXIST"; }else { $not_selected="NOT SELECTED"; } ?>
									<option value="NOT SELECTED"><?php echo $not_selected; ?></option>
									<?php   foreach($terms as $object){
												$term=$object->name;
												if($term==""){$term="EMPTY_STRING";}
												elseif($term==" "){$term="ONE_SPACE_STRING";}
												?><option value="<?php echo $term; ?>"><?php echo $term; ?></option><?php
									} ?>
								</select>
								<?php
							}
							
						}
						if($_POST['selected_value']!="NOT SELECTED"){
							if($_POST['group'] == 'field'){
								global $wpdb;
								$basic_query = "SELECT DISTINCT meta_value FROM  $wpdb->postmeta WHERE $wpdb->postmeta.meta_key ='".$_POST['selected_value']."'; ";
								$this_field_values = $wpdb->get_results($basic_query);
								if(empty($this_field_values)){ $not_selected="NO VALUE EXIST"; }else { $not_selected="NOT SELECTED"; } ?>
								<select  id="ws_db_default_query_part_select_input_value" onchange="" style="min-width: 130px;max-width: 200px; width: auto;  padding-right: 20px;" >
									<option value="NOT SELECTED"><?php echo $not_selected; ?></option>
									<?php   foreach($this_field_values as $object){
												$value = $object->meta_value;
												if($value==""){$value="EMPTY_STRING";}
												elseif($value==" "){$value="ONE_SPACE_STRING";}
												?><option value="<?php echo $value; ?>"><?php echo $value; ?></option><?php
									} ?>
								</select>
								<?php
								
							}
							
						}
						if($_POST['selected_value']!="NOT SELECTED"){
							?>
							<div style="width: 100%;" ></div>
							 <input type="text"  id="ws_db_default_query_add_a_value_to_value_select_input"  style="float: left;height: 28px; line-height: 20px; margin: 0 9px 0 0;padding: 3px 10px; width: 187px;" >
							 <button id="ws_db_default_query_add_a_value_to_value_select_botton" onclick="if_add_a_value_to_value_select_botton_in_setting_section_clicked();" style="margin:0px;" class="ws_db_save_botton  button tiny" type="button">Add to Values</button>
							<?php
						}
					}
			}
		}
		/* $where = back_end  **********************************************/
		elseif($where=='back_end'){
			if($when=='wsdb_admin_menu_item_clicked' and $who=='wsdb_menu_content' and $why=='see_and_manage_browsers'){
				?>	
				
				<div id="result_section_in_setting_ui" style="direction:ltr;">
					<?php ws_db_get_browser_list(); ?>
				<div><?php
			}elseif($when=='the_setting_page_for_a_browser_loaded' and $who=='ws_db_option_menu_content' and $why=='echo_js_object_for_all_style_setting_container_for_setting_page'){
				
			}elseif($when=='botton_for_create_or_manage_specific_browser_clicked' and $who=='ws_db_option_menu_content' and $why=='echo_a_browser_setting_page'){
				$this_browser_id = $data; 
				?>
				<?php if($this_browser_id !=0){  ?>
				<div id="ws_db_this_browser_id_setting_section" style="display:none;" ><?php echo $this_browser_id; ?></div>
				<?php }  ?>
				<?php if($this_browser_id !=0){
					$browser_post_id = ws_db_get_browser_post_id($this_browser_id);
					$this_browser_object = get_post( $browser_post_id ); 
					$this_browser_title = $this_browser_object->post_title;	
					//
					
					global $ws_db_all_setting;
					$all_setting_from_meta = get_post_meta($browser_post_id, 'ws_db_all_setting');
					$all_setting = $all_setting_from_meta[0];	
				}else{
					$this_browser_title = 'unnamed';
					$all_setting='';
					$browser_post_id = 0;
				}
				ws_db_echo_js_object_for_all_style_setting_container($browser_post_id);	

				

				?>
				
				
				
				
				<div id="ws_db_result_setting"></div>
				<div id="vtabs">
				  <ul  >
				  
				  <div style="float: left; margin:10px;"><input type="text" name="this_browser_title_name" style="width: 100%;float:left;padding:3px 10px;margin:0;height: auto;margin-right:5px;font-family: 'Open Sans';font-size: 12px;font-weight: bold;" value="<?php echo $this_browser_title; ?>"> <?php //ws_db_echo_terminal_bottons_for_opened_browser_setting(); ?></div>	
					<li class="ws_db_setting_tab_item" ><a href="#tabs-1"  style="word-break: break-all;overflow: auto;"><i class="fa fa-cogs"></i><?php _e( 'General', 'data-browser-by-ws' ); ?></a></li>
					<li class="ws_db_setting_tab_item" ><a href="#tabs-2" style="word-break: break-all;overflow: auto;"><i class="fa fa-pie-chart"></i><?php _e( 'Edit Charts', 'data-browser-by-ws' ); ?></a></li>
					<li class="ws_db_setting_tab_item" ><a href="#tabs-3" style="word-break: break-all;overflow: auto;"><i class="fa fa-cube "></i><?php _e( 'Edit Boxes', 'data-browser-by-ws' ); ?></a></li>
					<li class="ws_db_setting_tab_item" ><a href="#tabs-4" style="word-break: break-all;overflow: auto;"><i class="fa fa-location-arrow"></i><?php _e( 'Navigation Section ', 'data-browser-by-ws' ); ?></a></li>
					<li class="ws_db_setting_tab_item" ><a href="#tabs-5" style="word-break: break-all;overflow: auto;"><i class="fa fa-line-chart"></i><?php _e( 'Chart Section ', 'data-browser-by-ws' ); ?></a></li>
					<li class="ws_db_setting_tab_item" ><a href="#tabs-6" style="word-break: break-all;overflow: auto;"><i class="fa fa-list"></i><?php _e( 'Post List Section', 'data-browser-by-ws' ); ?></a></li>
					<li class="ws_db_setting_tab_item" ><a href="#tabs-7" style="word-break: break-all;overflow: auto;"><i class="fa fa-file-text"></i><?php _e( 'single Post Section', 'data-browser-by-ws' ); ?></a></li>
					<li class="ws_db_setting_tab_item" ><a href="#tabs-8" style="word-break: break-all;overflow: auto;"><i class="fa fa-filter"></i><?php _e( 'Default Query', 'data-browser-by-ws' ); ?></a></li>
					
				  </ul>		
				  <div id="tabs-1">
				  <?php ws_db_input_ui_for_general_setting_tab($all_setting); ?>
				  </div>
				  <div id="tabs-2">
				   <?php ws_db_input_ui_for_chart_customizer_tab($all_setting); ?>
				  </div>
				  <div id="tabs-3">
				   <?php ws_db_input_ui_for_edit_boxes_tab($all_setting); ?>
				  </div>
				  <div id="tabs-4">
						<?php ws_db_input_ui_for_nav_path_tab($all_setting); ?>
				  </div>
				  <div id="tabs-5">
					<?php ws_db_input_ui_for_analys_section_tab($all_setting); ?>
				  </div>
				  <div id="tabs-6">
					<?php ws_db_input_ui_for_post_list_tab($all_setting); ?>
				  </div>
				  <div id="tabs-7">
				   <?php ws_db_input_ui_for_single_post_tab($all_setting); ?>
				  </div>
				  <div id="tabs-8">
				   <?php ws_db_input_ui_for_default_query_tab($all_setting); ?>
				  </div>
				  
				  <?php ws_db_light_box_for_all_settings($all_setting); ?>
				</div>
				<div style="margin:10px;float: left;">
				<?php ws_db_echo_terminal_bottons_for_opened_browser_setting(); ?>
				<?php if(empty($all_setting)){
					?><div style="float:left;margin: -1px 5px;padding: 5px 14px;background-color: #ff6666;font-weight: bold;color: #ffffff;border-radius: 4px;"> the settings not sevad yet ! </div>
					<div style="display:block;clear: both;"> </div>
					<?php
				} ?>
				</div>
				<?php
			}elseif($when=='chart_section_in_setting_page_of_a_browser_is_printing' and $who=='ws_db_input_ui_for_analys_section_tab' and $why=='get_all_dimension_of_selected_post_to_use_them_as_chart'){
				$incoming_ajax_data=array();
				$data=ws_db_query($incoming_ajax_data);
				$due_to_function_call = "setting_page_is_loading";
				$all_dimensions = ws_db_get_all_dimensions_array_full($due_to_function_call,$data['posts']);
				return $all_dimensions;
			}elseif($when=='chart_section_in_setting_page_of_a_browser_is_printing' and $who=='ws_db_input_ui_for_analys_section_tab' and $why=='echoing_light_box_and_its_fields_for_sort_charts_to_setting_page_of_a_browser'){
				$all_setting = $data;
				ws_db_sort_charts_light_box_option($all_setting);
			}elseif($when=='chart_customizer_section_in_setting_page_of_a_browser_is_printing' and $who=='ws_db_input_ui_for_chart_customizer_tab' and $why=='echoing_light_box_and_its_fields_for_chart_customizer_to_setting_page_of_a_browser'){
				$all_setting = $data;
				ws_db_light_box_for_chart_default_settings($all_setting); 
			}elseif($when=='post_list_section_in_setting_page_of_a_browser_is_printing' and $who=='ws_db_input_ui_for_post_list_tab' and $why=='echoing_light_box_and_its_fields_for_post_list_to_setting_page_of_a_browser'){
				$all_setting = $data;
				ws_db_post_list_light_box_option($all_setting);  
			}elseif($when=='single_post_section_in_setting_page_of_a_browser_is_printing' and $who=='ws_db_input_ui_for_single_post_tab' and $why=='echoing_light_box_and_its_fields_for_single_post_to_setting_page_of_a_browser'){
				$all_setting = $data;
				ws_db_single_post_light_box_option($all_setting);   
			}elseif($when=='seve_series_bottons_are_printing' and $who=='ws_db_echo_terminal_bottons_for_opened_browser_setting' and $why=='need_to_ajax_loading_sign_inside_seve_bottons'){
				ws_db_echo_echo_ajax_loading_sign_backend();   
			}elseif($when=='data_browsers_list_is_printing' and $who=='ws_db_get_browser_list' and $why=='need_to_ajax_loading_sign_in_data_browser_list_page'){
				ws_db_echo_echo_ajax_loading_sign_backend();   
			}
		/* $where = front_end  **********************************************/	
		}elseif($where=='front_end'){
			if($when=='' and $who=='ws_db_echo_all_data_browser_screen_content' and $why=='echo_browser_to_page'){
				$incoming_ajax_data = $data;
				$data_from_ws_db_query=ws_db_query($incoming_ajax_data);
				$all_dimensions = ws_db_get_all_dimensions_array_full('browser_screen_is_loading',$data_from_ws_db_query['posts']);
				$browser_box_info_array=array('current_gruop_name'=>'no_gruop_name','current_element_name'=>'browser_box');
				?><div class="ws_db_browser_wrapper_class" style="<?php echo ws_db_inline_style_creator($browser_box_info_array); ?>" ><?php
					ws_db_echo_basic_info_to_client_browser($data_from_ws_db_query['all_basic_info']);
					ws_db_echo_navigation_path($data_from_ws_db_query['navigation_path'],$data_from_ws_db_query['all_basic_info']['base_post_ides']);
					ws_db_echo_data_tables($all_dimensions);
					ws_db_post_list_pagination_initialize($data_from_ws_db_query);
				?></div><?php
				
				global $an_data_browser_screen_printed_for_user;
				$an_data_browser_screen_printed_for_user=true;
			}elseif($when=='a_shortcode_ran_and_send_a_browser_id_to_server' and $who=='ws_db_echo_browser_screen_by_id' and $why=='echo_browser_to_page'){
				$this_browser_id = $data;
				return ws_db_browser_menu_content($this_browser_id);
			}elseif($when=='post_list_pagination_initializing' and $who=='ws_db_post_list_pagination_initialize' and $why=='echo_post_list_based_on_setting'){
				$current_post_ides_chunked = ws_db_echo_post_list($data);
				return $current_post_ides_chunked;
			}
		}elseif($where=='public_core'){
			if($when=='after_the_posts_queried' and $who=='ws_db_get_all_dimensions_array_full' and $why=='get_all_existing_dimensions_on_these_posts'){
				$posts = $data;
				$all_dimensions = array('all_dimensions_static'=>array(),'all_dimensions_taxonomy'=>array(),'all_dimensions_custom_field'=>array());
				foreach ( $posts as $post )
				{
					$static_dimensions = ws_db_get_static_dimensions($post);
					$taxonomy_dynamic_dimensions = ws_db_get_taxonomy_dynamic_dimensions($post);
					$custom_field_dynamic_dimensions = ws_db_get_custom_field_dynamic_dimensions($post);
					$all_dimensions = ws_db_insert_gained_dimensions_to_all_dimensions($static_dimensions ,$taxonomy_dynamic_dimensions ,$custom_field_dynamic_dimensions ,$all_dimensions);
				}
				return $all_dimensions;
			}
			
			
		}
	}
}
?>