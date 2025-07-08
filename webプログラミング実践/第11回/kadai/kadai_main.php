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
?>

<table border="1">
    <tr>
        <th>mid</th>
        <th>名前</th>
        <th>本文</th>
        <th>日時</th>
</tr>

<?php
while($d = $res->fetch_assoc())
{
    if ($d['name'] == "") $d['name'] = "未入力";
    $new_d = array_map("htmlspecialchars", $d);
    // var_dumpで表示するとキーがm.とu.が消えたフィールド名になる
    echo "<tr>";
    echo "<td>{$new_d['mid']}</td>";
    echo "<td>{$new_d['name']}</td>";
    echo "<td>{$new_d['body']}</td>";
    echo "<td>{$new_d['timestamp']}</td>";
    echo "</tr>";
}

$db->close();

?>

</body>
</html>