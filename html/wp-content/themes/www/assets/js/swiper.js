///////////////////////////////////////
// スライダー //
///////////////////////////////////////

// TOP FV //

$(window).on("load", function () {
  const swiper = new Swiper(".fv-swiper", {
    loop: true,
    speed: 20000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false, //ユーザー操作後に自動再生を再開する
    },
    autoHeight: true,
    centeredSlides: true,
    spaceBetween: 0,
    slidesPerView: 1.254,
    breakpoints: {
      768: {
        spaceBetween: 50,
        slidesPerView: 1.175,
      },
    },
    allowTouchMove: false, // スワイプでスライドを有効化
  });
});
$(window).on("load", function () {
  const swiper = new Swiper(".main-swiper", {
    loop: true,
    speed: 6000,
    autoplay: {
      delay: 1,
      disableOnInteraction: false,
    },
    spaceBetween: 10,
    slidesPerView: 2.8,
    breakpoints: {
      768: {
        spaceBetween: 10,
        slidesPerView: 3.8,
      },
    },
  });
});

// TOP Instagram //
// $(function(){
$(window).on("load", function () {
  $("#insta-gallery-feed-1").addClass("instagram-swiper swiper");
  $(".insta-gallery-list").addClass("swiper-wrapper");
  $(".insta-gallery-item").addClass("swiper-slide");
});
$(window).on("load", function () {
  const swiper = new Swiper(".instagram-swiper", {
    loop: true,
    speed: 5000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false, //ユーザー操作後に自動再生を再開する
    },
    // autoHeight: true,
    // centeredSlides : true,
    slidesPerView: 2,
    allowTouchMove: true, // スワイプでスライドを有効化
    breakpoints: {
      768: {
        spaceBetween: 25,
        slidesPerView: 3,
      },
      980: {
        spaceBetween: 25,
        slidesPerView: 5,
      },
    },
  });
});

// Blog archive SP //
$(window).on("load", function () {
  const swiper = new Swiper(".blog-swiper", {
    loop: true,
    // speed: 10000,
    // autoplay: {
    //   delay: 0,
    //   disableOnInteraction: false //ユーザー操作後に自動再生を再開する
    // },
    // autoHeight: true,
    centeredSlides: true,
    spaceBetween: 20,
    slidesPerView: 2.2,
    // breakpoints: {
    //   768: {
    //     spaceBetween: 50,
    //     slidesPerView: 1.175,
    //   },
    // },
    allowTouchMove: true, // スワイプでスライドを有効化
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});

// School ギャラリー
//サムネイル
var sliderThumbnail = new Swiper(".slider-thumbnail01", {
  slidesPerView: 5,
  spaceBetween: 5,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  breakpoints: {
    600: {
      spaceBetween: 10,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next01",
    prevEl: ".swiper-button-prev01",
  },
});
//スライダー
var slider = new Swiper(".slider01", {
  thumbs: {
    swiper: sliderThumbnail,
  },
});

//サムネイル
var sliderThumbnail02 = new Swiper(".slider-thumbnail02", {
  slidesPerView: 5,
  spaceBetween: 5,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  breakpoints: {
    600: {
      spaceBetween: 10,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next02",
    prevEl: ".swiper-button-prev02",
  },
});
//スライダー
var slider02 = new Swiper(".slider02", {
  thumbs: {
    swiper: sliderThumbnail02,
  },
});

//サムネイル
var sliderThumbnail03 = new Swiper(".slider-thumbnail03", {
  slidesPerView: 5,
  spaceBetween: 5,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  breakpoints: {
    600: {
      spaceBetween: 10,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next03",
    prevEl: ".swiper-button-prev03",
  },
});

//スライダー
var slider03 = new Swiper(".slider03", {
  thumbs: {
    swiper: sliderThumbnail03,
  },
});
