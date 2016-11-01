<?php

if ( ! defined( 'ABSPATH' ) ) exit; 

add_action( 'wp_ajax_an-ajax-request-being-run', 'call_condition_control_center_on_ajax_request' );
add_action( 'wp_ajax_nopriv_an-ajax-request-being-run', 'call_condition_control_center_on_ajax_request' );


function call_condition_control_center_on_ajax_request() {
	ws_db_boot('ws_db_ajax_php_file','an_ajax_call_run','ws_db_ajax_php_file','','');
	die(0);
}

//var_dump($_POST);
?>