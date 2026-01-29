/*  動画再生
====================================== */

//*-- 自作再生ボタンで制御(video) --*//

// $(function () {
//   $('.play-btn1').on('click', function(){ // 再生ボタンが押されたら
//       if($(this).hasClass('playActive')){
//           $('.video1').get(0).pause();
//       }else{
//           $('.video1').get(0).play();
//       }
//   });
//   $('.video1').on('playing', function(){
//       $('.play-btn1').addClass('playActive');
//       $(this).attr('controls', ''); // ブラウザが表示する再生ボタンを非表示にするために後から属性付与
//   });
//   $(".video1").on('pause', function(){
//       $('.play-btn1').removeClass('playActive');
//       $(this).removeAttr('controls');
//   });
//   $('.video1').on('ended', function(){
//       $('.play-btn1').removeClass('playActive');
//       $(this).removeAttr('controls');
//   });
// });
// $(function () {
//   $('.play-btn2').on('click', function(){ // 再生ボタンが押されたら
//       if($(this).hasClass('playActive')){
//           $('.video2').get(0).pause();
//       }else{
//           $('.video2').get(0).play();
//       }
//   });
//   $('.video2').on('playing', function(){
//       $('.play-btn2').addClass('playActive');
//       $(this).attr('controls', ''); // ブラウザが表示する再生ボタンを非表示にするために後から属性付与
//   });
//   $(".video2").on('pause', function(){
//       $('.play-btn2').removeClass('playActive');
//       $(this).removeAttr('controls');
//   });
//   $('.video2').on('ended', function(){
//       $('.play-btn2').removeClass('playActive');
//       $(this).removeAttr('controls');
//   });
// });

//*-- 自作再生ボタンで制御(youtube) --*//

let tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
let firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
let player1;
let player2;
function onYouTubePlayerAPIReady() {
  player1 = new YT.Player("player1", {
    events: {
      onReady: onPlayerReady,
      onStateChange: onPlayerStateChange
    }
  });
  player2 = new YT.Player("player2", {
    events: {
        onReady: onPlayerReady,
        onStateChange: onPlayerStateChange
    }
  });
}
function onPlayerReady(event) {
  let playButton1 = document.getElementById("play1");
  let playButton2 = document.getElementById("play2");
  let el1 = document.getElementsByClassName("videoWrapper1");
  let el2 = document.getElementsByClassName("videoWrapper2");
  playButton1.addEventListener("click", function () {
    player1.playVideo();
    // playButton1.style.display ="none";
    $(this).addClass('playActive');
    // $(this).next('player1').addClass('playActive');
    el1[0].classList.add("playActive");
  });
  playButton2.addEventListener("click", function () {
    player2.playVideo();
    // playButton2.style.display ="none";
    $(this).addClass('playActive');
    // $(this).next('player2').addClass('playActive');
    el2[0].classList.add("playActive");
  });
}
function onPlayerStateChange(event) {  
    if (event.data == YT.PlayerState.PLAYING) { 
      $('play-btn').addClass('playActive');
   } else if (event.data == YT.PlayerState.ENDED) {
      $('play-btn').removeClass('playActive');
    }
  }
