$(window).on("scroll load", function () {
  let scrollTop = $(window).scrollTop();
  let winH = $(window).height();
  let section_bar_pos = $(".wgh__text").offset().top;
  // 公式
  // let section_bar_now = (1 - (section_bar_pos - scrollTop) / winH) * 2 * 100;
  let section_bar_now = (1 - (section_bar_pos - scrollTop) / winH) * 100 - 50;

  $(".wgh__text").css("margin-left", section_bar_now + "%");
});

// sec_school：ボタンホバーでcontents(白背景)に「is-hover」クラスを付与
$(".sec_school__item-btn a").hover(function () {
  if ($(".sec_school__item-contents").hasClass("is-hover")) {
    // $('.sec_school__item-contents').removeClass('is-hover');
    $(this).parents(".sec_school__item-contents").removeClass("is-hover");
  } else {
    $(this).parents(".sec_school__item-contents").addClass("is-hover");
    // $('.sec_school__item-contents').addClass('is-hover');
  }
});
// sec_gallery：ボタンホバーでcontents(白背景)に「is-hover」クラスを付与
$(".sec_gallery__item-btn a").hover(function () {
  if ($(".sec_gallery__item-contents").hasClass("is-hover")) {
    // $('.sec_gallery__item-contents').removeClass('is-hover');
    $(this).parents(".sec_gallery__item-contents").removeClass("is-hover");
  } else {
    $(this).parents(".sec_gallery__item-contents").addClass("is-hover");
    // $('.sec_gallery__item-contents').addClass('is-hover');
  }
});

// modal
var scrollPos;
$(".info").modaal({
  overlay_close: true,
  before_open: function () {
    scrollPos = $(window).scrollTop();
    $("body").css({
      position: "fixed",
      top: -scrollPos,
      width: "100%",
    });
  },
  after_close: function () {
    $("body").css({
      position: "",
      top: "",
      width: "",
    });
    $(window).scrollTop(scrollPos);
  },
});
