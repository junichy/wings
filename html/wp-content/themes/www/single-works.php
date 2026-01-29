<?php get_header(); ?>

<main id="s-works" class="s-works">
  <section class="work">

    <div class="work__inner work__inner-upper section__inner page__inner">
      <!-- info-top -->
      <div class="work__info-top fadeLeftRight">
        <?php 
          $taxonomy = 'cat_works'; //カスタムタクソノミースラッグ
          $taxonomy_terms_cat = get_the_terms($post->ID, $taxonomy);
          $taxonomy_terms_cat_name = $taxonomy_terms_cat[0]->name; //ターム名
          $taxonomy_terms_cat_slug = $taxonomy_terms_cat[0]->slug; //タームスラッグ
        ?>
        <p class="work__cat"><a href="<?php echo esc_url( home_url() ); ?>/cat_works/<?php echo $taxonomy_terms_cat_slug; ?>"><?php echo $taxonomy_terms_cat_name; ?></a></p>
        <p class="work__date">
        <?php if(get_post_meta($post->ID, 'date',true)): // 入力がある場合 ?>
          <?php $date = SCF::get('date'); //取得 ?>
            <?php echo $date; //表示 ?>
          <?php else: ?>
            <?php echo get_the_date("Y.m.d"); ?>
          <?php endif; ?>
        </p>
      </div>
      <!-- end info-top -->

      <!-- title -->
      <h1 class="work__description fadeIn delay-time05s"><?php echo post_custom('description'); ?></h1>
      <p class="work__title fadeIn delay-time05s"><?php the_title(); ?></p>
      <!-- end title -->

      <!-- thumbnail -->
      <div class="work__thumbnail fadeIn delay-time1s">
        <div class="work__thumbnail-wrapper">
          <?php 
            if(get_post_meta($post->ID, 'thumbnail',true)): // 入力がある場合
            $img = get_post_meta(get_the_ID(), 'thumbnail', true);
            echo wp_get_attachment_image( $img , 'large' ); // 画像を出力
            ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/d-ghost.png" alt="">
          <?php endif; ?>
        </div>
      </div>
      <!-- end thumbnail -->
      
      <!-- Project Data -->
      <div class="work__p-data">

        <h2 class="work__p-data-title fadeLeftRight">Project Data</h2>
        <dl class="work__p-data-list fadeIn">

          <!-- Client -->
          <?php if(get_post_meta($post->ID, 'client',true)): // 入力がある場合 ?>
            <dt class="work__p-data-item-title">Client</dt>
            <dd class="work__p-data-item-text"><?php echo get_post_meta($post->ID , 'client' ,true); ?></dd>
          <?php endif; ?>

          <!-- URL -->
          <?php if(get_post_meta($post->ID, 'url',true)): // 入力がある場合 ?>
            <dt class="work__p-data-item-title">URL</dt>
            <dd class="work__p-data-item-text"><a href="<?php echo get_post_meta($post->ID , 'url' ,true); ?>" target="_blank"><?php echo get_post_meta($post->ID , 'url' ,true); ?></a></dd>
          <?php endif; ?>

          <!-- Delivered -->
          <?php if(get_post_meta($post->ID, 'delivered',true)): // 入力がある場合 ?>
          <dt class="work__p-data-item-title">Delivered</dt>
          <dd class="work__p-data-item-text"><?php echo get_post_meta($post->ID , 'delivered' ,true); ?></dd>
          <?php endif; ?>

          <!-- Overview -->
          <?php if(get_post_meta($post->ID, 'over_view',true)): // 入力がある場合 ?>

          <dt class="work__p-data-item-title">Overview</dt>
          <dd class="work__p-data-item-text"><?php echo get_post_meta($post->ID , 'over_view' ,true); ?></dd>
          <?php endif; ?>

          <!-- Order -->
          <?php if(get_post_meta($post->ID, 'order',true)): // 入力がある場合 ?>
          <dt class="work__p-data-item-title">Order</dt>
          <dd class="work__p-data-item-text"><?php echo get_post_meta($post->ID , 'order' ,true); ?></dd>
          <?php endif; ?>

          <!-- Activities -->
          <?php if(get_post_meta($post->ID, 'activities',true)): // 入力がある場合 ?>
          <dt class="work__p-data-item-title">Activities</dt>
          <dd class="work__p-data-item-text"><?php echo get_post_meta($post->ID , 'activities' ,true); ?></dd>
          <?php endif; ?>

          <!-- PIC -->
          <?php if(get_post_meta($post->ID, 'name',true)): // 入力がある場合 ?>
          <dt class="work__p-data-item-title">PIC</dt>
          <dd class="work__p-data-item-text">
            <dl class="work__p-data-item-pic">
            <?php
              $pic = SCF::get('pic');
              foreach ($pic as $fields) { 
            ?>
              <dt class="work__p-data-item-pic--job"><?php echo $fields['job']; ?></dt>
              <dd class="work__p-data-item-pic--name">
                <?php echo $fields['name']; ?>

                <?php   if($fields['link'] !== ""){ ?>
                  <a href="<?php echo $fields['link']; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_link.png" alt="">
                  </a>
                <?php } ?>
              </dd>
            <?php
            } 
            ?>
            </dl>
            
          </dd>
          <?php endif; ?>

        </dl>
      </div>
      <!-- end Project Data -->
        
      <div class="work__content fadeIn">
        <div class="work__content-inner">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

    <div class="work__inner work__inner-lower section__inner singleWorks-scroll-trigger">
      <!-- Image_list -->
      <?php $image_list = SCF::get('image_list');?>
      <?php if($image_list[0]['image']): ?>
      <div class="work__image-wrapper side-scroll-list-wrapper">
        <ul class="work__image_list side-scroll-list">
          <?php foreach ($image_list as $fields) { ?>
          <li class="work__image_item side-scroll-item">
            <?php echo wp_get_attachment_image( $fields['image'], 'large' );?>
          </li>
          <?php } ?>
        </ul>
      </div>
      <?php endif; ?>

      <p class="work__info-bottom fadeIn">
        【本件に関するお問合せ先】<br>
        株式会社D-GHOST　広報担当〈hello@d-ghost.co.jp〉
      </p>
      <div class="work__sns fadeIn">
        <p class="work__sns-text">Share on</p>
        <ul class="work__sns-list">
          <li class="work__sns-item"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/work_sns-fb.png" alt=""></a></li>
          <li class="work__sns-item"><a href="http://twitter.com/share?text=<?php echo urlencode(the_title_attribute('echo=0')); ?>&url=<?php the_permalink(); ?>" target="_blank" rel="nofollow" data-show-count="false"><img src="<?php echo get_template_directory_uri(); ?>/img/work_sns-tw.png" alt=""></a></li>
        </ul>
      </div>
    </div>
  </section>

  <?php get_template_part('parts/sec_black-link'); ?>
</main>

<?php get_footer(); ?>