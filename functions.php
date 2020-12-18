<?php

function first_theme() {
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('first_theme_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'first_theme'); 
