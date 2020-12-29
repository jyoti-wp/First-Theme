<?php 
    function power_up_files() {
        wp_enqueue_style('power_up_style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts','power_up_files');
?>