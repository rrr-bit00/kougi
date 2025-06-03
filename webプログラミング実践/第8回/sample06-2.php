<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
  $account = [1001, 'tama01', '多摩太郎'];

  print("<pre>");
  var_dump($_POST);
  var_dump($account);
  print("</pre><hr />");

  // 入力された ID, パスワードが、$account の２つの要素に一致していれば
  // 「（２番目の要素＝多摩太郎）さんいらっしゃいませ」と表示し、
  // 違っていれば「帰れ」と表示させよう。

 ?>

<form action="sample06-2.php" method="post">
  id: <input type="text" name="uid" value="">
  password: <input type="password" name="password" value="">
  <input type="submit" name="submit" value="送信">
</form>


  </body>
</html>