<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_get_browser_post_id' ) ) {
	function ws_db_get_browser_post_id($browser_id){

		$browser_id =(int)$browser_id; 
		//
		if($browser_id != 0){
			$args = array (
				'post_type'=> array( 'browser_screens_cpt' ),
			);
			$browser_screens_query = new WP_Query( $args );
			$posts=$browser_screens_query->posts;	
			if(!empty($posts)){
				foreach($posts as $post){
					$this_browser_id =get_post_meta( $post->ID, 'wsdb_browser_id', true );
					$this_browser_id=(int)$this_browser_id;
					if($this_browser_id==$browser_id){
						$browser_post_id = $post->ID;
						break;
					}
				}
			}else{
				echo'(shortcode section) no browser founded';
				$browser_post_id=0;
			}
			$browser_post_id=(int)$browser_post_id;
			
		}else{
			$browser_post_id=0;
		}
		return $browser_post_id;
	}
}

//[ws_data_browser id='1']
?>