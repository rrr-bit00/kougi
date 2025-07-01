<?php
$res = $db->query(
    "select mid, body from 
    (select mid, body, timestamp from messages order by timestamp desc limit 20) 
    as tmp_mes order by timestamp");

while($d = $res->fetch_assoc())
{
    $new_d = array_map('htmlspecialchars', $d);
    print("{$new_d['mid']} {$new_d['body']}<hr />");
}