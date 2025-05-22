<?php
$id = htmlspecialchars($_POST['id']);
print($id);

print('<hr />');

for($i=0; $i<strlen($id); $i++)
  print($id[$i].' ');
 ?>
