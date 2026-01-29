/* Voice アコーディオン
====================================== */
$('.sec_flow__item').click(function(){
  $(this).children('.sec_flow__item-contents').slideToggle();
  $(this).toggleClass('is-open');
});
// $('.s-voice__item-btn').click(function(){
//   $(this).parents('.s-voice__item-box').slideUp();
//   $('.s-voice__item-upper').removeClass('is-open');

// });