<?php
 session_start();
 $name = $_SESSION["name"];
 $title = $_SESSION["title"];
 $mail = $_SESSION["mail"];
 $body = $_SESSION["body"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Thank you!</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>お問い合わせありがとうございます</h1>
    <p>-- 以下の内容で送信されました --</p>
    <ul>
      <li><span>お名前</span><?php echo $name . '<br>' ?></li>
      <li><span>件名</span><?php echo $title . '<br>' ?></li>
      <li><span>メールアドレス</span><?php echo $mail . '<br>' ?></li>
      <li><span>本文</span><?php echo $body. '<br>' ?></li>
      <a href="index.php">戻る</a>
     </ul>
</body>
</html>