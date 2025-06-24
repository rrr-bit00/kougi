<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sample 08-3</title>
    </head>
    <body>

<?php


$db = new mysqli('iis.edu.tama.ac.jp', $myid, $mypass, $mydb);


$res = $db->query('select name, price from fruits order by price desc limit 2');

while( $d = $res->fetch_assoc() )
{
  print("{$d['name']} is {$d['price']}.<br />\n");
}
// write your code here

$db->close();

 ?>
</body>
</html>
