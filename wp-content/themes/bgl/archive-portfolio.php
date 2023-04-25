<?php get_header(); ?>
<main class="main-content">
    <?php
    $our_work_archive_hero_bg = get_field('our_work_archive_hero_bg', 'option');
    $our_work_archive_hero_title = get_field('our_work_archive_hero_title', 'option');
    $our_work_archive_content = get_field('our_work_archive_content', 'option');
    ?>
    <section class="hero" style="background-image: url(<?php echo $our_work_archive_hero_bg['url']; ?>);">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero-title text-center"><?php echo $our_work_archive_hero_title; ?></h1>
            </div>
        </div>
    </section>
    <section class="portfolio">
        <div class="container">
            <div class="portfolio__content">
                <div class="potfolio__content_content">
                    <p class="text-center"><?php echo $our_work_archive_content;  ?></p>
                </div>

                <!-- Portfolio entries -->
                <div class="portfolio__content_entries d-flex just-center flex-wrap">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                    ?>
                            <div class="portfolio-item__container d-flex items-center">
                                <div class="portfolio-item__text text-center d-flex just-center">
                                    <div class="portfolio_item__text_content">
                                        <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div class="portfolio_item__text_text"><?php my_excerpt_length(the_excerpt()); ?></div>
                                        <a href="<?php echo the_permalink(); ?>" class="btn-text d-i-flex items-center btn-has-icon portfolio-item__btn">Read More <img src="<?php echo get_template_directory_uri() . '/images/right-arrow-primary.svg'; ?>" alt="<?php the_title(); ?>"></a>
                                    </div>
                                </div>
                                <div class="portfolio-item__image">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="bgl-pagination text-center">
                    <?php echo paginate_links(); ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>