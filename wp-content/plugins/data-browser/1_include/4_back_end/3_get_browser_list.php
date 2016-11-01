<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_get_browser_list' ) ) {
	function ws_db_get_browser_list()
	{
		$args = array (
			'orderby' => 'ID',
			'post_type'              => array( 'browser_screens_cpt' ),
		);
		$browser_screens_query = new WP_Query( $args );
		$posts=$browser_screens_query->posts;
		
		///
		?><div style="display:none;" ><div id="ws_db_light_box_for_data_browser_list" ></div></div><?php
		///
			?><div style="padding:10px;margin-top:20px;margin-left: 5px;background-color:white;border: 2px outset #000098;width:97%;min-height:557px;background-color: #e3f2f2;box-shadow: 0 0 13px #b2b2b2;"><?php 
				?><div class="ws_db_create_new_data_browser12"  style="display:block;cursor: pointer;font-weight: bold;font-size: 15px;margin-bottom: 16px;margin-left: 8px;margin-top: 4px;" onclick="if_create_new_browser_botton_clicked('create_new_browser_botton_clicked');">Data Browsers<span class="glyphicon glyphicon-plus ws_db_create_new_data_browser12" style="padding-left:4px;padding-right:4px;cursor: pointer;" onclick="if_create_new_browser_botton_clicked('create_new_browser_botton_clicked');"></span>
				<div  style="display:block;float:right;margin-right:10px;"><?php	ws_db_boot('back_end','data_browsers_list_is_printing','ws_db_get_browser_list','need_to_ajax_loading_sign_in_data_browser_list_page','');   ?></div>
				</div><?php
				//
				
				?><div style="padding:10px;border: 1px dashed #000000;min-height: 457px;margin: 0 10px;" class="" ><?php
				if(!empty($posts)){
					
					foreach($posts as $post){
						$this_browser_id =get_post_meta( $post->ID, 'wsdb_browser_id', true );
						//var_dump($post);
						?><div style="margin:10px;background-color:#f2cf9e;line-height: 1;padding: 8px 10px;border: 1px solid #808080;border-radius: 7px;height: 33px;"><?php 
							?><div  class="edit_botton_in_browsers_list ws_db_browser_title_in_browser_list"  style="cursor: pointer;width: 50%;float: left;font-size: 13px;font-weight: bold;font-family: "Lucida Grande",sans-serif;"><?php 
								echo $post->post_title;
								?><div class="ws_db_browser_id_in_browser_list" style="display:none;"><?php echo $this_browser_id; ?></div><div class="ws_db_request_type_in_browser_list" style="display:none;">edit_botton_in_browsers_list_clicked</div><?php
							?></div><?php
							
							
							?><span class="glyphicon glyphicon-edit edit_botton_in_browsers_list" style="padding-left:4px;padding-right:4px;cursor: pointer;float:right;" ><div class="ws_db_browser_id_in_browser_list" style="display:none;"><?php echo $this_browser_id; ?></div><div class="ws_db_request_type_in_browser_list" style="display:none;">edit_botton_in_browsers_list_clicked</div></span><?php
							?><span class="glyphicon glyphicon-trash delete_botton_in_browsers_list" style="padding-left:4px;padding-right:4px;cursor: pointer;float:right;" ><div class="ws_db_browser_id_in_browser_list" style="display:none;"><?php echo $this_browser_id; ?></div><div class="ws_db_request_type_in_browser_list" style="display:none;">delete_botton_in_browsers_list_clicked</div></span><?php
							?><span class="glyphicon glyphicon-duplicate duplicate_botton_in_browsers_list" style="padding-left:4px;padding-right:4px;cursor: pointer;float:right;" ><div class="ws_db_browser_id_in_browser_list" style="display:none;"><?php echo $this_browser_id; ?></div><div class="ws_db_request_type_in_browser_list" style="display:none;">duplicate_botton_in_browsers_list_clicked</div></span><?php
								?><span class="code_botton_in_browsers_list_wrapper" style="float:right;" ><?php
								?><span class="fa fa-code code_botton_in_browsers_list" style="padding-left:4px;padding-right:4px;cursor: pointer;float:right;" ><div class="ws_db_browser_id_in_browser_list" style="display:none;"><?php echo $this_browser_id; ?></div></span><?php
								?><span class="code_botton_in_browsers_list" style="font-weight: bold;font-size: 13px;padding-left:4px;cursor: pointer;float:right;" >shortcode<div class="ws_db_browser_id_in_browser_list" style="display:none;"><?php echo $this_browser_id; ?></div></span><?php 
							?></span><?php 
						?></div><?php
					}
				}else{
					
				?><div class="ws_db_create_new_data_browser_if_empty"  style="color: #808080; cursor: pointer; font-size: 36px; margin-left: 40%; margin-top: 200px;" onclick="if_create_new_browser_botton_clicked('create_new_browser_botton_clicked');">
					Create New
					<span class="glyphicon glyphicon-plus ws_db_create_new_data_browser12" style="padding-left:4px;padding-right:4px;cursor: pointer;" onclick="if_create_new_browser_botton_clicked('create_new_browser_botton_clicked');"></span>
				</div>	
				<?php	
					
				}
				?></div><?php
				
			?></div><?php
	}
}
?>