<footer class="site-footer">
    <?php
    $footer_cta_bg = get_field('footer_cta_bg', 'option');
    $footer_cta_title = get_field('footer_cta_title', 'option');
    $footer_cta_button = get_field('footer_cta_button', 'option');
    ?>
    <section class="footer-cta" style="background-image: url(<?php echo $footer_cta_bg['url']; ?>);">
        <div class="container">
            <div class="footer-cta__content">
                <h3 class="footer-cta__title text-center"><?php echo $footer_cta_title; ?></h3>
                <?php if ($footer_cta_button) {  ?>
                    <div class="footer-cta__button_wrapper text-center">
                        <a target="<?php echo $footer_cta_button['target']; ?>" href="<?php echo $footer_cta_button['url']; ?>" class="d-i-flex  items-center btn btn-outline-light btn-hover-secondary btn-has-icon">
                            <?php echo $footer_cta_button['title']; ?>
                            <img src="<?php echo get_template_directory_uri() . '/images/right-arrow-light.svg' ?>" alt="Right arrow light">
                        </a>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </section>
    <section class="footer-top">
        <?php
        $footer_top_column_one = get_field('footer_top_column_one', 'option');
        $footer_number_one_title = get_field('footer_number_one_title', 'option');
        $footer_number_one_number = get_field('footer_number_one_number', 'option');
        $footer_number_two_title = get_field('footer_number_two_title', 'option');
        $footer_number_two_number = get_field('footer_number_two_number', 'option');
        $footer_email = get_field('footer_email', 'option');
        $footer_fax = get_field('footer_fax', 'option');


        ?>
        <div class="container">
            <div class="footer-top__content">
                <div class="d-flex space-beetween">
                    <!-- Footer Contact Info -->
                    <div class="footer-column">
                        <div class="d-flex space-between">
                            <!-- addreses -->
                            <div class="footer-column-inside">
                                <div class="footer-content">
                                    <?php echo $footer_top_column_one; ?>
                                </div>
                            </div>
                            <!-- Contact numbers -->
                            <div class="footer-column-inside">
                                <div class="footer-content">
                                    <div class="d-flex items-center">
                                        <div class="footer-contact__image">
                                            <img src="<?php echo get_template_directory_uri() . '/images/phone.svg' ?>" alt="Phone Image">
                                        </div>
                                        <div class="footer-contact__content">
                                            <p><span><?php echo $footer_number_one_title; ?></span> <a href="tel:<?php echo $footer_number_one_number; ?>"><?php echo $footer_number_one_number; ?></a></p>
                                            <?php if ($footer_number_two_title || $footer_number_two_number) { ?>
                                                <p><span><?php echo $footer_number_two_title; ?></span> <a href="tel:<?php echo $footer_number_two_number; ?>"><?php echo $footer_number_two_number; ?></a></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-contact">
                                    <div class="d-flex items-center">
                                        <div class="footer-contact__image">
                                            <img src="<?php echo get_template_directory_uri() . '/images/email.svg' ?>" alt="Email Image">
                                        </div>
                                        <div class="footer-contact__content">
                                            <a href="mailto:<?php echo $footer_email; ?>"><?php echo $footer_email; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-contact">
                                    <div class="d-flex items-center">
                                        <div class="footer-contact__image">
                                            <img src="<?php echo get_template_directory_uri() . '/images/fax.svg' ?>" alt="Fax Image">
                                        </div>
                                        <div class="footer-contact__content">
                                            <p><?php echo $footer_fax; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- Footer Contact Menus -->
                    <div class="footer-column">
                        <div class="d-flex space-between">
                            <!-- Footer column one menu -->
                            <div class="footer-column-inside">
                                <?php
                                wp_nav_menu([
                                    'theme_location'  => 'footer-col-one-menu',
                                    'container'       => false,
                                    'menu_class' => 'footer-menu',
                                ]);

                                ?>

                            </div>
                            <!-- Footer column two ne menu -->
                            <div class="footer-column-inside">
                                <?php
                                wp_nav_menu([
                                    'theme_location'  => 'footer-col-two-menu',
                                    'container'       => false,
                                    'menu_class' => 'footer-menu',
                                ]);

                                ?>
                            </div>
                            <!-- Footer column three menu -->
                            <div class="footer-column-inside">
                                <?php
                                wp_nav_menu([
                                    'theme_location'  => 'footer-col-three-menu',
                                    'container'       => false,
                                    'menu_class' => 'footer-menu',
                                ]);

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <?php
            $footer_credits = get_field('footer_credits', 'option');
            $facebook = get_field('facebook', 'option');
            $twitter = get_field('twitter', 'option');
            $instagram = get_field('instagram', 'option');
            ?>
            <div class="container">
                <div class="footer-bottom__content">
                    <div class="d-flex space-between">
                        <div class="footer-column">
                            <p class="footer-credits">
                                <?php echo $footer_credits; ?>
                            </p>
                        </div>
                        <div class="footer-column">
                            <div class="footer-nav">

                                <ul class="social-menu d-flex">
                                    <?php if ($facebook) { ?>
                                        <li><a href="<?php echo $facebook ?>" class="social-menu-item"><img src="<?php echo get_template_directory_uri() . '/images/facebook.svg' ?>" alt="Facebook logo"></a></li>
                                    <?php } ?>
                                    <?php if ($twitter) { ?>
                                        <li><a href="<?php echo $twitter ?>" class="social-menu-item"><img src="<?php echo get_template_directory_uri() . '/images/twitter.svg' ?>" alt="Twitter logo"></a></li>
                                    <?php } ?>
                                    <?php if ($instagram) { ?>
                                        <li><a href="<?php echo $instagram ?>" class="social-menu-item"><img src="<?php echo get_template_directory_uri() . '/images/instagram.svg' ?>" alt="Instagram logo"></a></li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-credits">
                <div class="footer-nav">

                </div>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>