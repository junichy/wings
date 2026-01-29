<?php get_header(); ?>

<main class="a-news" id="a-news">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <div class="news__inner section__inner section__inner-s">
    <div class="news__category">
      <!-- 「校舎で検索」 -->
      <div class="news__category-item cat-item-top">
        <p>校舎で検索</p>
      </div>
      <ul class="news__category-list cat-item-list">

        <!-- カテゴリ出力 -->
        <?php
        $args = array(
            'title_li' => '',
            'echo'     => 0,
          );
          $categories = wp_list_categories( $args );
          
          $cat_search   = array( '"cat-item', 'children' );             // 変換前の文字列（文字列書き換え）
          $cat_replace = array( '"news__category-item cat-item', 'cat-list-child' ); // 変換後の文字列.
          $categories  = str_replace( $cat_search, $cat_replace, $categories );
          
          echo $categories;
        ?>
      </ul>
    </div>

    <div class="news__container">
      <ul class="news__list">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="news__item">
            <?php get_template_part('parts/e_news') ?>
          </li>
        <?php endwhile;
        endif; ?>
      </ul>
    </div>

    

    <?php get_template_part('parts/pagination') ?>
  </div>
</main>
<?php get_footer(); ?>