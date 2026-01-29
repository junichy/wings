
/* アニメーション
===========================================*/

// フェードイン全体共通 //
// $(function () {
  function fadeInAnime() {
    // $(window).on('load scroll',function () { 
    // $(window).scroll(function () {
    const wHeight = $(window).height();
    const scrollAmount = $(window).scrollTop();
    let buffer;
    if ($(window).width() > 768) {
      buffer = 200;
    } else {
      buffer = 100;
    }
    // 下から上 //
    $('.fadeIn').each(function () {
      const targetPosition = $(this).offset().top; // 下からの距離を変数に置き換え
      if (scrollAmount > targetPosition - wHeight + buffer) {

        if ($(window).width() > 768) {
          $(this).addClass("is-fadeIn");
        } else {
          $(this).addClass("is-fadeInSP");
        }

        console.log(buffer);
      }
    });
    // 下から上(PC-TB) //
    $('.fadeIn_PC_TB').each(function () {
      const targetPosition = $(this).offset().top; // 下からの距離を変数に置き換え
      if ($(window).width() > 768) {

        if (scrollAmount > targetPosition - wHeight + buffer) {
          $(this).addClass("is-fadeIn");
          console.log(buffer);
        }
      // else {
      //   $(this).removeClass("is-fadeIn");
      // }
      }
    });
    // 上から下 //
    $('.fadeUpDown').each(function () {
      const targetPosition = $(this).offset().top; // 下からの距離を変数に置き換え
      if (scrollAmount > targetPosition - wHeight + buffer) {
        
        if ($(window).width() > 768) {
          $(this).addClass("is-fadeUpDown");
        } else {
          $(this).addClass("is-fadeUpDownSP");
        }
        
        console.log(buffer);
      }
    });
    // 左から右 //
    $('.fadeLeftRight').each(function () {
      const targetPosition = $(this).offset().top; // 下からの距離を変数に置き換え
      if (scrollAmount > targetPosition - wHeight + buffer) {

        if ($(window).width() > 768) {
          $(this).addClass("is-fadeLeftRight");
        } else {
          $(this).addClass("is-fadeLeftRightSP");
        }
        console.log(buffer);
      }
    });
    // 右から左 //
    $('.fadeRightLeft').each(function () {
      const targetPosition = $(this).offset().top; // 下からの距離を変数に置き換え
      if (scrollAmount > targetPosition - wHeight + buffer) {
        
        if ($(window).width() > 768) {
          $(this).addClass("is-fadeRightLeft");
        } else {
          $(this).addClass("is-fadeRightLeftSP");
        }
        
        console.log(buffer);
      }
    });
    // オパシティーのみ //
    $('.fadeInOpacity').each(function () {
      const targetPosition = $(this).offset().top; // 下からの距離を変数に置き換え
      if (scrollAmount > targetPosition - wHeight + buffer) {
        $(this).addClass("is-fadeInOpacity");
        console.log(buffer);
      }
    });
  }
  // $(window).scroll(function () {
  $(window).on('load scroll',function () { 
    fadeInAnime();
  });
// });

// フェードイン順番 //
// $(function() {
  function delayScrollAnime() {
    var time = 0.3; // 遅延時間を増やす秒数の値
    var value = 0;
    let buffer;
    if ($(window).width() > 768) {
      buffer = 200;
    } else {
      buffer = 100;
    }
    $('.delayScroll').each(function () {
      var parent = this; // 親要素を取得
      var targetPosition = $(this).offset().top; // 要素の位置まで来たら
      var scrollAmount = $(window).scrollTop(); // スクロール値を取得
      var wHeight = $(window).height(); // 画面の高さを取得
      var childs = $(this).children();	// 子要素を取得
      
      if (scrollAmount > targetPosition - wHeight + buffer && !$(parent).hasClass("play")) { // 指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
        $(childs).each(function () { //　子要素にアニメーションを付与
          

          if ($(window).width() > 768) { //PC
          
            if (!$(this).hasClass("fadeUp")) { // アニメーションのクラス名が指定されているかどうかをチェック
              
              $(parent).addClass("play");	// 親要素にクラス名playを追加
              $(this).css("animation-delay", value + "s"); // アニメーション遅延のCSS animation-delayを追加
              $(this).addClass("fadeUp"); // アニメーションのクラス名を追加
              value = value + time; // delay時間を増加させる
              
              var index = $(childs).index(this);
              if((childs.length-1) == index){
                $(parent).removeClass("play"); // 全ての処理を終わったらplayを外す
              }
            }

          } else { //SP

            if (!$(this).hasClass("fadeUpSP")) { // アニメーションのクラス名が指定されているかどうかをチェック
              
              $(parent).addClass("play");	// 親要素にクラス名playを追加
              $(this).css("animation-delay", value + "s"); // アニメーション遅延のCSS animation-delayを追加
              $(this).addClass("fadeUpSP"); // アニメーションのクラス名を追加
              value = value + time; // delay時間を増加させる
              
              var index = $(childs).index(this);
              if((childs.length-1) == index){
                $(parent).removeClass("play"); // 全ての処理を終わったらplayを外す
              }
            }
          }
        })
      }
    })
  }
  $(window).on('load scroll',function () { 
  // $(window).scroll(function (){
    delayScrollAnime(); // アニメーション用の関数を呼ぶ
  });
// });

// リロードでもアニメーション再読み込み
window.addEventListener('pageshow', function (event) {
  if (event.persisted) {
    // bfcache発動時の処理
    window.location.reload();
  }
});

/* ヘッダー
===========================================*/
//ヘッダーのスライドアニメーションが終わったらanimatedクラスを付与
$('.header__inner').on('webkitAnimationEnd', function(){
  $('.header__nav-item').addClass('animated');
});
  

/* TOP
===========================================*/
// タイトルメインスライドイン //
// $(function() {
  function slideAnime(){
    $('.leftAnime').each(function(){ // 左に動くアニメーション
      var elemPos = $(this).offset().top-50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
        // 左から右へ表示するクラスを付与
        // テキスト要素を挟む親要素（左側）とテキスト要素を元位置でアニメーションをおこなう
        $(this).addClass("slideAnimeLeftRight"); //要素を左枠外にへ移動しCSSアニメーションで左から元の位置に移動
        $(this).children(".leftAnimeInner").addClass("slideAnimeRightLeft");  //子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
      }
      else{
        // 左から右へ表示するクラスを取り除く
        $(this).removeClass("slideAnimeLeftRight");
        $(this).children(".leftAnimeInner").removeClass("slideAnimeRightLeft");
      }
    });
  }
  $(window).on('load', function(){
    slideAnime();/* アニメーション用の関数を呼ぶ*/
  });
// });

/* blur：ページを読み込んだらアニメーションクラスを付与
==================================================*/
// $(function () {
  function add_blur() { // ローダー終了
    $('.blur').addClass('is-blur'); // フェード時間
  }
  $(window).on('load', function () {
    add_blur(); // アニメーション呼び出し
  })
// })