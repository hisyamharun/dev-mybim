<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_get_taxonomy_dynamic_dimensions' ) ) {
function ws_db_get_taxonomy_dynamic_dimensions($post)
{
 $taxonomy_dynamic_dimensions =array();
 $taxonomy_objects = get_object_taxonomies( $post, 'objects' );
 //$all_taxonoy_name_in_this_post = array()   
foreach( $taxonomy_objects as $taxonomy_slug => $taxonomy_object ){
 
   //key is taxonomy slug
   //terms_of_current_taxo_of_current_post
   $terms_array = wp_get_post_terms( $post->ID, $taxonomy_slug, array("fields" => "names") );
   $taxonomy_dynamic_dimensions[$taxonomy_slug]= $terms_array ;
}
//send the name of each taxonomy to the last of its array
 $taxonomy_dynamic_dimensions=array_filter($taxonomy_dynamic_dimensions);
/*  foreach( $taxonomy_dynamic_dimensions as $taxonomy_slug => $terms_array  ){
	$taxonomy_object = get_taxonomy( $taxonomy_slug );
	$taxonomy_name = $taxonomy_object->labels->name;
	$terms_array[] = $taxonomy_name ;
	$taxonomy_dynamic_dimensions[$taxonomy_slug]= $terms_array ;
	 
 } */
 return $taxonomy_dynamic_dimensions;
}
}
?>