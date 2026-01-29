<?php get_header(); ?>

<main class="blog a-blog" id="a-blog">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <section class="recommend-blog">

    <div class="recommend-blog__inner section__inner section__inner-s">
      <div class="recommend-blog__title section__title section__title--center fadeIn">
        <h2 class="recommend-blog__title-main section__title-main"><span>おすすめ記事はこちら</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_a-blog.svg" alt=""></h2>
        <p class="recommend-blog__title-sub section__title-sub">Recommend</p>
      </div>
      <?php
        $args = array(
            'post_type' => 'blog',
            'posts_per_page' => 4,
            'meta_key' => 'is_recommend',
            'meta_value' => 'show',
            'meta_compare' => 'LIKE'
        );
      ?>
        <?php
        $my_query = new WP_Query($args); 
        ?>
        <?php if ($my_query->have_posts()) : // 投稿がある場合 ?>
          <div class="recommend-blog__container pc_tb">
            <ul class="recommend-blog__list delayScroll">
              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <?php get_template_part('parts/e_blog') ?>
              <?php endwhile; ?>
            </ul>
          </div>
          <div class="recommend-blog__container sp_only blog-swiper swiper">
            <ul class="recommend-blog__list swiper-wrapper">
              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <?php get_template_part('parts/e_blog') ?>
              <?php endwhile; ?>
            </ul>
            <div class="swiper-button-next"></div>
				    <div class="swiper-button-prev"></div>
          </div>
        <?php else : // 投稿がない場合
        ?>
          <p>まだ投稿がありません。</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>
  </section>
    
  <section class="others-blog">
    <div class="others-blog__inner section__inner section__inner-s">
      <div class="others-blog__title section__title section__title--center fadeIn">
        <h2 class="others-blog__title-main section__title-main"><span>その他記事一覧</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_a-blog.svg" alt=""></h2>
        <p class="others-blog__title-sub section__title-sub">Blog</p>
      </div>
      <div class="others-blog__pulldown fadeIn">
        <div class="others-blog__category">
          <!-- 「カテゴリーで検索」 -->
          <div class="others-blog__category-item cat-item-top">
            <p>カテゴリーで検索</p>
          </div>
          <ul class="others-blog__category-list cat-item-list">
            <!-- カテゴリ出力 -->
            <?php // get_terms を使ったターム一覧の表示
              $taxonomy_terms = get_terms('cat_blog'); // タクソノミースラッグを指定
              $term = get_terms( 'cat_blog'); //taxonomy.phpだと、$termがデフォルトで使用可能
              if(!empty($taxonomy_terms)&&!is_wp_error($taxonomy_terms)){
                foreach($taxonomy_terms as $taxonomy_term): // foreach ループの開始
            ?>
            <li class="others-blog__category-item <?php if($taxonomy_term->slug === $term){ echo 'current-cat'; } ?>"><a href="<?php echo get_term_link($taxonomy_term); ?>"><?php echo $taxonomy_term->name; ?></a></li>
            <?php
                endforeach; // foreach ループの終了
              }
            ?>
          </ul>
        </div>
        <div class="others-blog__tag">
          <!-- 「タグで検索」 -->
          <div class="others-blog__tag-item cat-item-top">
            <p>タグで検索</p>
          </div>
          <ul class="others-blog__tag-list cat-item-list">
            <?php wp_list_categories( array('title_li' => '', 'taxonomy' => 'tag_blog', 'show_count' => 0 ) ); ?>
          </ul>
        </div>
      </div>
      <div class="others-blog__container">
        <?php if(is_paged()): ?>
        <ul class="others-blog__list delayScroll paged-list">
        <?php else: ?>
        <ul class="others-blog__list delayScroll">
        <?php endif; ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('parts/e_blog') ?>
          <?php endwhile; endif; ?>
        </ul>
      </div>
      <?php get_template_part('parts/pagination') ?>
    </div>
  </section>

</main>
<?php get_footer(); ?>