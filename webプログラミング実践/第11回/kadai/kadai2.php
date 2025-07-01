<?php
if(!empty($_GET["body"]))
{
    $statement = $db->prepare("insert into messages (uid,body) values (22311081, ?)");
    if($statement == false) print($db->error . '<hr />');
    $statement->bind_param('s', $_GET['body']);

    if( $statement->execute() === false )
        print($db->error . '<hr />');

}