<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
  $password = 'tama';

  print("<pre>");
  var_dump($_POST);
  var_dump($password);
  print("</pre><hr />");

  // 入力されたパスワードが、$password と一致していれば「いらっしゃいませ」
  // 違っていれば「帰れ」と表示させよう。

 ?>

<form action="sample06-1.php" method="post">
  password: <input type="password" name="password" value="">
  <input type="submit" name="submit" value="送信">
</form>


  </body>
</html>