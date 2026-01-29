<?php get_header(); ?>

<main class="page">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <!-- sitemap -->
  <section class="sitemap">
    <div class="sitemap__inner section__inner">

      <ul class="sitemap__nav-list">
        <li class="sitemap__nav-list-item"><a href="/recruit/fresh/">採用トップ</a></li>
        <li class="sitemap__nav-list-item"><a href="/service/">私たちのサービス</a></li>
        <li class="sitemap__nav-list-item"><a href="/company">企業情報</a>
          <!-- <p class="sitemap__nav-list-title"><a href="/company">企業情報</a></p> -->
          <!-- <ul class="sitemap__nav-list-links slide-box">
            <li class="sitemap__nav-list-links--link"><a href="/company#message">トップメッセージ</a></li>
          </ul> -->
        </li>
        <li class="sitemap__nav-list-item"><a href="/recruit">採用情報</a></li>
        <li class="sitemap__nav-list-item"><a href="/news/">お知らせ</a></li>
        <li class="sitemap__nav-list-item"><a href="/entry/">採用エントリー</a></li>
        <li class="sitemap__nav-list-item"><a href="/contact/">お問い合わせ</a></li>
        <li class="sitemap__nav-list-item"><a href="/contact-ses/">SESビジネスパートナー・<span>協業に関するお問い合わせ</span></a></li>
        <li class="sitemap__nav-list-item"><a href="/sitemap/">サイトマップ</a></li>
      </ul>

    </div>

  </section>
  
</main>

<?php get_footer(); ?>