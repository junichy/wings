/* FAQアコーディオン
====================================== */

$('.cat-item-top').click(function(){
  $(this).next('.cat-item-list').slideToggle();
  $(this).toggleClass('is-open');
  // $(this).prev('.slide-title').toggleClass('is-open');
});

jQuery(function(){
  jQuery(".page-numbers").each(function() {
      var obj = jQuery(this);
      var link = obj.attr("href");
      obj.attr("href",link+"#teacher")
  });
});