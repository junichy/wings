<!-- 「父兄の声」カテゴリー一覧 -->

<!-- sec_voice -->
<section class="sec_voice">
    <div class="sec_voice__inner section__inner section__inner--center">
      <div class="sec_voice__title section__title section__title--center fadeIn">
        <h2 class="sec_voice__title-main section__title-main"><span>父兄の声</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_voice.svg" alt=""></h2>
        <p class="sec_voice__title-sub section__title-sub">Voice</p>
      </div>
      <ul class="sec_voice__list delayScroll">

        <?php
          $args = array(
            'post_type' => 'blog',
            'posts_per_page' => 4,
            'tax_query' => array(
              array(
                'taxonomy' => 'cat_blog',
                'field' => 'slug',
                'terms' => 'voice',
                'operator' => 'IN'
              )
            ),
          );
          $my_query = new WP_Query($args); 
        ?>
        <?php if ($my_query->have_posts()) : ?>
          <?php while( $my_query->have_posts()): $my_query->the_post(); ?>

            <li class="sec_voice__item">
              <a href="<?php the_permalink(); ?>">
                <div class="sec_voice__item-left">
                  <p class="sec_voice__item-num">0<?php echo $my_query->current_post + 1; ?></p>
                  <div class="sec_voice__item-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/voice_01.png" alt="">
                    <?php if(has_post_thumbnail()): ?>
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
                    <?php endif; ?>
                  </div>
                </div>
                <div class="sec_voice__item-right">
                  <p class="sec_voice__item-title">
                    <?php echo wp_trim_words(get_the_title(), 23, '...'); ?>
                  </p>
                  <p class="sec_voice__item-text">
                  <?php $remove_array = ["\r\n", "\r", "\n", " ", "　"];
                    $content = wp_trim_words(strip_shortcodes(get_the_content()), 73, '…' );
                    $content = str_replace($remove_array, '', $content);
                    echo $content; ?>
                  </p>
                  <p class="sec_voice__item-btn">続きを見る</p>
                </div>
              </a>
            </li>
            
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
  </section>