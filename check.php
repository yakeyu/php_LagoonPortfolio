<?php

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

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
<body id="check">
  
  <form action="thanks.php" method="post" class="form-box">
    <h1>Contents Confirmation</h1>
    <!-- ユーザーネームの確認 -->
    <div class="textbox">
      <i class="fas fa-user"></i>
      <p><?php echo $name; ?></p>
    </div>
    <!-- メールアドレスの確認 -->
    <div class="textbox">
      <i class="fas fa-envelope"></i>
      <p><?php echo $email; ?></p>
    </div>
    <!-- 問い合わせ内容の確認 -->
    <div class="textbox">
      <i class="fas fa-comment-dots"></i>
      <p><?php echo $message; ?></p>
    </div>
    <!-- 値をthanks.phpへ送信するための記述（画面には表示されない） -->
    <input name="name" value="<?php echo $name; ?>" type="hidden">
    <input name="email" value="<?php echo $email; ?>" type="hidden">
    <input name="message" value="<?php echo $message; ?>" type="hidden">
    <!-- 戻るボタン -->
    <input type="button" class="btn return" value="Return" onclick="history.back()">
    <!-- OKボタン -->
    <input type="submit" class="btn ok" value="OK">
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