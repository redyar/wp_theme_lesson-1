<?php
add_action('wp_enqueue_scripts', 'lesson_scripts')
// <!-- Css -->
// <link rel="stylesheet" href="css/bootstrap.min.css" />
// <link rel="stylesheet" href="css/font-icons.css" />
// <link rel="stylesheet" href="css/sliders.css" />
// <link rel="stylesheet" href="css/style.css" />
// <link rel="stylesheet" href="css/responsive.css" />
// <link rel="stylesheet" href="css/spacings.css" />
// <link rel="stylesheet" href="css/animate.min.css" />
function lesson_scripts(){
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0')
}