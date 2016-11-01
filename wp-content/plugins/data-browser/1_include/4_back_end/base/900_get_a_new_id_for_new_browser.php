<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
// Register ws_db_operation_cpt
if ( ! function_exists( 'ws_db_get_a_new_id_for_new_browser' ) ) {
	function ws_db_get_a_new_id_for_new_browser(){
		
		$args = array (
			'post_type'              => array( 'browser_screens_cpt' ),
		);
		$browser_screens_query = new WP_Query( $args );
		$posts=$browser_screens_query->posts;
		$all_browsers_ides =array();
		if(!empty($posts)){
			foreach($posts as $post){
				$this_browser_id =get_post_meta( $post->ID, 'wsdb_browser_id', true );
				$this_browser_id=(int)$this_browser_id;
				$all_browsers_ides[]=$this_browser_id;
			}
			
		$highest_id = max($all_browsers_ides); 
		$new_id=$highest_id+1;
		}else{
			$new_id=1;
		}
		return $new_id;
	}
}


?>