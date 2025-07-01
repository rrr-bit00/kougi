<?php
$res = $db->query("select mid, body from messages");
while($d = $res->fetch_assoc())
{
    $new_d = array_map('htmlspecialchars', $d);
    print("{$new_d['mid']} {$new_d['body']}<hr />");
}