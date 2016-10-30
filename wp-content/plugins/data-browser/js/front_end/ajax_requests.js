
function ws_db_during_ajax_request(){
	jQuery(".wsdb_loading_front_end_class").show();
}
function ws_db_complete_ajax_request(){
	jQuery(".wsdb_loading_front_end_class").hide();
}








function ws_db_call_ajax_php(type_of_ajax_request,dimension_group_key,dimension_name,dimension_value_key,dimension_value_number){
	
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'dimension_group_key': dimension_group_key,
			'dimension_name': dimension_name,
			'dimension_value_key': dimension_value_key,
			'dimension_value_number': dimension_value_number,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_result').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
			  ws_db_draw_chart();
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
function if_reset_element_of_path_clicked(type_of_ajax_request){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1 ,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_result').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
			  ws_db_draw_chart();
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
function if_number_element_of_path_clicked(type_of_ajax_request , index_of_path){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1 ,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'index_of_path': index_of_path,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_result').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
			  ws_db_draw_chart();
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
function if_value_element_of_path_clicked(type_of_ajax_request , index_of_selected_step_of_path){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1 ,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'index_of_selected_step_of_path': index_of_selected_step_of_path,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_result').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
			  ws_db_draw_chart();
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
function if_dimension_element_of_path_clicked(type_of_ajax_request , index_of_selected_step_of_path){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1 ,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'index_of_selected_step_of_path': index_of_selected_step_of_path,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_result').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
			  ws_db_draw_chart();
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
function if_dimension_type_element_of_path_clicked(type_of_ajax_request , index_of_selected_step_of_path){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'index_of_selected_step_of_path': index_of_selected_step_of_path,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_result').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
			  ws_db_draw_chart();
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
function if_th_row_of_data_table_clicked(type_of_ajax_request , dimension_group_key,dimension_name){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1 ,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'dimension_group_key': dimension_group_key,
			'dimension_name': dimension_name,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_result').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
			  ws_db_draw_chart();
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
function if_dimension_type_element_of_data_clicked(type_of_ajax_request , dimension_group_key){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1 ,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'dimension_group_key': dimension_group_key,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_result').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
			  ws_db_draw_chart();
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
function if_delete_element_of_path_clicked(type_of_ajax_request , index_of_selected_step_of_path){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1 ,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'index_of_selected_step_of_path': index_of_selected_step_of_path,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_result').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
			  ws_db_draw_chart();
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
function if_dimension_sign_of_path_clicked(type_of_ajax_request , index_of_selected_step_of_path){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'index_of_selected_step_of_path': index_of_selected_step_of_path,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_result').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
			 ws_db_draw_chart(); 
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
function if_dimension_group_sign_of_path_clicked(type_of_ajax_request , index_of_selected_step_of_path){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1 ,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'index_of_selected_step_of_path': index_of_selected_step_of_path,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_result').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
			ws_db_draw_chart();
			   
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
//////////////////////////////////////////////////////////////////////////////////

function if_post_list_pagination_number_clicked(type_of_ajax_request , selected_number){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	ws_db_during_ajax_request();
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1 ,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':type_of_ajax_request,
			'all_basic_info':all_basic_info,
			'selected_number': selected_number,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_page_navigation_content').html(msg);
			jQuery(".mCustomScrollbar").mCustomScrollbar();
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}
//////////////////////////////////////////////////////////////////////////////////
function if_post_list_item_clicked(){
	if( jQuery('#ws_db_this_browser_id_front_end').length ){
			var this_browser_id=jQuery('#ws_db_this_browser_id_front_end').text();
		}else{
			var this_browser_id='0';
		}
	//open light box
	var selected_post_id_in_post_list = jQuery( this ).find('.ws_db_this_post_id').text();
	ws_db_during_ajax_request();
	jQuery.magnificPopup.open({
	  items: {
		src: "#ws_db_single_post_result_div",
		type: 'inline',
	   },
	   callbacks: {
		beforeOpen: function() {
		},
		close: function() {	
		 jQuery( "#ws_db_single_post_result_div" ).empty();
		},
	   },
	});
	//ajax
	
	jQuery.ajax({
		type: "POST",
		//grab data from function.php by => wp_localize_script
		url: pefix_handel.name_1 ,
		data: {
			action: 'an-ajax-request-being-run',
			'type_of_ajax_request':'post_list_item_in_borwser_screen_item_clicked',
			'selected_post_id_in_post_list':selected_post_id_in_post_list,
			'this_browser_id':this_browser_id,
		},
		success: function(msg) {
			jQuery('#ws_db_single_post_result_div').html(msg);
		},
		complete: function() {
			ws_db_complete_ajax_request();
		},
	});
}


jQuery(document).on("click",".ws_db_post_list_item_wrapper", if_post_list_item_clicked);

