<?php get_header();
/*
Template Name: ギャラリー
*/
?>
<main class="page">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>


  
  <!-- sec_gallery -->
  <div class="btnFlex">
    <div class="btn__white">
      <a href="#ikejiri">池尻大橋校</a>
    </div>
    <div class="btn__white">
      <a href="#gakugei">学芸大学駅前校</a>
    </div>
    <div class="btn__white">
      <a href="#sakurashinmachi">桜新町校</a>
    </div>
    <div class="btn__white">
      <a href="#other">その他活動写真</a>
    </div>
  </div>
  <section class="sec_gallery" id="ikejiri">
    <div class="sec_gallery__inner section__inner section__inner-s">
      <div class="sec_gallery__title section__title section__title--center fadeIn">
        <h2 class="sec_gallery__title-main section__title-main"><span>池尻大橋校ギャラリー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/icon_sec_gallery.svg" alt=""></h2>
        <p class="sec_gallery__title-sub section__title-sub">Gallery</p>
      </div>
      <p class="sec_gallery__catch">Gallery</p>
      <div class="sec_gallery__container">
        <!-- スライダー-->
        <div class="sec_gallery__upper swiper-container slider01 fadeIn">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_01.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_02.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_03.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_03.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_04.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_04.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_05.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_05.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_06.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_06.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_07.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_07.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_08.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_08.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_09.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_09.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_10.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_10.jpg" alt="">
              </picture>
            </div>
          
          </div>
          <!-- <div class="swiper-button-next02"></div>
          <div class="swiper-button-prev02"></div> -->
        </div>
        <!-- サムネイル -->
        <div class="sec_gallery__lower swiper-container slider-thumbnail01">
          <div class="swiper-wrapper">
          <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_01.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_02.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_03.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_03.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_04.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_04.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_05.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_05.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_06.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_06.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_07.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_07.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_08.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_08.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_09.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_09.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_10.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/ikejiri/<?php echo $image_path ?>/gallery_10.jpg" alt="">
              </picture>
            </div>
          </div>
          <div class="swiper-button-next01"></div>
          <div class="swiper-button-prev01"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="sec_gallery" id="gakugei">
    <div class="sec_gallery__inner section__inner section__inner-s">
      <div class="sec_gallery__title section__title section__title--center fadeIn">
        <h2 class="sec_gallery__title-main section__title-main"><span>学芸大学駅前校ギャラリー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/icon_sec_gallery.svg" alt=""></h2>
        <p class="sec_gallery__title-sub section__title-sub">Gallery</p>
      </div>
      <div class="sec_gallery__container">
        <!-- スライダー-->
        <div class="sec_gallery__upper swiper-container slider02 fadeIn">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_01.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_02.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_03.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_03.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_04.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_04.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_05.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_05.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_06.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_06.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_07.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_07.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_08.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_08.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_09.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_09.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_10.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_10.jpg" alt="">
              </picture>
            </div>
          </div>
      
        </div>
        <!-- サムネイル -->
        <div class="sec_gallery__lower swiper-container slider-thumbnail02">
          <div class="swiper-wrapper">
          <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_01.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_02.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_03.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_03.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_04.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_04.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_05.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_05.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_06.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_06.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_07.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_07.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_08.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_08.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_09.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_09.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_10.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gakugei/<?php echo $image_path ?>/gallery_10.jpg" alt="">
              </picture>
            </div>
          </div>
          <div class="swiper-button-next02"></div>
          <div class="swiper-button-prev02"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="sec_gallery" id="sakurashinmachi">
    <div class="sec_gallery__inner section__inner section__inner-s">
      <div class="sec_gallery__title section__title section__title--center fadeIn">
        <h2 class="sec_gallery__title-main section__title-main"><span>桜新町校ギャラリー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/icon_sec_gallery.svg" alt=""></h2>
        <p class="sec_gallery__title-sub section__title-sub">Gallery</p>
      </div>
      <div class="sec_gallery__container">
        <!-- スライダー-->
        <div class="sec_gallery__upper swiper-container slider03 fadeIn">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_01.jpg" alt="">
              </picture>
            </div>
             <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_02.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_03.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_03.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_04.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_04.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_05.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_05.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_06.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_06.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_07.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_07.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_08.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_08.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_09.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_09.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_10.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_10.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_11.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_11.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_12.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_12.jpg" alt="">
              </picture>
            </div>
          </div>
      
        </div>
        <!-- サムネイル -->
        <div class="sec_gallery__lower swiper-container slider-thumbnail03">
          <div class="swiper-wrapper">
          <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_01.jpg" alt="">
              </picture>
            </div>
             <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_02.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_03.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_03.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_04.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_04.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_05.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_05.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_06.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_06.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_07.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_07.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_08.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_08.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_09.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_09.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_10.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_10.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_11.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_11.jpg" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_12.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/sakurashinmachi/<?php echo $image_path ?>/gallery_12.jpg" alt="">
              </picture>
            </div>
          </div>
          <div class="swiper-button-next03"></div>
          <div class="swiper-button-prev03"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="sec_gallery" id="other">
    <div class="sec_gallery__inner section__inner section__inner-s">
      <div class="sec_gallery__title section__title section__title--center fadeIn">
        <h2 class="sec_gallery__title-main section__title-main"><span>その他活動写真</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/icon_sec_gallery.svg" alt=""></h2>
        <p class="sec_gallery__title-sub section__title-sub">Gallery</p>
      </div>
      <p class="sec_gallery__catch">Gallery</p>
      <div class="sec_gallery__container">
        <!-- スライダー-->
		 <?php /*
         <div class="otherFlex">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_01.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_02.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_03.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_04.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_05.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_06.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_07.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_08.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_09.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_10.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_11.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_12.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_13.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_14.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_15.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_16.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_17.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_18.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_19.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_20.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_21.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_22.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_23.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_24.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_25.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_26.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_27.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_28.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_29.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_30.png" alt="">
         </div>
		 */?>
        <div class="sec_gallery__upper swiper-container slider04 fadeIn">
          <div class="swiper-wrapper">
          <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_01.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_02.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_03.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_03.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_04.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_04.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_05.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_05.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_06.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_06.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_07.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_07.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_08.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_08.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_09.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_09.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_10.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_10.png" alt="">
              </picture>
            </div>
          <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_11.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_11.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_12.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_12.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_13.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_13.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_14.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_14.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_15.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_15.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_16.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_16.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_17.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_17.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_18.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_18.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_19.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_19.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_20.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_20.png" alt="">
              </picture>
            </div>
          <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_21.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_21.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_22.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_22.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_23.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_23.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_24.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_24.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_25.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_25.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_26.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_26.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_27.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_27.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_28.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_28.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_29.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_29.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_30.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_30.png" alt="">
              </picture>
            </div>
          </div>
      
        </div>
        <!-- サムネイル -->
        <div class="sec_gallery__lower swiper-container slider-thumbnail04">
          <div class="swiper-wrapper">
          <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_01.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_02.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_03.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_03.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_04.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_04.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_05.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_05.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_06.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_06.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_07.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_07.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_08.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_08.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_09.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_09.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_10.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_10.png" alt="">
              </picture>
            </div>
          <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_11.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_11.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_12.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_12.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_13.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_13.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_14.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_14.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_15.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_15.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_16.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_16.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_17.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_17.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_18.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_18.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_19.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_19.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_20.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_20.png" alt="">
              </picture>
            </div>
          <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_21.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_21.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_22.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_22.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_23.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_23.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_24.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_24.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_25.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_25.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_26.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_26.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_27.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_27.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_28.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_28.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_29.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_29.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_30.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/other/<?php echo $image_path ?>/gallery_30.png" alt="">
              </picture>
            </div>
          </div>
          <div class="swiper-button-next04"></div>
          <div class="swiper-button-prev04"></div>
        </div>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>