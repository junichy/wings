<section class="sec_news">
  <div class="sec_news__inner section__inner">
    <div class="sec_news__title section__title section__title--center fadeIn">
      <h2 class="sec_news__title-main section__title-main"><span>お知らせ</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/icon_sec_news.svg" alt=""></h2>
      <p class="sec_news__title-sub section__title-sub">News</p>
    </div>

    <div class="sec_news__contents delayScroll">
      <?php
        if (is_page('ikejiri')) {
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 4,
              'category_name' => 'news_ikejiri'
          );
        } else if (is_page('gakugei')) {
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 4,
              'category_name' => 'news_gakugei'
          );
        } else if (is_page('sakurashinmachi')) {
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 4,
              'category_name' => 'news_sakurashinmachi'
          );
        } else {
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 4,
          );
        }
        $my_query = new WP_Query( $args );
        if ( $my_query->have_posts() ):
      ?>
      <?php while( $my_query->have_posts()): $my_query->the_post(); ?>
        <div class="sec_news__item">
          <a href="<?php the_permalink(); ?>">
            <div class="sec_news__item-img">
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
            <?php endif; ?>
            </div>
            <div class="sec_news__item-contents">
              <div class="sec_news__item-info">
                <?php $category = get_the_category(); ?>
                <p class="sec_news__item-info-cat sec_news__item-info-cat--<?php echo $category[0]->slug ?>"><?php echo $category[0]->cat_name ?></p>
                <p class="sec_news__item-info-date"><?php echo get_the_date("Y.m.d"); ?></p>
              </div>
              <p class="sec_news__item-title">
                  <?php echo wp_trim_words(get_the_title(), 23, '...'); ?>
              </p>
              <p class="sec_news__item-text pc_tb">
                <?php $remove_array = ["\r\n", "\r", "\n", " ", "　"];
                $content = wp_trim_words(strip_shortcodes(get_the_content()), 73, '…' );
                $content = str_replace($remove_array, '', $content);
                echo $content; ?>
              </p>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <p class="sec_news__btn btn btn__white fadeIn"><a href="<?php echo esc_url( home_url() ); ?>/news/"><span>お知らせ一覧を見る</span></a></p>
  </div>
</section>