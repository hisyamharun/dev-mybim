<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
// Register ws_db_operation_cpt
if ( ! function_exists( 'ws_db_browser_screens_cpt' ) ) {
function ws_db_browser_screens_cpt()
{
    $labels = array(
        'name' => _x('browsers', 'ws-data-browser'),
        'signular_name' => _x('browser', 'ws-data-browser'),
        'menu_name' => __('browsers', 'ws-data-browser'),
        'name_admin_bar' => __('browsers', 'ws-data-browser'),
        'parent_item_colon' => __('Parent Item:', 'ws-data-browser'),
        'all_items' => __('All browsers', 'ws-data-browser'),
        'add_new_item' => __('Add New browser', 'ws-data-browser'),
        'add_new' => __('Add New', 'ws-data-browser'),
        'new_item' => __('New browser', 'ws-data-browser'),
        'edit_item' => __('Edit browser', 'ws-data-browser'),
        'update_item' => __('Update browser', 'ws-data-browser'),
        'view_item' => __('View browser', 'ws-data-browser'),
        'search_items' => __('Search browsers', 'ws-data-browser'),
        'not_found' => __('Not found', 'ws-data-browser'),
        'not_found_in_trash' => __('Not found in Trash', 'ws-data-browser'),
        );
    $args = array(
        'label' => __('ws_db_browser_screens_cpt', 'ws-data-browser'),
        'description' => __('browser screens Post Type Description', 'ws-data-browser'),
        'labels' => $labels,
        'supports' => array(),
        //'taxonomies' => array('category'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => false,
        'show_in_menu' => false,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        );
    register_post_type('browser_screens_cpt', $args);
}
}
// Hook into the 'init' action
add_action('init', 'ws_db_browser_screens_cpt', 0);

?>