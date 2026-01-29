<?php get_header(); ?>

<main class="works a-works" id="works">
  <div class="works__inner section__inner page__inner">
    <div class="works__title section__title fadeLeftRight">
      <span class="works__title-main section__title-main">Our Works</span>
      <h1 class="works__title-sub section__title-sub">D-GHOSTの実績</h1>
    </div>
    <div class="works__category">
      <ul class="works__category-list fadeLeftRight">
        <!-- ALL -->
        <?php if(is_category()): //カテゴリー一覧 ?>
          <li class="works__category-item cat-item">
            <a href="<?php echo esc_url( home_url() ); ?>/works/">ALL</a>
          </li>
        <?php else: //All選択時 ?>
          <li class="works__category-item cat-item current-cat">
            <a href="<?php echo esc_url( home_url() ); ?>/works/">ALL</a>
          </li>
        <?php endif; ?>

        <!-- カテゴリ出力 -->
        <?php // get_terms を使ったターム一覧の表示
          $taxonomy_terms = get_terms('cat_works'); // タクソノミースラッグを指定
          $term = get_terms( 'cat_works'); //taxonomy.phpだと、$termがデフォルトで使用可能
          if(!empty($taxonomy_terms)&&!is_wp_error($taxonomy_terms)){
            foreach($taxonomy_terms as $taxonomy_term): // foreach ループの開始
        ?>
        <span> / </span>
        <li class="works__category-item <?php if($taxonomy_term->slug === $term){ echo 'current-cat'; } ?>"><a href="<?php echo get_term_link($taxonomy_term); ?>"><?php echo $taxonomy_term->name; ?></a></li>
        <?php
            endforeach; // foreach ループの終了
          }
        ?>
      </ul>
    </div>
    <?php get_template_part('parts/e_works') ?>
    <?php get_template_part('parts/pagination') ?>
  </div>
</main>
<?php get_footer(); ?>