<?php

function movies_register_post_type() {

register_post_type(
'project',
array(
'labels' => array(
'name' => __('item'),
'singular_name' => __('item')
),
'public' => true,
'has_archive' => true,
'rewrite' => array(
'slug' => 'item'
)
)
);

} // end example_register_post_type
add_action('wp_loaded', 'movies_register_post_type');

add_filter( 'et_project_posttype_rewrite_args', 'wpc_projects_slug', 10, 2 );
function wpc_projects_slug( $slug ) {
$slug = array( 'slug' => 'item' );
return $slug;
}

?>
