<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sample 08-5</title>
    </head>
    <body>


<?php

include_once('config.php');
$db = new mysqli('iis.edu.tama.ac.jp', $myid, $mypass, $mydb);

if( !empty($_GET['id']) )
{
    $statement = $db->prepare('select name from fruits where id=?');
    if( $statement == false )
        print($db->error . '<hr />');

    $statement->bind_param('i', $_GET['id']);
    if( $statement->execute() === false )
        print($db->error . '<hr />');
    $res = $statement->get_result();

    $seikai = false;
    print('検索結果数 ' . $res->num_rows . '<br />' );

    if($res->num_rows == 1)
    {
        $d = $res->fetch_assoc();   //  あっても１個なのでループで回す必要なし
        if( $d['name'] == $_GET['name'] )
            $seikai = true;
    }


    if( $seikai )
    {
        print('正解！');
        $_SESSION['right']++;
    }
    else
    {
        print('ハズレ！');
        $_SESSION['wrong']++;
    }
    print('<hr />');
    print( $_SESSION['right']+$_SESSION['wrong'] . ' 問中 ' . $_SESSION['right'] . ' 問正解');

    $db->close();
}

 ?>


<form action='' method='get'>
    <input type="text" name="id" value="">
    <input type="text" name="name" value="">
    <input type="submit" name="submit" value="submit">
</form>


</body>
</html>
