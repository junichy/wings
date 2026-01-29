<li class="blog__item swiper-slide">
  <a href="<?php the_permalink(); ?>">
    <div class="blog__item-img">
      <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
      <?php endif; ?>
    </div>

    <?php
    $taxonomy = 'cat_blog'; //カスタムタクソノミースラッグ
    $taxonomy_terms_cat = get_the_terms($post->ID, $taxonomy);
    $taxonomy_terms_cat_name = $taxonomy_terms_cat[0]->name; //ターム名
    $taxonomy_terms_cat_slug = $taxonomy_terms_cat[0]->slug; //タームスラッグ
    ?>
    <div class="blog__item-contents">
      <p class="blog__item-info">
        <span class="blog__item-info--cat"><?php echo $taxonomy_terms_cat_name; ?></span>
        <span class="blog__item-info--date">
          <?php echo get_the_date("Y.m.d"); ?>
        </span>
      </p>
      <h2 class="blog__item-title blog__item-title--first">
        <?php echo wp_trim_words(get_the_title(), 48, '...'); ?>
      </h2>
      <h2 class="blog__item-title blog__item-title--normal">
        <?php echo wp_trim_words(get_the_title(), 23, '...'); ?>
      </h2>
      <p class="blog__item-text blog__item-text--first pc_tb"><?php echo wp_trim_words(get_the_content(), 64, '...'); ?></p>
      <p class="blog__item-text blog__item-text--normal pc_tb"><?php echo wp_trim_words(get_the_content(), 45, '...'); ?></p>
      <div class="blog__item-tags">
        <?php
          if ($terms = get_the_terms($post->ID, 'tag_blog')) {
          foreach ( $terms as $term ) {
          echo '<span class="blog__item-tag pc_tb">#'. esc_html($term->name). '</span>';
          }
          }
        ?>
      </div>
    </div>
  </a>
</li>