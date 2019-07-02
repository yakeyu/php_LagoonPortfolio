$(function(){
  // スクロールすると各セクションがふわっと出現
  $(window).scroll(function(){
    $('.fadein').each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if(scroll > elemPos - windowHeight + 100){
        $(this).addClass('scrollin');
      }
    });
  });

  // トップ画像のフェードイン
  $(function(){
    var h = $(window).height();
    $('body').css('display', 'none');
    $('#loader-bg ,#loader').height(h).css('display', 'block');
  });
  $(window).on('load',function(){
    $('#loader-bg').delay(1000).slideUp(1000);
    $('body').css('display','block');
  });

  // ヘッダー画像のスライド（jQueryプラグイン）
  $('header').vegas({
    delay: 7000,
    timer: true,
    overlay: 'https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.0/overlays/01.png',
    firstTransition: 'fade2',
    firstTransitionDuration: 2000,
    transition: 'fade2',
    transitionDuration: 2000,
    animation: 'kenburns',
    slides: [
      { src: 'assets/img/slide1.jpg'},
      { src: 'assets/img/slide2.jpg'},
      { src: 'assets/img/slide3.jpg'},
      { src: 'assets/img/slide4.jpg'},
    ]
  });

  // タイピング風アニメーション
  $('.demo').t({
    speed: 100
  });



});
