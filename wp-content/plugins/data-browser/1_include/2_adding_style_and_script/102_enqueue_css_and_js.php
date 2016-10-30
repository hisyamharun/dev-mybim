<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_custom_css_and_js_front_end' ) ) {
	function ws_db_custom_css_and_js_front_end()
	{
		wp_register_script('ws_js_front', WS_DB_DIR_URL.'js/front_end/function.js');
		wp_register_script('ws_js_ar_front', WS_DB_DIR_URL.'js/front_end/ajax_requests.js');
		wp_enqueue_script('ws_js_front');
		wp_enqueue_script('ws_js_ar_front');
		//send url of the 1-links-extraction function.js so javascript can dynamically refer to Ajax.php that located in 1-links-extraction  folder
		$translation_array = array(
				'name_1'   => admin_url( 'admin-ajax.php' ),
				'a_value' => '10'
			);//wp_localize_script( $handle, $name, $data );
		wp_localize_script('ws_js_front', 'pefix_handel', $translation_array);
		wp_localize_script('ws_js_ar_front', 'pefix_handel', $translation_array);
		wp_enqueue_style('ws_db_css_handel', WS_DB_DIR_URL.'css/ws_db_style.css');
	}
}
if ( ! function_exists( 'ws_db_custom_css_and_js_back_end' ) ) {
	function ws_db_custom_css_and_js_back_end()
	{
		wp_register_script('ws_js_back', WS_DB_DIR_URL.'js/back_end/function.js');
		wp_register_script('ws_js_ilbc_back', WS_DB_DIR_URL.'js/back_end/if_light_box_clicked.js');
		wp_register_script('ws_js_isbc_back', WS_DB_DIR_URL.'js/back_end/if_save_botton_clicked.js');
		wp_enqueue_script('ws_js_back');
		wp_enqueue_script('ws_js_ilbc_back');
		wp_enqueue_script('ws_js_isbc_back');
		//send url of the 1-links-extraction function.js so javascript can dynamically refer to Ajax.php that located in 1-links-extraction  folder
		$translation_array = array(
				'name_1'   => admin_url( 'admin-ajax.php' ),
				'a_value' => '10'
			);//wp_localize_script( $handle, $name, $data );
		wp_localize_script('ws_js_back', 'pefix_handel', $translation_array);
		wp_localize_script('ws_js_ilbc_back', 'pefix_handel', $translation_array);
		wp_localize_script('ws_js_isbc_back', 'pefix_handel', $translation_array);
		//
		wp_enqueue_style('ws_db_css_handel', WS_DB_DIR_URL.'css/ws_db_style.css');
	}
}




if ( ! function_exists( 'ws_db_magnific_popup' ) ) {
	function ws_db_magnific_popup()
	{
		wp_enqueue_style('ws_db_magnific_popup_css',WS_DB_DIR_URL.'other_wsdb/magnific-popup/magnific-popup.css');	
		wp_register_script('ws_db_magnific_popup_js', WS_DB_DIR_URL.'other_wsdb/magnific-popup/jquery.magnific-popup.js');
		wp_enqueue_script('ws_db_magnific_popup_js');
	}
}
if ( ! function_exists( 'ws_db_foundation_js' ) ) {
	function ws_db_foundation_js()
	{
		wp_register_script('ws_db_foundation_js',WS_DB_DIR_URL.'other_wsdb/foundation/foundation.js');
		wp_enqueue_script('ws_db_foundation_js');
		wp_register_script('ws_db_foundation_modernizr',WS_DB_DIR_URL.'other_wsdb/foundation/modernizr.js');
		wp_enqueue_script('ws_db_foundation_modernizr');
	}
}
if ( ! function_exists( 'ws_db_foundation_css' ) ) {
	function ws_db_foundation_css()
	{
		wp_register_style( 'foundation_css',WS_DB_DIR_URL.'other_wsdb/foundation/foundation.css',99 );
		wp_enqueue_style('foundation_css')	;	
	}
}
if ( ! function_exists( 'ws_db_font_awesome_css' ) ) {
	function ws_db_font_awesome_css()
	{
		wp_register_style( 'font_awesome_css',WS_DB_DIR_URL.'other_wsdb/font-awesome/css/font-awesome.css',99 );
		wp_enqueue_style('font_awesome_css')	;	
	}
}


if ( ! function_exists( 'ws_db_malihu_custom_scrollbar' ) ) {
	function ws_db_malihu_custom_scrollbar()
	{
		wp_register_style( 'malihu_scrollbar_css',WS_DB_DIR_URL.'other_wsdb/malihu-custom-scrollbar/jquery.mCustomScrollbar.css',99 );
		wp_enqueue_style('malihu_scrollbar_css');	
		wp_register_script('malihu_scrollbar_js',WS_DB_DIR_URL.'other_wsdb/malihu-custom-scrollbar/jquery.mCustomScrollbar.js');
		wp_enqueue_script('malihu_scrollbar_js');
	}
}






if ( ! function_exists( 'ws_db_bootpag' ) ) {
	function ws_db_bootpag()
	{
		wp_register_script('ws_db_jquery_bootpag_handel', WS_DB_DIR_URL.'other_wsdb/jquery_bootpag/jquery.bootpag.js');
		wp_enqueue_script('ws_db_jquery_bootpag_handel');
	}
}
if ( ! function_exists( 'ws_db_bootstrap_css' ) ) {
	function ws_db_bootstrap_css()
	{
		wp_enqueue_style('bootstrapcdn_css',WS_DB_DIR_URL.'other_wsdb/bootstrap/css/bootstrap.css');
	}
}
if ( ! function_exists( 'ws_db_bootstrap_js' ) ) {
	function ws_db_bootstrap_js()
	{
		wp_register_script('ws_db_bootstrap_handel',WS_DB_DIR_URL.'other_wsdb/bootstrap/js/bootstrap.js');
		wp_enqueue_script('ws_db_bootstrap_handel');
	}
}
if ( ! function_exists( 'ws_db_jquery_js_wp' ) ) {
	function ws_db_jquery_js_wp()
	{
		wp_enqueue_script('jquery' );
		wp_enqueue_script('jquery-ui-core' );
		wp_enqueue_script('jquery-ui-tabs' );
		wp_enqueue_script('jquery-ui-sortable' );
		wp_enqueue_script('jquery-effects-core' );
		wp_enqueue_script('jquery-effects-fade' );
		
	}
}

if ( ! function_exists( 'ws_db_jquery_css' ) ) {
	function ws_db_jquery_css()
	{
		wp_enqueue_style('jquery-ui', WS_DB_DIR_URL.'other_wsdb/jquery/jquery-ui.css');
	}
}

if ( ! function_exists( 'ws_db_google_chart_scripts' ) ) {
	function ws_db_google_chart_scripts()
	{
		//wp_register_script('ws_db_google_jsapi','https://www.google.com/jsapi');//wp_enqueue_script('ws_db_google_jsapi');
		?>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<?php	
	}
}

if ( ! function_exists( 'ws_db_google_chart_scripts_offline' ) ) {
	function ws_db_google_chart_scripts_offline()
	{
		wp_register_script('ws_db_gchart_offline_loader', WS_DB_DIR_URL.'other_wsdb/google-chart/1_loader.js');
		wp_enqueue_script('ws_db_gchart_offline_loader');

	}
}


if ( ! function_exists( 'ws_db_color_picker_scripts' ) ) {
	function ws_db_color_picker_scripts()
	{
		wp_enqueue_style('wp-color-picker');
		wp_enqueue_script('iris', admin_url('js/iris.min.js'),array('jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch'), false, 1);
		wp_enqueue_script('wp-color-picker', admin_url('js/color-picker.min.js'), array('iris'), false,1);
		$colorpicker_l10n = array('clear' => __('Clear'), 'defaultString' => __('Default'), 'pick' => __('Select Color'));
		wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', $colorpicker_l10n ); 
		//wp_enqueue_style('wp-color-picker' ); 
		//wp_enqueue_script('wp-color-picker' );
	}
}
?>