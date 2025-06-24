<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sample 08-0</title>
    </head>
    <body>

<?php


$db = new mysqli('iis.edu.tama.ac.jp', $myid, $mypass, $mydb);


// write your code here
print( $db->host_info );
//

$db->close();

?>

    </body>
</html>
