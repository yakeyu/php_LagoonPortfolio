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

  // スクロールするとヘッダーメニューのバックグラウンドに色を付ける
  $(window).scroll(function(){
    if($(window).scrollTop() > 300){
      // 300px以上スクロールした時の動作
      $('.navbar-custom').removeClass('navbar-transparent');
    }else{
      // 元のトップ位置に戻ったときの動作
      $('.navbar-custom').addClass('navbar-transparent');
    }
  });

  // トップ画像のフェードイン
  $(function(){
    var h = $(window).height();
    // $('body').css('display', 'none');
    $('#loader-bg ,#loader').height(h).css('display', 'block');
  });
  $(window).on('load',function(){
    $('#loader-bg').delay(1000).slideUp(1000);
    $('body').css('display','block');
  });
  
  // ヘッダー画像のスライド（jQueryプラグイン）
  $('#header-slide').vegas({
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
  
  // 該当箇所にスムーススクロール
  $('a[href^="#"]').click(function(){
    var speed = 800;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
  
  
});
