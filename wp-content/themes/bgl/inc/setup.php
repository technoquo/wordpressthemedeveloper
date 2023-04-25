<?php

 function bgl_setup(){
    add_theme_support('html5');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

 // Menu

    register_nav_menus([
        'header-menu'           => __('Header Menu', 'bgl'),
        'footer-col-one-menu'   => __('Footer Column One Menu', 'bgl'),
        'footer-col-two-menu'   => __('Footer Column Two Menu', 'bgl'),
        'footer-col-three-menu' => __('Footer Column Three Menu', 'bgl'),
        'privacy-menu'          => __('Privacy Menu', 'bgl'),
    ]);

 }