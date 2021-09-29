<?php
/*
Plugin Name: Hobi-eatery Plugin
Plugin URI:   linkedin.com/in/alimi-faith-4488781b9
Description:  Creates the necessary function for the Hobi-eatery Theme 
Version:      1.0
Author:       Alimi Fatai Faith 
Author URI:   linkedin.com/in/alimi-faith-4488781b9
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  Hobi-eatery
Domain Path:  /languages
*/




//add custom post types

function Hobi_post_type()
{
	register_post_type('chef', array(
		'rewrite' => array( 'slug' => 'chef' ),
		'supports' => array('title','editor', 'excert', 'thumbnail'),
		'has_archive' => false,
		'public' => true,
		'labels' => array(
			'name' => 'Chefs',
			'add_new_item' => 'Add New Chef',
			'edit_item' => 'Edit Chef',
			'all_items' => 'All Chefs',
			'singular_name' => 'Chefs'
		),
		'menu_icon' => 'dashicons-groups',
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
	));


	register_post_type('menu', array(
		'rewrite' => array( 'slug' => 'menu' ),
		'supports' => array('title','editor', 'excert', 'thumbnail'),
		'has_archive' => false,
		'public' => true,
		'labels' => array(
			'name' => 'Menus',
			'add_new_item' => 'Add New Menu',
			'edit_item' => 'Edit Menu',
			'all_items' => 'All Menus',
			'singular_name' => 'Menus'
		),
		'menu_icon' => 'dashicons-food',
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'taxonomies'  => array( 'category' ),
	));

	register_post_type('testimonials', array(
		'rewrite' => array( 'slug' => 'testimonials' ),
		'supports' => array('title','editor', 'excert', 'thumbnail'),
		'has_archive' => false,
		'public' => true,
		'labels' => array(
			'name' => 'Testimonials',
			'add_new_item' => 'Add New Testimonial',
			'edit_item' => 'Edit Testimonial',
			'all_items' => 'All Testimonials',
			'singular_name' => 'Testimonials'
		),
		'menu_icon' => 'dashicons-editor-quote',
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
	));
}

add_action('init', 'Hobi_post_type');

require plugin_dir_path(__FILE__) . '/inc/custom-fields/custom-field.php';

?>