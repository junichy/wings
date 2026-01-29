/*---------------------------------------
 ハンバーガーメニュー 
----------------------------------------*/
// $(function(){
$(".header__nav-btn").click(function () {
  if ($(".header").hasClass("drawerMenu-open")) {
    $(".header").removeClass("drawerMenu-open");
  } else {
    $(".header").addClass("drawerMenu-open");
  }
});
// });

/*---------------------------------------
 ドロップダウンメニュー（ホバー時）
----------------------------------------*/
$(".header__nav-dropdown").hover(function () {
  // if($('.header').hasClass('nav-open')){
  //   $('.header').removeClass('nav-open');
  // } else {
  //   $('.header').addClass('nav-open');
  // }
  if ($(this).hasClass("is-open")) {
    $(this).removeClass("is-open");
  } else {
    $(this).addClass("is-open");
  }
  if ($(this).parents(".header__inner").hasClass("is-dropdown-open")) {
    $(this).parents(".header__inner").removeClass("is-dropdown-open");
  } else {
    $(this).parents(".header__inner").addClass("is-dropdown-open");
  }
});

/* fvタイトル固定
=======================================*/
// $(function () {
// var $fvTitle = $(".fv__title");
// var windowHeight = $(window).height(); // 画面の高さ取得
// $(window).on("load scroll", function () {
//   var value = $(this).scrollTop();
//   if (value > windowHeight * 0.2) {
//     $fvTitle.addClass("is-hide");
//   } else {
//     $fvTitle.removeClass("is-hide");
//   }
// });
// });

/*---------------------------------------
 アコーディオン
----------------------------------------*/
// $(function(){
// $('.btn__accordion').click(function(){
//   $(this).next('.slide-box').slideToggle();
//   $(this).toggleClass('is-open');
//   $(this).prev('.slide-title').toggleClass('is-open');
// });
// });

/* FAQアコーディオン
====================================== */
$(".sec_faq__item").click(function () {
  $(this).children(".sec_faq__item-answer").slideToggle();
  $(this).toggleClass("is-open");
  // $(this).prev('.slide-title').toggleClass('is-open');
});

/* Managerアコーディオン
====================================== */
$(".manager__item-lower").click(function () {
  $(this).children(".manager__item-lower-text").slideToggle();
  $(this).toggleClass("is-open");
  // $(this).prev('.slide-title').toggleClass('is-open');
});

/* スムーススクロール
==================================*/
$(function () {
  // #で始まるアンカーをクリックした場合に処理
  $('a[href^="#"]').click(function () {
    if ($(window).width() > 980) {
      var adjust = 130;
    } else if ($(window).width() > 768) {
      var adjust = 90;
    } else {
      var adjust = 45;
    }
    var speed = 1000; // スクロールの速度(ミリ秒)
    var href = $(this).attr("href"); // アンカーの値取得
    var target = $(href == "#" || href == "" ? "html" : href); // 移動先を取得
    var position = target.offset().top - adjust; // 移動先を調整
    $("body,html").animate({ scrollTop: position }, speed, "swing"); // スムーススクロール
    return false;
  });
});
// 別ページの場合
$(function () {
  var urlHash = location.hash;
  if (urlHash) {
    $("body,html").stop().scrollTop(0);
    setTimeout(function () {
      // ヘッダー固定の場合はヘッダーの高さを数値で入れる、固定でない場合は0
      if ($(window).width() > 980) {
        var headerHight = 130;
      } else if ($(window).width() > 768) {
        var headerHight = 90;
      } else {
        var headerHight = 45;
      }
      var target = $(urlHash);
      var position = target.offset().top - headerHight;
      $("body,html").stop().animate({ scrollTop: position }, 400);
    }, 100);
  }
});

/* フッターページトップ
=====================================*/
var $pagetop = $("#page-top");
// var height=$("#header").height();
var windowHeight = $(window).height(); // 画面の高さ取得
$(window).on("load scroll", function () {
  var value = $(this).scrollTop();
  if (value > windowHeight) {
    $pagetop.addClass("is-show");
    $pagetop.removeClass("is-hide");
  } else {
    $pagetop.removeClass("is-show");
    $pagetop.addClass("is-hide");
  }
});
$pagetop.click(function () {
  $("body, html").animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る,topを0に修正
  return false;
});

// フッター手前でストップ
if ($(window).width() > 768) {
  //PC,TBのみ
  $(window).on("scroll load", function () {
    scrollHeight = $(document).height();
    scrollPosition = $(window).height() + $(window).scrollTop();
    footHeight = $("footer").innerHeight();
    if (scrollHeight - scrollPosition + 80 <= footHeight) {
      // ページトップボタンがフッター手前に来たらpositionとfixedからabsoluteに変更
      $("#page-top")
        .css({
          position: "absolute",
          bottom: footHeight,
        })
        .addClass("is-footer");
    } else {
      $("#page-top")
        .css({
          position: "fixed",
          bottom: "80px",
        })
        .removeClass("is-footer");
    }
  });
}

///////////////////////////////////////////
//アニメーション
//////////////////////////////////////////
// フェードイン //
function fadeAnime() {
  $(".fadeUpTrigger").each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("fadeUp");
    } else {
      $(this).removeClass("fadeUp");
    }
  });

  $(".fadeDownTrigger").each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("fadeDown");
    } else {
      $(this).removeClass("fadeDown");
    }
  });
}

$(window).scroll(function () {
  fadeAnime();
});

$(window).on("load", function () {
  fadeAnime();
});
