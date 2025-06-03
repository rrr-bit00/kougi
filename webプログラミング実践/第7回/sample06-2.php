<html><head>
    <title>Sample06-1 Simple Login</title>
    <?php $PASSWORD = ['user' => 'upass', 'admin' => 'apass']; ?>
</head>

<body>

<?php
if( empty($_POST['id']) || empty($_POST['pass']) )
{
    print("
    <form action='' method='post'>
    user id : <input type='text' name='id'><br />
    password : <input type='password' name='pass'><br />
    <input type='submit' text='LOGIN'>
    </form>
    ");
    print('<hr> $PASSWORD 配列の中身 : ');
    var_dump($PASSWORD);
}
else
{
    $id = $_POST['id'];         // 毎回 $_POST を書くのが面倒なので、変数で受ける
    $pass = $_POST['pass'];

    /* !emptyで配列の中に入力された$idがあるか確認
       先頭に書かないと$pass==$PASSWORD[$id]を判定するため、無駄が生じる */
    if( !empty($PASSWORD[$id]) && $pass == $PASSWORD[$id])  // この行を書き換える
    {
        print("$id で LOGIN 成功");
    }
    else 
    {
        print('LOGIN 失敗');
    }
}

?>
</body></html>