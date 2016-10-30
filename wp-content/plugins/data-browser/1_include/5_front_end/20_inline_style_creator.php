<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_inline_style_creator' ) ) {
	function ws_db_inline_style_creator($array){
		global $ws_db_all_setting;
		$all_setting=$ws_db_all_setting;
		$object_all_style_stting_container= $all_setting['object_all_style_stting_container'];
		//load current element settings	
		$current_setting_gruop_name=$array['current_gruop_name'];
		if($current_setting_gruop_name=="no_gruop_name"){
			$this_element=$array['current_element_name'];
			//var_dump($this_element);
			if(isset($object_all_style_stting_container[$current_setting_gruop_name][$this_element])){
				$this_settings=$object_all_style_stting_container[$current_setting_gruop_name][$this_element];
			}else{
				$this_settings=array();
			}
			//var_dump($all_setting);
		}elseif($current_setting_gruop_name=="chart_section_manual"){
			$this_element=$array['current_element_name'];
			if(isset($object_all_style_stting_container[$current_setting_gruop_name][$this_element])){
				$this_settings=$object_all_style_stting_container[$current_setting_gruop_name][$this_element];
			}else{
				$this_settings=array();
			}
		}elseif($current_setting_gruop_name=="navigation_path_section"){
			$this_element=$array['current_element_name'];
			//var_dump($this_element);
			if(isset($object_all_style_stting_container[$current_setting_gruop_name][$this_element])){
				$this_settings=$object_all_style_stting_container[$current_setting_gruop_name][$this_element];
			}else{
				$this_settings=array();
			}
			//var_dump($all_setting);
		}elseif($current_setting_gruop_name=="post_list_section"){
			$current_dimension_gruop_name=$array['current_dimension_gruop_name'];
			$current_dimension_name=$array['current_dimension_name'];
			$current_setting_subject=$array['current_setting_subject'];
			if(isset($object_all_style_stting_container[$current_setting_gruop_name][$current_dimension_gruop_name][$current_dimension_name][$current_setting_subject])){
				$this_settings=$object_all_style_stting_container[$current_setting_gruop_name][$current_dimension_gruop_name][$current_dimension_name][$current_setting_subject];
			}else{
				$this_settings=array();
			}
		}elseif($current_setting_gruop_name=="post_list_manual_section"){
			$this_element=$array['current_element_name'];
			if(isset($object_all_style_stting_container[$current_setting_gruop_name][$this_element])){
				$this_settings=$object_all_style_stting_container[$current_setting_gruop_name][$this_element];
			}else{
				$this_settings=array();
			}
		}elseif($current_setting_gruop_name=="single_post_section"){
			$current_dimension_gruop_name=$array['current_dimension_gruop_name'];
			$current_dimension_name=$array['current_dimension_name'];
			$current_setting_subject=$array['current_setting_subject'];
			if(isset($object_all_style_stting_container[$current_setting_gruop_name][$current_dimension_gruop_name][$current_dimension_name][$current_setting_subject])){
				$this_settings=$object_all_style_stting_container[$current_setting_gruop_name][$current_dimension_gruop_name][$current_dimension_name][$current_setting_subject];
			}else{
				$this_settings=array();
			}
		}elseif($current_setting_gruop_name=="single_post_manual_section"){
			$this_element=$array['current_element_name'];
			if(isset($object_all_style_stting_container[$current_setting_gruop_name][$this_element])){
				$this_settings=$object_all_style_stting_container[$current_setting_gruop_name][$this_element];
			}else{
				$this_settings=array();
			}
		}

		//create inline style string based of founded settings .
		$css_style_string = '';
			if(is_array($this_settings)){
				//background-color
				if (isset($this_settings['all_element_setting_instance214_background_color']) and strlen($this_settings['all_element_setting_instance214_background_color']) >= 3){
					$css_style_string=$css_style_string.'background-color: '.$this_settings['all_element_setting_instance214_background_color'].'; ';
				} 
				//font-size
				if (isset($this_settings['all_element_setting_instance214_font_size']) and strlen($this_settings['all_element_setting_instance214_font_size']) >= 2){
					$css_style_string=$css_style_string.'font-size: '.$this_settings['all_element_setting_instance214_font_size'].'; ';
				}
				//color
				if (isset($this_settings['all_element_setting_instance214_font_color']) and strlen($this_settings['all_element_setting_instance214_font_color']) >= 2){
					$css_style_string=$css_style_string.'color: '.$this_settings['all_element_setting_instance214_font_color'].'; ';
				}
				//font-family
				if (isset($this_settings['all_element_setting_instance214_font_name']) and  strlen($this_settings['all_element_setting_instance214_font_name']) >= 2){
					$css_style_string=$css_style_string.'font-family: '.$this_settings['all_element_setting_instance214_font_name'].'; ';
				}
				//font-weight
				if (isset($this_settings['all_element_setting_instance214_font_bold']) and $this_settings['all_element_setting_instance214_font_bold'] == 'true'){
					$css_style_string=$css_style_string.'font-weight: bold; ';
				}
				//font-style 
				if (isset($this_settings['all_element_setting_instance214_font_italic']) and $this_settings['all_element_setting_instance214_font_italic'] == 'true'){
					$css_style_string=$css_style_string.'font-style: italic; ';
				}
				//width
				if (isset($this_settings['all_element_setting_instance214_width_px']) and strlen($this_settings['all_element_setting_instance214_width_px']) >= 2){
					$css_style_string=$css_style_string.'width: '.$this_settings['all_element_setting_instance214_width_px'].'; ';
				}
				//height
				if (isset($this_settings['all_element_setting_instance214_height_px']) and strlen($this_settings['all_element_setting_instance214_height_px']) >= 2){
					$css_style_string=$css_style_string.'height: '.$this_settings['all_element_setting_instance214_height_px'].'; ';
				}
				//min-width
				if (isset($this_settings['all_element_setting_instance214_min_width_px']) and strlen($this_settings['all_element_setting_instance214_min_width_px']) >= 2){
					$css_style_string=$css_style_string.'min-width: '.$this_settings['all_element_setting_instance214_min_width_px'].'; ';
				}
				//min-height
				if (isset($this_settings['all_element_setting_instance214_min_height_px']) and strlen($this_settings['all_element_setting_instance214_min_height_px']) >= 2){
					$css_style_string=$css_style_string.'min-height: '.$this_settings['all_element_setting_instance214_min_height_px'].'; ';
				}
				//max-width
				if (isset($this_settings['all_element_setting_instance214_max_width_px']) and strlen($this_settings['all_element_setting_instance214_max_width_px']) >= 2){
					$css_style_string=$css_style_string.'max-width: '.$this_settings['all_element_setting_instance214_max_width_px'].'; ';
				}
				//max-height
				if (isset($this_settings['all_element_setting_instance214_max_height_px']) and strlen($this_settings['all_element_setting_instance214_max_height_px']) >= 2){
					$css_style_string=$css_style_string.'max-height: '.$this_settings['all_element_setting_instance214_max_height_px'].'; ';
				}
				//text-align
				if (isset($this_settings['all_element_setting_instance214_text_align']) and $this_settings['all_element_setting_instance214_text_align']!='not_selected' ){
					$css_style_string=$css_style_string.'text-align: '.$this_settings['all_element_setting_instance214_text_align'].'; ';
				}
				//float
				if (isset($this_settings['all_element_setting_instance214_float']) and $this_settings['all_element_setting_instance214_float']!='not_selected' ){
					$css_style_string=$css_style_string.'float: '.$this_settings['all_element_setting_instance214_float'].'; ';
				}
				//direction
				if (isset($this_settings['all_element_setting_instance214_direction']) and $this_settings['all_element_setting_instance214_direction']!='not_selected' ){
					$css_style_string=$css_style_string.'direction: '.$this_settings['all_element_setting_instance214_direction'].'; ';
				}
				//display
				if (isset($this_settings['all_element_setting_instance214_display_block']) and $this_settings['all_element_setting_instance214_display_block']!='not_selected' ){
					$css_style_string=$css_style_string.'display: '.$this_settings['all_element_setting_instance214_display_block'].'; ';
				}
				//overflow-x
				if (isset($this_settings['all_element_setting_instance214_overflow_x']) and $this_settings['all_element_setting_instance214_overflow_x']!='not_selected' ){
					$css_style_string=$css_style_string.'overflow-x: '.$this_settings['all_element_setting_instance214_overflow_x'].'; ';
				}
				//overflow-y
				if (isset($this_settings['all_element_setting_instance214_overflow_y']) and $this_settings['all_element_setting_instance214_overflow_y']!='not_selected' ){
					$css_style_string=$css_style_string.'overflow-y: '.$this_settings['all_element_setting_instance214_overflow_y'].'; ';
				}
				//word-break
				if (isset($this_settings['all_element_setting_instance214_word_break']) and $this_settings['all_element_setting_instance214_word_break']!='not_selected' ){
					$css_style_string=$css_style_string.'word-break: '.$this_settings['all_element_setting_instance214_word_break'].'; ';
				}
				//letter-spacing
				if (isset($this_settings['all_element_setting_instance214_letter_spacing']) and strlen($this_settings['all_element_setting_instance214_letter_spacing']) >= 2){
					$css_style_string=$css_style_string.'letter-spacing: '.$this_settings['all_element_setting_instance214_letter_spacing'].'; ';
				}
				//word-spacing
				if (isset($this_settings['all_element_setting_instance214_word_spacing']) and strlen($this_settings['all_element_setting_instance214_word_spacing']) >= 2){
					$css_style_string=$css_style_string.'word-spacing: '.$this_settings['all_element_setting_instance214_word_spacing'].'; ';
				}
				//margin-top
				if (isset($this_settings['all_element_setting_instance214_margin_top']) and strlen($this_settings['all_element_setting_instance214_margin_top']) >= 2){
					$css_style_string=$css_style_string.'margin-top: '.$this_settings['all_element_setting_instance214_margin_top'].'; ';
				}
				//margin-bottom
				if (isset($this_settings['all_element_setting_instance214_margin_bottom']) and strlen($this_settings['all_element_setting_instance214_margin_bottom']) >= 2){
					$css_style_string=$css_style_string.'margin-bottom: '.$this_settings['all_element_setting_instance214_margin_bottom'].'; ';
				}
				//margin-left
				if (isset($this_settings['all_element_setting_instance214_margin_left']) and strlen($this_settings['all_element_setting_instance214_margin_left']) >= 2){
					$css_style_string=$css_style_string.'margin-left: '.$this_settings['all_element_setting_instance214_margin_left'].'; ';
				}
				//margin-right
				if (isset($this_settings['all_element_setting_instance214_margin_right']) and strlen($this_settings['all_element_setting_instance214_margin_right']) >= 2){
					$css_style_string=$css_style_string.'margin-right: '.$this_settings['all_element_setting_instance214_margin_right'].'; ';
				}
				//padding-top
				if (isset($this_settings['all_element_setting_instance214_padding_top']) and strlen($this_settings['all_element_setting_instance214_padding_top']) >= 2){
					$css_style_string=$css_style_string.'padding-top: '.$this_settings['all_element_setting_instance214_padding_top'].'; ';
				}
				//padding-bottom
				if (isset($this_settings['all_element_setting_instance214_padding_bottom']) and strlen($this_settings['all_element_setting_instance214_padding_bottom']) >= 2){
					$css_style_string=$css_style_string.'padding-bottom: '.$this_settings['all_element_setting_instance214_padding_bottom'].'; ';
				}
				//padding-left
				if (isset($this_settings['all_element_setting_instance214_padding_left']) and strlen($this_settings['all_element_setting_instance214_padding_left']) >= 2){
					$css_style_string=$css_style_string.'padding-left: '.$this_settings['all_element_setting_instance214_padding_left'].'; ';
				}
				//padding-right
				if (isset($this_settings['all_element_setting_instance214_padding_right']) and strlen($this_settings['all_element_setting_instance214_padding_right']) >= 2){
					$css_style_string=$css_style_string.'padding-right: '.$this_settings['all_element_setting_instance214_padding_right'].'; ';
				}
				//border 
				if (isset($this_settings['all_element_setting_instance214_border_enable']) and $this_settings['all_element_setting_instance214_border_enable'] == 'true'){
					//border-width
					if (isset($this_settings['all_element_setting_instance214_border_width']) and strlen($this_settings['all_element_setting_instance214_border_width']) >= 2){
						$css_style_string=$css_style_string.'border-width: '.$this_settings['all_element_setting_instance214_border_width'].'; ';
					}
					//border-style
					if (isset($this_settings['all_element_setting_instance214_border_type']) and $this_settings['all_element_setting_instance214_border_type']!='not_selected'){
						$css_style_string=$css_style_string.'border-style: '.$this_settings['all_element_setting_instance214_border_type'].'; ';
					}
					//border-color
					if (isset($this_settings['all_element_setting_instance214_border_color']) and strlen($this_settings['all_element_setting_instance214_border_color']) >= 2){
						$css_style_string=$css_style_string.'border-color: '.$this_settings['all_element_setting_instance214_border_color'].'; ';
					}
				}	
				//border-top 
				if (isset($this_settings['all_element_setting_instance214_border_top_enable']) and $this_settings['all_element_setting_instance214_border_top_enable'] == 'true'){
					//border-top-width
					if (isset($this_settings['all_element_setting_instance214_border_top_width']) and strlen($this_settings['all_element_setting_instance214_border_top_width']) >= 2){
						$css_style_string=$css_style_string.'border-top-width: '.$this_settings['all_element_setting_instance214_border_top_width'].'; ';
					}
					//border-top-style
					if (isset($this_settings['all_element_setting_instance214_border_top_type']) and $this_settings['all_element_setting_instance214_border_top_type']!='not_selected'){
						$css_style_string=$css_style_string.'border-top-style: '.$this_settings['all_element_setting_instance214_border_top_type'].'; ';
					}
					//border-top-color
					if (isset($this_settings['all_element_setting_instance214_border_top_color']) and strlen($this_settings['all_element_setting_instance214_border_top_color']) >= 2){
						$css_style_string=$css_style_string.'border-top-color: '.$this_settings['all_element_setting_instance214_border_top_color'].'; ';
					}
				}
				//border-bottom 
				if (isset($this_settings['all_element_setting_instance214_border_bottom_enable']) and $this_settings['all_element_setting_instance214_border_bottom_enable'] == 'true'){
					//border-bottom-width
					if (isset($this_settings['all_element_setting_instance214_border_bottom_width']) and strlen($this_settings['all_element_setting_instance214_border_bottom_width']) >= 2){
						$css_style_string=$css_style_string.'border-bottom-width: '.$this_settings['all_element_setting_instance214_border_bottom_width'].'; ';
					}
					//border-bottom-style
					if (isset($this_settings['all_element_setting_instance214_border_bottom_type']) and $this_settings['all_element_setting_instance214_border_bottom_type']!='not_selected'){
						$css_style_string=$css_style_string.'border-bottom-style: '.$this_settings['all_element_setting_instance214_border_bottom_type'].'; ';
					}
					//border-bottom-color
					if (isset($this_settings['all_element_setting_instance214_border_bottom_color']) and strlen($this_settings['all_element_setting_instance214_border_bottom_color']) >= 2){
						$css_style_string=$css_style_string.'border-bottom-color: '.$this_settings['all_element_setting_instance214_border_bottom_color'].'; ';
					}
				}
				//border-left 
				if (isset($this_settings['all_element_setting_instance214_border_left_enable']) and $this_settings['all_element_setting_instance214_border_left_enable'] == 'true'){
					//border-left-width
					if (isset($this_settings['all_element_setting_instance214_border_left_width']) and strlen($this_settings['all_element_setting_instance214_border_left_width']) >= 2){
						$css_style_string=$css_style_string.'border-left-width: '.$this_settings['all_element_setting_instance214_border_left_width'].'; ';
					}
					//border-left-style
					if (isset($this_settings['all_element_setting_instance214_border_left_type']) and $this_settings['all_element_setting_instance214_border_left_type']!='not_selected'){
						$css_style_string=$css_style_string.'border-left-style: '.$this_settings['all_element_setting_instance214_border_left_type'].'; ';
					}
					//border-left-color
					if (isset($this_settings['all_element_setting_instance214_border_left_color']) and strlen($this_settings['all_element_setting_instance214_border_left_color']) >= 2){
						$css_style_string=$css_style_string.'border-left-color: '.$this_settings['all_element_setting_instance214_border_left_color'].'; ';
					}
				}
				//border-right 
				if (isset($this_settings['all_element_setting_instance214_border_right_enable']) and $this_settings['all_element_setting_instance214_border_right_enable'] == 'true'){
					//border-right-width
					if (isset($this_settings['all_element_setting_instance214_border_right_width']) and strlen($this_settings['all_element_setting_instance214_border_right_width']) >= 2){
						$css_style_string=$css_style_string.'border-right-width: '.$this_settings['all_element_setting_instance214_border_right_width'].'; ';
					}
					//border-right-style
					if (isset($this_settings['all_element_setting_instance214_border_right_type']) and $this_settings['all_element_setting_instance214_border_right_type']!='not_selected'){
						$css_style_string=$css_style_string.'border-right-style: '.$this_settings['all_element_setting_instance214_border_right_type'].'; ';
					}
					//border-right-color
					if (isset($this_settings['all_element_setting_instance214_border_right_color']) and strlen($this_settings['all_element_setting_instance214_border_right_color']) >= 2){
						$css_style_string=$css_style_string.'border-right-color: '.$this_settings['all_element_setting_instance214_border_right_color'].'; ';
					}
				}
				//border-top-left-radius 
				if (isset($this_settings['all_element_setting_instance214_border_top_left_radius']) and strlen($this_settings['all_element_setting_instance214_border_top_left_radius']) >= 2){
					$css_style_string=$css_style_string.'border-top-left-radius: '.$this_settings['all_element_setting_instance214_border_top_left_radius'].'; ';
				}
				//border-top-right-radius 
				if (isset($this_settings['all_element_setting_instance214_border_top_right_radius']) and strlen($this_settings['all_element_setting_instance214_border_top_right_radius']) >= 2){
					$css_style_string=$css_style_string.'border-top-right-radius: '.$this_settings['all_element_setting_instance214_border_top_right_radius'].'; ';
				}
				//border-bottom-left-radius 
				if (isset($this_settings['all_element_setting_instance214_border_bottom_left_radius']) and strlen($this_settings['all_element_setting_instance214_border_bottom_left_radius']) >= 2){
					$css_style_string=$css_style_string.'border-bottom-left-radius: '.$this_settings['all_element_setting_instance214_border_bottom_left_radius'].'; ';
				}
				//border-bottom-right-radius 
				if (isset($this_settings['all_element_setting_instance214_border_bottom_right_radius']) and strlen($this_settings['all_element_setting_instance214_border_bottom_right_radius']) >= 2){
					$css_style_string=$css_style_string.'border-bottom-right-radius: '.$this_settings['all_element_setting_instance214_border_bottom_right_radius'].'; ';
				}
				//text-shadow 
				if ( isset($this_settings['all_element_setting_instance214_text_shadow_enable']) 
				and  isset($this_settings['all_element_setting_instance214_text_shadow_h_shadow']) 
				and  isset($this_settings['all_element_setting_instance214_text_shadow_v_shadow']) 
				and  isset($this_settings['all_element_setting_instance214_text_shadow_blur']) 
				and  isset($this_settings['all_element_setting_instance214_text_shadow_color']) 
				and  $this_settings['all_element_setting_instance214_text_shadow_enable'] == 'true' 
				and strlen($this_settings['all_element_setting_instance214_text_shadow_h_shadow']) >= 2
				and strlen($this_settings['all_element_setting_instance214_text_shadow_v_shadow']) >= 2
				and strlen($this_settings['all_element_setting_instance214_text_shadow_blur']) >= 2
				and strlen($this_settings['all_element_setting_instance214_text_shadow_color']) >= 2
				){
					$css_style_string=$css_style_string.'text-shadow: '.$this_settings['all_element_setting_instance214_text_shadow_h_shadow'].' '.$this_settings['all_element_setting_instance214_text_shadow_v_shadow'].' '.$this_settings['all_element_setting_instance214_text_shadow_blur'].' '.$this_settings['all_element_setting_instance214_text_shadow_color'].'; ';
				}
				//box-shadow 
				if (isset($this_settings['all_element_setting_instance214_box_shadow_enable']) 
				and isset($this_settings['all_element_setting_instance214_box_shadow_h_shadow']) 
				and isset($this_settings['all_element_setting_instance214_box_shadow_v_shadow']) 
				and isset($this_settings['all_element_setting_instance214_box_shadow_blur']) 
				and isset($this_settings['all_element_setting_instance214_box_shadow_spread']) 
				and isset($this_settings['all_element_setting_instance214_box_shadow_color']) 
				and $this_settings['all_element_setting_instance214_box_shadow_enable'] == 'true'
				and strlen($this_settings['all_element_setting_instance214_box_shadow_h_shadow']) >= 2
				and strlen($this_settings['all_element_setting_instance214_box_shadow_v_shadow']) >= 2
				and strlen($this_settings['all_element_setting_instance214_box_shadow_blur']) >= 2
				and strlen($this_settings['all_element_setting_instance214_box_shadow_spread']) >= 2
				and strlen($this_settings['all_element_setting_instance214_box_shadow_color']) >= 2
				){
					if (isset($this_settings['all_element_setting_instance214_box_shadow_direction'] ) and $this_settings['all_element_setting_instance214_box_shadow_direction'] == 'inset'){
						$all_element_setting_instance214_box_shadow_direction='inset';
					}else{
						$all_element_setting_instance214_box_shadow_direction='';
					}
					$css_style_string=$css_style_string.'box-shadow: '.$this_settings['all_element_setting_instance214_box_shadow_h_shadow'].' '.$this_settings['all_element_setting_instance214_box_shadow_v_shadow'].' '.$this_settings['all_element_setting_instance214_box_shadow_blur'].' '.$this_settings['all_element_setting_instance214_box_shadow_spread'].' '.$this_settings['all_element_setting_instance214_box_shadow_color'].' '.$all_element_setting_instance214_box_shadow_direction.'; ';
				}	
			}
		return $css_style_string;
	}
}
?>