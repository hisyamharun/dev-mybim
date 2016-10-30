<?php
/*
Plugin Name:  data browser
Text Domain: data-browser-by-ws
Domain Path: /languages
Plugin URI:  https://wordpress.org/plugins/data-browser/
Description: data browser by wide soft
Version:     1.1.5
Author:      wide soft
Author URI:  https://profiles.wordpress.org/widesoft
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if (!defined('WS_DB_DIR_ADDRESS')){
define('WS_DB_DIR_ADDRESS', dirname(__file__));
}
//get the current directory URL
if (!defined('WS_DB_INCLUDE_DIR')){
define('WS_DB_INCLUDE_DIR', WS_DB_DIR_ADDRESS.'/1_include');
define('WS_DB_DIR_URL', plugin_dir_url(__FILE__));
define('WS_DB_MENU_ICON', WS_DB_DIR_URL.'images/ws_wc_mnu_icon.png');
define('WS_DB_LOADING_ICON', WS_DB_DIR_URL.'images/refresh.png');
define('WS_DB_DELETE_FROM_PATH', WS_DB_DIR_URL.'images/delete_from_path.png');
define('WS_DB_HIGH_CONTRAST_PATH', WS_DB_DIR_URL.'images/highContrast.jpg');
define('WS_DB_POINT_SHAPE_PATH', WS_DB_DIR_URL.'images/pointShape.png');
define('WS_DB_TRENDLINE_BAR_CHART_PATH', WS_DB_DIR_URL.'images/trendline_bar_chart.png');
define('WS_DB_TABS_SIGN_STYLE_PATH', WS_DB_DIR_URL.'images/tabs_sign_style.png');
define('WS_DB_TAB_TEXT_PATH', WS_DB_DIR_URL.'images/tab_text.png');
//
define('WS_DB_DELETE_SIGN_TID_PATH', WS_DB_DIR_URL.'images/nav_path/delete_sign_tid.png');
define('WS_DB_DIMENSION_ELEMENT_TID_PATH', WS_DB_DIR_URL.'images/nav_path/dimension_element_tid.png');
define('WS_DB_FIRST_STATIC_TID_PATH', WS_DB_DIR_URL.'images/nav_path/first_static_tid.png');
define('WS_DB_GROUP_ELEMENT_TID_PATH', WS_DB_DIR_URL.'images/nav_path/group_element_tid.png');
define('WS_DB_HOVER_DELETE_AREA_PATH', WS_DB_DIR_URL.'images/nav_path/hover_delete_area.png');
define('WS_DB_HOVER_REMAIN_AREA_PATH', WS_DB_DIR_URL.'images/nav_path/hover_remain_area.png');
define('WS_DB_NAVIGATION_PATH_WRAPPER_TID_PATH', WS_DB_DIR_URL.'images/nav_path/navigation_path_wrapper_tid.png');
define('WS_DB_NUMBER_ELEMENT_TID_PATH', WS_DB_DIR_URL.'images/nav_path/number_element_tid.png');
define('WS_DB_QUERY_STATMENT_WRAPPER_TID_PATH', WS_DB_DIR_URL.'images/nav_path/query_statment_wrapper_tid.png');
define('WS_DB_SIGN_BEFORE_AND_AFTER_NUMBER_ELEMENT_TID_PATH', WS_DB_DIR_URL.'images/nav_path/sign_before_and_after_number_element_tid.png');
define('WS_DB_THE_SIGN_AFTER_DIMENSION_ELEMENT_TID_PATH', WS_DB_DIR_URL.'images/nav_path/the_sign_after_dimension_element_tid.png');
define('WS_DB_THE_SIGN_AFTER_GROUP_ELEMENT_TID_PATH', WS_DB_DIR_URL.'images/nav_path/the_sign_after_group_element_tid.png');
define('WS_DB_VALUE_ELEMENT_TID_PATH', WS_DB_DIR_URL.'images/nav_path/value_element_tid.png');
define('WS_DB_ATTENTION_HIT_PATH', WS_DB_DIR_URL.'images/attention_hit.png');
define('WS_DB_NAV_PATH_HOVER_UNHOVER_PATH', WS_DB_DIR_URL.'images/nav_path/nav_path_hover_unhover.jpg');
//
define('WS_DB_AREA_CHART_SAMPLE_PATH', WS_DB_DIR_URL.'images/sample/areachart.png');
define('WS_DB_BAR_CHART_SAMPLE_PATH', WS_DB_DIR_URL.'images/sample/barchart.png');
define('WS_DB_COLUMN_CHART_SAMPLE_PATH', WS_DB_DIR_URL.'images/sample/columnchart.png');
define('WS_DB_DONUT_CHART_SAMPLE_PATH', WS_DB_DIR_URL.'images/sample/donutchart.png');
define('WS_DB_LINE_CHART_SAMPLE_PATH', WS_DB_DIR_URL.'images/sample/linechart.png');
define('WS_DB_PIE_CHART_SAMPLE_PATH', WS_DB_DIR_URL.'images/sample/piechart.png');
define('WS_DB_SCATTER_CHART_SAMPLE_PATH', WS_DB_DIR_URL.'images/sample/scatterchart.png');
define('WS_DB_STEPPED_AREA_CHART_SAMPLE_PATH', WS_DB_DIR_URL.'images/sample/steppedareachart.png');
define('WS_DB_TABLE_SAMPLE_PATH', WS_DB_DIR_URL.'images/sample/table.png');
//
define('WS_DB_DATA_BROWSER_BOX_PATH', WS_DB_DIR_URL.'images/guide/data_browser_box.jpg');
define('WS_DB_NAV_PATH_SECTION_PATH', WS_DB_DIR_URL.'images/guide/nav_path_box.jpg');
define('WS_DB_CHART_SECTION_PATH', WS_DB_DIR_URL.'images/guide/charts_box.jpg');
define('WS_DB_SINGLE_CHART_BOX_PATH', WS_DB_DIR_URL.'images/guide/single_chart_box.jpg');

define('WS_DB_PAGINATION_BOX_PATH', WS_DB_DIR_URL.'images/guide/pagination_box.jpg');
define('WS_DB_PAGINATION_CONTENT_PATH', WS_DB_DIR_URL.'images/guide/pagination_content.jpg');
define('WS_DB_POST_LIST_BOX_PATH', WS_DB_DIR_URL.'images/guide/post_list_box.jpg');
define('WS_DB_POST_LIST_ITEM_BOX_PATH', WS_DB_DIR_URL.'images/guide/post_list_item_box.jpg');
define('WS_DB_SINGLE_POST_BOX_PATH', WS_DB_DIR_URL.'images/guide/single_post_box.jpg');
define('WS_DB_SINGLE_POST_LIGHT_BOX_PATH', WS_DB_DIR_URL.'images/guide/single_post_light_box.jpg');

define('WS_DB_CHECK_SIGN_PATH', WS_DB_DIR_URL.'images/check_sign.png');
define('WS_DB_X_SIGN_PATH', WS_DB_DIR_URL.'images/x_sign.png');
define('WS_DB_F', true);


}
//include all php file inside 1_include directory in this plugin
$ws_db_Directory = new RecursiveDirectoryIterator(WS_DB_INCLUDE_DIR);
$ws_db_Iterator = new RecursiveIteratorIterator($ws_db_Directory);
$ws_db_Regex = new RegexIterator($ws_db_Iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);
foreach ($ws_db_Regex as $file_and_path) {
    $only_file_name = basename($file_and_path[0]);
	$dir_name = dirname($file_and_path[0]);
    //if($only_file_name == "data-browser-by-wide-soft.php") {
		
	//}elseif (strpos($dir_name,'other_wsdb') !== false){
		
	//}else{
		include_once ($file_and_path[0]);
	//}
}
/* now all php functions are ready to use. */
ws_db_boot('data_browser_by_wide_soft_file','wsdb_initialization','data_browser_by_wide_soft_file','create_wsdb_item_in_admin_menu','');
ws_db_boot('data_browser_by_wide_soft_file','wsdb_initialization','data_browser_by_wide_soft_file','add_style_and_script','');
ws_db_boot('data_browser_by_wide_soft_file','wsdb_initialization','data_browser_by_wide_soft_file','add_wsdb_shortcode_in_int','');


?>