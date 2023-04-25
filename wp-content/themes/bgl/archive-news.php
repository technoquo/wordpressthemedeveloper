<?php get_header(); ?>
<main class="main-content">
    <?php
    $news_archive_hero_bg = get_field('news_archive_hero_bg', 'option');
    $news_archive_hero_title = get_field('news_archive_hero_title', 'option');

    ?>
    <section class="hero" style="background-image: url(<?php echo $news_archive_hero_bg['url']; ?>);">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero-title text-center"><?php echo $news_archive_hero_title; ?></h1>
            </div>
        </div>
    </section>
    <!-- News -->
    <section class="news-entries">
        <div class="container">
            <div class="news-entries__content d-flex just-center">
                <?php

                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                ?>
                        <div class="news__entry">
                            <div class="news-entry__thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="news-entry__content text-center">
                                <div class="news-entry__meta d-flex just-center">
                                    <span>
                                        <?php the_tags(); ?>
                                    </span>
                                    <span class="news-entry__meta_sep">|</span>
                                    <span>
                                        <?php echo get_the_date(); ?>
                                    </span>
                                </div>
                                <h2 class="news-entry__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
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
    </section>

</main>

<?php get_footer(); ?>