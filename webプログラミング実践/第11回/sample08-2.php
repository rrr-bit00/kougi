<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sample 08-2</title>
    </head>
    <body>

<?php

require_once 'config.php';

$db = new mysqli('iis.edu.tama.ac.jp', $myid, $mypass, $mydb);


$res = $db->query('select * from fruits');

while( $d = $res->fetch_assoc() )
{
  var_dump($d);
}
// write your code here

$db->close();

 ?>

</body>
</html>
