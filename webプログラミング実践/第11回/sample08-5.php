<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sample 08-5</title>
    </head>
    <body>


<?php


$db = new mysqli('iis.edu.tama.ac.jp', $myid, $mypass, $mydb);

if( !empty($_GET['id']) )
{
    $res = $db->query("select name from fruits where id=" . $_GET['id']);
    if( $res == false ) print($db->error);
    print('<hr />');

    $seikai = false;
    print('検索結果数 ' . $res->num_rows . '<br />' );

    if($res->num_rows == 1)
    {
        $d = $res->fetch_assoc();   //  あっても１個なのでループで回す必要なし
        if( $d['name'] == $_GET['name'] )
            $seikai = true;
    }
    if( $seikai ) print('正解！'); else print('ハズレ！');
    print('<hr />');

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
