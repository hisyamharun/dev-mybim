<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_get_single_post' ) ) {
	function ws_db_get_single_post($post_id){
		global $ws_db_all_setting;
		$object_all_style_stting_container=$ws_db_all_setting['object_all_style_stting_container'];
		
		global $wpdb;
		$id=$_POST['selected_post_id_in_post_list'];
		$id =(int)$id;
		//var_dump($ws_db_all_setting['single_post_rr_content_for_single_post']);
		$single_post_box_info=array('current_gruop_name'=>'single_post_manual_section','current_element_name'=>'single_post_box');
		$single_post_box_style=ws_db_inline_style_creator($single_post_box_info);
		?><div class="ws_db_single_post_item_wrapper" style="<?php echo $single_post_box_style; ?>" ><?php 
				?><div class="ws_db_this_post_id_ffd" style="display:none;" ><?php echo $id; ?></div><?php 
				foreach($ws_db_all_setting['single_post_rr_content_for_single_post'] as $array745){
						$this_element_wrapper_info=array('current_gruop_name'=>'single_post_section','current_dimension_gruop_name'=>$array745['dimension_gruop'],'current_dimension_name'=>$array745['dimension_name'],'current_setting_subject'=>'wrapper');
						$this_element_label_info=array('current_gruop_name'=>'single_post_section','current_dimension_gruop_name'=>$array745['dimension_gruop'],'current_dimension_name'=>$array745['dimension_name'],'current_setting_subject'=>'label');
						$this_element_delimiter_info=array('current_gruop_name'=>'single_post_section','current_dimension_gruop_name'=>$array745['dimension_gruop'],'current_dimension_name'=>$array745['dimension_name'],'current_setting_subject'=>'delimiter');
						$this_element_value_info=array('current_gruop_name'=>'single_post_section','current_dimension_gruop_name'=>$array745['dimension_gruop'],'current_dimension_name'=>$array745['dimension_name'],'current_setting_subject'=>'value');
						$this_element_suffix_info=array('current_gruop_name'=>'single_post_section','current_dimension_gruop_name'=>$array745['dimension_gruop'],'current_dimension_name'=>$array745['dimension_name'],'current_setting_subject'=>'suffix');
						//
						$this_element_wrapper_style=ws_db_inline_style_creator($this_element_wrapper_info);
						$this_element_label_style=ws_db_inline_style_creator($this_element_label_info);
						$this_element_value_style=ws_db_inline_style_creator($this_element_value_info);
						$this_element_delimiter_style=ws_db_inline_style_creator($this_element_delimiter_info);
						$this_element_suffix_style=ws_db_inline_style_creator($this_element_suffix_info);
						//
						$dimension_gruop=$array745['dimension_gruop'];
						$dimension_name=$array745['dimension_name'];
						if(isset($object_all_style_stting_container['single_post_section'][$dimension_gruop][$dimension_name]['label']['post_list11_this_element_subject_visible_text'])){
						$this_element_label_visible_text=$object_all_style_stting_container['single_post_section'][$dimension_gruop][$dimension_name]['label']['post_list11_this_element_subject_visible_text'];
						}else{
							$this_element_label_visible_text="";
						}
						if(isset($object_all_style_stting_container['single_post_section'][$dimension_gruop][$dimension_name]['delimiter']['post_list11_this_element_subject_visible_text'])){
						$this_element_delimiter_visible_text=$object_all_style_stting_container['single_post_section'][$dimension_gruop][$dimension_name]['delimiter']['post_list11_this_element_subject_visible_text'];
						}else{
							$this_element_delimiter_visible_text="";
						}
						if(isset($object_all_style_stting_container['single_post_section'][$dimension_gruop][$dimension_name]['suffix']['post_list11_this_element_subject_visible_text'])){
							$this_element_suffix_visible_text=$object_all_style_stting_container['single_post_section'][$dimension_gruop][$dimension_name]['suffix']['post_list11_this_element_subject_visible_text'];
						}else{
							$this_element_suffix_visible_text="";
						}
						
						if(empty($this_element_label_visible_text)){
							if($array745['dimension_gruop']=="taxo"){
								$taxonomy_object = get_taxonomy( $array745['dimension_name'] );
								$taxonomy_name = $taxonomy_object->labels->name;
								$this_element_label_visible_text= $taxonomy_name;
							}else{
								$this_element_label_visible_text= $array745['dimension_name'];
							}
						}
						if(empty($this_element_delimiter_visible_text)){$this_element_delimiter_visible_text=":";}	
						if(empty($this_element_suffix_visible_text)){$this_element_suffix_visible_text=".";}	
					if($array745['dimension_gruop']=='basic'){
						$query="SELECT * FROM $wpdb->posts WHERE  ID = ".$id;
						$this_post_parameters = $wpdb->get_row( $query );
						$the_parameter_value = $this_post_parameters->$array745['dimension_name'];
						if(!empty($the_parameter_value)){
							if( $array745['dimension_name']=="post_author"){
								$user_object =get_user_by('id', $the_parameter_value);
								$the_parameter_value=$user_object->user_login;
							}elseif($array745['dimension_name']=="post_date"){
								$the_date =get_the_time('Y-m-d',$id);
								$the_parameter_value=$the_date ;
							}
							?><div class="<?php echo $array745['dimension_gruop'].'_ws_db '; echo $array745['dimension_name'].'_ws_db '; ?> ws_db_single_post_item_element_wrapper" style="<?php echo $this_element_wrapper_style; ?>" ><?php	
								?><div class="ws_db_single_post_item_element_label" style="<?php echo $this_element_label_style; ?>"  ><?php  echo $this_element_label_visible_text; ?></div><?php 
								?><div class="ws_db_single_post_item_element_delimiter" style="<?php echo $this_element_delimiter_style; ?>"  ><?php  echo $this_element_delimiter_visible_text; ?></div><?php 
								?><div class="ws_db_single_post_item_element_value" style="<?php echo $this_element_value_style; ?>"  ><?php  echo $the_parameter_value; ?></div><?php
								?><div class="ws_db_single_post_item_element_suffix" style="<?php echo $this_element_suffix_style; ?>"  ><?php  echo $this_element_suffix_visible_text; ?></div><?php 	
							?></div><?php 		
						}
					}elseif($array745['dimension_gruop']=='taxo'){
						$args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all');
						$terms = wp_get_post_terms( $id, $array745['dimension_name'], $args );
						if(count($terms)>=1){
							?><div class="<?php echo $array745['dimension_gruop'].'_ws_db '; echo $array745['dimension_name'].'_ws_db '; ?> ws_db_single_post_item_element_wrapper" style="<?php echo $this_element_wrapper_style; ?>" ><?php	
								?><div class="ws_db_single_post_item_element_label" style="<?php echo $this_element_label_style; ?>"  ><?php  echo $this_element_label_visible_text; ?></div><?php 
								?><div class="ws_db_single_post_item_element_delimiter" style="<?php echo $this_element_delimiter_style; ?>"  ><?php  echo $this_element_delimiter_visible_text; ?></div><?php 
								?><div class="ws_db_single_post_item_element_value" style="<?php echo $this_element_value_style; ?>" ><?php		
								$i = 0;
								$len = count($terms);
								foreach($terms as $term){
									echo $term->name ;
									if ($i != $len - 1) {
										//not last iteration
										echo ' , ';
									}
									$i++;
								}
								?></div><?php 
								?><div class="ws_db_single_post_item_element_suffix" style="<?php echo $this_element_suffix_style; ?>"  ><?php  echo $this_element_suffix_visible_text; ?></div><?php
							?></div><?php 
						}
					}elseif($array745['dimension_gruop']=='field'){
						$meta_values = get_post_meta( $id,  $array745['dimension_name'] );
						if(count($meta_values)>=1){
							?><div class="<?php echo $array745['dimension_gruop'].'_ws_db '; echo $array745['dimension_name'].'_ws_db '; ?> ws_db_single_post_item_element_wrapper" style="<?php echo $this_element_wrapper_style; ?>" ><?php	
								if( $array745['dimension_name']=="_thumbnail_id"){
									foreach($meta_values as $meta_value){
										$thumbnail_id_value =$meta_value;
									}
									//$query2="SELECT * FROM $wpdb->posts WHERE  ID = ".$thumbnail_id_value;
									//$thumbnail_parameters = $wpdb->get_row( $query2 );
									//$thumbnail_url=$thumbnail_parameters->guid;
									//$thumbnail_url=wp_get_attachment_thumb_url( $thumbnail_id_value );
									$thumbnail_array= wp_get_attachment_image_src($thumbnail_id_value,'medium');
									//var_dump($thumbnail_url);
									$thumbnail_url=$thumbnail_array[0];
									?><div class="ws_db_single_post_item_element_label" style="<?php echo $this_element_label_style; ?>"  ><?php  echo $this_element_label_visible_text; ?></div><?php 
									?><div class="ws_db_single_post_item_element_delimiter" style="<?php echo $this_element_delimiter_style; ?>"  ><?php  echo $this_element_delimiter_visible_text; ?></div><?php 
									?><img class="ws_db_single_post_item_element_delimiter" style="<?php echo $this_element_value_style; ?>" src="<?php echo $thumbnail_url; ?>"  ><?php 
									?><div class="ws_db_single_post_item_element_suffix" style="<?php echo $this_element_suffix_style; ?>"  ><?php  echo $this_element_suffix_visible_text; ?></div><?php
									
								}else{
									?><div class="ws_db_single_post_item_element_label" style="<?php echo $this_element_label_style; ?>"  ><?php  echo $this_element_label_visible_text; ?></div><?php 
									?><div class="ws_db_single_post_item_element_value" style="<?php echo $this_element_delimiter_style; ?>"  ><?php  echo $this_element_delimiter_visible_text; ?></div><?php 
									?><div class="ws_db_single_post_item_element_delimiter" style="<?php echo $this_element_value_style; ?>" ><?php
										foreach($meta_values as $meta_value){
											echo $meta_value .' , ';
										}
									?></div><?php 
									?><div class="ws_db_single_post_item_element_suffix" style="<?php echo $this_element_suffix_style; ?>"  ><?php  echo $this_element_suffix_visible_text; ?></div><?php
								}
							?></div><?php 
						}
					}
				}
			?></div><?php 
			
			?><button class="mfp-close" type="button" title="Close (Esc)">×</button><?php 
	}
}
// html blank space &nbsp;
?>