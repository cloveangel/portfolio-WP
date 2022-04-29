<?php

function portfolio_files(){
    
    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('portfolio_main_styles',get_theme_file_uri('/build/style.css'));
    wp_enqueue_style('portfolio_extra_styles',get_theme_file_uri('/build/extrafont.css'));

}
add_action('wp_enqueue_scripts','portfolio_files');

function portfolio_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
}

add_action('after_setup_theme', 'portfolio_features');

// add_filter('ai1wm_exclude_themes_from_export', function ($exclude_filters) {
//     $exclude_filters[] = 'portfolio/node_modules';
//     return $exclude_filters;
//   });
?>