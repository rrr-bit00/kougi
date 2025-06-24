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
    // 命令の準備。「?」 を、後で値を入れる場所に置く。文字列でも " " などは不要
    $statement = $db->prepare('select name from fruits where id=?');

    // prepare に失敗　→　SQL 構文エラー
    if( $statement == false )
        print($db->error . '<hr />');

    // prepared 文の「？」に変数を割り当て
    // 型指定に使えるのは s,i,d,b (string, integer, double, blob)
    $statement->bind_param('i', $_GET['id']);

    // prepared statement の実行
    // SQL 実行時エラーのチェック（キーの重複など）
    if( $statement->execute() === false )
        print($db->error . '<hr />');

    // 結果の取得。あとは一緒。
    $res = $statement->get_result();

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
