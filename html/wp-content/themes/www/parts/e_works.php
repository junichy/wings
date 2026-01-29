<div class="works__container">
  <ul class="works__list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <li class="works__item fadeIn">
        <?php
        $taxonomy = 'cat_works'; //カスタムタクソノミースラッグ
        $taxonomy_terms_cat = get_the_terms($post->ID, $taxonomy);
        $taxonomy_terms_cat_name = $taxonomy_terms_cat[0]->name; //ターム名
        $taxonomy_terms_cat_slug = $taxonomy_terms_cat[0]->slug; //タームスラッグ
        ?>
        <p class="works__item-category"><a href="<?php echo esc_url( home_url() ); ?>/cat_works/<?php echo $taxonomy_terms_cat_slug; ?>"><?php echo $taxonomy_terms_cat_name; ?></a></p>
        <div class="works__item-contents">
          <a href="<?php the_permalink(); ?>">
            <div class="works__item-img">
              <?php
              if (get_post_meta($post->ID, 'thumbnail', true)) : // 入力がある場合
                $img = get_post_meta(get_the_ID(), 'thumbnail', true);
                echo wp_get_attachment_image($img, 'large'); // 画像を出力
              ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/d-ghost.png" alt="">
              <?php endif; ?>
            </div>
            <div class="works__item-text">
              <p class="works__item-description"><?php echo wp_trim_words(post_custom('description'), 45, '...'); ?></p>
              <p class="works__item-title"><?php the_title(); ?></p>
            </div>
          </a>
        </div>
      </li>
    <?php endwhile;
    endif; ?>
  </ul>
</div>