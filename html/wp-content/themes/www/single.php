<?php get_header(); ?>

<main class="article">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <section id="s-news" class="s-news single">
    <div class="single__inner section__inner page__inner">
      <div class="single__main_column">
        <!-- info-top -->
        <?php $category = get_the_category(); ?>
        <div class="single__info-top">
          <p class="single__info--cat single__info--cat--<?php echo $category[0]->slug ?>">
            <?php
              if ( $category[0] ) {
                echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
              }  
              ?>
          </p>
          <p class="single__right-item-info--date single__info--date">
            <?php echo get_the_date("Y.m.d"); ?>
          </p>
        </div>

        <!-- title -->
        <h1 class="single__title"><?php the_title(); ?></h1>
        
        <!-- thumbnail -->
        <?php if (has_post_thumbnail()) : ?>
          <div class="single__thumbnail">
            <?php the_post_thumbnail('full'); ?>
          </div>
        <?php endif; ?>

        <!-- content -->
        <div class="single__content">
          <div class="single__content-inner">
            <?php the_content(); ?>
          </div>
        </div>
        <p class="single__content-btn btn btn__white"><a href="<?php echo esc_url( home_url() ); ?>/news/"><span>お知らせ一覧を見る</span></a></p>
      </div>
      <div class="single__side_column">
        <?php echo get_template_part('parts/sidebar') ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>