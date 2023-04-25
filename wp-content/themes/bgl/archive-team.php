<?php get_header(); ?>
<!-- Hero -->
<?php
$team_archive_hero_bg = get_field('team_archive_hero_bg', 'option');
$team_archive_hero_title = get_field('team_archive_hero_title', 'option');

?>

<main class="main-content">
    <!-- hero -->
    <section class="hero" style="background-image: url(<?php echo $team_archive_hero_bg['url']; ?>);">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero-title text-center"><?php echo $team_archive_hero_title; ?></h1>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team">
        <div class="container">
            <div class="team__content d-flex just-center  flex-wrap">
                <?php
                $team_entries = new WP_Query([
                    'post_type' => 'team',
                    'posts_per_page' => -1,
                    'order' => 'DESC',
                    'order' => 'date',
                ]);


                if ($team_entries->have_posts()) {
                    while ($team_entries->have_posts()) {
                        $team_entries->the_post();
                ?>
                        <div class="team-member">
                            <div class="team-member__image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <h3 class="team-member__name text-center">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                                <div class="team-member__name_sep"></div>
                            </h3>
                        </div>
                <?php
                    }
                } else {
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- -->

    <section class="current-fellow">
        <?php
        $current_fellow_section_title = get_field('current_fellow_section_title', 'option');
        $current_fellow_section_text = get_field('current_fellow_section_text', 'option');
        $current_fellow_section_button = get_field('current_fellow_section_button', 'option');
        $current_fellow_title = get_field('current_fellow_title', 'option');
        $current_fellow_name = get_field('current_fellow_name', 'option');
        $current_fellow_thumbnail = get_field('current_fellow_thumbnail', 'option');

        ?>
        <div class="container">
            <div class="current-fellow__content d-flex space-between">
                <div class="current-fellow__content_content">
                    <h2 class="current-fellow_title"><?php echo $current_fellow_section_title; ?></h2>
                    <p class="current-fellow__content_text"><?php echo $current_fellow_section_text; ?></p>
                    <a href="<?php echo $current_fellow_section_button['url']; ?>" class="current-fellow__btn btn-text btn-has-icon d-i-flex items-center">
                        <?php echo $current_fellow_section_button['title']; ?>
                        <img src="<?php echo get_template_directory_uri() . '/images/right-arrow-primary.svg'; ?>" alt="<?php echo $current_fellow_section_button['title'];   ?>">
                    </a>
                </div>
                <div class="current-fellow__content_fellow d-flex space-between items-center text-center">
                    <div class="current-fellow__content_fellow_text">
                        <h3 class="current-fellow_title  d-flex dir-column items-center"><?php echo $current_fellow_title;  ?> <div class="team-member__name_sep_fellow"></div>
                        </h3>
                        <p class="current-fellow__content_fellow_name"><?php echo $current_fellow_name; ?></p>
                    </div>
                    <div class="current-fellow__content_fellow_image">
                        <img src="<?php echo $current_fellow_thumbnail['url'] ?>" alt="<?php echo $current_fellow_thumbnail['title']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>