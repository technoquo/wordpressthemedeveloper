<?php
// Include
include(get_template_directory() . '/inc/acf.php');
include(get_template_directory() . '/inc/enqueue.php');
include(get_template_directory() . '/inc/setup.php');
include(get_template_directory() . '/inc/misc.php');
//include(get_template_directory() . '/inc/post_types.php');


//Hooks
add_action('wp_enqueue_scripts', 'bgl_enqueue');
add_action('after_setup_theme', 'bgl_setup');
add_action('pre_get_posts', 'blg_news_pagination_ppp');

function bgl_post_types()
{
    // News

    register_post_type('news', [
        'labels'             => [
            'name'                  => _x('News', 'bgl'),
            'singular_name'         => _x('New',  'bgl'),
            'menu_name'             => _x('News', 'bgl'),
            'name_admin_bar'        => _x('New',  'bgl'),
            'add_new'               => __('Add New', 'bgl'),
            'add_new_item'          => __('Add New News', 'bgl'),
            'new_item'              => __('New New', 'bgl'),
            'edit_item'             => __('Edit New', 'bgl'),
            'view_item'             => __('View New', 'bgl'),
            'view_items'             => __('View New', 'bgl'),
            'all_items'             => __('All News', 'bgl'),
        ],
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'news'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
        'menu_icon'          => 'dashicons-media-document',
        'taxonomies'         => ['post_tag']

    ]);

    // Our Team

    register_post_type('team', [
        'labels'             => [
            'name'                  => _x('Team', 'bgl'),
            'singular_name'         => _x('Team',  'bgl'),
            'menu_name'             => _x('Our Team', 'bgl'),
            'name_admin_bar'        => _x('Team Member',  'bgl'),
            'add_new'               => __('Add New', 'bgl'),
            'add_new_item'          => __('Add New Member', 'bgl'),
            'new_item'              => __('New Member', 'bgl'),
            'edit_item'             => __('Edit Member', 'bgl'),
            'view_item'             => __('View Team', 'bgl'),
            'view_items'             => __('View Team', 'bgl'),
            'all_items'             => __('All Members', 'bgl'),
        ],
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'team'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
        'menu_icon'          => 'dashicons-groups',

    ]);

    // portfolio / Our Work

    register_post_type('portfolio', [
        'labels'             => [
            'name'                  => _x('Portfolio', 'bgl'),
            'singular_name'         => _x('Portfolio',  'bgl'),
            'menu_name'             => _x('Our Portfolio', 'bgl'),
            'name_admin_bar'        => _x('Portfolio',  'bgl'),
            'add_new'               => __('Add New', 'bgl'),
            'add_new_item'          => __('Add New Portfolio', 'bgl'),
            'new_item'              => __('New Portfolio', 'bgl'),
            'edit_item'             => __('Edit Portfolio', 'bgl'),
            'view_item'             => __('View Portfolio', 'bgl'),
            'view_items'             => __('View Portfolio items', 'bgl'),
            'all_items'             => __('All Portfolio items', 'bgl'),
        ],
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'portfolio'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
        'menu_icon'          => 'dashicons-align-left',

    ]);
}
add_action('init', 'bgl_post_types');

function my_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');
