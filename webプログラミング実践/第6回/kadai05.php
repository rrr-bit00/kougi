<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kadai05</title>
</head>
<body>
    <?php
    if (empty($_POST['id'])) {
        print(
            "<form action='kadai05.php' method='post'>
            <input type='text' name='id' />
            <input type='time' name='time' />
            <input type='submit' />
            </form>"
        );
    }

    else {
        $post = array_map('htmlspecialchars', $_POST);
        $name = $post['id'];
        if ($post['time'] >= '04:00' && $post['time'] < '12:00') $greeting = 'おはよう';
        if ($post['time'] >= '12:00' && $post['time'] < '20:00') $greeting = 'こんにちは';
        if ($post['time'] >= '20:00' || $post['time'] < '04:00') $greeting = 'こんばんは';

        print($name.'さん、'.$greeting);
    }
?>
</body>
</html>
