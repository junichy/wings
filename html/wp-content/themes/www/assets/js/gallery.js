/* ギャラリー
====================================== */

//サムネイル
var sliderThumbnail = new Swiper(".slider-thumbnail02", {
  slidesPerView: 4,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});

//スライダー
var slider = new Swiper(".slider02", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: sliderThumbnail,
  },
});
var sliderThumbnail = new Swiper(".slider-thumbnail03", {
  slidesPerView: 4,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});

//スライダー
var slider = new Swiper(".slider03", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: sliderThumbnail,
  },
});
