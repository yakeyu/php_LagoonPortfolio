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
<body id="register">
  
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
  
  <form class="form-box" method="post" action="rg-thanks.php">
    <h1>Register</h1>
    <!-- ユーザーネームの入力欄 -->
    <div class="textbox">
      <i class="fas fa-user"></i>
      <input type="text" name="userName" placeholder="User Name" required="required">
    </div>
    <!-- パスワードの入力欄 -->
    <div class="textbox">
      <i class="fas fa-lock"></i>
      <input type="password" name="pass" placeholder="Password" required="required">
    </div>
    <!-- 登録ボタン -->
    <button type="submit" class="btn">Register</button>
  </form>
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>    
  <script src="https://kit.fontawesome.com/deb123295c.js"></script>
  <!-- トップ画像のスライド・jQueryのプラグイン   -->
  <script src="assets/js/vegas.min.js"></script>
  <!-- テキストをタイピング風に表示・jQueryのプラグイン -->
  <script src="assets/js/t.min.js"></script>  
  <script src="assets/js/app.js"></script>
</body>
</html>