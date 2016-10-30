<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_light_box_for_all_default_settings' ) ) {
	function ws_db_light_box_for_all_settings($all_setting)
	{
		
	?>
	<span  style="display:none" >
			<div id="ws_db_light_box_for_all_default_settings_id" style="background-color:white;padding: 38px 20px;" >
			<!--  for wrappers  ********************************************************************** -->
			<div class="ws_db_setting_for_wrappers ws_db_hide_after_close2"  >
				<!-- attention -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><img width="20px"  src="<?php echo WS_DB_ATTENTION_HIT_PATH ?>" /> <?php _e( 'Attention ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'This is a wrapper element , this element contain child elements and they have their own settings such as font settings. ', 'data-browser-by-ws' ); ?></div>
				</div>
			</div> 
			<!--  for post_list_manual_section pagination ********************************************************************** -->
			<div class="ws_db_setting_for_post_list_manual_section_pagination ws_db_hide_after_close2"  >
				<!-- post per page -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Post per page', 'data-browser-by-ws' ); ?> </h5>
					<div class="ws_db_setting_description" ><?php _e( 'Set post per page number.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="number"  name="post_list_pagination315_post_per_page"  <?php if(isset($all_setting['post_list_pagination315']['post_list_pagination315_post_per_page'])){ ?> value="<?php echo $all_setting['post_list_pagination315']['post_list_pagination315_post_per_page'];?>"<?php  }else{ ?> value="12"<?php } ?>  >
					</div> 
				</div>
				<!-- maxVisible -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Max visible pagination button ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Set the max visible pagination button.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="number"  name="post_list_pagination315_max_visible_pagination"  <?php if(isset($all_setting['post_list_pagination315']['post_list_pagination315_max_visible_pagination'])){ ?> value="<?php echo $all_setting['post_list_pagination315']['post_list_pagination315_max_visible_pagination'];?>"<?php  }else{ ?> value="10"<?php } ?>  >
					</div> 
				</div>
				<!-- alternative text for "next sign" -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Alternative for "next sign" ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Your custom text to replace the "next sign".', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="text"  name="post_list_pagination315_alternative_for_next_sign"  <?php if(isset($all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_next_sign'])){ ?> value="<?php echo $all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_next_sign'];?>"<?php  }else{ ?> value="»"<?php } ?>  >
					</div> 
				</div>
				<!-- alternative text for "prev sign" -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Alternative for "prev sign" ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Your custom text to replace the "prev sign".', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="text"  name="post_list_pagination315_alternative_for_prev_sign"  <?php if(isset($all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_prev_sign'])){ ?> value="<?php echo $all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_prev_sign'];?>"<?php  }else{ ?> value="«"<?php } ?>  >
					</div> 
				</div>
				<!-- alternative text for "first" button -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Alternative for "first" button ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Your custom text to replace the "first" button.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="text"  name="post_list_pagination315_alternative_for_first_button"  <?php if(isset($all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_first_button'])){ ?> value="<?php echo $all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_first_button'];?>"<?php  }else{ ?> value="first"<?php } ?>  >
					</div> 
				</div>
				<!-- alternative text for "last" button -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Alternative for "last" button ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Your custom text to replace the "last" button.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="text"  name="post_list_pagination315_alternative_for_last_button"  <?php if(isset($all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_last_button'])){ ?> value="<?php echo $all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_last_button'];?>"<?php  }else{ ?> value="last"<?php } ?>  >
					</div> 
				</div>
			</div> 
			<!--  for analys_section_section tabs ********************************************************************** -->
			<div class="ws_db_setting_for_analys_section_section_tabs ws_db_hide_after_close2"  >
				
			</div> 
			<!--  for navigation_path_section first_static ********************************************************************** -->
			<div class="ws_db_setting_for_navigation_path_section_first_static ws_db_hide_after_close2"  >
				<!-- alternative text for "all" -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Alternative text for "all" ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Your custom text to replace the "all" text   ', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="text"  name="nav_path11_first_static_alternative_text"  <?php if(isset($all_setting['nav_path_first_static_settings']['nav_path11_first_static_alternative_text'])){ ?> value="<?php echo $all_setting['nav_path_first_static_settings']['nav_path11_first_static_alternative_text'];?>"<?php  }else{ ?> value="all"<?php } ?>  >
					</div> 
				</div>
			</div> 
			<!--  for navigation_path_section group_element ********************************************************************** -->
			<!-- alternative text for "group element" -->
			<div class="ws_db_setting_for_navigation_path_section_group_element ws_db_hide_after_close2"  >
				<div class="ws_db_setting_section" >	
					<h5  class="ws_db_setting_title"  ><?php _e( 'Text for group names ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_option_max_length_warper">
						<div class="ws_db_option_max_length_in">
							<div><?php _e( 'Alternative text for basic', 'data-browser-by-ws' ); ?></div>
							<input type="text" name="nav_path11_group_element_alternative_text_basic" <?php if(isset($all_setting['nav_path_group_element_settings']['nav_path11_group_element_alternative_text_basic'])){ ?> value="<?php echo $all_setting['nav_path_group_element_settings']['nav_path11_group_element_alternative_text_basic'];?>"<?php  }else{ ?> value="basic"<?php } ?>  >
						</div>
						<div class="ws_db_option_max_length_in">
							<div><?php _e( 'Alternative text for taxo', 'data-browser-by-ws' ); ?></div>
							<input type="text" name="nav_path11_group_element_alternative_text_taxo" <?php if(isset($all_setting['nav_path_group_element_settings']['nav_path11_group_element_alternative_text_taxo'])){ ?> value="<?php echo $all_setting['nav_path_group_element_settings']['nav_path11_group_element_alternative_text_taxo'];?>"<?php  }else{ ?> value="taxo"<?php } ?>  >
						</div>
						<div class="ws_db_option_max_length_in">
							<div><?php _e( 'Alternative text for field', 'data-browser-by-ws' ); ?></div>
							<input type="text" name="nav_path11_group_element_alternative_text_field" <?php if(isset($all_setting['nav_path_group_element_settings']['nav_path11_group_element_alternative_text_field'])){ ?> value="<?php echo $all_setting['nav_path_group_element_settings']['nav_path11_group_element_alternative_text_field'];?>"<?php  }else{ ?> value="field"<?php } ?>  >
						</div>
					</div>
				</div>
			</div>
			<!--  for navigation_path_section sign_after_group ********************************************************************** -->
			<!-- alternative text for "sign after group element" -->
			<div class="ws_db_setting_for_navigation_path_section_sign_after_group ws_db_hide_after_close2"  >
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Alternative text for "sign after group element" ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Your custom text to replace the "sign after group element" text. ', 'data-browser-by-ws' ); ?>  </div>
					<div class="ws_db_option_max_length_in">
						<input type="text"  name="nav_path11_sign_after_group_alternative_text"  <?php if(isset($all_setting['nav_path_sign_after_group_settings']['nav_path11_sign_after_group_alternative_text'])){ ?> value="<?php echo $all_setting['nav_path_sign_after_group_settings']['nav_path11_sign_after_group_alternative_text'];?>"<?php  }else{ ?> value=" : "<?php } ?>  >
					</div> 
				</div>
			</div> 
			<!--  for navigation_path_section sign_after_dimension ********************************************************************** -->
			<div class="ws_db_setting_for_navigation_path_section_sign_after_dimension ws_db_hide_after_close2"  >
				<!-- alternative text for "sign after dimension element" -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Alternative text for "sign after dimension element"', 'data-browser-by-ws' ); ?> </h5>
					<div class="ws_db_setting_description" ><?php _e( 'Your custom text to replace the "sign after dimension element" text. ', 'data-browser-by-ws' ); ?>  </div>
					<div class="ws_db_option_max_length_in">
						<input type="text"  name="nav_path11_sign_after_dimension_alternative_text"  <?php if(isset($all_setting['nav_path_sign_after_dimension_settings']['nav_path11_sign_after_dimension_alternative_text'])){ ?> value="<?php echo $all_setting['nav_path_sign_after_dimension_settings']['nav_path11_sign_after_dimension_alternative_text'];?>"<?php  }else{ ?> value=" : "<?php } ?>  >
					</div> 
				</div>
			</div> 
			<!--  for navigation_path_section number_sign ********************************************************************** -->
			<div class="ws_db_setting_for_navigation_path_section_number_sign ws_db_hide_after_close2"  >
				<!-- alternative text for "sign before number element" -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Alternative text for "sign before number element"', 'data-browser-by-ws' ); ?> </h5>
					<div class="ws_db_setting_description" ><?php _e( 'Your custom text to replace the "sign before number element" text.', 'data-browser-by-ws' ); ?>   </div>
					<div class="ws_db_option_max_length_in">
						<input type="text"  name="nav_path11_number_sign_before_alternative_text"  <?php if(isset($all_setting['nav_path_number_sign_settings']['nav_path11_number_sign_before_alternative_text'])){ ?> value="<?php echo $all_setting['nav_path_number_sign_settings']['nav_path11_number_sign_before_alternative_text'];?>"<?php  }else{ ?> value="["<?php } ?>  >
					</div> 
				</div>
				<!-- alternative text for "sign after number element" -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Alternative text for "sign after number element" ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Your custom text to replace the "sign after number element" text.  ', 'data-browser-by-ws' ); ?> </div>
					<div class="ws_db_option_max_length_in">
						<input type="text"  name="nav_path11_number_sign_after_alternative_text"  <?php if(isset($all_setting['nav_path_number_sign_settings']['nav_path11_number_sign_after_alternative_text'])){ ?> value="<?php echo $all_setting['nav_path_number_sign_settings']['nav_path11_number_sign_after_alternative_text'];?>"<?php  }else{ ?> value="]"<?php } ?>  >
					</div> 
				</div>
			</div> 
			<!--  for navigation_path_section delete_sign ********************************************************************** -->
			<div class="ws_db_setting_for_navigation_path_section_delete_sign ws_db_hide_after_close2"  >
				<!-- alternative image for "delete sign" -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Image for "delete sign" ', 'data-browser-by-ws' ); ?></h5>
					
					<div class="ws_db_option_max_length_in">
					<div><?php _e( 'Image url including "http://" ', 'data-browser-by-ws' ); ?> </div>
						<input type="text"  name="nav_path11_delete_sign_alternative_image_url"  <?php if(isset($all_setting['nav_path_delete_sign_settings']['nav_path11_delete_sign_alternative_image_url'])){ ?> value="<?php echo $all_setting['nav_path_delete_sign_settings']['nav_path11_delete_sign_alternative_image_url'];?>"<?php  }else{ ?> value="<?php echo WS_DB_DELETE_FROM_PATH;?>"<?php } ?>  >
					</div> 
					<div class="ws_db_option_max_length_in">
					<div><?php _e( 'Image width ', 'data-browser-by-ws' ); ?> </div>
						<input type="text"  name="nav_path11_delete_sign_image_width"  <?php if(isset($all_setting['nav_path_delete_sign_settings']['nav_path11_delete_sign_image_width'])){ ?> value="<?php echo $all_setting['nav_path_delete_sign_settings']['nav_path11_delete_sign_image_width'];?>"<?php  }else{ ?> value="14px"<?php } ?>  >
					</div> 
				</div>
				<!--  text for "delete sign" -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Alternative text for "delete sign text"', 'data-browser-by-ws' ); ?> </h5>
					<div class="ws_db_setting_description" ><?php _e( 'If you enter text to this field it will be visible before "delete image sign" and if you leave "delete image sign" address empty this text will be visible only. ', 'data-browser-by-ws' ); ?> </div>
					<div class="ws_db_option_max_length_in">
						<input type="text"  name="nav_path11_delete_sign_alternative_text"  <?php if(isset($all_setting['nav_path_delete_sign_settings']['nav_path11_delete_sign_alternative_text'])){ ?> value="<?php echo $all_setting['nav_path_delete_sign_settings']['nav_path11_delete_sign_alternative_text'];?>"<?php  }else{ ?> value=""<?php } ?>  >
					</div> 
				</div>
			</div> 
			<!--  for navigation_path_section hover_unhover ********************************************************************** -->
			<div class="ws_db_setting_for_navigation_path_section_hover_unhover ws_db_hide_after_close2"  >
				<!--hover background color For areas that will be remained  -->
				<div  class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Will remain background color ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( ' Hover background color for areas that will remain after click.  ', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="text" class="ws_db_color_field" name="nav_path11_hover_remained_areas"  <?php if(isset($all_setting['nav_path_hover_unhover_settings']['nav_path11_hover_remained_areas'])){ ?> value="<?php echo $all_setting['nav_path_hover_unhover_settings']['nav_path11_hover_remained_areas'];?>"<?php  }else{ ?> value="#a9ffa9"<?php } ?>  >
					</div> 
				</div>
				<!--hover background color For areas that will be removed  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Will be removed background color ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'Hover background color for areas that will be removed after click.  ', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
						<input type="text" class="ws_db_color_field" name="nav_path11_hover_deleted_areas"  <?php if(isset($all_setting['nav_path_hover_unhover_settings']['nav_path11_hover_deleted_areas'])){ ?> value="<?php echo $all_setting['nav_path_hover_unhover_settings']['nav_path11_hover_deleted_areas'];?>"<?php  }else{ ?> value="#ffd3d3"<?php } ?>  >
					</div> 
				</div>
			</div> 
			
			<!--  public ********************************************************************** -->
			<div class="ws_db_setting_for_public ws_db_hide_after_close2"  >
				<!-- background color -->
				<div class="ws_db_setting_section ws_db_background_not_for_nav_path" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Background color ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" >
						<?php _e( 'Set the background color. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_background-color.asp"); ?> 					</div>
					<div class="ws_db_option_max_length_in">
						<input id="colorpicker" class="ws_db_color_field" type="text" name="all_element_setting_instance214_background_color"   >
					</div> 
				</div>
				<!-- font -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Font', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( ' Font settings for navigation path section. ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_setting_section" >
						
							<div><h5  class="ws_db_setting_title"  ><?php _e( 'Size', 'data-browser-by-ws' ); ?></h5></div>
							<div class="ws_db_setting_description" ><?php _e( 'Set the font size. you can use css standard values such as "10px" ,"10%" ,"10em" ,"10cm" ,"initial" or "inherit". ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_font_font-size.asp"); ?> </div>
						<div class="ws_db_option_max_length_in">	
							<input type="text" name="all_element_setting_instance214_font_size"   >
						</div>
						</div>
						<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
							<h5  class="ws_db_setting_title"  ><?php _e( 'Color', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the font color.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_text_color.asp"); ?> </div>
							<input type="text" class="ws_db_color_field" name="all_element_setting_instance214_font_color"   >
						</div>
						</div>
						<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
							<h5  class="ws_db_setting_title"  ><?php _e( 'Font name', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Enter the font name. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_font_font-family.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_font_name"  >
						</div>
						</div>
						<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
							<div class="ws_db_float_left"><h5  class="ws_db_setting_title"  ><?php _e( 'Bold', 'data-browser-by-ws' ); ?></h5></div>
							<div class="switch tiny">
								<input id="all_element_setting_instance214_font_bold" type="checkbox"  >
								<label for="all_element_setting_instance214_font_bold"></label>
							</div> 
						</div>
						</div>
						<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
							<div class="ws_db_float_left"><h5  class="ws_db_setting_title"  ><?php _e( 'Italic', 'data-browser-by-ws' ); ?></h5></div>
							<div class="switch tiny">
								<input id="all_element_setting_instance214_font_italic" type="checkbox"  >
								<label for="all_element_setting_instance214_font_italic"></label>
							</div>
						</div>
						</div>
				  </div>
				<!-- hight and width  -->
				<div class="ws_db_setting_section" >
				<h5  class="ws_db_setting_title"  ><?php _e( 'Width and height', 'data-browser-by-ws' ); ?></h5>
				<div class="ws_db_setting_description" ><?php _e( 'You can use css standard values such as "auto" ,"10px" ,"10%" ,"10em" ,"10cm" ,"initial" or "inherit".', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Width', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the width.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_dim_width.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_width_px"   >
						</div>
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Height', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the height.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_dim_height.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_height_px"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Min width', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the min width. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_dim_min-width.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_min_width_px"   >
						</div>
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Min height', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the min height. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_dim_min-height.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_min_height_px"  >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'max width', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the max width.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_dim_max-width.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_max_width_px"   >
						</div>
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Max height', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the max height. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_dim_max-height.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_max_height_px"  >
						</div>
					</div>
				</div>
				<!-- text-align   -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Text align', 'data-browser-by-ws' ); ?> </h5>
					<div class="ws_db_setting_description" > <?php _e( 'Text align  Property settings.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_text_text-align.asp"); ?> </div>
					<div class="ws_db_option_max_length_in">
						<select name="all_element_setting_instance214_text_align">
							<option value="not_selected" >not selected</option>
							<option value="center" >center</option>
							<option value="left" >left</option>
							<option value="right" >right</option>
							<option value="justify" >justify</option>
							<option value="initial" >initial</option>
							<option value="inherit" >inherit</option>
						</select>
					</div>
				</div>
				<!-- float  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Float', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Float Property settings.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_class_float.asp"); ?> </div>
					<div class="ws_db_option_max_length_in">
						<select name="all_element_setting_instance214_float">
							<option value="not_selected" >not selected</option>
							<option value="initial"  >initial</option>
							<option value="left"  >left</option>
							<option value="right">right</option>
							<option value="none"  >none</option>
							<option value="inherit">inherit</option>
						</select>
					</div>
				</div>
				<!-- direction    -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Direction ', 'data-browser-by-ws' ); ?> </h5>
					<div class="ws_db_setting_description" ><?php _e( ' Direction Property settings.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_text_direction.asp"); ?> </div>
					<div class="ws_db_option_max_length_in">
						<select name="all_element_setting_instance214_direction">
						    <option value="not_selected" >not selected</option>
							<option value="ltr">ltr</option>
							<option value="rtl" >rtl</option>
							<option value="initial">initial</option>
							<option value="inherit" >inherit</option>
						</select>
					</div>
				</div>
				<!-- display  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Display', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( ' Display Property settings. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_class_display.asp"); ?> </div>
					<div class="ws_db_option_max_length_in">
						<select name="all_element_setting_instance214_display_block">
							<option value="not_selected" >not selected</option>
							<option value="initial">initial</option>
							<option value="block">block</option>
							<option value="table">table</option>
							<option value="flex">flex</option>
							<option value="inline" >inline</option>
							<option value="inline-block" >inline-block</option>
							<option value="inline-flex" >inline-flex</option>
							<option value="none" >none</option>				  
						</select>
					</div>
				</div>
				<!-- overflow-x   -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Overflow-x ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Overflow-x Property settings.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/css3_pr_overflow-x.asp"); ?> </div>
					<div class="ws_db_option_max_length_in">
						<select name="all_element_setting_instance214_overflow_x">
							<option value="not_selected" >not selected</option>
							<option value="hidden">hidden</option>
							<option value="auto">auto</option>
							<option value="visible">visible</option>
							<option value="scroll">scroll</option>
							<option value="initial">initial</option>
							<option value="inherit" >inherit</option>			  
						</select>
					</div>
				</div>
				<!-- overflow-y   -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Overflow-y ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( ' Overflow-y Property settings. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/css3_pr_overflow-y.asp"); ?> </div>
					<div class="ws_db_option_max_length_in">
						<select name="all_element_setting_instance214_overflow_y">
							<option value="not_selected" >not selected</option>
							<option value="auto" >auto</option>
							<option value="visible"  >visible</option>
							<option value="hidden" >hidden</option>
							<option value="scroll"  >scroll</option>
							<option value="initial"  >initial</option>
							<option value="inherit" >inherit</option>			  
						</select>
					</div>
				</div>
				
				<!-- word-wrap   -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Word wrap ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'The word-wrap property allows long words to be able to be broken and wrap onto the next line. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/css3_pr_word-wrap.asp"); ?> </div>
					<div class="ws_db_option_max_length_in">
						<select name="all_element_setting_instance214_word_wrap">
							<option value="not_selected" >not selected</option>
							<option value="normal"   >normal</option>
							<option value="break-word" >break-word</option>
							<option value="initial">initial</option>
							<option value="inherit" >inherit</option>
						</select>
					</div>
				</div>
				<!-- word-break   -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Word break ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( ' The word-break property specifies line breaking rules for non-CJK scripts.Tip: CJK scripts are Chinese, Japanese and Korean ("CJK") scripts. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/css3_pr_word-break.asp"); ?> </div>
					<div class="ws_db_option_max_length_in">
						<select name="all_element_setting_instance214_word_break">
							<option value="not_selected" >not selected</option>
							<option value="normal"  >normal</option>
							<option value="break-all"  >break-all</option>
							<option value="keep-all" >keep-all </option>
							<option value="initial" >initial</option>
							<option value="inherit" >inherit</option>
						</select>
					</div>
				</div>
				<!-- letter-spacing -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Letter spacing ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'The letter-spacing property increases or decreases the space between characters in a text. you can use css standard values  for this property  such as "normal" ,"10px" ,"-10" ,"2em" ,"2cm" ,"initial" or "inherit".', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_text_letter-spacing.asp"); ?> </div>
					<div class="ws_db_option_max_length_in">
						<input type="text" name="all_element_setting_instance214_letter_spacing"   >
					</div> 
				</div>
				<!-- word-spacing -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Word spacing ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'The word-spacing property increases or decreases the white space between words. you can use css standard values  for this property  such as "normal" ,"10px" ,"-10" ,"2em" ,"2cm" ,"initial" or "inherit".', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_text_word-spacing.asp"); ?> </div>
					<div class="ws_db_option_max_length_in">
						<input type="text" name="all_element_setting_instance214_word_spacing"    >
					</div> 
				</div>
				<!-- margins  -->
				<div class="ws_db_setting_section" >
				<h5  class="ws_db_setting_title"  ><?php _e( 'Margins', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'You can use css standard values for this property  such as "10px" ,"10%" ,"10em" ,"10cm" ,"auto" ,"initial" or "inherit".', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Top', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the top margin. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_margin-top.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_margin_top"   >
						</div>
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Bottom', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the bottom margin. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_margin-bottom.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_margin_bottom"   >
						</div>
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Left', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the left margin. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_margin-left.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_margin_left"  >
						</div>
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Right', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the right margin.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_margin-right.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_margin_right"  >
						</div>
					</div>
				</div>
				<!-- padding  -->
				<div class="ws_db_setting_section" >
				<h5  class="ws_db_setting_title"  ><?php _e( 'Padding', 'data-browser-by-ws' ); ?></h5>
				<div class="ws_db_setting_description" ><?php _e( ' You can use css standard values for this property  such as "10px" ,"10%" ,"10em" ,"10cm" ,"auto" ,"initial" or "inherit".', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_setting_section" >
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Top', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the top padding.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_padding-top.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_padding_top"   >
						</div>
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Bottom', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the bottom padding.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_padding-bottom.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_padding_bottom"  >
						</div>
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Left', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the left padding.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_padding-left.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_padding_left"  >
						</div>
						<div class="ws_db_option_max_length_in">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Right', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the right padding.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_padding-right.asp"); ?> </div>
							<input type="text" name="all_element_setting_instance214_padding_right" >
						</div>
					</div>
				</div>
				<!-- border  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Border', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Border settings.', 'data-browser-by-ws' ); ?></div>
					<div class="ws_db_option_max_length_in">
							<div class="ws_db_float_left"><h5  class="ws_db_setting_title"  ><?php _e( 'enable or disable', 'data-browser-by-ws' ); ?></h5></div>
							<div class="switch tiny">
								<input id="all_element_setting_instance214_border_enable" type="checkbox" >
								<label for="all_element_setting_instance214_border_enable"></label>
							</div> 
						</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Border type ', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'The border typr property . ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-style.asp"); ?> </div>
						<div class="ws_db_option_max_length_in">
							<select name="all_element_setting_instance214_border_type">
							  <option value="not_selected" >not selected</option>
							  <option value="none" >none</option>
							  <option value="solid"   >solid</option>			
							  <option value="dotted"  >dotted</option>
							  <option value="dashed"  >dashed</option>
							  <option value="double"  >double</option>
							  <option value="groove"  >groove</option>
							  <option value="ridge" >ridge</option>				
							  <option value="inset"  >inset</option>				 
							  <option value="outset"  >outset</option>				 
							</select>
						</div>
					</div>	
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Border width', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the border width. you can use css standard values for this property  such as "10px" ,"10em" ,"10cm" ,"initial" or "inherit".', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-width.asp"); ?> </div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_element_setting_instance214_border_width" >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Border color', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'Set the border color.', 'data-browser-by-ws' ); ?>  <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-color.asp"); ?> </div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_element_setting_instance214_border_color"  class="ws_db_color_field"   >
						</div>
					</div>
					
					<!-- border-top  -->
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Border top ', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'The border-top property .', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<div class="ws_db_float_left"><h5  class="ws_db_setting_title"  ><?php _e( 'enable or disable', 'data-browser-by-ws' ); ?></h5></div>
							<div class="switch tiny">
								<input id="all_element_setting_instance214_border_top_enable" type="checkbox" >
								<label for="all_element_setting_instance214_border_top_enable"></label>
							</div> 
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border type', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the border-top type. ', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-top_style.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<select name="all_element_setting_instance214_border_top_type">
								  <option value="not_selected" >not selected</option>
								  <option value="none" >none</option>
								  <option value="solid" >solid</option>			
								  <option value="dotted" >dotted</option>
								  <option value="dashed" >dashed</option>
								  <option value="double">double</option>
								  <option value="groove">groove</option>
								  <option value="ridge">ridge</option>				
								  <option value="inset">inset</option>				 
								  <option value="outset">outset</option>				 
								</select>
							</div>
						</div>	
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border width', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the border-top width.  ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-top_width.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<input type="text" name="all_element_setting_instance214_border_top_width"  >
							</div>
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border color', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the border-top color.', 'data-browser-by-ws' ); ?>  <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-top_color.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<input type="text" name="all_element_setting_instance214_border_top_color"  class="ws_db_color_field"   >
							</div>
						</div>
					</div>
					<!-- border-bottom  -->
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Border bottom ', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'The border-bottom property . ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<div class="ws_db_float_left"><h5  class="ws_db_setting_title"  ><?php _e( 'enable or disable', 'data-browser-by-ws' ); ?></h5></div>
							<div class="switch tiny">
								<input id="all_element_setting_instance214_border_bottom_enable" type="checkbox"  >
								<label for="all_element_setting_instance214_border_bottom_enable"></label>
							</div> 
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border type', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the border-bottom type. ', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-bottom_style.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<select name="all_element_setting_instance214_border_bottom_type">
								  <option value="not_selected" >not selected</option>
								  <option value="none">none</option>
								  <option value="solid">solid</option>			
								  <option value="dotted">dotted</option>
								  <option value="dashed">dashed</option>
								  <option value="double">double</option>
								  <option value="groove">groove</option>
								  <option value="ridge">ridge</option>				
								  <option value="inset">inset</option>				 
								  <option value="outset">outset</option>				 
								</select>
							</div>
						</div>	
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border width', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the border-bottom width. you can use css standard values for this property  such as "10px" ,"10em" ,"10cm" ,"initial" or "inherit".', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-bottom_width.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<input type="text" name="all_element_setting_instance214_border_bottom_width"  >
							</div>
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border color', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the border-bottom color. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-bottom_color.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<input type="text" name="all_element_setting_instance214_border_bottom_color"  class="ws_db_color_field"  >
							</div>
						</div>
					</div>
					<!-- border-left  -->
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Border left ', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'The border-left property .', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref(""); ?> </div>
						<div class="ws_db_option_max_length_in">
							<div class="ws_db_float_left"><h5  class="ws_db_setting_title"  ><?php _e( 'enable or disable', 'data-browser-by-ws' ); ?></h5></div>
							<div class="switch tiny">
								<input id="all_element_setting_instance214_border_left_enable" type="checkbox" >
								<label for="all_element_setting_instance214_border_left_enable"></label>
							</div> 
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border type', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the border-left type. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-left_style.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<select name="all_element_setting_instance214_border_left_type">
								  <option value="not_selected" >not selected</option>
								  <option value="none" >none</option>
								  <option value="solid" >solid</option>			
								  <option value="dotted">dotted</option>
								  <option value="dashed" >dashed</option>
								  <option value="double">double</option>
								  <option value="groove" >groove</option>
								  <option value="ridge" >ridge</option>				
								  <option value="inset"  >inset</option>				 
								  <option value="outset" >outset</option>				 
								</select>
							</div>
						</div>	
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border width', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the border-left width. you can use css standard values for this property  such as "10px" ,"10em" ,"10cm" ,"initial" or "inherit".', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-left_width.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<input type="text" name="all_element_setting_instance214_border_left_width"  >
							</div>
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border color', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the border-left color. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-left_color.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<input type="text" name="all_element_setting_instance214_border_left_color"  class="ws_db_color_field" >
							</div>
						</div>
					</div>
					<!-- border-right  -->
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Border right ', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( 'The border-right property .', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<div class="ws_db_float_left"><h5  class="ws_db_setting_title"  ><?php _e( 'enable or disable', 'data-browser-by-ws' ); ?></h5></div>
							<div class="switch tiny">
								<input id="all_element_setting_instance214_border_right_enable" type="checkbox" >
								<label for="all_element_setting_instance214_border_right_enable"></label>
							</div> 
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border type', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the border-right type.', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-right_style.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<select name="all_element_setting_instance214_border_right_type">
								 <option value="not_selected" >not selected</option>
								 <option value="none" >none</option>
								  <option value="solid" >solid</option>			
								  <option value="dotted">dotted</option>
								  <option value="dashed" >dashed</option>
								  <option value="double">double</option>
								  <option value="groove" >groove</option>
								  <option value="ridge" >ridge</option>				
								  <option value="inset"  >inset</option>				 
								  <option value="outset" >outset</option>				 
								</select>
							</div>
						</div>	
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border width', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'set the border-right width. you can use css standard values for this property  such as "10px" ,"10em" ,"10cm" ,"initial" or "inherit". ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-right_width.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<input type="text" name="all_element_setting_instance214_border_right_width"  >
							</div>
						</div>
						<div class="ws_db_setting_section" >
							<h5  class="ws_db_setting_title"  ><?php _e( 'Border color', 'data-browser-by-ws' ); ?></h5>
							<div class="ws_db_setting_description" ><?php _e( 'Set the border-right color. ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_border-right_color.asp"); ?> </div>
							<div class="ws_db_option_max_length_in">
								<input type="text" name="all_element_setting_instance214_border_right_color"  class="ws_db_color_field" >
							</div>
						</div>
					</div>
					
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Border radius ', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'You can use css standard values for this property such as "10px" ,"10%" ,"10em" ,"initial" or "inherit".', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<h5  class="ws_db_setting_title"  ><?php _e( 'Top left radius', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/css3_pr_border-top-left-radius.asp"); ?> </h5>
							<input type="text" name="all_element_setting_instance214_border_top_left_radius"  >
						</div>
						<div class="ws_db_option_max_length_in">
							<h5  class="ws_db_setting_title"  ><?php _e( 'Top right radius ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/css3_pr_border-top-right-radius.asp"); ?> </h5>
							<input type="text" name="all_element_setting_instance214_border_top_right_radius"  >
						</div>
						<div class="ws_db_option_max_length_in">
							<h5  class="ws_db_setting_title"  ><?php _e( 'Bottom right radius ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/css3_pr_border-bottom-right-radius.asp"); ?> </h5>
							<input type="text" name="all_element_setting_instance214_border_bottom_right_radius" >
						</div>
						<div class="ws_db_option_max_length_in">
							<h5  class="ws_db_setting_title"  ><?php _e( 'Bottom left radius ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/css3_pr_border-bottom-left-radius.asp"); ?> </h5>
							<input type="text" name="all_element_setting_instance214_border_bottom_left_radius"  >
						</div>
					</div>
					
				</div>
				<!-- text-shadow  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Text shadow', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'The text-shadow property adds shadow to text.', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/css3_pr_text-shadow.asp"); ?> </div>
					<div class="ws_db_setting_section" >
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_float_left"><h5  class="ws_db_setting_title"  ><?php _e( 'enable or disable', 'data-browser-by-ws' ); ?></h5></div>
						<div class="switch tiny">
							<input id="all_element_setting_instance214_text_shadow_enable" type="checkbox"  >
							<label for="all_element_setting_instance214_text_shadow_enable"></label>
						</div> 
					</div>
					</div>
					<div class="ws_db_setting_section">
						<h5  class="ws_db_setting_title"  ><?php _e( 'H-shadow', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'The position of the horizontal shadow. for example "5px".', 'data-browser-by-ws' ); ?>  </div>
							<div class="ws_db_option_max_length_in">
							<input type="text" name="all_element_setting_instance214_text_shadow_h_shadow"   >
						</div>
					</div>
					<div class="ws_db_setting_section">
						<h5  class="ws_db_setting_title"  ><?php _e( 'V-shadow', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( ' The position of the vertical shadow. for example "5px". ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_element_setting_instance214_text_shadow_v_shadow" >
						</div>
					</div>
					<div class="ws_db_setting_section">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Blur', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'The blur distance. for example "5px".', 'data-browser-by-ws' ); ?> </div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_element_setting_instance214_text_shadow_blur"   >
						</div>
					</div>
					<div class="ws_db_setting_section">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Color', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'The color of the shadow. ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_element_setting_instance214_text_shadow_color"  class="ws_db_color_field"  >
						</div>
					</div>		
				</div>
				<!-- box shadow  -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Box shadow', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" > <?php _e( 'Box shadow settings', 'data-browser-by-ws' ); ?> <?php echo_ex_link_ref("http://www.w3schools.com/cssref/css3_pr_box-shadow.asp"); ?></div>
					<div class="ws_db_setting_section" >
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_float_left"><h5  class="ws_db_setting_title"  ><?php _e( 'enable or disable', 'data-browser-by-ws' ); ?></h5></div>
						<div class="switch tiny">
							<input id="all_element_setting_instance214_box_shadow_enable" type="checkbox" >
							<label for="all_element_setting_instance214_box_shadow_enable"></label>
						</div> 
					</div>
					</div>
					<div class="ws_db_setting_section">
						<h5  class="ws_db_setting_title"  ><?php _e( 'H-shadow', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( ' The position of the horizontal shadow. for example "5px". ', 'data-browser-by-ws' ); ?> </div>
							<div class="ws_db_option_max_length_in">
							<input type="text" name="all_element_setting_instance214_box_shadow_h_shadow" >
						</div>
					</div>
					<div class="ws_db_setting_section">
						<h5  class="ws_db_setting_title"  ><?php _e( 'V-shadow', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( ' The position of the vertical shadow. for example "5px".', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_element_setting_instance214_box_shadow_v_shadow" >
						</div>
					</div>
					<div class="ws_db_setting_section">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Blur', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'The blur distance. for example "5px".', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_element_setting_instance214_box_shadow_blur"  >
						</div>
					</div>
					<div class="ws_db_setting_section">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Spread', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" > <?php _e( 'The size of shadow. for example "5px".', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_element_setting_instance214_box_shadow_spread" >
						</div>
					</div>
					<div class="ws_db_setting_section">
						<h5  class="ws_db_setting_title"  ><?php _e( 'Color', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( ' The color of the shadow. ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<input type="text" name="all_element_setting_instance214_box_shadow_color"  class="ws_db_color_field"   >
						</div>
					</div>
					<div class="ws_db_setting_section" >
						<h5  class="ws_db_setting_title"  ><?php _e( 'Direction', 'data-browser-by-ws' ); ?></h5>
						<div class="ws_db_setting_description" ><?php _e( ' The shadow direction.', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_max_length_in">
							<select name="all_element_setting_instance214_box_shadow_direction">
							  <option value="not_selected" >not selected</option>
							  <option value="outset"  >outset</option>
							  <option value="inset" >inset</option>			
							</select>
						</div>
					</div>
				</div>
				<!-- z-index -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Z-index', 'data-browser-by-ws' ); ?> </h5>
					<div class="ws_db_setting_description" ><?php _e( '.The z-index property specifies the stack order of an element.An element with greater stack order is always in front of an element with a lower stack order. you can use css standard values for this property  such as "10" ,"auto" ,"initial" or "inherit". ', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_pos_z-index.asp"); ?>  </div>
					<div class="ws_db_option_max_length_in">
						<input type="text" name="all_element_setting_instance214_z_index"    >
					</div> 
				</div>	
				<!--  vertical-align -->
				<div class="ws_db_setting_section" >
					<h5  class="ws_db_setting_title"  ><?php _e( 'Vertical align ', 'data-browser-by-ws' ); ?></h5>
					<div class="ws_db_setting_description" ><?php _e( 'The vertical-align property sets the vertical alignment of an element. you can use css standard values for this property  such as "50%" ,"10px" ,"-10px" ,"10cm" ,"baseline","middle","top","bottom","text-top","text-bottom" ,"initial" or "inherit".', 'data-browser-by-ws' ); ?><?php echo_ex_link_ref("http://www.w3schools.com/cssref/pr_pos_vertical-align.asp"); ?>  </div>
					<div class="ws_db_option_max_length_in">
						<input type="text" name="all_element_setting_instance214_vertical_align"    >
					</div> 
				</div>	
			</div>
		</div> 
	</span>
				
	<?php 
		
	}
}
?>