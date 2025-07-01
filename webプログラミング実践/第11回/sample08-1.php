<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sample 08-1</title>
    </head>
    <body>

<?php

ini_set('display_errors', 'On');

require_once 'config.php';

$db = new mysqli('iis.edu.tama.ac.jp', $myid, $mypass, $mydb);

$res = $db->query('select * from fruits');
var_dump($res);

$db->close();

?>

</body>
</html>
