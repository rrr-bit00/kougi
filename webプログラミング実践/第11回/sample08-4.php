<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sample 08-4</title>
    </head>
    <body>

<?php


$db = new mysqli('iis.edu.tama.ac.jp', $myid, $mypass, $mydb);


$res = $db->query("insert into fruits (id,name) values (8,'mango')");
var_dump($res);
print($db->error);
print('<hr />');

$res = $db->query("select * from fruits");

while( $d = $res->fetch_assoc() )
{
  print("{$d['id']} : {$d['name']}<br />\n");
}
// write your code here

$db->close();

 ?>
</body>
</html>
