<header class="header" id="header">
  <div class="header__inner">
    <div class="header__logo">
      <a href="<?php echo esc_url( home_url() ); ?>/">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-header.svg" alt="Wings Global Home Afterschool & Kindergarten" class="pc_only" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-header_sp.svg" alt="Wings Global Home Afterschool & Kindergarten" class="sp_only" />
      </a>
    </div>
    <nav class="header__nav">
      <!-- PCヘッダーメニュー -->
      <ul class="header__nav-list pc_only">
        <li class="header__nav-item header__nav-dropdown <?php menu_current('about'); ?>">
          <a href="<?php echo esc_url( home_url() ); ?>/about/">私たちについて</a>
          <ul class="header__nav-dropdown__list">
            <li class="header__nav-dropdown__item">
              <a href="<?php echo esc_url( home_url() ); ?>/skills/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_dropdown_01.png" alt="">
                <span>伸ばす2つの力</span>
              </a>
            </li>
            <li class="header__nav-dropdown__item">
              <a href="<?php echo esc_url( home_url() ); ?>/method/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_dropdown_02.png" alt="">
                <span>カリキュラムとメソッド</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="header__nav-item header__nav-dropdown <?php menu_current('school'); ?>">
          <a href="#">校舎・コース紹介</a>
          <ul class="header__nav-dropdown__list header__nav-dropdown__list--school">
            <li class="header__nav-dropdown__item header__nav-dropdown__item--school">
              <ul class="header__nav-dropdown__item-list">
                <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school">
                  <a href="<?php echo esc_url( home_url() ); ?>/ikejiri/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school_dropdown_03.png" alt="">
                    <span>池尻大橋校</span>
                  </a>
                </li>
                <!-- <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school"> -->
                <li class="header__nav-dropdown__item-btn btn btn__white">
                  <a href="<?php echo esc_url( home_url() ); ?>/ikejiri#course">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_dropdown_03_01.png" alt=""> -->
                    <span>池尻大橋校のコース紹介</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="header__nav-dropdown__item header__nav-dropdown__item--school">
              <ul class="header__nav-dropdown__item-list">
                  <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school">
                    <a href="<?php echo esc_url( home_url() ); ?>/gakugei/">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_dropdown_04.png" alt="">
                      <span>学芸大学駅前校</span>
                    </a>
                  </li>
                  <!-- <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school"> -->
                  <li class="header__nav-dropdown__item-btn btn btn__white">
                    <a href="<?php echo esc_url( home_url() ); ?>/gakugei#course">
                      <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_dropdown_04_01.png" alt=""> -->
                      <span>学芸大学駅前校のコース紹介</span>
                    </a>
                  </li>
              </ul>
            </li>
            <li class="header__nav-dropdown__item header__nav-dropdown__item--school">
              <ul class="header__nav-dropdown__item-list">
                  <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school">
                    <a href="<?php echo esc_url( home_url() ); ?>/sakurashinmachi/">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_dropdown_05.png" alt="">
                      <span>桜新町校</span>
                    </a>
                  </li>
                  <!-- <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school"> -->
                  <li class="header__nav-dropdown__item-btn btn btn__white">
                    <a href="<?php echo esc_url( home_url() ); ?>/sakurashinmachi#course">
                      <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_dropdown_04_01.png" alt=""> -->
                      <span>桜新町校のコース紹介</span>
                    </a>
                  </li>
              </ul>
            </li>
            
          </ul>
        </li>
        <li class="header__nav-item header__nav-dropdown <?php menu_current('gallery'); ?>">
          <a href="#">ギャラリー</a>
          <ul class="header__nav-dropdown__list header__nav-dropdown__list--gallery">
            <li class="header__nav-dropdown__item header__nav-dropdown__item--gallery">
              <ul class="header__nav-dropdown__item-list">
                <li class="header__nav-dropdown__item header__nav-dropdown__item-item--gallery">
                  <a href="<?php echo esc_url( home_url() ); ?>/gallery#ikejiri">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school_dropdown_03.png" alt="">
                    <span>池尻大橋校</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="header__nav-dropdown__item header__nav-dropdown__item--gallery">
              <ul class="header__nav-dropdown__item-list">
                  <li class="header__nav-dropdown__item header__nav-dropdown__item-item--gallery">
                    <a href="<?php echo esc_url( home_url() ); ?>/gallery#gakugei">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_dropdown_04.png" alt="">
                      <span>学芸大学駅前校</span>
                    </a>
                  </li>
              </ul>
            </li>
            <li class="header__nav-dropdown__item header__nav-dropdown__item--gallery">
              <ul class="header__nav-dropdown__item-list">
                  <li class="header__nav-dropdown__item header__nav-dropdown__item-item--gallery">
                    <a href="<?php echo esc_url( home_url() ); ?>/gallery#sakurashinmachi">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_dropdown_05.png" alt="">
                      <span>桜新町校</span>
                    </a>
                  </li>
              </ul>
            </li>
            <li class="header__nav-dropdown__item header__nav-dropdown__item--gallery">
              <ul class="header__nav-dropdown__item-list">
                  <li class="header__nav-dropdown__item header__nav-dropdown__item-item--gallery">
                    <a href="<?php echo esc_url( home_url() ); ?>/gallery#other">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_dropdown_06.png" alt="">
                      <span>その他活動写真</span>
                    </a>
                  </li>
              </ul>
            </li>
            
          </ul>
        </li>
        <li class="header__nav-item <?php menu_current('teacher'); ?>"><a href="<?php echo esc_url( home_url() ); ?>/teacher/">講師紹介</a></li>
        <li class="header__nav-item <?php menu_current('news'); ?>"><a href="<?php echo esc_url( home_url() ); ?>/news/">お知らせ</a></li>
        <li class="header__nav-item <?php menu_current('blog'); ?>"><a href="<?php echo esc_url( home_url() ); ?>/blog/">ブログ</a></li>
        <li class="header__nav-item <?php menu_current('faq'); ?>"><a href="<?php echo esc_url( home_url() ); ?>/faq/">よくある質問</a></li>
        <li class="header__nav-item"><a href="https://my.ptsc.jp/wingskidsfamily/sp_login/" target="_blank">マイページ</a></li>
      </ul>

      <ul class="header__nav-sns pc_only">
        <li class="header__nav-sns-icon"><a href="https://www.instagram.com/wings_global_home/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_instagram.svg" alt=""></a></li>
        <li class="header__nav-sns-icon"><a href="https://www.facebook.com/wingskidsfamily/?locale=ja_JP" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_facebook.svg" alt=""></a></li>
        <li class="header__nav-sns-icon"><a href="https://www.youtube.com/channel/UC-v5Pchs4lpFHpaaf3dTM6g" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_youtube.svg" alt=""></a></li>
        <li class="header__nav-sns-icon"><a href="https://twitter.com/WingsGlobalHome" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_twitter.svg" alt=""></a></li>
      </ul>
      <div class="header__nav-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- SPヘッダーメニュー -->
      <div class="header__nav-sp_container">
        <div class="header__nav-sp_container-inner">
          <ul class="header__nav-list tb_sp">
            <li class="header__nav-item header__nav-dropdown <?php menu_current('about'); ?>">
              <a href="<?php echo esc_url( home_url() ); ?>/about/" class="header__nav-item-title">
                <span class="header__nav-item-title-en">About Us</span>
                <span class="header__nav-item-title-jp">私たちについて</span>
              </a>
              <ul class="header__nav-dropdown__list">
                <li class="header__nav-dropdown__item">
                  <a href="<?php echo esc_url( home_url() ); ?>/skills/">
                    <span>伸ばす2つの力</span>
                  </a>
                </li>
                <li class="header__nav-dropdown__item">
                  <a href="<?php echo esc_url( home_url() ); ?>/method/">
                    <span>カリキュラムとメソッド</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="header__nav-item header__nav-dropdown <?php menu_current('school'); ?>">
              <a href="#" class="header__nav-item-title">
                <span class="header__nav-item-title-en">School</span>
                <span class="header__nav-item-title-jp">校舎・コース紹介</span>
              </a>
              <ul class="header__nav-dropdown__list header__nav-dropdown__list--school">
                <li class="header__nav-dropdown__item header__nav-dropdown__item--school">
                  <ul class="header__nav-dropdown__item-list">
                    <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school">
                      <a href="<?php echo esc_url( home_url() ); ?>/ikejiri/">
                        <span>池尻大橋校</span>
                      </a>
                    </li>
                    <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school">
                      <a href="<?php echo esc_url( home_url() ); ?>/ikejiri#course">
                        <span>池尻大橋校コース紹介</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="header__nav-dropdown__item header__nav-dropdown__item--school">
                  <ul class="header__nav-dropdown__item-list">
                      <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school">
                        <a href="<?php echo esc_url( home_url() ); ?>/gakugei/">
                          <span>学芸大学駅前校</span>
                        </a>
                      </li>
                      <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school">
                        <a href="<?php echo esc_url( home_url() ); ?>/gakugei#course">
                          <span>学芸大学駅前校コース紹介</span>
                        </a>
                      </li>
                  </ul>
                </li>
                <li class="header__nav-dropdown__item header__nav-dropdown__item--school">
                  <ul class="header__nav-dropdown__item-list">
                      <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school">
                        <a href="<?php echo esc_url( home_url() ); ?>/sakurashinmachi/">
                          <span>桜新町校</span>
                        </a>
                      </li>
                      <li class="header__nav-dropdown__item header__nav-dropdown__item-item--school">
                        <a href="<?php echo esc_url( home_url() ); ?>/sakurashinmachi#course">
                          <span>桜新町校コース紹介</span>
                        </a>
                      </li>
                  </ul>
                </li>
          
              </ul>
            </li>
            <li class="header__nav-item header__nav-dropdown <?php menu_current('gallery'); ?>">
              <a href="#" class="header__nav-item-title">
                <span class="header__nav-item-title-en">gallery</span>
                <span class="header__nav-item-title-jp">ギャラリー</span>
              </a>
              <ul class="header__nav-dropdown__list header__nav-dropdown__list--gallery">
                <li class="header__nav-dropdown__item header__nav-dropdown__item--gallery">
                  <ul class="header__nav-dropdown__item-list">
                    <li class="header__nav-dropdown__item header__nav-dropdown__item-item--gallery">
                      <a href="<?php echo esc_url( home_url() ); ?>/gallery#ikejiri">
                        <span>池尻大橋校</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="header__nav-dropdown__item header__nav-dropdown__item--gallery">
                  <ul class="header__nav-dropdown__item-list">
                      <li class="header__nav-dropdown__item header__nav-dropdown__item-item--gallery">
                        <a href="<?php echo esc_url( home_url() ); ?>/gallery#gakugei">
                          <span>学芸大学駅前校</span>
                        </a>
                      </li>
                  </ul>
                </li>
                <li class="header__nav-dropdown__item header__nav-dropdown__item--gallery">
                  <ul class="header__nav-dropdown__item-list">
                      <li class="header__nav-dropdown__item header__nav-dropdown__item-item--gallery">
                        <a href="<?php echo esc_url( home_url() ); ?>/gallery#sakurashinmachi">
                          <span>桜新町校</span>
                        </a>
                      </li>
                  </ul>
                </li>
          
              </ul>
            </li>
            <li class="header__nav-item <?php menu_current('teacher'); ?>">
              <a href="<?php echo esc_url( home_url() ); ?>/teacher/" class="header__nav-item-title">
                <span class="header__nav-item-title-en">Teacher</span>
                <span class="header__nav-item-title-jp">講師紹介</span>
              </a>
            </li>
            <li class="header__nav-item <?php menu_current('news'); ?>" class="header__nav-item-title">
              <a href="<?php echo esc_url( home_url() ); ?>/news/">
                <span class="header__nav-item-title-en">News</span>
                <span class="header__nav-item-title-jp">お知らせ</span>
              </a>
            </li>
            <li class="header__nav-item <?php menu_current('blog'); ?>" class="header__nav-item-title">
              <a href="<?php echo esc_url( home_url() ); ?>/blog/">
                <span class="header__nav-item-title-en">Blog</span>
                <span class="header__nav-item-title-jp">ブログ</span>
              </a>
            </li>
            <li class="header__nav-item <?php menu_current('faq'); ?>" class="header__nav-item-title">
              <a href="<?php echo esc_url( home_url() ); ?>/faq/">
                <span class="header__nav-item-title-en">FAQ</span>
                <span class="header__nav-item-title-jp">よくある質問</span>
              </a>
            </li>
            <li class="header__nav-item" class="header__nav-item-title">
              <a href="https://my.ptsc.jp/wingskidsfamily/sp_login/" target="_blank">
                <span class="header__nav-item-title-en">My Page</span>
                <span class="header__nav-item-title-jp">マイページ</span>
              </a>
            </li>
          </ul>
          
          <div class="header__tel tb_sp">
            <p class="header__tel-upper">お電話でのお問い合わせはこちら</p>
            <p class="header__tel-middle"><a href="tel:03-6555-4370"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_tel.svg" alt=""><span>03-6555-4370</span></a></p>
            <p class="header__tel-lower">平日9:30〜18:30</p>
          </div>
          <div class="header__nav-application tb_sp">
            <p class="header__nav-application-title">見学の申し込み</p>
            <p class="header__nav-application-text">少しでも興味がありまずは園内の雰囲気や先生の話を聞いてみたいという方は、まずは見学のお申し込みをお願いいたします。</p>
            <p class="header__nav-application-btn btn btn__white"><a href="/application/">見学の申し込みはこちら</a></p>
          </div>
          <ul class="header__nav-sns tb_sp">
            <li class="header__nav-sns-icon"><a href="https://www.instagram.com/wings_global_home/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_instagram.svg" alt=""></a></li>
            <li class="header__nav-sns-icon"><a href="https://www.facebook.com/wingskidsfamily/?locale=ja_JP" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_facebook.svg" alt=""></a></li>
            <li class="header__nav-sns-icon"><a href="https://www.youtube.com/channel/UC-v5Pchs4lpFHpaaf3dTM6g" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_youtube.svg" alt=""></a></li>
            <li class="header__nav-sns-icon"><a href="https://twitter.com/WingsGlobalHome" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_twitter.svg" alt=""></a></li>
          </ul>
          <p class="header__copy">©︎Wings Global Home All Rights Reserved.</p>
          
        </div>
      </div>
    </nav>
    <div class="header__nav-application pc_only">
      <a href="/application/">見学申し込み</a>
    </div>
    <div class="header__mask"></div>
  </div>
</header>