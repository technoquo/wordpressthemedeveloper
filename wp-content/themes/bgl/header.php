<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="d-flex space-between items-center">
                <div class="logo-wrapper">
                    <?php $header_logo = get_field('header_logo', 'option'); ?>
                    <a href="<?php esc_url(home_url()); ?>" class="logo-link">
                        <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['title']; ?>">
                    </a>
                </div>
                <div class="nav-wrapper">
                    <button class="nav-trigger">
                        <img src="<?php echo get_template_directory_uri() . '/images/menu-icon.svg' ?>" alt="Menu trigger">
                    </button>
                    <?php
                    wp_nav_menu([
                        'theme_location'  => 'header-menu',
                        'container'       => 'nav',
                        'container_class' => 'header-nav-menu',
                        'menu_class' => 'header-navigation d-flex',
                        'depth'           => 1

                    ]);

                    ?>
                </div>
                <div class="search-icon-wreapper">
                    <button class="search-trigger">
                        <img src="<?php echo get_template_directory_uri() . '/images/search-icon.svg' ?>" alt="Search trigger">
                    </button>
                </div>
            </div>
        </div>
    </header>