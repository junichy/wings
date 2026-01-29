<footer class="footer" id="footer">
  <!-- <div class="footer__pagetop">
    <a href="#" id="page-top"></a>
  </div> -->
  <div class="footer__inner">
    <div class="footer__left">
      <div class="footer__left-inner">
        <div class="footer__logo">
          <?php if(is_front_page()): ?>
          <a href="#">
          <?php else: ?>
          <a href="<?php echo esc_url( home_url() ); ?>/">
          <?php endif; ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Wings Global Home Afterschool & Kindergarten">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-blue.svg" alt="Wings Global Home Afterschool & Kindergarten"> -->
          </a>
        </div>
        <ul class="footer__sns">
          <li class="footer__sns-item"><a href="https://www.instagram.com/wings_global_home/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_footer-instagram.svg" alt=""></a></li>
          <li class="footer__sns-item"><a href="https://www.facebook.com/wingskidsfamily/?locale=ja_JP" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_footer-facebook.svg" alt=""></a></li>
          <li class="footer__sns-item"><a href="https://www.youtube.com/channel/UC-v5Pchs4lpFHpaaf3dTM6g" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_footer-youtube.svg" alt=""></a></li>
          <li class="footer__sns-item"><a href="https://twitter.com/WingsGlobalHome" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_footer-twitter.svg" alt=""></a></li>
        </ul>
      </div>
    </div>
    <div class="footer__center">
      <div class="footer__center-container footer__center-container--menu">
        <p class="footer__list-title footer__list-title--menu">メニュー</p>
        <ul class="footer__list footer__list--menu">
          <li class="footer__item footer__item--menu"><a href="/about/"><span>私たちについて</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/teacher/"><span>講師紹介</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/method/"><span>独自のメソッド</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/skills/"><span>伸ばす2つの力</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/faq/"><span>よくある質問</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/news/"><span>お知らせ</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/blog/"><span>ブログ</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/application/"><span>見学の申し込み</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/gallery#ikejiri"><span>池尻大橋校ギャラリー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/gallery#gakugei"><span>学芸大学駅前校ギャラリー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/gallery#sakurashinmachi"><span>桜新町校ギャラリー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/gallery#other"><span>その他活動写真</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item footer__item--menu"><a href="/english/"><span>English Site</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
        </ul>
      </div>
      <div class="footer__center-container footer__center-container--school">
        <p class="footer__list-title footer__list-title--school">校舎紹介</p>
        <ul class="footer__list footer__list--school">
          <li class="footer__item"><a href="/ikejiri/"><span>池尻大橋校について</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item"><a href="/gakugei/"><span>学芸大学駅前校について</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item"><a href="/sakurashinmachi/"><span>桜新町校について</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
        </ul>
      </div>
      <div class="footer__center-container footer__center-container--info">
        <p class="footer__list-title footer__list-title--info">関連情報</p>
        <ul class="footer__list footer__list--info">
			<li class="footer__item"><a href="https://www.worldwidewings.co.jp/" target="blank"><span>運営会社</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item"><a href="https://www.worldwidewings.co.jp/recruit/" target="blank"><span>採用情報</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item"><a href="/privacy-policy/"><span>プライバシーポリシー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
          <li class="footer__item"><a href="/sitemap/"><span>サイトマップ</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt=""></a></li>
        </ul>
      </div>
    </div>
    <div class="footer__right footer__address">
      <p class="footer__address-title">本社所在地</p>
      <div class="footer__address-map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1391.7770038681178!2d139.68609294161084!3d35.64994627265894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f4abf0c046e7%3A0x68eef3ec0d985ac4!2z44CSMTUzLTAwNDMg5p2x5Lqs6YO955uu6buS5Yy65p2x5bGx77yT5LiB55uu77yW4oiS77yR77yR!5e0!3m2!1sja!2sjp!4v1674151682122!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
          <?php echo do_shortcode('[google_map_easy id="1"]') ?>
      </div>
      <p class="footer__address-text">
        本社：〒154-0001 <br>
        東京都世田谷区池尻２−３１−５<br>プライマルイプセ池尻大橋２階
      </p>
    </div>
  </div>
  <div class="footer__copy">
    <p class="footer__copy-reserved">©︎Wings Global Home All Rights Reserved.</p>
    <p class="footer__copy-lower-right">事業再構築</p>
  </div>
  
</footer>