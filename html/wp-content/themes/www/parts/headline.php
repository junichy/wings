<section class="headline">
  <div class="headline__inner">
    <?php 
    if(is_page('about')): 
      $img_path = 'about';
      $title_en = 'About Us';
      $title_jp = '私たちについて';
    elseif(is_page('ikejiri')):
      $img_path = 'ikejiri';
      $title_en = 'Ikejiriohashi';
      $title_jp = '池尻大橋校';
    elseif(is_page('gakugei')):
      $img_path = 'gakugei';
      $title_en = 'Gakugeidai';
      $title_jp = '学芸大学駅前校';
    elseif(is_page('sakurashinmachi')):
      $img_path = 'sakurashinmachi';
      $title_en = 'sakurashinmachi';
      $title_jp = '桜新町校';
    elseif(is_page('gallery')):
      $img_path = 'gallery';
      $title_en = 'Gallery';
      $title_jp = 'ギャラリー';
    elseif(is_page('preschool')):
      $img_path = 'preschool';
      $title_en = 'Pre School';
      $title_jp = 'プリスクールコース';
    elseif(is_page('bilingual')):
      $img_path = 'bilingual';
      $title_en = 'Bilingual';
      $title_jp = 'バイリンガルコース';
    elseif(is_page('kinder')):
      $img_path = 'kinder';
      $title_en = 'Kinder-Flex';
      $title_jp = 'キンダーフレックスコース';
    elseif(is_page('elementary')):
      $img_path = 'elementary';
      $title_en = 'Elementary';
      $title_jp = 'エレメンタリーコース';
    elseif(is_page('advanced')):
      $img_path = 'advanced';
      $title_en = 'Advanced';
      $title_jp = 'アドバンストプラスコース';
    elseif(is_page('kinder_bilingual')):
      $img_path = 'kinder_bilingual';
      $title_en = 'Bi.-Kinder Course';
      $title_jp = 'ビーアイキンダーコース';
    elseif(is_page('method')):
      $img_path = 'method';
      $title_en = 'Method';
      $title_jp = '独自のメソッドとカリキュラム';
    elseif(is_page('skills')):
      $img_path = 'skills';
      $title_en = 'Two Skills';
      $title_jp = '伸ばす2つの力';
    elseif(is_page('company')):
      $img_path = 'company';
      $title_en = 'Company';
      $title_jp = '会社概要';
    elseif(is_page('recruit') || is_parent_slug() === 'recruit'):
      $img_path = 'recruit';
      $title_en = 'Recruit';
      $title_jp = '採用情報';
    elseif(is_page('faq')):
      $img_path = 'faq';
      $title_en = 'FAQ';
      $title_jp = 'よくある質問';
    elseif(is_page('english')):
      $img_path = 'english';
      $title_en = 'Wings Global Home';
      $title_jp = '';
    elseif(is_page('application')):
      $img_path = 'application';
      $title_en = 'Application';
      $title_jp = '見学申し込み';
    elseif(is_page('privacy-policy')):
      $img_path = 'privacy';
      $title_en = 'Privacy';
      $title_jp = 'プライバシーポリシー';
    elseif(is_page('sitemap')):
      $img_path = 'sitemap';
      $title_en = 'Site Map';
      $title_jp = 'サイトマップ';
    elseif(is_page()):
      $img_path = 'bg';
      $title_en = '';
      $title_jp = '';
    elseif(is_post_type_archive('teacher')):
      $img_path = 'staff';
      $title_en = 'Staff';
      $title_jp = '講師紹介';
    elseif(is_post_type_archive('blog') || is_tax(array('cat_blog', 'tag_blog'))):
      $img_path = 'blog';
      $title_en = 'Blog';
      $title_jp = 'ブログ';
    elseif(is_archive()):
      $img_path = 'news';
      $title_en = 'News';
      $title_jp = 'お知らせ';
    elseif(is_singular('blog')):
      $img_path = 'blog';
      $title_en = 'Blog';
      $title_jp = 'ブログ詳細';
    elseif(is_single()):
      $img_path = 'news';
      $title_en = 'News';
      $title_jp = 'お知らせ詳細';
    endif;
    ?>
    <div class="headline__img">
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/headline/headline_<?php echo $img_path; ?>.jpg" alt=""> -->
      <!-- <img class="pc_tb" src="<?php echo get_template_directory_uri(); ?>/assets/img/headline/headline_<?php echo $img_path; ?>.jpg" alt=""> -->
      <!-- <img class="sp_only" src="<?php echo get_template_directory_uri(); ?>/assets/img/headline/headline_<?php echo $img_path; ?>-sp.jpg" alt=""> -->
      <?php 
      if (is_page('about')): ?>
          <img class="pc_only" src="<?php echo get_template_directory_uri(); ?>/assets/img/headline/headline_<?php echo $img_path; ?>.jpg" alt="">
          <img class="sp_only" src="<?php echo get_template_directory_uri(); ?>/assets/img/headline/headline_<?php echo $img_path; ?>-sp.jpg" alt="">
      <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/headline/headline_<?php echo $img_path; ?>.jpg" alt="">
      <?php endif; ?>

    </div>
    <div class="headline__title fadeIn">
      <p class="headline__title-en <?php if(is_page('english')): echo 'headline__title-en--english'; endif; ?>">
        <span><?php echo $title_en ?></span>
        <?php if(is_page(array('preschool', 'bilingual','kinder', 'elementary','kinder_bilingual'))): ?>
          <span class="pc_tb">Course</span>
        <?php elseif(is_page('advanced')): ?>
          <span class="pc_tb">Plus Course</span>
        <?php endif; ?>
      </p>
      <h1 class="headline__title-jp"><?php echo $title_jp ?></h1>
      <?php if(is_page(array('bilingual','kinder',))): ?>
        <p class="headline__title-note">※こちらのコースは幼児無償化対象ではありません。</p>
      <?php endif; ?>
    </div>

    <?php if(is_page(array('ikejiri','gakugei','sakurashinmachi','kinder_bilingual'))): ?>
      <ul class="headline__icons delayScroll <?php if(is_page('kinder_bilingual')): echo 'headline__icons--kb'; endif; ?>">
        <?php if(is_page(array('ikejiri', 'kinder_bilingual'))): ?>
          <li class="headline__icons-item headline__icons-item--01">
            <div class="headline__icons-item-inner">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/ikejiri/icon_ikejiri_headline-01.svg" alt="">
              <span>幼児教育無償化<br>対象</span>
            </div>
            <?php if(is_page('ikejiri')): ?>
            <p class="headline__icons-item-note <?php if(is_page('kinder_bilingual')): echo 'headline__icons-item-note--kb'; endif; ?>">2023年10月より</p>
            <?php endif; ?>
          </li>
        <?php endif; ?>
        <?php if(is_page(array('gakugei'))): ?>
          <li class="headline__icons-item headline__icons-item--01">
            <div class="headline__icons-item-inner">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/ikejiri/icon_ikejiri_headline-01.svg" alt="">
              <span>幼児教育無償化<br>対象</span>
            </div>
            <p class="headline__icons-item-note headline__icons-item-note--gakugei">2024年4月より</p>
          </li>
        <?php endif; ?>
        <?php if(is_page(array('sakurashinmachi'))): ?>
          <li class="headline__icons-item headline__icons-item--01">
            <div class="headline__icons-item-inner">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/ikejiri/icon_ikejiri_headline-01.svg" alt="">
              <span>幼児教育無償化<br>対象</span>
            </div>
            <p class="headline__icons-item-note headline__icons-item-note--gakugei">2026年1月より</p>
          </li>
        <?php endif; ?>
        <?php if(!is_page('kinder_bilingual')): ?>
          <li class="headline__icons-item headline__icons-item--02">
            <div class="headline__icons-item-inner">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/ikejiri/icon_ikejiri_headline-02.svg" alt="">
              <span>学童保育</span>
            </div>
          </li>
          <li class="headline__icons-item headline__icons-item--03">
            <div class="headline__icons-item-inner">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/ikejiri/icon_ikejiri_headline-03.svg" alt="">
              <span>習い事</span>
            </div>
          </li>
        <?php endif; ?>
      </ul>
    <?php endif; ?>

    <?php get_template_part('parts/breadcrumbs') ?>

  </div>
</section>