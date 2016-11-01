<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_echo_js_object_for_all_style_setting_container' ) ) {
	function ws_db_echo_js_object_for_all_style_setting_container($browser_id)
	{
		$all_setting_from_meta = get_post_meta($browser_id, 'ws_db_all_setting');
		$all_setting = $all_setting_from_meta[0];
		if(isset($all_setting['object_all_style_stting_container'])){
			$object_all_style_stting_container=$all_setting['object_all_style_stting_container'];
			//var_dump($object_all_style_stting_container['single_post_section']['field']['_thumbnail_id']);
			$mySweetJSONString = json_encode($object_all_style_stting_container);
			?>
			<script>
				var object_all_style_stting_container = <?php echo $mySweetJSONString; ?>;
				///////
				jQuery(document).ready(function($){
					jQuery('input[name=all_dimensions_static_id]').on('input',function(e){
						var all_dimensions_static_text = jQuery('input[name=all_dimensions_static_id]').val();
						jQuery("#all_dimensions_static_id").text(all_dimensions_static_text);
					});
					jQuery('input[name=all_dimensions_taxonomy_id]').on('input',function(e){
						var all_dimensions_taxonomy_text = jQuery('input[name=all_dimensions_taxonomy_id]').val();
						jQuery("#all_dimensions_taxonomy_id").text(all_dimensions_taxonomy_text);
					});
					jQuery('input[name=all_dimensions_custom_field_id]').on('input',function(e){
						var all_dimensions_custom_field_text = jQuery('input[name=all_dimensions_custom_field_id]').val();
						jQuery("#all_dimensions_custom_field_id").text(all_dimensions_custom_field_text);
					});
				});
			</script>
			<?php
		}
	}
}
?>