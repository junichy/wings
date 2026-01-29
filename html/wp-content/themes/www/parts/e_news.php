<a href="<?php the_permalink(); ?>">
  <div class="news__item-img news__img">
    <?php if(has_post_thumbnail()): ?>
      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
    <?php endif; ?>
  </div>
  <div class="news__item-contents">
    <?php $category = get_the_category(); ?>
    <p class="news__item-info news__info">
      <span class="news__item-info--cat news__info--cat news__item-info--cat--<?php echo $category[0]->slug ?>"><?php echo $category[0]->cat_name ?></span>
      <span class="news__item-info--date news__info--date">
        <?php echo get_the_date("Y.m.d"); ?>
      </span>
    </p>
    <h2 class="news__item-title news__title pc_tb">
        <?php echo get_the_title(); ?>
    </h2>
    <h2 class="news__item-title news__title sp_only">
        <?php echo wp_trim_words(get_the_title(), 37, '...'); ?>
    </h2>
    <!-- <p class="news__item-text"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p> -->
  </div>
</a>