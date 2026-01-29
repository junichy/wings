<?php get_header();
/*
Template Name: サイトマップ
*/
?>

<main class="page">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <!-- sitemap -->
  <section class="sitemap">
    <div class="sitemap__inner section__inner section__inner-s">

      <div class="sitemap__container sitemap__container--menu">
        <p class="sitemap__list-title sitemap__list-title--menu">メニュー</p>
        <ul class="sitemap__list sitemap__list--menu">
          <li class="sitemap__item sitemap__item--menu"><a href="/about/"><span>私たちについて</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/teacher/"><span>講師紹介</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/method/"><span>独自のメソッド</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/skills/"><span>伸ばす2つの力</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/faq/"><span>よくある質問</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/news/"><span>お知らせ</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/blog/"><span>ブログ</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/application/"><span>見学の申し込み</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/gallery#ikejiri"><span>池尻大橋校ギャラリー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/gallery#gakugei"><span>学芸大学駅前校ギャラリー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/gallery#sakurashinmachi"><span>桜新町校ギャラリー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/gallery#other"><span>その他活動写真</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item sitemap__item--menu"><a href="/english/"><span>English Site</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
        </ul>
      </div>
      <div class="sitemap__container sitemap__container--school">
        <p class="sitemap__list-title sitemap__list-title--school">校舎紹介</p>
        <ul class="sitemap__list sitemap__list--school">
          <li class="sitemap__item"><a href="/ikejiri/"><span>池尻大橋校について</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item"><a href="/gakugei/"><span>学芸大学駅前校について</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item"><a href="/sakurashinmachi/"><span>桜新町校について</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
        </ul>
      </div>
      <div class="sitemap__container sitemap__container--info">
        <p class="sitemap__list-title sitemap__list-title--info">関連情報</p>
        <ul class="sitemap__list sitemap__list--info">
          <li class="sitemap__item"><a href="/company/"><span>会社概要</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item"><a href="/recruit/"><span>採用情報</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item"><a href="/privacy-policy/"><span>プライバシーポリシー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="sitemap__item"><a href="/sitemap/"><span>サイトマップ</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
        </ul>
      </div>

    </div>

  </section>
  
</main>

<?php get_footer(); ?>