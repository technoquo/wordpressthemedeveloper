<?php

/**
 *  Template name: What we stand for
 */

get_header();

?>

<main class="main-content">
    <section class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero-title text-center"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <!-- mision --->
    <?php
    $our_mission_bg = get_field('our_mission_bg');
    $our_mission_title = get_field('our_mission_title');
    $our_mission_text = get_field('our_mission_text');
    ?>
    <section class="mission" style="background-image: url(<?php echo $our_mission_bg['url']; ?>);">
        <div class="container">
            <div class="mission__content">
                <h2 class="section-title text-center section-title__sep"><?php echo $our_mission_title; ?><span></span></h2>
                <p class="mission__content_text text-center"><?php echo $our_mission_text; ?></p>
            </div>
        </div>
    </section>
    <!-- History --->
    <?php
    $our_history_title = get_field('our_history_title');
    $our_history_text = get_field('our_history_text');
    $our_history_blockquote = get_field('our_history_blockquote');
    $our_history_button = get_field('our_history_button');
    ?>
    <section class="history">
        <div class="container">
            <div class="history__content">
                <h2 class="section-title section-title__sep text-center"><?php echo $our_history_title; ?><span></span></h2>
                <div class="history__content_text_wrapper d-flex space-between">
                    <div class="history__content_text">
                        <p><?php echo $our_history_text; ?></p>
                    </div>
                    <div class="history__content_blockquote">
                        <blockquote><?php echo $our_history_blockquote; ?></blockquote>
                    </div>
                </div>
                <?php if ($our_history_button) { ?>
                    <a target="<?php echo $our_history_button['target']; ?>" href="<?php echo $our_history_button['url'];  ?>" class="d-i-flex items-center btn btn-outline-grey btn-has-icon"><?php echo $our_history_button['title']; ?>
                        <img src="<?php echo get_template_directory_uri() . '/images/right-arrow-primary.svg'; ?>" alt="<?php echo $our_history_title;  ?>">
                    </a>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- Content --->
    <?php
    $content_bg = get_field('content_bg');
    $content_title = get_field('content_title');
    $content_text = get_field('content_text');
    ?>
    <div class="wwsf-content" style="background-image: url(<?php echo $content_bg['url']; ?>);">
        <div class="container">
            <div class="wwsf-content__content">
                <h2 class="text-center section-title section__sep_primary"><?php echo $content_title; ?><span></span></h2>
                <div class="wwsf-content__text">
                    <p><?php echo $content_text; ?></p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php

get_footer();
?>