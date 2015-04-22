<?php
add_action('init', 'register_theme_styles');
add_action('admin_enqueue_scripts', 'enqueue_admin_styles');
add_action('admin_enqueue_scripts', 'enqueue_admin_scripts');

//set the admin styles


if(!function_exists('register_theme_styles')):
function register_theme_styles(){
	wp_register_style('post-edit-styles', get_template_directory_uri().'/css/post-edit.css',array(), '20140127', 'all');
}
endif;

// enqueue admin css

//if( !function_exists('enqueue_admin_styles') ):

function enqueue_admin_styles(){
	wp_enqueue_style('post-edit-styles');
	}
//endif;


if( !function_exists('enqueue_admin_scripts') ):
	function enqueue_admin_scripts(){
		wp_enqueue_media(); 
		wp_enqueue_script('thickbox');
		wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-1.10.1.min.js', array('jquery'), 0, true);
		wp_enqueue_script('admin-scripts', get_template_directory_uri().'/js/admin-scripts.js', array('jquery'), 0, true);
	}
endif;
?>