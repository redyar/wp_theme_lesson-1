<?php
add_action('wp_enqueue_scripts', 'lesson_scripts');
// <!-- Css -->
// <link rel="stylesheet" href="css/bootstrap.min.css" />
// <link rel="stylesheet" href="css/font-icons.css" />
// <link rel="stylesheet" href="css/sliders.css" />
// <link rel="stylesheet" href="css/style.css" />
// <link rel="stylesheet" href="css/responsive.css" />
// <link rel="stylesheet" href="css/spacings.css" />
// <link rel="stylesheet" href="css/animate.min.css" />

 
function lesson_scripts(){
	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('font-icons', get_template_directory_uri() . '/assets/css/font-icons.css');
	wp_enqueue_style('sliders', get_template_directory_uri() . '/assets/css/sliders.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style('spacings', get_template_directory_uri() . '/assets/css/spacings.css');
	wp_enqueue_style('animate.min', get_template_directory_uri() . '/assets/css/animate.min.css');
}