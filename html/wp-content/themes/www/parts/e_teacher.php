<li class="teacher__item">
  <div class="teacher__item-img">
    <?php if(get_field('teacher_image_01')): ?>
      <img class="teacher__item-img-01" src="<?php the_field('teacher_image_01'); ?>" alt="">
      <img class="teacher__item-img-02" src="<?php the_field('teacher_image_02'); ?>" alt="">
    <?php else : ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
    <?php endif; ?>
  </div>

  <div class="teacher__item-contents">

    <?php // タグ表示
      $cp_slug = esc_html(get_post_type_object(get_post_type())->name);
      if( $cp_slug == 'teacher' ): // ポストタイプ名
    ?>
      <div class="teacher__item-cats">
        <?php
          if ($terms = get_the_terms($post->ID, 'cat_teacher')) { //タクソノミー名
            foreach ( $terms as $term ) {
              echo '<span class="teacher__item-cat teacher__item-cat--' .$term->slug. '">' .$term->name. '</span>';
            }
          }
        ?>
      </div>
    <?php endif; ?>

    <h3 class="teacher__item-title"><?php echo get_the_title(); ?></h3>
    <?php if( get_field('teacher_nickname') ): ?>
    <p class="teacher__item-nickname">ニックネーム : <?php the_field('teacher_nickname'); ?></p>
    <? endif; ?>
    <?php if( get_field('teacher_birthplace') ): ?>
    <p class="teacher__item-birthplace">生まれ育った国 : <?php the_field('teacher_birthplace'); ?></p>
    <? endif; ?>
    <?php if( get_field('teacher_background') ): ?>
    <p class="teacher__item-background">学歴 : <?php the_field('teacher_background'); ?></p>
    <? endif; ?>
    <?php if( get_field('teacher_language') ): ?>
    <p class="teacher__item-language">言語 : <?php the_field('teacher_language'); ?></p>
    <? endif; ?>
    <?php if( get_field('teacher_text') ): ?>
      <p class="teacher__item-text"><?php the_field('teacher_text'); ?></p>
    <? endif; ?>
  </div>
</li>