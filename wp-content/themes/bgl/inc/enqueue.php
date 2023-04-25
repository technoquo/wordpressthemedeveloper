<?php

function bgl_enqueue()
{
   // stylesheets
   wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Open+Sans&display=swap', [], false);
   wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css', [], '9.0.5');
   wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], false);

   // scripts
   wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', [], '9.0.5', true);
   wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', [], false, true);
}
