<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_input_ui_for_general_setting_tab' ) ) {
	function ws_db_input_ui_for_general_setting_tab($all_setting)
	{
		global $ws_db_all_setting;
		$exclude_posts_by_statuses = $ws_db_all_setting['exclude_posts_by_statuses'];
		?>
		  <div class="ws_db_setting_section" >
		  <h5 class="ws_db_setting_title" ><?php _e( 'Include posts based on statuses', 'data-browser-by-ws' ); ?></h5>
		  <div class="ws_db_setting_description" ><?php _e( ' If you disable all "publish" will be used.', 'data-browser-by-ws' ); ?></div>
			<?php  $statuses=array('ws_db_publish_status'=>'publish','ws_db_future_status'=>'future','ws_db_draft_status'=>'draft','ws_db_pending_status'=>'pending','ws_db_private_status'=>'private','ws_db_trash_status'=>'trash','ws_db_auto_draft_status'=>'auto-draft','ws_db_inherit_status'=>'inherit');   
			$status_counter=0;
			foreach($statuses as $status_key=>$status_value){
				$status_counter++;
				?><div class="ws_db_option_switch_block"><?php 
					?><div class="ws_db_setting_description_lit" ><?php echo $status_value;  ?></div><?php
					?><div class="data_table switch round  tiny"><?php
						?><input id="<?php echo $status_key ?>" type="checkbox" <?php if(isset($exclude_posts_by_statuses[$status_value]) and $exclude_posts_by_statuses[$status_value]=='true'){ ?> checked <?php }?> ><?php
						?><label for="<?php echo $status_key ?>"></label><?php
					?></div><?php
				?></div><?php
			}
			?>
			</div>
			<div class="ws_db_setting_section" >
				<h5 class="ws_db_setting_title" ><?php _e( 'Exclude value from charts if its length more than "x"', 'data-browser-by-ws' ); ?> </h5>
				<div class="ws_db_setting_description" ><?php _e( 'If length of text value is more than "this" do not include it in charts. "0" or empty mean 1000.', 'data-browser-by-ws' ); ?></div>
				<div class="ws_db_option_max_length_warper">
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For basic post parameter', 'data-browser-by-ws' ); ?> </div>
						<input type="number" name="exclude_value_from_analys_length_more_than_x_basic" <?php if( isset($ws_db_all_setting['exclude_value_from_analys_length_more_than_x_basic'])){  echo 'value="'.$ws_db_all_setting['exclude_value_from_analys_length_more_than_x_basic'].'"';  } ?> >
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For taxonomies ', 'data-browser-by-ws' ); ?></div>
						<input type="number" name="exclude_value_from_analys_length_more_than_x_taxonomy" <?php if(isset($ws_db_all_setting['exclude_value_from_analys_length_more_than_x_taxonomy'])){  echo 'value="'.$ws_db_all_setting['exclude_value_from_analys_length_more_than_x_taxonomy'].'"';  } ?> >
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For custom fields', 'data-browser-by-ws' ); ?> </div>
						<input type="number" name="exclude_value_from_analys_length_more_than_x_custom_field" <?php if(isset($ws_db_all_setting['exclude_value_from_analys_length_more_than_x_custom_field'])){  echo 'value="'.$ws_db_all_setting['exclude_value_from_analys_length_more_than_x_custom_field'].'"';  } ?> >
					</div>
				</div>
			</div>
			<div class="ws_db_setting_section" >
				<h5 class="ws_db_setting_title" ><?php _e( 'Exclude value from charts if rpeated less than "x"', 'data-browser-by-ws' ); ?></h5>
				<div class="ws_db_setting_description" ><?php _e( 'If repetition of a value is less than "this" do not show it in charts.  "0" or empty mean no restriction.', 'data-browser-by-ws' ); ?></div>
				<div class="ws_db_option_max_length_warper">
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For basic post parameter ', 'data-browser-by-ws' ); ?></div>
						<input type="number" name="hide_items_from_table_if_repeated_less_than_x_basic" <?php if(isset($ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_basic'])){  echo 'value="'.$ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_basic'].'"';  } ?> >
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For taxonomies ', 'data-browser-by-ws' ); ?></div>
						<input type="number" name="hide_items_from_table_if_repeated_less_than_x_taxonomy" <?php if(isset($ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_taxonomy'])){  echo 'value="'.$ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_taxonomy'].'"';  } ?> >
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For custom fields ', 'data-browser-by-ws' ); ?></div>
						<input type="number" name="hide_items_from_table_if_repeated_less_than_x_custom_field" <?php if(isset($ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_custom_field'])){  echo 'value="'.$ws_db_all_setting['hide_items_from_table_if_repeated_less_than_x_custom_field'].'"';  } ?> >
					</div>
				</div>
			</div>
			<div class="ws_db_setting_section" >
				<h5 class="ws_db_setting_title" ><?php _e( 'Hide chart if its items less than "x" in first load', 'data-browser-by-ws' ); ?></h5>
				<div class="ws_db_setting_description" ><?php _e( 'If chart items less than "this" hide the chart .  "0" or empty mean no restriction.', 'data-browser-by-ws' ); ?> </div>
				<div class="ws_db_option_max_length_warper">
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For basic post parameter ', 'data-browser-by-ws' ); ?></div>
						<input type="number" name="hide_table_if_its_items_less_than_x_in_first_load_basic" <?php if(isset($ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_load_basic'])){  echo 'value="'.$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_load_basic'].'"';  } ?> >
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For taxonomies ', 'data-browser-by-ws' ); ?></div>
						<input type="number" name="hide_table_if_its_items_less_than_x_in_first_lod_taxonomy" <?php if(isset($ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_lod_taxonomy'])){  echo 'value="'.$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_lod_taxonomy'].'"';  } ?> >
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For custom fields', 'data-browser-by-ws' ); ?> </div>
						<input type="number" name="hide_table_if_its_items_less_than_x_in_first_lod_custom_field" <?php if(isset($ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_lod_custom_field'])){  echo 'value="'.$ws_db_all_setting['hide_table_if_its_items_less_than_x_in_first_lod_custom_field'].'"';  } ?> >
					</div>
				</div>
			</div>
			<div class="ws_db_setting_section" >
				<h5 class="ws_db_setting_title" ><?php _e( 'Hide chart if its items less than "x" always', 'data-browser-by-ws' ); ?></h5>
				<div class="ws_db_setting_description" ><?php _e( 'If chart items less than "this" hide the chart .  "0" or empty mean no restriction. ', 'data-browser-by-ws' ); ?></div>
				<div class="ws_db_option_max_length_warper">
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For basic post parameter ', 'data-browser-by-ws' ); ?></div>
						<input type="number" name="hide_table_if_its_items_less_than_x_always_basic" <?php if(isset($ws_db_all_setting['hide_table_if_its_items_less_than_x_always_basic'])){  echo 'value="'.$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_basic'].'"';  }else{ ?> value="" <?php } ?> >
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For taxonomies', 'data-browser-by-ws' ); ?> </div>
						<input type="number" name="hide_table_if_its_items_less_than_x_always_taxonomy" <?php if(isset($ws_db_all_setting['hide_table_if_its_items_less_than_x_always_taxonomy'])){  echo 'value="'.$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_taxonomy'].'"';  }else{ ?> value="" <?php } ?> >
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For custom fields', 'data-browser-by-ws' ); ?> </div>
						<input type="number" name="hide_table_if_its_items_less_than_x_always_custom_field" <?php if(isset($ws_db_all_setting['hide_table_if_its_items_less_than_x_always_custom_field'])){  echo 'value="'.$ws_db_all_setting['hide_table_if_its_items_less_than_x_always_custom_field'].'"';  }else{ ?> value="" <?php } ?> >
					</div>
				</div>
			</div>
			<div class="ws_db_setting_section" >
				<h5 class="ws_db_setting_title" ><?php _e( 'Hide chart items more than "x"', 'data-browser-by-ws' ); ?></h5>
				<div class="ws_db_setting_description" ><?php _e( 'If chart items more than "this"  hide Surpluses .  "0" or empty mean 1000. ', 'data-browser-by-ws' ); ?></div>
				<div class="ws_db_option_max_length_warper">
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For basic post parameter ', 'data-browser-by-ws' ); ?></div>
						<input type="number" name="hide_table_item_more_than_x_basic" <?php if(isset($ws_db_all_setting['hide_table_item_more_than_x_basic'])){  echo 'value="'.$ws_db_all_setting['hide_table_item_more_than_x_basic'].'"';  }else{ ?> value="1000" <?php } ?> >
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For taxonomies ', 'data-browser-by-ws' ); ?></div>
						<input type="number" name="hide_table_item_more_than_x_taxonomy" <?php if(isset($ws_db_all_setting['hide_table_item_more_than_x_taxonomy'])){  echo 'value="'.$ws_db_all_setting['hide_table_item_more_than_x_taxonomy'].'"';  }else{ ?> value="1000" <?php } ?> >
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For custom fields ', 'data-browser-by-ws' ); ?></div>
						<input type="number" name="hide_table_item_more_than_x_custom_field" <?php if(isset($ws_db_all_setting['hide_table_item_more_than_x_custom_field'])){  echo 'value="'.$ws_db_all_setting['hide_table_item_more_than_x_custom_field'].'"';  } else{ ?> value="1000" <?php }?> >
					</div>
				</div>
		  </div>
		  <div class="ws_db_setting_section" >
			<h5 class="ws_db_setting_title" ><?php _e( 'Alternative for empty values ', 'data-browser-by-ws' ); ?></h5>
			<div class="ws_db_setting_description" ><?php _e( 'If a value is empty replace it with the following text . this text most be unique otherwise it cause some inaccuracy in a chart that have same text as item . ', 'data-browser-by-ws' ); ?></div>
			<div class="ws_db_option_max_length_in">
				<input type="text" name="alternative_text_for_empty_values" <?php if(isset($ws_db_all_setting['alternative_text_for_empty_values'])){ ?>  value="<?php echo $ws_db_all_setting['alternative_text_for_empty_values']; ?>" <?php   }else{ ?> value="empty_value" <?php } ?> >
			</div>
		  </div>
		  <div class="ws_db_setting_section" >
			<h5 class="ws_db_setting_title" ><?php _e( 'Alternative for one space values', 'data-browser-by-ws' ); ?> </h5>
			<div class="ws_db_setting_description" ><?php _e( 'If a value is "one space" replace it with the following text . this text most be unique otherwise it cause some inaccuracy in a chart that have same text as item.', 'data-browser-by-ws' ); ?></div>
			<div class="ws_db_option_max_length_in">
				<input type="text" name="alternative_text_for_one_space_values" <?php if(isset($ws_db_all_setting['alternative_text_for_one_space_values'])){ ?>  value="<?php echo $ws_db_all_setting['alternative_text_for_one_space_values']; ?>" <?php   }else{ ?> value="one_space" <?php } ?> >
			</div>
		  </div>
		  <div class="ws_db_setting_section" >
				<h5 class="ws_db_setting_title" ><?php _e( 'Exclude "empty_value item" form the charts' ); ?></h5>
				<div class="ws_db_setting_description" ><?php _e( 'If a chart contains "empty_value item" exclude it from the chart' ); ?></div>
				<div class="ws_db_option_max_length_warper">
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For basic post parameter ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_switch_block"> 
							<div class="data_table switch round  tiny">
								<input id="hide_empty_value_items_basic" type="checkbox" <?php if(isset($ws_db_all_setting['hide_empty_value_items_basic']) and $ws_db_all_setting['hide_empty_value_items_basic']=='true'){ ?> checked <?php }?> >
								<label for="hide_empty_value_items_basic"></label>
							</div>
						</div>
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For taxonomies ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_switch_block"> 
							<div class="data_table switch round  tiny">
								<input id="hide_empty_value_items_taxonomy" type="checkbox" <?php if(isset($ws_db_all_setting['hide_empty_value_items_taxonomy']) and $ws_db_all_setting['hide_empty_value_items_taxonomy']=='true'){ ?> checked <?php }?> >
								<label for="hide_empty_value_items_taxonomy"></label>
							</div>
						</div>
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For custom fields ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_switch_block"> 
							<div class="data_table switch round  tiny">
								<input id="hide_empty_value_items_custom_field" type="checkbox" <?php if(isset($ws_db_all_setting['hide_empty_value_items_custom_field']) and $ws_db_all_setting['hide_empty_value_items_custom_field']=='true'){ ?> checked <?php }?> >
								<label for="hide_empty_value_items_custom_field"></label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ws_db_setting_section" >
				<h5 class="ws_db_setting_title" ><?php _e( 'Exclude "one_space item" form the charts' ); ?></h5>
				<div class="ws_db_setting_description" ><?php _e( 'If a chart contains "one_space item" exclude it from the chart' ); ?></div>
				<div class="ws_db_option_max_length_warper">
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For basic post parameter ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_switch_block"> 
							<div class="data_table switch round  tiny">
								<input id="hide_one_space_items_basic" type="checkbox" <?php if(isset($ws_db_all_setting['hide_one_space_items_basic']) and $ws_db_all_setting['hide_one_space_items_basic']=='true'){ ?> checked <?php }?> >
								<label for="hide_one_space_items_basic"></label>
							</div>
						</div>
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For taxonomies ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_switch_block"> 
							<div class="data_table switch round  tiny">
								<input id="hide_one_space_items_taxonomy" type="checkbox" <?php if(isset($ws_db_all_setting['hide_one_space_items_taxonomy']) and $ws_db_all_setting['hide_one_space_items_taxonomy']=='true'){ ?> checked <?php }?> >
								<label for="hide_one_space_items_taxonomy"></label>
							</div>
						</div>
					</div>
					<div class="ws_db_option_max_length_in">
						<div class="ws_db_setting_description_lit" ><?php _e( 'For custom fields ', 'data-browser-by-ws' ); ?></div>
						<div class="ws_db_option_switch_block"> 
							<div class="data_table switch round  tiny">
								<input id="hide_one_space_items_custom_field" type="checkbox" <?php if(isset($ws_db_all_setting['hide_one_space_items_custom_field']) and $ws_db_all_setting['hide_one_space_items_custom_field']=='true'){ ?> checked <?php }?> >
								<label for="hide_one_space_items_custom_field"></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		  
		<?php	
	}
}
?>