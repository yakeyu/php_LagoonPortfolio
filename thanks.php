<?php

$name = htmlspecialchars($_POST['name']);
$emailFrom = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

if(isset($_POST['submit'])){
  $subject = "test mail";
  $mailTo = "yakeyu36@gmail.com";
  $headers = "From: ".$mailFrom;

  mail($mailTo, $subject, $message, $headers);
}

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
<body id="thanks">
  
  <div class="form-box">
    <h1>Thanks to contact me!</h1>
    <!-- ユーザーネームの確認 -->
    <div class="textbox">
      <i class="fas fa-user"></i>
      <p><?php echo $name; ?></p>
    </div>
    <!-- メールアドレスの確認 -->
    <div class="textbox">
      <i class="fas fa-envelope"></i>
      <p><?php echo $emailFrom; ?></p>
    </div>
    <!-- 問い合わせ内容の確認 -->
    <div class="textbox">
      <i class="fas fa-comment-dots"></i>
      <p><?php echo $message; ?></p>
    </div>

    <a href="index.php"><button class="btn">TOP</button></a>
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