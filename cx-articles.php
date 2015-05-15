<?php
/*
Plugin Name: CX Articles
Plugin URI: http://www.ablewild.com
Description: Add custom post types for articles. These are very similar to regular posts in functionality but are kept separate for management purposes.
Version: 1.0
Author: Pete Clark
Author URI: http://twitter.com/clarkcx
Licence: GPL2
*/

//////////////////////////////////////////////////////
///* CREATE CUSTOM POST TYPE: ARTICLES *///////////
//////////////////////////////////////////////////////

add_action('init', 'Articles_register');
 
function Articles_register() {
	$labels = array(
		'name' => _x('Articles', 'post type general name'),
		'singular_name' => _x('Article', 'post type singular name'),
		'add_new' => _x('Add New', 'Article'),
		'add_new_item' => __('Add New Article'),
		'edit_item' => __('Edit Article'),
		'new_item' => __('New Article'),
		'view_item' => __('View Article'),
		'search_items' => __('Search Articles'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/images/admin/tiny_icon_articles.png',
		'rewrite' => array("slug" => "articles", 'with_front'=> false), // Permalinks format
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail'),
		'taxonomies' => array('category','post_tag'),
		'has_archive' => true
	  ); 
 
	register_post_type( 'Articles' , $args );
}

?>