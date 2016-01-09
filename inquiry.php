<?php

   session_start();

   $name = $_SESSION["name"];
   $title = $_SESSION["title"];
   $mail = $_SESSION["mail"];
   $body = $_SESSION["body"];

   mb_language("japanese");
   mb_internal_encoding("EUC-JP");
   // mb_internal_encoding("UTF-8");

   $to = "kasuya@adv-create.co.jp";
   $title = $_SESSION["title"];
   $body = $_SESSION["body"];
   $from = $_SESSION["name"];

   mb_send_mail($to, $title, $body, $from);

?>

<html lang="ja">
<head>
<meta charset="UTF-8">
<title>確認画面</title>
<link rel="stylesheet" href="style.css">
</head>

   <body>
   <h1>以下の内容でよろしいですか？</h1><br>
   <form action="thankyou.php" method="post">
   <ul>
   <li><span>お名前</span><?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8").'<br>' ?></li>
   <li><span>件名</span><?php echo htmlspecialchars($title, ENT_QUOTES,"UTF-8") .'<br>' ?></li>
   <li><span>メールアドレス</span><?php echo htmlspecialchars($mail, ENT_QUOTES,"UTF-8") . '<br>' ?></li>
   <li><span>本文</span><?php echo htmlspecialchars($body, ENT_QUOTES,"UTF-8") . '<br>' ?></li>
   <li><input type="submit" name="set" value="確定"></li>

      <a href="index.php">戻る</a>

   <li><input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>"></li>
   <li><input type="hidden" name="title" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>"></li>
   <li>
   <p>
   <input type="hidden" name="mail" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>">
   <input type="hidden" name="body" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>">
   </p>
   </li>
   </ul>
<!--    <a href="index.php">戻る</a> -->
   </form>
   </body>
