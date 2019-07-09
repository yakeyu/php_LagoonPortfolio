<?php

  $userName = htmlspecialchars($_POST['userName']);
  $email = htmlspecialchars($_POST['email']);
  $pass = htmlspecialchars($_POST['password']);

  // DBに接続
  $dsn = 'mysql:dbname=php_LagoonPortfolio;host=localhost';
  $user = 'root';
  $password = '';

  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  // DBに登録
  $sql = 'INSERT INTO userData (userName,email,password) VALUES ("'.$userName.'","'.$email.'","'.$pass.'")';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();

  // DB切断
  $dbh = null;
?>

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
<body id="rg-thanks">
  
  <div class="form-box">
    <h1>Thanks to register!</h1>
    <!-- ユーザーネームの確認 -->
    <div class="textbox">
      <i class="fas fa-user"></i>
      <p><?php echo $userName; ?></p>
    </div>
    <!-- E-mailの確認 -->
    <div class="textbox">
      <i class="fas fa-envelope"></i>
      <p><?php echo $email; ?></p>
    </div>
    <a href="index.php"><button class="btn top">TOP</button></a>
    <a href="login.php"><button class="btn login">LOG IN</button></a>
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