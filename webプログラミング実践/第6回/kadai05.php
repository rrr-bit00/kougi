<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    print(
        "<form action='kadai05.php' method='post'>
        <input type='text' name='id' />
        <input type='submit'/>
        </form>"
    )

    $id = htmlspecialchars($_POST['id']);
    print($id);

?>
</body>
</html>