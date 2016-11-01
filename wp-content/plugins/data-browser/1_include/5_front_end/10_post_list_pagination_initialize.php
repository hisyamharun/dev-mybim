<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_post_list_pagination_initialize' ) ) {
	function ws_db_post_list_pagination_initialize($data){
		global $ws_db_all_setting;
		$post_list_box_info=array('current_gruop_name'=>'post_list_manual_section','current_element_name'=>'post_list_box');
		$post_list_box_style=ws_db_inline_style_creator($post_list_box_info);
		?>
		<div id="ws_db_page_navigation_content" class="ws_db_post_list_wrapper_745" style="<?php echo $post_list_box_style; ?>" >
		<?php
		
		
		$current_post_ides_chunked = ws_db_boot('front_end','post_list_pagination_initializing','ws_db_post_list_pagination_initialize','echo_post_list_based_on_setting',$data);
		$post_list_pagination_info=array('current_gruop_name'=>'post_list_manual_section','current_element_name'=>'post_list_pagination_box');
		$post_list_pagination_style=ws_db_inline_style_creator($post_list_pagination_info);

		?>
		</div>
		<div id="page-selection" style="<?php echo $post_list_pagination_style; ?>" ></div>
			<script>

				jQuery('#page-selection').bootpag({
					total:  <?php  echo count($current_post_ides_chunked); ?> ,//number of pages
					maxVisible:<?php  echo $ws_db_all_setting['post_list_pagination315']['post_list_pagination315_max_visible_pagination']; ?> ,//maximum number of visible pages
					next:'<?php  echo $ws_db_all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_next_sign']; ?>',
					prev:'<?php  echo $ws_db_all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_prev_sign']; ?>',
					first: '<?php  echo $ws_db_all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_first_button']; ?>',
					last: '<?php  echo $ws_db_all_setting['post_list_pagination315']['post_list_pagination315_alternative_for_last_button']; ?>',
					firstLastUse: true,
					wrapClass: 'pagination',
					activeClass: 'active',
					disabledClass: 'disabled',
					nextClass: 'next',
					prevClass: 'prev',
					lastClass: 'last',
					firstClass: 'first'		
				}).on("page", function(event, /* page number here */ num){
				   if_post_list_pagination_number_clicked('post_list_pagination_number_clicked' , num)
				});
			</script>
		<?php 
	}
}

?>