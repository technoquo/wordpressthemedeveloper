<?php get_header(); ?>
<main class="main-content">
  <!-- Hero --->
  <?php
  $hero_bg = get_field('hero_bg');
  $hero_title = get_field('hero_title');
  ?>
  <section class="hero" style="background-image: url(<?php echo $hero_bg['url']; ?>);">
    <div class="container">
      <div class="hero__content">
        <h1 class="hero-title text-center"><?php echo $hero_title; ?></h1>
      </div>
    </div>
  </section>
  <!-- History Content -->
  <?php
  $history_content = get_field('history_content');
  $history_content_button = get_field('history_content_button');
  ?>
  <section class="history-content">
    <div class="container">
      <div class="history-content__content text-center">
        <p><?php echo $history_content; ?></p>
        <?php
        if ($history_content_button) {
        ?>
          <a target="<?php echo $history_content_button['target']; ?>" href="<?php echo $history_content_button['url'] ?>" class="d-i-flex items-center just-center btn btn-has-icon btn-outline-grey"><?php echo $history_content_button['title']; ?><img src="<?php echo get_template_directory_uri() . '/images/right-arrow-primary.svg' ?>" alt="Right arrow"></a>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- Feature Cases -->
  <section class="featured-cases">
    <div class="swiper featured-cases__slider">
      <div class="swiper-wrapper">
        <?php
        if (have_rows('featured_cases')) {
          while (have_rows('featured_cases')) {
            the_row();
            $span = get_sub_field('span');
            $title = get_sub_field('title');
            $button = get_sub_field('button');
            $bg_image = get_sub_field('bg_image');

        ?>
            <div class="swiper-slide featured-cases__slider-slide" style="background-image: url(<?php echo $bg_image['url']; ?>);">
              <div class="featured-cases__slide_content d-flex items-center">
                <div class="slide-content__content">
                  <h5 class="slide__span"><?php echo $span ?></h5>
                  <h5 class="slide__title"><?php echo $title; ?></h5>
                  <?php if ($button) { ?>
                    <a href="<?php echo $button['url']; ?>" class="d-i-flex items-center btn btn-outline-light outline btn-has-icon btn-hover-secondary featured-cases__btn">
                      <?php echo $button['title']; ?><img src="<?php echo get_template_directory_uri() . '/images/right-arrow-light.svg' ?>" alt="Right arrow light">
                    </a>
                  <?php } ?>
                </div>
              </div>
            </div>
        <?php
          }
        }

        ?>


      </div>
      <div class="swiper-button-next featured-cases__slider_next"></div>
      <div class="swiper-button-prev featured-cases__slider_prev"></div>
      <div class="swiper-pagination featured-cases__slider_pagination"></div>
    </div>

  </section>
  <!-- Recent News -->
  <?php
  $display_recent_news = get_field('display_recent_news');
  $recent_news_title = get_field('recent_news_title');
  $recent_news_button = get_field('recent_news_button');
  if ($display_recent_news) { ?>
    <section class="recent-news">
      <div class="container">
        <div class="recent-news__content">
          <h2 class="recent-news__title text-center"><?php echo $recent_news_title; ?></h2>
          <div class="recent-news__entries d-flex space-between">
            <?php
            $recent_news = new WP_Query([
              'post_type'       => 'news',
              'posts_per_page'  => 3,
              'order'           => 'DESC',
              'orderby'         => 'date'
            ]);
            if ($recent_news->have_posts()) {
              while ($recent_news->have_posts()) {
                $recent_news->the_post();
            ?>
                <div class="recent-news__entry">
                  <div class="news-entry__imagen_wrapper">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                  </div>
                  <div class="news-entry__meta d-flex just-center">
                    <span class="tags">
                      <?php the_tags(); ?>
                    </span>
                    <span class="date">
                      <?php echo get_the_date(); ?>
                    </span>
                  </div>
                  <h3 class="news-entry__title text-center">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                </div>
            <?php
              }
              wp_reset_postdata();
            }
            ?>
          </div>
        </div>
        <?php
        if ($recent_news_button) {
        ?>
          <div class="recent-news__button_wrapper text-center">
            <a target="<?php echo $recent_news_button['target']; ?>" href="<?php echo $recent_news_button['url']; ?>" class="btn btn-outline-grey btn-has-icon di-i-flex items-center"><?php echo $recent_news_button['title']; ?>
              <img src="<?php echo get_template_directory_uri() . '/images/right-arrow-primary.svg' ?>" alt="<?php the_title(); ?>">
            </a>
          </div>
        <?php
        } ?>
      </div>

    </section>
  <?php  }
  ?>

  <!-- Recent Awards -->
  <section class="recent-awards">
    <div class="container">
      <h2 class="recent-awards__title text-center"><?php the_field('recent_awards_title') ?></h2>
      <div class="swiper recent-awards__slider">
        <div class="swiper-wrapper d-flex items-center">
          <?php
          if (have_rows('awards')) {
            while (have_rows('awards')) {
              the_row();
              $award_image = get_sub_field('award_image');

          ?>
              <div class="swiper-slide recent-awards__slide d-flex items-center just-center">
                <img class="extra" src="<?php echo $award_image['url']; ?>" alt="<?php echo $award_image['title']; ?>">
              </div>
          <?php
            }
          }
          ?>

        </div>
        <div class="swiper-button-next recent-awards__slider_next"></div>
        <div class="swiper-button-prev recent-awards__slider_prev"></div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>