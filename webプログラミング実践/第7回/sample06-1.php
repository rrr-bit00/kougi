<html><head>
    <title>Sample06-1 Simple Login</title>
    <?php $PASSWORD = 'qwerty'; ?>
</head>

<body>

<?php
if( empty($_POST['pass']) )
{
    print("
    <form action='' method='post'>
    <input type='password' name='pass'>
    <input type='submit' text='LOGIN'>
    </form>
    ");
    print('<hr> パスワードは qwerty です。');
}
else
{
    $pass = htmlspecialchars($_POST['pass']);
    if( $pass==$PASSWORD )  // この行を書き換える
    {
        print('LOGIN 成功');
    }
    else
    {
        print('LOGIN 失敗');
    }
}

?>
</body></html>