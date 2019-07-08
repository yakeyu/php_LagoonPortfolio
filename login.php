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
<body id="login">
  
  <header>
    <!-- ナビゲーションバーの記述 -->
    <nav class="navbar navbar-expand navbar-transparent navbar-custom">
      <div class="container">
        <a href="index.php" class="navbar-brand text-white">Lagoon</a>
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link navbar-list" href="login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link navbar-list" href="register.php">Register</a></li>
        </ul>
      </div>
    </nav>
  </header>
  
  <div class="form-box">
    <h1>Login</h1>
    <!-- ユーザーネームの入力欄 -->
    <div class="textbox">
      <i class="fas fa-user"></i>
      <input type="text" placeholder="User Name">
    </div>
    <!-- パスワードの入力欄 -->
    <div class="textbox">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Password">
    </div>
    <!-- sign in ボタン -->
    <input type="button" class="btn" value="Sign In">
  </div>
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>    
  <script src="https://kit.fontawesome.com/deb123295c.js"></script>
  <!-- トップ画像のスライド・jQueryのプラグイン   -->
  <script src="assets/js/vegas.min.js"></script>
  <!-- テキストをタイピング風に表示・jQueryのプラグイン -->
  <script src="assets/js/t.min.js"></script>  
  <script src="assets/js/app.js"></script>
</body>
</html>