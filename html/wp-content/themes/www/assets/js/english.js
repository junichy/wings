/* Voice アコーディオン
====================================== */
$('.s-voice__item-upper').click(function(){
  $(this).next('.s-voice__item-box').slideToggle();
  $('.s-voice__item-upper').not($(this)).siblings('.s-voice__item-box').slideUp();
  $(this).toggleClass('is-open');
  // $(this).prev('.slide-title').toggleClass('is-open');
  $('.s-voice__item-upper').not($(this)).removeClass('is-open');
});
$('.s-voice__item-btn').click(function(){
  $(this).parents('.s-voice__item-box').slideUp();
  $('.s-voice__item-upper').removeClass('is-open');

});