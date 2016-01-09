<?php

function h($s)
{
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

// error_reporting(E_ALL & ~E_NOTICE);


//投稿ボタンが押されたら
  if (isset($_POST["register"]))
  {
    session_start();
    //エラーメッセージを格納する配列を作成
    $error = array();
   //各データがセットされていたら各変数にPOSTのデータを格納
    if ($_POST["name"] !== "")
    {
       $_SESSION["name"] = htmlspecialchars($_POST["name"],ENT_QUOTES);
   //各データがなかったらエラーメッセージを配列に格納
    }
    else
    {
       $error[] = "お名前を入力してください。";
    }
    if ($_POST["title"] !== "")
    {
      $_SESSION["title"] = htmlspecialchars($_POST["title"],ENT_QUOTES);
    }
    else
    {
       $error[] = "件名を入力してください。";
    }
    if ($_POST["mail"] !== "")
    {
        $_SESSION["mail"] = htmlspecialchars($_POST["mail"],ENT_QUOTES);
    }
    else
    {
       $error[] = "メールアドレスを入力してください。";
    }
    if ($_POST["body"] !== "")
    {
       $_SESSION["body"] = htmlspecialchars($_POST["body"],ENT_QUOTES);
    }
    else
    {
       $error[] = "本文を入力してください。";
    }
     //エラーがない時
    if (!count($error))
    {
        //確認ページへ
        header ("Location:inquiry.php");
       exit;
    }
  //エラーがある時
    if (count($error))
    {
     foreach ($error as $message)
     {
         echo "<span style='color:red'>" . $message . '</span><br>';
     }
  }
}

?>

<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<h1>お問い合わせフォーム</h1><br>
<form action="index.php" method="post">
<ul>
<li><span>お名前</span><input type="text" name="name" value=""><br></li>
<li><span>件名</span><input type="text" name="title"><br></li>
<li><span>メールアドレス</span><input type="text" name="mail"><br></li>
<li><span>本文</span><input type="text" name="body" size="50"></li>
<li><input type="submit"name="register"  value="送信"></li>
</ul>
</body>
</html>