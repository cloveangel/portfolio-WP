<?php
function portfolio_post_types(){
    register_post_type('portfolio', array(
        'show_in_rest' => true,
        'supports' => array('title','editor','excerpt','thumbnail','author'),
        'taxonomies' => array('category','post_tag'),
        'rewrite' => array('slug' => 'projects'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Portfolio',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects',
            'singular_name' => 'Project'
            
        ),
        'menu_icon' => 'dashicons-portfolio'
    ));
}

add_action('init', 'portfolio_post_types');
?>