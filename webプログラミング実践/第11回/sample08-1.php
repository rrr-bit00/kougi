<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sample 08-1</title>
    </head>
    <body>

<?php

require_once 'config.php';

$myid = 'u22311081';
$mydb = 'webpg_u22311081';
$db = new mysqli('iis.edu.tama.ac.jp', $myid, $mypass, $mydb);

$res = $db->query('select * from fruits');
var_dump($res);

$db->close();

?>

</body>
</html>
