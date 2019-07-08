<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MyPortfolio</title>
  
  <!-- デフォルトcss -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/vegas.min.css">
  <!-- カスタムcss -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  
  <!-- ローディング画面 -->
  <div id="loader-bg">
    <div id="loading">
      <div class="loader">Loading...</div>
    </div>
  </div>
  
  <!-- トップ画像スライド -->
  <header id="header-slide">
    <!-- ナビゲーションバーの記述 -->
    <nav class="navbar navbar-expand navbar-transparent navbar-custom">
      <div class="container">
        <a href="#" class="navbar-brand text-white">Lagoon</a>
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link navbar-list" href="#message">Message</a></li>
          <li class="nav-item"><a class="nav-link navbar-list" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link navbar-list" href="#service">Service</a></li>
          <li class="nav-item"><a class="nav-link navbar-list" href="#contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link navbar-list" href="login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link navbar-list" href="register.php">Register</a></li>
        </ul>
      </div>
    </nav>
    <!-- イメージ画像 -->
    <div class="top-img">
      <div class="logo demo">
        <div class="dd"><i class="fab fa-bity fa-5x"></i></div>
        <h1 class="logo-p1 text-center">Hello<span class="red">.</span>I am Yuji</h1>
      </div>
    </div>
  </header>
  
  <!-- メッセージ -->
  <div class="main fadein" id="message">
    <div class="container main-r">
      <div class="letter">
        <p class="main-p">
          はじめまして、やけゆうと申します。
        </p>
        <p class="main-p2">
          サンプルサンプルサンプルサンプルサンプルサンプル
        </p>
        <p class="main-p3">
          サンプルサンプルサンプルサンプルサンプルサンプル
        </p>
        <p class="main-p4">
          サンプルサンプルサンプルサンプルサンプルサンプル
        </p>
        <p class="main-p5">
          サンプルサンプルサンプルサンプルサンプルサンプル
        </p>
        <p class="main-p6">
          サンプルサンプルサンプルサンプルサンプルサンプル
        </p>
        <p class="main-p7">
          サンプルサンプルサンプルサンプルサンプルサンプル
        </p>
        <p class="main-p8">
          サンプルサンプルサンプルサンプルサンプルサンプル
        </p>
        <p class="main-p9">
          サンプルサンプルサンプルサンプルサンプルサンプル
        </p>
        <p class="main-p10">
          サンプルサンプルサンプルサンプルサンプルサンプル
        </p>
      </div>
    </div>
  </div>
  
  <!-- about -->
  <div class="about fadein" id="about">
    <div class="container">
      <h2 class="h2-contents ab">About</h2>
      <div class="row wrap">
        <!-- 左部分 -->
        <div class="col-md-6 col-xs-12 text-center">
          <img src="./assets/img/me.jpg" class="me">
          <div class="row">
            <h3 class="skills text-center">Skills</h3>
            <!-- 言語スキル -->
            <div class="col-md-6 col-xs-6">
              <h3 class="bar" style="color:#fff;">HTML</h3>
              <div class="progress">
                <div class="html progress-bar active" style="width:60%"></div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <h3 class="bar" style="color:#fff;">CSS</h3>
              <div class="progress">
                <div class="css progress-bar active" style="width:60%"></div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <h3 class="bar" style="color:#fff;">JavaScript</h3>
              <div class="progress">
                <div class="js progress-bar active" style="width:70%"></div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <h3 class="bar" style="color:#fff;">PHP</h3>
              <div class="progress">
                <div class="php progress-bar active" style="width:50%"></div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <h3 class="bar" style="color:#fff;">WordPress</h3>
              <div class="progress">
                <div class="wp progress-bar active" style="width:50%"></div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <h3 class="bar" style="color:#fff;">English</h3>
              <div class="progress">
                <div class="eg progress-bar active" style="width:20%"></div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- 右部分 -->
        <div class="col-md-6 col-xs-12 text-center right">
          <p class="about-p">
            Yakeyu / Yuji Yakena
          </p>
          <p class="about-p1">
            沖縄県うるま市出身
          </p>
          <p class="about-p2">
            元スーパー店員・駆け出しエンジニア
          </p>
          <p class="about-p3">
            東南アジアでヨガ生活を夢見る３０代
          </p>
          <p class="about-p4">大学卒業後</p>
          <table style="margin:0 auto;color:#fff">
            <tr>
              <td>→</td>
              <td>県内小売企業に管理職として新卒入社</td>
            </tr>
            <tr>
              <td>→</td>
              <td>本島北部地区へ転勤。EDLP政策に取り組む</td>
            </tr>
            <tr>
              <td>→</td>
              <td>大手コンビニチェーンへSV候補として出向</td>
            </tr>
            <tr>
              <td>→</td>
              <td>体調を崩し、休職期間中にヨガと出会う</td>
            </tr>
            <tr>
              <td>→</td>
              <td>ノマド生活を目指し、退職・プログラミング学習開始</td>
            </tr>
            <tr>
              <td>→</td>
              <td>１年後、システム開発会社より内定を頂く</td>
            </tr>
          </table>
          <div class="row icon">
            <div class="col-md-4 col-xs-4">
              <a href="https://twitter.com/tengan36"><i class="fab fa-twitter fa-3x"></i></a>
            </div>
            <div class="col-md-4 col-xs-4">
              <a href="https://www.facebook.com/yuji.yakena"><i class="fab fa-facebook fa-3x"></i></a>
            </div>
            <div class="col-md-4 col-xs-4">
              <a href="https://yakeyu.net/"><i class="fab fa-wordpress fa-3x"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- service -->
  <div class="service fadein" id="service">
    <div class="container">
      <h2 class="h2-contents">Service</h2>
      <h3 class="service-h3 text-center">テキストテキストテキストテキスト<br class="br-sp">テキストテキストテキストテキスト</h3>
      <div class="row text-center">
        <!-- サービス１ -->
        <div class="col-md-4">
          <div class="circle">
            <span class="circle1">
              <i class="fas fa-desktop"></i>
            </span>
          </div>
          <h3 class="title-text">ジャンル</h3>
          <p class="title-sub">仕事内容</p>
          <p class="caption">コメントコメントコメントコメント<br>コメントコメントコメントコメント<br>コメントコメントコメントコメント</p>
        </div>
        <!-- サービス２ -->
        <div class="col-md-4">
          <div class="circle">
            <span class="circle2">
              <i class="fab fa-wordpress"></i>
            </span>
          </div>
          <h3 class="title-text">ジャンル</h3>
          <p class="title-sub">仕事内容</p>
          <p class="caption">コメントコメントコメントコメント<br>コメントコメントコメントコメント<br>コメントコメントコメントコメント</p>
        </div>
        <!-- サービス３ -->
        <div class="col-md-4">
          <div class="circle">
            <span class="circle3">
              <i class="fas fa-building"></i>
            </span>
          </div>
          <h3 class="title-text">ジャンル</h3>
          <p class="title-sub">仕事内容</p>
          <p class="caption">コメントコメントコメントコメント<br>コメントコメントコメントコメント<br>コメントコメントコメントコメント</p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- コンタクトフォーム -->
  <div class="contact fadein" id="contact">
    <div class="container text-center">
      <h2 class="h2-contents">Contact me</h2>
      <!-- 入力フォーム部分 -->
      <div class="row contact-form">
        <div class="col-sm-6 col-sm-offset-3">
          <form id="contactForm" role="form" method="post" action="check.php">
            <!-- 名前入力フォーム -->
            <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required"/>
            </div>
            <!-- E-mail入力フォーム -->
            <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required"/>
            </div>
            <!-- 内容入力フォーム -->
            <div class="form-group">
              <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required"></textarea>
            </div>
            <div class="text-center">
              <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="main-contents"></div>
    <div class="parent"><a href="#" class="san"></a></div>
  </div>
  
  <footer>
    <p class="footer-p">
      "LIVE A LIFE BY MYSELF"
    </p>
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>    
  <script src="https://kit.fontawesome.com/deb123295c.js"></script>
  <!-- トップ画像のスライド・jQueryのプラグイン   -->
  <script src="assets/js/vegas.min.js"></script>
  <!-- テキストをタイピング風に表示・jQueryのプラグイン -->
  <script src="assets/js/t.min.js"></script>  
  <script src="assets/js/app.js"></script>
</body>
</html>