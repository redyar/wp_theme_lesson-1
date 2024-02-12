<?php
add_action('wp_enqueue_scripts', 'lesson_scripts');


 
function lesson_scripts(){
	// styles
	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), time());
	wp_enqueue_style('font-icons', get_template_directory_uri() . '/assets/css/font-icons.css', array(), time());
	wp_enqueue_style('sliders', get_template_directory_uri() . '/assets/css/sliders.css', array(), time());
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( dirname( __FILE__ ) . '/assets/css/style.css'));
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), time());
	wp_enqueue_style('spacings', get_template_directory_uri() . '/assets/css/spacings.css', array(), time());
	wp_enqueue_style('animate.min', get_template_directory_uri() . '/assets/css/animate.min.css', array(), time());

	//scripts
	wp_enqueue_script('jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), time(), true);
	wp_enqueue_script('bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), time(), true);
	wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), time(), true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), time(), true);
}
