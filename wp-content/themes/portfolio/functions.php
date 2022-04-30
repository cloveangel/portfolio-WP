<?php

function portfolio_files(){
    
    wp_enqueue_style('portfolio_main_styles',get_theme_file_uri('/build/style.css'));
    wp_enqueue_style('portfolio_extra_styles',get_theme_file_uri('/build/extrafont.css'));

}
add_action('wp_enqueue_scripts','portfolio_files');

function portfolio_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
}

add_action('after_setup_theme', 'portfolio_features');

?>