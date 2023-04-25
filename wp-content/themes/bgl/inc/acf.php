<?php
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page([
        'page_title'    => 'BGL General Settings',
        'menu_title'    => 'BGL Settings',
        'menu_slug'     => 'bgl-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => 'dashicons-layout'
    ]);
    
    
}