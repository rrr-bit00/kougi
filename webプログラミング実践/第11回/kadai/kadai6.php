<?php
$res = $db->query(
    "select m.mid, u.name, m.body, m.timestamp from 
    messages as m left join users as u using(uid)"
);

while($d = $res->fetch_assoc())
{
    if ($d['name'] == "") $d['name'] = "未入力";
    $new_d = array_map("htmlspecialchars", $d);
    // var_dumpで表示するとキーがm.とu.が消えたフィールド名になる
    print(
        "{$new_d['mid']} {$new_d['name']}&emsp;
        {$new_d['body']} {$new_d['timestamp']}<hr />");
}