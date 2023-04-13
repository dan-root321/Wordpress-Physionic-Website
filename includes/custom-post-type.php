<?php

function physionic_custom_post(){

    //Blog Post
    $physionic_label = array (
        'name'          => __('physionic Post', 'textdomain'),
        'singular_name' => __('physionic Post', 'textdomain'),
        'add_new'       => __('Add physionic Post', 'textdomain'),
        'add_new_item'  => __('Add New physionic Post', 'textdomain'),
        'edit_item'     => __('Edit physionic Post', 'textdomain'),
        'all_items'     => __('physionic Post', 'textdomain'),
    );

    $physionic_args = array(
        'labels'            => $physionic_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('physionic', $physionic_args);

}

add_action('init', 'physionic_custom_post');
