<?php if(is_singular('blog')): ?>
  <div class="sidebar sidebar-blog">
    <section class="sidebar__articles">
      <div class="sidebar__articles-title sidebar__title">
        <div class="sidebar__articles-title-icon sidebar__title-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/single/icon_related_article.svg" alt=""></div>
        <p class="sidebar__articles-title-text sidebar__title-text">関連記事</p>
      </div>
      <!-- <div class="sec_news__contents delayScroll"> -->
      <ul class="sidebar__articles-list">
          <?php
            $current_post_id = get_the_ID(); // 現在表示中の記事IDを取得

            //画面幅に応じて表示件数を条件分岐
            if( is_mobile() ){
              $num = 4;
            } else {
              $num = 6;
            }

            $args = array(
                'post_type' => 'blog',
                'posts_per_page' => $num,
                "post__not_in" => [$current_post_id] // 除外する記事のIDを指定
            );
            $my_query = new WP_Query( $args );
            if ( $my_query->have_posts() ):
          ?>
          <?php while( $my_query->have_posts()): $my_query->the_post(); ?>
            <li class="sidebar__articles-item">
              <a href="<?php the_permalink(); ?>">
                <div class="sidebar__articles-item-img">
                <?php if(has_post_thumbnail()): ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
                <?php endif; ?>
                </div>
                <?php
                $taxonomy = 'cat_blog'; //カスタムタクソノミースラッグ
                $taxonomy_terms_cat = get_the_terms($post->ID, $taxonomy);
                $taxonomy_terms_cat_name = $taxonomy_terms_cat[0]->name; //ターム名
                $taxonomy_terms_cat_slug = $taxonomy_terms_cat[0]->slug; //タームスラッグ
                ?>
                <div class="sidebar__articles-item-contents">
                  <div class="sidebar__articles-item-info">
                    <p class="sidebar__articles-item-info-cat"><?php echo $taxonomy_terms_cat_name; ?></p>
                    <p class="sidebar__articles-item-info-date"><?php echo get_the_date("Y.m.d"); ?></p>
                  </div>
                  <p class="sidebar__articles-item-title pc_tb">
                      <?php echo wp_trim_words(get_the_title(), 42, '...'); ?>
                  </p>
                  <p class="sidebar__articles-item-title sp_only">
                      <?php echo wp_trim_words(get_the_title(), 23, '...'); ?>
                  </p>
                </div>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
      </ul>
    </section>
    <section class="sidebar__tags">
      <div class="sidebar__tags-title sidebar__title">
        <div class="sidebar__tags-title-icon sidebar__title-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/single/icon_related_article.svg" alt=""></div>
        <p class="sidebar__tags-title-text sidebar__title-text">タグで検索</p>
      </div>
      <ul class="sidebar__tags-list cat-item-list">
        <?php wp_list_categories( array('title_li' => '', 'taxonomy' => 'tag_blog', 'show_count' => 0 ) ); ?>
      </ul>
    </section>

<?php elseif(is_single()): ?>
  <div class="sidebar sidebar-news">
    <section class="sidebar__articles">
      <div class="sidebar__articles-title sidebar__title">
        <div class="sidebar__articles-title-icon sidebar__title-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/single/icon_other_news.svg" alt=""></div>
        <p class="sidebar__articles-title-text sidebar__title-text">その他お知らせ</p>
      </div>
      <!-- <div class="sec_news__contents delayScroll"> -->
      <ul class="sidebar__articles-list">
          <?php
            $current_post_id = get_the_ID(); // 現在表示中の記事IDを取得

            //画面幅に応じて表示件数を条件分岐
            if( is_mobile() ){
              $num = 4;
            } else {
              $num = 6;
            }
            
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $num,
                "post__not_in" => [$current_post_id] // 除外する記事のIDを指定
            );
            $my_query = new WP_Query( $args );
            if ( $my_query->have_posts() ):
          ?>
          <?php while( $my_query->have_posts()): $my_query->the_post(); ?>
            <li class="sidebar__articles-item">
              <a href="<?php the_permalink(); ?>">
                <div class="sidebar__articles-item-img">
                <?php if(has_post_thumbnail()): ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
                <?php endif; ?>
                </div>
                <div class="sidebar__articles-item-contents">
                  <div class="sidebar__articles-item-info">
                    <?php $category = get_the_category(); ?>
                    <p class="sidebar__articles-item-info-cat sidebar__articles-item-info-cat--<?php echo $category[0]->slug ?>"><?php echo $category[0]->cat_name ?></p>
                    <p class="sidebar__articles-item-info-date"><?php echo get_the_date("Y.m.d"); ?></p>
                  </div>
                  <p class="sidebar__articles-item-title pc_tb">
                      <?php echo wp_trim_words(get_the_title(), 42, '...'); ?>
                  </p>
                  <p class="sidebar__articles-item-title sp_only">
                      <?php echo wp_trim_words(get_the_title(), 23, '...'); ?>
                  </p>
                </div>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
      </ul>
    </section>
    
  </div>

<?php endif; ?>