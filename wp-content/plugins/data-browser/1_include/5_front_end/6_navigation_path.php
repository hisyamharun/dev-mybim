<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_echo_navigation_path' ) ) {
	function ws_db_echo_navigation_path($navigation_path,$base_post_ides){
		$base_post_ides_count = count($base_post_ides);
		global $ws_db_all_setting;
		//var_dump($ws_db_all_setting['object_all_style_stting_container']['navigation_path_section']);
		//$wrapper_settings=$ws_db_all_setting['nav_path_wrapper_settings'];
		//$single_query_settings=$ws_db_all_setting['nav_path_single_query_settings'];
		$first_static_settings=$ws_db_all_setting['nav_path_first_static_settings'];
		$group_element_settings=$ws_db_all_setting['nav_path_group_element_settings'];
		//var_dump($group_element_settings);
		$sign_after_group_settings=$ws_db_all_setting['nav_path_sign_after_group_settings'];
		//$dimension_element_settings=$ws_db_all_setting['nav_path_dimension_element_settings'];
		$sign_after_dimension_settings=$ws_db_all_setting['nav_path_sign_after_dimension_settings'];
		//$value_element_settings=$ws_db_all_setting['nav_path_value_element_settings'];
		//$number_element_settings=$ws_db_all_setting['nav_path_number_element_settings'];
		$number_sign_settings=$ws_db_all_setting['nav_path_number_sign_settings'];
		$delete_sign_settings=$ws_db_all_setting['nav_path_delete_sign_settings'];
		$nav_path_hover_unhover_settings=$ws_db_all_setting['nav_path_hover_unhover_settings'];
		//
		//wrapper style string
		//
		
		//
		$nav_path11_hover_remained_areas=$nav_path_hover_unhover_settings['nav_path11_hover_remained_areas'];
		$nav_path11_hover_deleted_areas=$nav_path_hover_unhover_settings['nav_path11_hover_deleted_areas'];
		?><script>
		
		function helper_delete_element_hover(evt) {
			var target = jQuery(evt.target);
			if ( target.hasClass( "ws_db_delete_sign_img")) {
				var this_parent1 =jQuery( target ).parent();
				var this_parent2 =jQuery( this_parent1 ).parent();
				jQuery( this_parent2 ).css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>"  );//red
				jQuery( this_parent2 ).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>"  );//red

				jQuery( this_parent2 ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery.each(this_parent2.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				});
				jQuery( this_parent2 ).prevAll().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery.each(this_parent2.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				});
				jQuery( '.ws_db_first_static' ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( '.ws_db_first_static' ).children().css( "background-color","<?php echo $nav_path11_hover_remained_areas ?>"  );//green
			}else if(target.hasClass( "ws_db_delete_sign_text")){
				var this_parent2 =jQuery( target ).parent();
				jQuery( this_parent2 ).css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>"  );//red
				jQuery( this_parent2 ).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>"  );//red
				jQuery( this_parent2 ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery.each(this_parent2.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				});
				jQuery( this_parent2 ).prevAll().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery.each(this_parent2.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				});
				jQuery( '.ws_db_first_static' ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( '.ws_db_first_static' ).children().css( "background-color","<?php echo $nav_path11_hover_remained_areas ?>"  );//green
			}else if(target.hasClass( "ws_db_number_element")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				});
				jQuery( this_parent ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery.each(this_parent, function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				});
				jQuery( this_parent ).prevAll().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				});
				jQuery( '.ws_db_first_static' ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( '.ws_db_first_static' ).children().css( "background-color","<?php echo $nav_path11_hover_remained_areas ?>"  );//green
			}else if(target.hasClass( "ws_db_value_element")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				});
				jQuery( this_parent ).prevAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				});
				jQuery( this_parent ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( '.ws_db_first_static' ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( '.ws_db_first_static' ).children().css( "background-color","<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery.each(this_parent.children(), function( index, value ) {
				  jQuery(this).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				});
			}else if(target.hasClass( "ws_db_sign_after_dimension")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				});
				jQuery( target ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery( target ).css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery( this_parent ).prevAll().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				});
				jQuery( target ).prevAll().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery( '.ws_db_first_static' ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( '.ws_db_first_static' ).children().css( "background-color","<?php echo $nav_path11_hover_remained_areas ?>"  );//green
			}else if(target.hasClass( "ws_db_dimension_element")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				});
				jQuery( this_parent ).prevAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				});
				jQuery( target ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery( target ).prevAll().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery( target ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery( '.ws_db_first_static' ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( '.ws_db_first_static' ).children().css( "background-color","<?php echo $nav_path11_hover_remained_areas ?>"  );//green
			}else if(target.hasClass( "ws_db_sign_after_group")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				});
				jQuery( target ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery( target ).css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery( this_parent ).prevAll().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				});
				jQuery( target ).prevAll().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery( '.ws_db_first_static' ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( '.ws_db_first_static' ).children().css( "background-color","<?php echo $nav_path11_hover_remained_areas ?>"  );//green
			}else if(target.hasClass( "ws_db_dimension_group_element")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				});
				jQuery( this_parent ).prevAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				});
				jQuery( target ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery( target ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>" );//green
				jQuery( '.ws_db_first_static' ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( '.ws_db_first_static' ).children().css( "background-color","<?php echo $nav_path11_hover_remained_areas ?>"  );//green
			}else if(target.hasClass( "ws_db_first_static")){
				var this_parent =jQuery( target ).parent();
				jQuery( target ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( target ).children().css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( target ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery( '.ws_db_first_static' ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( '.ws_db_first_static' ).children().css( "background-color","<?php echo $nav_path11_hover_remained_areas ?>"  );//green
			}else if(target.hasClass( "ws_db_first_static_child")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( this_parent ).nextAll().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color", "<?php echo $nav_path11_hover_deleted_areas ?>" );//red
				});
				jQuery( '.ws_db_first_static' ).css( "background-color", "<?php echo $nav_path11_hover_remained_areas ?>"  );//green
				jQuery( '.ws_db_first_static' ).children().css( "background-color","<?php echo $nav_path11_hover_remained_areas ?>"  );//green
			}
			
			
		}
		function helper_delete_element_unhover(evt) {
			var target = jQuery(evt.target);
			if ( target.hasClass( "ws_db_delete_sign_img")) {
				var this_parent1 =jQuery( target ).parent();
				var this_parent2 =jQuery( this_parent1 ).parent();
				jQuery( this_parent2 ).css( "background-color", "inherit"  );
				jQuery( this_parent2 ).children().css( "background-color",  "inherit"  );
				jQuery( target ).siblings().andSelf().css( "background-color", "inherit"  );
				jQuery( this_parent2 ).nextAll().css("background-color", "inherit" );
				jQuery.each(this_parent2.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( this_parent2 ).prevAll().css( "background-color", "inherit" );
				jQuery.each(this_parent2.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
			}else if(target.hasClass( "ws_db_delete_sign_text")){
				var this_parent2 =jQuery( target ).parent();
				jQuery( this_parent2 ).css( "background-color", "inherit"  );
				jQuery( this_parent2 ).children().css( "background-color",  "inherit"  );
				jQuery( this_parent2 ).nextAll().css( "background-color", "inherit" );
				jQuery.each(this_parent2.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( this_parent2 ).prevAll().css( "background-color", "inherit" );
				jQuery.each(this_parent2.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( '.ws_db_first_static' ).css( "background-color", "inherit"  );
			}else if(target.hasClass( "ws_db_number_element")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css("background-color", "inherit" );
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( this_parent ).prevAll().css("background-color", "inherit" );	
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( target ).siblings().andSelf().css( "background-color", "inherit"  );	
				jQuery( this_parent ).css( "background-color", "inherit"  );
				jQuery( this_parent ).children().css( "background-color",  "inherit"  );	
			}else if(target.hasClass( "ws_db_value_element")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css("background-color", "inherit" );
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( this_parent ).prevAll().css( "background-color", "inherit" );
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( target ).siblings().andSelf().css( "background-color", "inherit"  );
				jQuery( this_parent ).css( "background-color", "inherit"  );
				jQuery( this_parent ).children().css( "background-color",  "inherit"  );
			}else if(target.hasClass( "ws_db_sign_after_dimension")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css( "background-color", "inherit" );
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( target ).nextAll().css( "background-color", "inherit" );
				jQuery( target ).siblings().andSelf().css( "background-color", "inherit"  );
				jQuery( this_parent ).css( "background-color", "inherit"  );
				jQuery( this_parent ).children().css( "background-color",  "inherit"  );
				jQuery( this_parent ).prevAll().css("background-color", "inherit" );
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
			}else if(target.hasClass( "ws_db_dimension_element")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css( "background-color", "inherit" );
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( this_parent ).prevAll().css( "background-color", "inherit" );
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( target ).nextAll().css( "background-color", "inherit" );
				jQuery( target ).siblings().andSelf().css( "background-color", "inherit"  );
				jQuery( this_parent ).css( "background-color", "inherit"  );
				jQuery( this_parent ).children().css( "background-color",  "inherit"  );
			}else if(target.hasClass( "ws_db_sign_after_group")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css( "background-color", "inherit" );
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( target ).nextAll().css( "background-color", "inherit" );
				jQuery( target ).siblings().andSelf().css( "background-color", "inherit"  );
				jQuery( this_parent ).css( "background-color", "inherit"  );
				jQuery( this_parent ).children().css( "background-color",  "inherit"  );
				jQuery( this_parent ).prevAll().css("background-color", "inherit" );
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
			}else if(target.hasClass( "ws_db_dimension_group_element")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).nextAll().css( "background-color", "inherit" );
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( this_parent ).prevAll().css( "background-color", "inherit" );
				jQuery.each(this_parent.prevAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( target ).nextAll().css( "background-color", "inherit" );
				jQuery( target ).siblings().andSelf().css( "background-color", "inherit"  );
				jQuery( this_parent ).css( "background-color", "inherit"  );
				jQuery( this_parent ).children().css( "background-color",  "inherit"  );
			}else if(target.hasClass( "ws_db_first_static")){
				var this_parent =jQuery( target ).parent();
				jQuery( target ).css( "background-color", "inherit"  );
				jQuery( target ).nextAll().css( "background-color", "inherit" );
			}else if(target.hasClass( "ws_db_first_static_child")){
				var this_parent =jQuery( target ).parent();
				jQuery( this_parent ).css( "background-color", "inherit"  );
				jQuery( this_parent ).children().css( "background-color",  "inherit"  );
				jQuery( this_parent ).nextAll().css( "background-color", "inherit" );
				jQuery.each(this_parent.nextAll(), function( index, value ) {
				  jQuery(this).children().css( "background-color","inherit" );
				});
				jQuery( '.ws_db_first_static' ).css( "background-color", "inherit"  );
				jQuery( '.ws_db_first_static' ).children().css( "background-color", "inherit"  );
			}
			//first static most be in remained area always
			
		}
		jQuery(document).bind('mouseover', helper_delete_element_hover);
		jQuery(document).bind('mouseout', helper_delete_element_unhover);
		</script><?php 
			
			
			//
			$navigation_path_wraper_info=array('current_gruop_name'=>'navigation_path_section','current_element_name'=>'navigation_path_wrapper');
			$single_query_info=array('current_gruop_name'=>'navigation_path_section','current_element_name'=>'single_query');
			$first_static_info=array('current_gruop_name'=>'navigation_path_section','current_element_name'=>'first_static');
			$group_element_info=array('current_gruop_name'=>'navigation_path_section','current_element_name'=>'group_element');
			$sign_after_group_info=array('current_gruop_name'=>'navigation_path_section','current_element_name'=>'sign_after_group');
			$dimension_element_info=array('current_gruop_name'=>'navigation_path_section','current_element_name'=>'dimension_element');
			$sign_after_dimension_info=array('current_gruop_name'=>'navigation_path_section','current_element_name'=>'sign_after_dimension');
			$value_element_info=array('current_gruop_name'=>'navigation_path_section','current_element_name'=>'value_element');
			$number_element_info=array('current_gruop_name'=>'navigation_path_section','current_element_name'=>'number_element');
			$number_sign_info=array('current_gruop_name'=>'navigation_path_section','current_element_name'=>'number_sign');
			$delete_sign_info=array('current_gruop_name'=>'navigation_path_section','current_element_name'=>'delete_sign');
			//
			$navigation_path_wraper_style=ws_db_inline_style_creator($navigation_path_wraper_info);
			$single_query_style=ws_db_inline_style_creator($single_query_info);
			
			$first_static_style=ws_db_inline_style_creator($first_static_info);
			//var_dump($first_static_style);
			$group_element_style=ws_db_inline_style_creator($group_element_info);
			$sign_after_group_style=ws_db_inline_style_creator($sign_after_group_info);
			$dimension_element_style=ws_db_inline_style_creator($dimension_element_info);
			$sign_after_dimension_style=ws_db_inline_style_creator($sign_after_dimension_info);
			$value_element_style=ws_db_inline_style_creator($value_element_info);
			$number_element_style=ws_db_inline_style_creator($number_element_info);
			$number_sign_style=ws_db_inline_style_creator($number_sign_info);
			$delete_sign_style=ws_db_inline_style_creator($delete_sign_info);
			//
			$all_dimensions_sorted = $ws_db_all_setting['sort_charts_rr_content_for_sort_charts'];
			$object_all_style_stting_container= $ws_db_all_setting['object_all_style_stting_container'];
			$current_setting_gruop_name2='sort_charts_section';
			//var_dump($all_dimensions_sorted);
			//
			?><div class="ws_db_navigation_path_wraper_all" style="<?php echo $navigation_path_wraper_style; ?>" ><?php 
				?><div style="background-color:inherit;" >
					<div class="ws_db_first_static ws_db_single_query " style="cursor:pointer; <?php echo $single_query_style ?>" onclick="if_reset_element_of_path_clicked('reset_element_of_path_clicked' )" >
						<div style=" <?php echo $first_static_style ?>" class="ws_db_first_static_child"  ><?php echo $ws_db_all_setting['nav_path_first_static_settings']['nav_path11_first_static_alternative_text']; ?></div >
						<div  class="ws_db_first_static_child" style="<?php echo $number_sign_style ?>" ><?php echo $number_sign_settings['nav_path11_number_sign_before_alternative_text']; ?></div><div class="ws_db_first_static_child" style="<?php echo $number_element_style ?>" ><?php echo $base_post_ides_count;?></div><div class="ws_db_first_static_child" style="<?php echo $number_sign_style ?>" ><?php echo $number_sign_settings['nav_path11_number_sign_after_alternative_text']; ?></div>
					</div >
					<?php 
					foreach($navigation_path as $key=>$array){
						if (!empty($array)){
							?><div class="ws_db_single_query"  id="ws_db_navigation_path_warper<?php echo $key ?>" style="<?php echo $single_query_style ?>" ><?php
								$dimension_group_key=$array['dimension_group_key'];
								if($dimension_group_key=='all_dimensions_static'){
									$dimension_group_visible_text=$group_element_settings['nav_path11_group_element_alternative_text_basic'];
								}elseif($dimension_group_key=='all_dimensions_taxonomy'){
									$dimension_group_visible_text=$group_element_settings['nav_path11_group_element_alternative_text_taxo'];
								}elseif($dimension_group_key=='all_dimensions_custom_field'){
									$dimension_group_visible_text=$group_element_settings['nav_path11_group_element_alternative_text_field'];
								}
								//
								if($dimension_group_key=='all_dimensions_static'){$group_name='basic';}elseif($dimension_group_key=='all_dimensions_taxonomy'){$group_name='taxo';}elseif($dimension_group_key=='all_dimensions_custom_field'){$group_name='field';}
								//
								$this_step_post_ides=$array['this_step_post_ides'];
								$this_step_post_ides_count = count($this_step_post_ides);
								//
								
								//
								?><div class="ws_db_dimension_group_element" style="cursor:pointer; <?php echo $group_element_style ?>"  onclick="if_dimension_type_element_of_path_clicked('dimension_type_element_of_path_clicked',<?php echo $key ?>)"><?php echo $dimension_group_visible_text ?></div ><?php 
								if(array_key_exists('dimension_name',$array)){
									?><div class="ws_db_sign_after_group" style="cursor:pointer;  <?php echo $sign_after_group_style ?>" onclick="if_dimension_group_sign_of_path_clicked('dimension_group_sign_of_path_clicked',<?php echo $key ?>)"><?php echo $sign_after_group_settings['nav_path11_sign_after_group_alternative_text']; ?></div><?php 
									}
								if(array_key_exists('dimension_name',$array)){ 
									$dimension_name=$array['dimension_name'];
									//
									//extract dimension_name_visible_text
									foreach($all_dimensions_sorted as $key_number=>$array_options){
										if($group_name==$array_options['dimension_gruop'] and $dimension_name==$array_options['dimension_name'] ){
											$dimension_name_visible_text_defualt=$array_options['dimension_name_visible_text'];
											break;
										}
									}
									if(isset($object_all_style_stting_container[$current_setting_gruop_name2][$group_name][$dimension_name]['sort_charts_setting_instance214_chart_title'])){
										$dimension_name_visible_text=$object_all_style_stting_container[$current_setting_gruop_name2][$group_name][$dimension_name]['sort_charts_setting_instance214_chart_title'];
									}else{
										$dimension_name_visible_text=$dimension_name_visible_text_defualt;
									}
									//
									?><div class="ws_db_dimension_element" style="cursor:pointer; <?php  echo $dimension_element_style ?>" onclick="if_dimension_element_of_path_clicked('dimension_element_of_path_clicked',<?php echo $key ?>)" ><?php echo $dimension_name_visible_text ; ?></div ><?php
									if(array_key_exists('dimension_value_key',$array)){
										?><div class="ws_db_sign_after_dimension" style="cursor:pointer; <?php echo $sign_after_dimension_style ?>" onclick="if_dimension_sign_of_path_clicked('dimension_sign_of_path_clicked',<?php echo $key ?>)"><?php echo $sign_after_dimension_settings['nav_path11_sign_after_dimension_alternative_text']; ?></div><?php 
										}
								}
								if(array_key_exists('dimension_value_key',$array)){
									$dimension_value_key=$array['dimension_value_key'];	
									if($dimension_value_key == '' ){
										if(is_int($dimension_value_key)){
											//do not change it it is "0" and can be viewed . we had check for empty not 0 ,the check has bug
										}else{
											$dimension_value_key = $ws_db_all_setting['alternative_text_for_empty_values'];
										}
									}elseif($dimension_value_key == ' '){
										$dimension_value_key =$ws_db_all_setting['alternative_text_for_one_space_values'];
									}
									?><div class="ws_db_value_element" style="cursor:pointer; <?php echo $value_element_style ?>" onclick="if_value_element_of_path_clicked('value_element_of_path_clicked',<?php echo $key ?>)" ><?php echo $dimension_value_key ?></div ><?php
								}?>
									<div class="ws_db_number_element" style="cursor:pointer; <?php echo $number_sign_style ?>"  onclick="if_number_element_of_path_clicked('number_element_of_path_clicked',<?php echo $key ?>)"><?php echo $number_sign_settings['nav_path11_number_sign_before_alternative_text']; ?></div><div style="cursor:pointer; <?php echo $number_element_style ?>"  class="ws_db_number_element"  onclick="if_number_element_of_path_clicked('number_element_of_path_clicked',<?php echo $key ?>)"><?php echo $this_step_post_ides_count;?></div><div style="cursor:pointer; <?php echo $number_sign_style ?>" class="ws_db_number_element "  onclick="if_number_element_of_path_clicked('number_element_of_path_clicked',<?php echo $key ?>)"><?php echo $number_sign_settings['nav_path11_number_sign_after_alternative_text']; ?></div>
								<div class="ws_db_delete_sign_text" style="cursor:pointer; <?php echo $delete_sign_style ?>"  onclick="if_delete_element_of_path_clicked('delete_element_of_path_clicked',<?php echo $key ?>)" >
									<?php echo $delete_sign_settings['nav_path11_delete_sign_alternative_text']; ?>
									<img width="<?php echo $delete_sign_settings['nav_path11_delete_sign_image_width']; ?>" class="ws_db_delete_sign_img"  style="cursor:pointer;vertical-align: middle;" onclick="if_delete_element_of_path_clicked('delete_element_of_path_clicked',<?php echo $key ?>)" src="<?php echo WS_DB_DELETE_FROM_PATH;?>" alt="delete"  align="middle" >
								</div>
							</div><?php
						}
					}
			?></div><?php
		?></div><?php
	}
}
// html blank space &nbsp;
?>