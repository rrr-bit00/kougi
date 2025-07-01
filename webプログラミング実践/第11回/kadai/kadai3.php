<?php
$res = $db->query("select name from users where uid='22311081'");
$d = $res->fetch_assoc();
print($d['name']);