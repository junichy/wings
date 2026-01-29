<?php get_header();
/*
Template Name: 校舎紹介
*/
?>
<main class="page">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <?php 
  if(is_page('ikejiri')):
    $image_path = 'ikejiri';
  elseif(is_page('gakugei')):
    $image_path = 'gakugei';
  elseif(is_page('sakurashinmachi')):
    $image_path = 'sakurashinmachi';
  endif; 
  ?>
<?php if(is_page('ikejiri')): ?>
<?php elseif(is_page('gakugei')): ?>
<?php elseif(is_page('sakurashinmachi')): ?>
<?php endif; ?>

  <section class="sec_a-school">
    <div class="sec_a-school__inner">
      <div class="sec_a-school__left xl_only fadeLeftRight">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_a-school.webp" type="image/webp"/>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_a-school.jpg" alt="">
        </picture>
      </div>
      <div class="sec_a-school__right">
        <div class="sec_a-school__title fadeRightLeft">
          <p class="sec_a-school__title-en"> ABOUT<br>SCHOOL</p>
          <?php if(is_page('ikejiri')): ?>
            <h2 class="sec_a-school__title-jp">池尻大橋校について</h2>
          <?php elseif(is_page('gakugei')): ?>
            <h2 class="sec_a-school__title-jp">学芸大学駅前校について</h2>
          <?php elseif(is_page('sakurashinmachi')): ?>
            <h2 class="sec_a-school__title-jp">桜新町校について</h2>
          <?php endif; ?>
        </div>
        <div class="sec_a-school__left sec_a-school__left--sp fadeLeftRight">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_a-school.webp" type="image/webp"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_a-school.jpg" alt="">
          </picture>
        </div>
        <div class="sec_a-school__container fadeRightLeft">
          <div class="sec_a-school__catch">
            <?php if(is_page('ikejiri')): ?>
              <p class="sec_a-school__catch-title">池尻大橋校の特徴</p>
            <?php elseif(is_page('gakugei')): ?>
              <p class="sec_a-school__catch-title">学芸大学駅前校の特徴</p>
            <?php elseif(is_page('sakurashinmachi')): ?>
              <p class="sec_a-school__catch-title">桜新町校の特徴</p>
            <?php endif; ?>
            <p class="sec_a-school__catch-text">
            <?php if(is_page('ikejiri')): ?>
              <span>幼児教育無償化対象</span>
              <br>
              <span>(2023年10月より)</span>
            <?php elseif(is_page('gakugei')): ?>
              <!-- <span>2024年度までに無償化対象予定</span> -->
              <span>幼児教育無償化対象</span><br>
              <span>(2024年4月より)</span>
            <?php elseif(is_page('sakurashinmachi')): ?>
              <!-- <span>2024年度までに無償化対象予定</span> -->
              <span>幼児教育無償化対象</span><br>
              <span>(2026年1月より)</span>
            <?php endif; ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/icon_sec_a-school.svg" alt="">
            </p>
          </div>
          <?php if(is_page('ikejiri')): ?>
            <p class="sec_a-school__text">
              2022年12月に拡大移転。東急田園都市線池尻大橋駅南口から徒歩30秒の立地に、専用エレベーター、24時間高機能換気設備の最新の設備に加え、日当たりの良い300平米の広々としたスペースで、こども達が楽しくバイリンガルに育つ環境を提供します。
            </p>
          <?php elseif(is_page('gakugei')): ?>
            <p class="sec_a-school__text">
            東急東横線学芸大学駅から２００メートル、徒歩2分半。駅前商店街の片隅の車、自転車、徒歩どれでも行きやすい立地。キャンプ場をモチーフにしたスペースで楽しくバイリンガルに育つ環境を提供します。
            </p>
          <?php elseif(is_page('sakurashinmachi')): ?>
            <p class="sec_a-school__text">
            東急田園都市線桜新町駅から100メートル、サザエさん通りに入ってすぐ右手。キッズデザイン賞毎年受賞のデザイナーによって設計された室内は、天井が高く広々としたスペースで、バイリンガルとして楽しく健やかに育つ環境を提供します。
            </p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- sec_news -->
  <?php get_template_part('parts/sec_news') ?>

  <!-- sec_course -->
  <section class="sec_course" id="course">
    <div class="sec_course__inner section__inner section__inner-s">
      <div class="sec_course__title section__title section__title--center fadeIn">
        <h2 class="sec_course__title-main section__title-main"><span>コース紹介</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/icon_sec_course.svg" alt=""></h2>
        <p class="sec_course__title-sub section__title-sub">Course</p>
      </div>
      <div class="sec_course__table fadeIn">
        <table>
          <tr>
            <th class="sec_course__table-blank" rowspan="2"></th>
            <th class="sec_course__table-orange sec_course__table-orange--01" rowspan="2">対象年齢</th>
            <th class="sec_course__table-orange sec_course__table-orange--02" rowspan="2">時間</th>
            <th class="sec_course__table-orange sec_course__table-orange--03" colspan="2">送迎サービス</th>
            <th class="sec_course__table-orange sec_course__table-orange--04" rowspan="2">ケータリング</th>
          </tr>
          <tr>
            <th class="sec_course__table-half sec_course__table-orange sec_course__table-orange--03">行き</th>
            <th class="sec_course__table-half sec_course__table-orange sec_course__table-orange--03">帰り</th>
          </tr>
          <tr>
            <td class="sec_course__table-course">
              <span class="sec_course__table-course-en">Pre School Course</span>
              <span class="sec_course__table-course-jp">プリスクールコース</span>
            </td>
            <td><span>2歳6ヶ月〜3歳</span></td>
            <td><span>9:30 - 13:00</span></td>
            <td class="sec_course__table-dots-right"></td>
            <td class="sec_course__table-dots-left sec_course__table-circle"></td>
            <td>昼</td>
          </tr>
          <tr>
            <td class="sec_course__table-course">
              <span class="sec_course__table-course-en">Bi.-Kinder Course</span>
              <span class="sec_course__table-course-jp">ビーアイキンダーコース</span>
            </td>
            <td><span>年小〜年長</span></td>
            <td><span>9:30 - 16:00</span><span class="small">or</span><span>9:30 - 18:30</span><span class="small mt0">※8:00~延長無料</span></td>
            <td class="sec_course__table-dots-right"></td>
            <td class="sec_course__table-dots-left"></td>
            <td>昼・夜</td>
          </tr>
          <?php if(is_page('ikejiri')):?>
          <!-- <tr>
            <td class="sec_course__table-course">
              <span class="sec_course__table-course-en">Bilingual Course</span>
              <span class="sec_course__table-course-jp">バイリンガルコース</span>
            </td>
            <td><span>年少～年長</span></td>
            <td><span>10:30 - 14:00</span><span class="small mt0">※9:30~延長無料</span></td>
            <td class="sec_course__table-dots-right"></td>
            <td class="sec_course__table-dots-left sec_course__table-circle"></td>
            <td>昼・夜</td>
          </tr> -->
          <?php endif; ?>
          <tr>
            <td class="sec_course__table-course">
              <span class="sec_course__table-course-en">Kinder-Flex Course</span>
              <span class="sec_course__table-course-jp">キンダーフレックスコース</span>
            </td>
            <td><span>年少～年長</span></td>
            <td><span>9:30 - 13:00</span><span class="mt10">15:00 - 18:30</span></td>
            <td class="sec_course__table-dots-right sec_course__table-circle"></td>
            <td class="sec_course__table-dots-left"></td>
            <td>昼・夜</td>
          </tr>
          <tr>
            <td class="sec_course__table-course">
              <span class="sec_course__table-course-en">Elementary Course</span>
              <span class="sec_course__table-course-jp">エレメンタリーコース</span>
            </td>
            <td><span>小学1年生〜6年生</span><span class="small">※英語が初めてのお子様は<br>小学3年生まで入会可</span></td>
            <td><span>9:00 - 13:00</span><span class="mt10">14:30 - 18:30</span><span class="small mt0">※19:30まで延長無料</span></td>
            <td class="sec_course__table-dots-right sec_course__table-circle"></td>
            <td class="sec_course__table-dots-left"></td>
            <td>昼・夜</td>
          </tr>
          <tr>
            <td class="sec_course__table-course">
              <span class="sec_course__table-course-en">Advanced Plus Course</span>
              <span class="sec_course__table-course-jp">アドバンストプラスコース</span>
            </td>
            <td><span>小学3年生〜6年生</span></td>
            <td><span>18:00 - 19:30</span></td>
            <td class="sec_course__table-dots-right"></td>
            <td class="sec_course__table-dots-left"></td>
            <td class="sec_course__table-last_td">なし</td>
          </tr>
        </table>
      </div>
      <div class="sec_course__wrapper">
        <ul class="sec_course__list">
          <li class="sec_course__item fadeLeftRight">
            <div class="sec_course__item-image">
              <div class="sec_course__item-image-wrapper">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_course_01.webp" type="image/webp"/>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_course_01.jpg" alt="">
                </picture>
              </div>
              <div class="sec_course__item-image-info">
                <p class="sec_course__item-image-info-course">Pre School Course</p>
                <p class="sec_course__item-image-info-age">2歳6ヶ月~3歳対象</p>
              </div>
            </div>
            <div class="sec_course__item-contents">
              <div class="sec_course__item-title">
                <p class="sec_course__item-title-en">Pre School Course</p>
                <p class="sec_course__item-title-jp">プリスクールコース</p>
              </div>
              <ul class="sec_course__item-info">
                <?php if(is_page('ikejiri')): ?>
                  <!-- <li class="sec_course__item-info-note"><span>こちらのコースは幼児無償化対象ではありません。</span></li> -->
                <?php endif; ?>
                <li class="sec_course__item-info-age">2歳6ヶ月~3歳対象</li>
                <li class="sec_course__item-info-time"><span>9:30-13:00</span></li>
              </ul>
              <p class="sec_course__item-text">
                幼児期をスタートアップとして捉え、高いレベルのバイリンガル育成の為、英語による文字教育プログラムをスタートさせます。
              </p>
              <p class="sec_course__item-btn btn btn__white"><a href="<?php echo esc_url( home_url() ); ?>/<?php echo $image_path ?>/preschool/">詳しく見る</a></p>
            </div>
          </li>
          <li class="sec_course__item fadeRightLeft">
            <div class="sec_course__item-image">
              <div class="sec_course__item-image-wrapper">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_course_06.webp" type="image/webp"/>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_course_06.jpg" alt="">
                </picture>
              </div>
              <div class="sec_course__item-image-info">
                <p class="sec_course__item-image-info-course">Bi.-Kinder Course</p>
                <p class="sec_course__item-image-info-age">年少〜年長対象</p>
              </div>
            </div>
            <div class="sec_course__item-contents sec_course__item-contents--06">
              <div class="sec_course__item-title">
                <p class="sec_course__item-title-en">Bi.-Kinder Course</p>
                <p class="sec_course__item-title-jp">ビーアイキンダーコース</p>
                <?php if(is_page('ikejiri')):?>
                  <div class="sec_course__item-title-circle sec_course__item-title-circle--06"><span>幼児教育<br>無償化対象</span></div>
                  <?php elseif(is_page('sakurashinmachi')):?>
                  <div class="sec_course__item-title-circle sec_course__item-title-circle--06"><span>幼児教育<br>無償化対象</span><span class="detail">2026年<br class="sp">1月より</span></div>
                <?php endif; ?>
              </div>
              <ul class="sec_course__item-info">
                <li class="sec_course__item-info-age sec_course__item-info-age--06">年少〜年長対象</li>
                <li class="sec_course__item-info-age sec_course__item-info-age--06">
                <?php if(is_page('ikejiri')):?>
                  定員 計72名
                <?php elseif(is_page('gakugei')):?>
                  定員 計54名
                <?php elseif(is_page('sakurashinmachi')):?>
                  定員 計48名(年少〜年長)
                <?php endif; ?>
                </li>
                <li class="sec_course__item-info-time sec_course__item-info-time--06"><span>9:30-16:00 ※8:00~延長無料</span></li>
                <li class="sec_course__item-info-time sec_course__item-info-time--06"><span>9:30-18:30 ※8:00~延長無料</span></li>
              </ul>
              <p class="sec_course__item-text">
                これまでノウハウを蓄積してきた、お子様自身が持つ「自己教育力」が存分に発揮できる「教育環境」を「認可外保育施設」としてご提供します。
              </p>
              <!-- <p class="sec_course__item-text">
                Bi.-Kindergartenでは、これまでノウハウを蓄積してきた、お子様自身が持つ「自己教育力」が存分に発揮できる「教育環境」を「認可外保育施設」としてご提供します。
              </p> -->
              <p class="sec_course__item-btn btn btn__white"><a href="<?php echo esc_url( home_url() ); ?>/<?php echo $image_path ?>/kinder_bilingual/">詳しく見る</a></p>
            </div>
          </li>
          <?php if(is_page('ikejiri')):?>
          <!-- <li class="sec_course__item fadeLeftRight">
            <div class="sec_course__item-image">
              <div class="sec_course__item-image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_course_02.jpg" alt="">
              </div>
              <div class="sec_course__item-image-info">
                <p class="sec_course__item-image-info-course">Bilingual Course</p>
                <p class="sec_course__item-image-info-age">年少～年長対象</p>
              </div>
            </div>
            <div class="sec_course__item-contents">
              <div class="sec_course__item-title">
                <p class="sec_course__item-title-en">Bilingual Course</p>
                <p class="sec_course__item-title-jp">バイリンガルコース</p>
              </div>
              <ul class="sec_course__item-info">
                <?php if(is_page('ikejiri')): ?>
                  <li class="sec_course__item-info-note"><span>こちらのコースは幼児無償化対象ではありません。</span></li>
                <?php endif; ?>
                <li class="sec_course__item-info-age">年少～年長対象</li>
                <li class="sec_course__item-info-time"><span>10:30-14:00 ※9:30~延長無料</span></li>
              </ul>
              <p class="sec_course__item-text">
                バイリンガルコースでは、英語による非認知能力開発を通して英語習得が伴う幼児教育を提供します。
              </p>
              <p class="sec_course__item-btn btn btn__white"><a href="<?php echo esc_url( home_url() ); ?>/<?php echo $image_path ?>/bilingual/">詳しく見る</a></p>
            </div>
          </li> -->
          <?php endif; ?>
          <li class="sec_course__item fadeLeftRight">
            <div class="sec_course__item-image">
              <div class="sec_course__item-image-wrapper">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_course_03.webp" type="image/webp"/>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_course_03.jpg" alt="">
                </picture>
              </div>
              <div class="sec_course__item-image-info">
                <p class="sec_course__item-image-info-course">Kinder-Flex Course</p>
                <p class="sec_course__item-image-info-age">年少～年長対象</p>
              </div>
            </div>
            <div class="sec_course__item-contents">
              <div class="sec_course__item-title">
                <p class="sec_course__item-title-en">Kinder-Flex Course</p>
                <p class="sec_course__item-title-jp">キンダーフレックスコース</p>
                <!-- <div class="sec_course__item-title-circle"><span>無償化対象<br>コース</span></div> -->
              </div>
              <ul class="sec_course__item-info">
                <?php if(is_page('ikejiri')): ?>
                  <!-- <li class="sec_course__item-info-note"><span>こちらのコースは幼児無償化対象ではありません。</span></li> -->
                <?php endif; ?>
                <li class="sec_course__item-info-age">年少～年長対象</li>
                <li class="sec_course__item-info-time"><span>9:30-13:00</span></li>
                <li class="sec_course__item-info-time"><span>15:00-18:30</span></li>
              </ul>
              <p class="sec_course__item-text">
                キンダーフレックスコースでは個別に最適化された読解力育成プログラムをご提供しています。 
              </p>
              <p class="sec_course__item-btn btn btn__white"><a href="<?php echo esc_url( home_url() ); ?>/<?php echo $image_path ?>/kinder/">詳しく見る</a></p>
            </div>
          </li>
          <li class="sec_course__item fadeRightLeft">
            <div class="sec_course__item-image">
              <div class="sec_course__item-image-wrapper">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_course_04.webp" type="image/webp"/>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_course_04.jpg" alt="">
                </picture>
              </div>
              <div class="sec_course__item-image-info">
                <p class="sec_course__item-image-info-course">Elementary Course</p>
                <p class="sec_course__item-image-info-age">小学1年生〜6年生対象</p>
              </div>
            </div>
            <div class="sec_course__item-contents">
              <div class="sec_course__item-title">
                <p class="sec_course__item-title-en">Elementary Course</p>
                <p class="sec_course__item-title-jp">エレメンタリーコース</p>
              </div>
              <ul class="sec_course__item-info">
                <li class="sec_course__item-info-age">小学1年生〜6年生対象</li>
                <li class="sec_course__item-info-time"><span>9:00-13:00</span></li>
                <li class="sec_course__item-info-time"><span>14:30-18:30 ※19:30まで延長無料</span></li>
                <!-- <li class="sec_course__item-info-time"></li> -->
              </ul>
              <p class="sec_course__item-text">
                小学6年生をゴールに文脈を捉えて行間を読み取る事ができるようになる、英語による読解力の育成に注力しています。
              <p class="sec_course__item-btn btn btn__white"><a href="<?php echo esc_url( home_url() ); ?>/<?php echo $image_path ?>/elementary/">詳しく見る</a></p>
            </div>
          </li>
          <li class="sec_course__item fadeLeftRight">
            <div class="sec_course__item-image">
              <div class="sec_course__item-image-wrapper">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_course_05.webp" type="image/webp"/>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/sec_course_05.jpg" alt="">
                </picture>
              </div>
              <div class="sec_course__item-image-info">
                <p class="sec_course__item-image-info-course">Advanced Plus Course</p>
                <p class="sec_course__item-image-info-age">小学3年生〜6年生対象</p>
              </div>
            </div>
            <div class="sec_course__item-contents">
              <div class="sec_course__item-title">
                <p class="sec_course__item-title-en">Advanced Plus Course</p>
                <p class="sec_course__item-title-jp">アドバンストプラスコース</p>
              </div>
              <ul class="sec_course__item-info">
                <li class="sec_course__item-info-age">小学3年生〜6年生対象</li>
                <li class="sec_course__item-info-time"><span>18:00-19:30</span></li>
              </ul>
              <p class="sec_course__item-text">
                アドバンストプラスコースでは、今まで培ってきた高い英語力をさらに向上させ、英語での面接や論述にも対応できるレベルまで伸ばすことを目指します。
              </p>
              <p class="sec_course__item-btn btn btn__white"><a href="<?php echo esc_url( home_url() ); ?>/<?php echo $image_path ?>/advanced/">詳しく見る</a></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- sec_gallery -->
  <section class="sec_gallery">
    <div class="sec_gallery__inner section__inner section__inner-s">
      <div class="sec_gallery__title section__title section__title--center fadeIn">
        <h2 class="sec_gallery__title-main section__title-main"><span>校舎紹介</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/icon_sec_gallery.svg" alt=""></h2>
        <p class="sec_gallery__title-sub section__title-sub">Gallery</p>
      </div>
      <p class="sec_gallery__catch">Gallery</p>
      <div class="sec_gallery__container">
        <!-- スライダー-->
        <div class="sec_gallery__upper swiper-container slider fadeIn">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_01.jpg" alt="">
              </picture>
            </div>
            <?php if(is_page('ikejiri') | is_page('gakugei') | is_page('sakurashinmachi')): ?>

            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_02.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_03.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_03.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_04.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_04.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_05.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_05.jpg" alt="">
              </picture>
            </div>
            <?php endif; ?>

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <!-- サムネイル -->
        <div class="sec_gallery__lower swiper-container slider-thumbnail">
          <div class="swiper-wrapper delayScroll">
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_01.jpg" alt="">
              </picture>
            </div>
            <?php if(is_page('ikejiri') | is_page('gakugei') | is_page('sakurashinmachi')): ?>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_02.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_03.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_03.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_04.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_04.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_05.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/<?php echo $image_path ?>/gallery_05.jpg" alt="">
              </picture>
            </div>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- sec_bus -->
  <section class="sec_bus">
    <div class="sec_bus__inner section__inner section__inner-s">
      <div class="sec_bus__title section__title section__title--center fadeIn">
        <h2 class="sec_bus__title-main section__title-main"><span>送迎対象施設</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/icon_sec_bus.svg" alt=""></h2>
        <p class="sec_bus__title-sub section__title-sub">School Bus</p>
      </div>
      <div class="sec_bus__table fadeIn">
        <table>
          <tr>
            <th class="sec_bus__table-blank"></th>
            <th class="sec_bus__table-orange">徒歩<br>(1km未満)</th>
            <th class="sec_bus__table-orange">バス<br>(2km未満)</th>
            <th class="sec_bus__table-orange">タクシー<br>(2km未満)</th>
          </tr>
          <tr>
            <th class="sec_bus__table-blue">月額料金<br><span>※週一利用の場合の月額料金</span></th>
            <th class="sec_bus__table-orange">¥2,500</th>
            <th class="sec_bus__table-orange">¥3,500</th>
            <th class="sec_bus__table-orange">¥4,700</th>
          </tr>
          <?php if(is_page('ikejiri')): ?>
            <tr>
              <td class="sec_bus__table-blue">幼稚園・保育園</td>
              <td>
                ・かもめ保育園<br>
                ・菅刈保育園<br>
                ・なかよし保育室<br>
                ・東山保育園<br>
                ・双葉の園保育園<br>
                ・池尻保育園
              </td>
              <td></td>
              <td>
                ・上目黒保育園<br>
                ・代沢ききょう保育園<br>
                ・平安幼稚園<br>
                ・祐天寺保育園<br>
              </td>
            </tr>
            <tr>
              <td class="sec_bus__table-blue">小学校</td>
              <td>
                ・池尻小学校<br>
                ・菅刈小学校<br>
                ・東山小学校<br>
                ・三宿小学校
              </td>
              <td></td>
              <td class="sec_bus__table-last_td">
                ・池の上小学校<br>
                ・上目黒小学校<br>
                ・烏森小学校<br>
                ・多聞小学校<br>
                ・駒場児童館
              </td>
            </tr>
          <?php elseif(is_page('gakugei')): ?>
            <tr>
              <td class="sec_bus__table-blue">幼稚園・保育園</td>
              <td>
                ・下馬保育園<br>
                ・鷹番保育園<br>
                ・中央町保育園<br>
                ・碑文谷教会付属幼稚園
              </td>
              <td>
                ・中町保育園<br>
                ・祐天寺付属幼稚園
              </td>
              <td>
                ・いづみ幼稚園<br>
                ・第二ひもんや保育園<br>
                ・ひもんや保育園
              </td>
            </tr>
            <tr>
              <td class="sec_bus__table-blue">小学校</td>
              <td>
                ・五本木小学校<br>
                ・鷹番小学校
              </td>
              <td>
                ・月光原小学校<br>
                ・中丸小学校<br>
                ・東根小学校
              </td>
              <td class="sec_bus__table-last_td">
                ・油面小学校<br>
                ・碑小学校<br>
                ・大岡山小学校<br>
                ・月光原小学校<br>
                ・駒繋小学校<br>
                ・中里小学校<br>
                ・中丸小学校<br>
                ・東根小学校<br>
                ・不動小学校<br>
                ・向原小学校<br>
                ・目黒星美学園小学校<br>
                ※平町児童館ランドセル<br>
                来校の場合のみ
              </td>
            </tr>
          <?php elseif(is_page('sakurashinmachi')): ?>
            <tr>
              <td class="sec_bus__table-blue">幼稚園・保育園</td>
              <td>
                ・さくらしんまち保育園<br>
                ・スマイルキッズ桜新町保育園<br>
                ・わらべうた 桜新町保育園<br>
                ・保育園夢未来 桜新町園<br>
                ・ポピンズナーサリースクール桜新町<br>
                ・ベネッセ桜新町保育園
              </td>
              <td></td>
              <td>
                ・弦巻保育園<br>
                ・東弦巻保育園<br>
                ・新町保育園<br>
                ・世田谷いちい保育園 北ウイング<br>
                ・こどものその幼稚園
              </td>
            </tr>
            <tr>
              <td class="sec_bus__table-blue">小学校</td>
              <td>
                ・深沢小学校<br>
                ・松丘小学校<br>
                ・桜町小学校
              </td>
              <td>
                ・駒沢小学校
              </td>
              <td class="sec_bus__table-last_td">
                ・用賀小学校<br>
                ・瀬田小学校<br>
                ・弦巻小学校<br>
                ・深沢小学校
              </td>
            </tr>
          <?php endif; ?>
        </table>
        <p class="sec_bus__table-note">※上記以外の送迎先も対応しておりますので、都度お問い合わせください。</p>
      </div>
    </div>
  </section>

  <!-- sec_access -->
  <section class="sec_access">
    <div class="sec_access__inner section__inner section__inner-s">
      <div class="sec_access__contents fadeLeftRight">
        <div class="sec_access__title section__title">
          <h2 class="sec_access__title-main section__title-main"><span>アクセス</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/school/icon_sec_access.svg" alt=""></h2>
          <p class="sec_access__title-sub section__title-sub">Access</p>
        </div>
        <?php if(is_page('ikejiri')): ?>
          <dl class="sec_access__list">
            <div class="sec_access__item">
              <dt class="sec_access__item-title">校舎名</dt>
              <dd class="sec_access__item-text">Wings Global Home 池尻大橋校</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">営業時間</dt>
              <dd class="sec_access__item-text">8:00〜20:00</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">TEL</dt>
              <dd class="sec_access__item-text">03-6555-4371</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">E-mail</dt>
              <dd class="sec_access__item-text">wkf.ikejiriohashi@worldwidewings.co.jp</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">住所</dt>
              <dd class="sec_access__item-text">〒154-0001 東京都世田谷区池尻２−３１−５<br class="sp_only">プライマルイプセ池尻大橋２階</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">最寄り駅</dt>
              <dd class="sec_access__item-text">東急田園都市線　池尻大橋駅</dd>
            </div>
          </dl>
        <?php elseif(is_page('gakugei')): ?>
          <dl class="sec_access__list">
            <div class="sec_access__item">
              <dt class="sec_access__item-title">校舎名</dt>
              <dd class="sec_access__item-text">Wings Global Home 学芸大学駅前校</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">営業時間</dt>
              <dd class="sec_access__item-text">8:00〜20:00</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">TEL</dt>
              <dd class="sec_access__item-text">03-6555-4372</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">E-mail</dt>
              <dd class="sec_access__item-text">wkf.gakugeidaigaku@worldwidewings.co.jp</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">住所</dt>
              <dd class="sec_access__item-text">〒152-0001 東京都目黒区中央町2-38-5<br class="sp_only"> 大野ビル1F</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">最寄り駅</dt>
              <dd class="sec_access__item-text">東急東横線　学芸大学駅</dd>
            </div>
          </dl>
        <?php elseif(is_page('sakurashinmachi')): ?>
          <dl class="sec_access__list">
            <div class="sec_access__item">
              <dt class="sec_access__item-title">校舎名</dt>
              <dd class="sec_access__item-text">Wings Global Home 桜新町校</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">営業時間</dt>
              <dd class="sec_access__item-text">8:00〜20:00</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">TEL</dt>
              <dd class="sec_access__item-text">03-6555-4373</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">E-mail</dt>
              <dd class="sec_access__item-text">sak@worldwidewings.co.jp</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">住所</dt>
              <dd class="sec_access__item-text">東京都 東京都世田谷区桜新町1-14-17 １階</dd>
            </div>
            <div class="sec_access__item">
              <dt class="sec_access__item-title">最寄り駅</dt>
              <dd class="sec_access__item-text">田園都市線　桜新町駅</dd>
            </div>
          </dl>
        <?php endif; ?>
      </div>
      <?php if(is_page('ikejiri')): ?>
        <div class="sec_access__map pc_tb fadeRightLeft">
          <?php echo do_shortcode('[google_map_easy id="3"]') ?>
        </div>
        <div class="sec_access__map sp_only fadeRightLeft">
          <?php echo do_shortcode('[google_map_easy id="4"]') ?>
        </div>
      <?php elseif(is_page('gakugei')): ?>
        <div class="sec_access__map pc_tb fadeRightLeft">
          <?php echo do_shortcode('[google_map_easy id="5"]') ?>
        </div>
        <div class="sec_access__map sp_only fadeRightLeft">
          <?php echo do_shortcode('[google_map_easy id="6"]') ?>
        </div>
      <?php elseif(is_page('sakurashinmachi')): ?>
        <div class="sec_access__map pc_tb fadeRightLeft">
          <?php echo do_shortcode('[google_map_easy id="7"]') ?>
        </div>
        <div class="sec_access__map sp_only fadeRightLeft">
          <?php echo do_shortcode('[google_map_easy id="8"]') ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>