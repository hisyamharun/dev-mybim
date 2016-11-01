<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_get_static_dimensions' ) ) {
function ws_db_get_static_dimensions($post)
{
$static_dimensions = array(
	'post_author'=>array($post->post_author=>$post->post_author  ),
	'post_date'=>array($post->post_date =>$post->post_date  ),
	'post_status'=>array($post->post_status=>$post->post_status  ) ,
	'comment_status'=>array($post->comment_status=>$post->comment_status  ) ,
	'ping_status'=>array($post->ping_status=>$post->ping_status  ) ,
	'post_password'=>array($post->post_password=>$post->post_password ) ,
	'to_ping'=>array($post->to_ping=>$post->to_ping ) ,
	'pinged'=>array($post->pinged =>$post->pinged),
	'post_parent'=>array($post->post_parent=>$post->post_parent  ) ,
	'post_type'=>array($post->post_type =>$post->post_type ),
	'post_mime_type'=>array($post->post_mime_type=>$post->post_mime_type ) ,
	'comment_count'=>array($post->comment_count=>$post->comment_count  ) ,
	//'post_date_gmt'=>$post->post_date_gmt ,
	'post_modified'=>array($post->post_modified=>$post->post_modified  ) ,
	//'post_modified_gmt'=>$post->post_modified_gmt ,
	'post_title'=>array($post->post_title=>$post->post_title  ) ,
	'post_content'=>array($post->post_content=>$post->post_content  ) ,
 );
 $static_dimensions=array_filter($static_dimensions);
 return $static_dimensions;
}
}
?>