<?php

function first_theme() {
    wp_enqueue_style('first_theme_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'first_theme'); 