<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>kadai</title>
</head>
<body>
    
<?php

require_once 'config_shared.php';

$db = new mysqli('iis.edu.tama.ac.jp', $myid, $mypass, $mydb);

$res = $db->query(
    "select m.mid, u.name, m.body, m.timestamp from 
    messages as m left join users as u using(uid)"
);

while($d = $res->fetch_assoc())
{
    if ($d['name'] == "") $d['name'] = "NULL";
    $new_d = array_map("htmlspecialchars", $d);
    // var_dumpで表示するとキーがm.とu.が消えたフィールド名になる
    print(
        "{$new_d['mid']} {$new_d['name']}&emsp;
        {$new_d['body']} {$new_d['timestamp']}<hr />");
}

$db->close();

?>

</body>
</html>