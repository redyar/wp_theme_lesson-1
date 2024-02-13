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
	wp_enqueue_style('gfonts', 'http://fonts.googleapis.com/css?family=Montserrat:300,400%7COpen+Sans:400,400i,700%7CMerriweather:400ii?subset=cyrillic', array(), time());

	//scripts
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), time(), true);
	wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), time(), true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), time(), true);
}

register_nav_menus(array(
	'header' => 'header_menu',
	'footer' => 'footer_menu'
));