<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>


<?php

include_once('config.php');
$db = new mysqli('iis.edu.tama.ac.jp', $myid, $mypass, $mydb);

if( !empty($_POST['uid']) )
{
    $uid = $_POST['uid'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    $statement = $db->prepare("INSERT INTO users (uid, name, password) VALUES (?, ?, ?)");
    $statement->bind_param('iss', $uid, $name, $hash_password);

    if( $statement->execute() === false )
        print($db->error . '<hr />');
    else
        print('ユーザー登録完了！');
        print('<a href="login.php">ログインページへ戻る</a>');
    $db->close();
}
 ?>


<form action='' method='post'>
    <input type="text" name="uid" value="">
    <input type="text" name="name" value="">
    <input type="password" name="password" value="">
    <input type="submit" name="SignUp" value="登録">
</form>


</body>
</html>
