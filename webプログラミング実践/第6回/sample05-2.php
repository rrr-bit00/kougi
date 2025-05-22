<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sample05</title>
  </head>
  <body>

    
    <hr />
    <?php
    if (empty($_POST['id'])) {
    print(
      "<form action='sample05-2.php' method='post'>
  		<input type='text' name='id' />
  		<input type='password' name='pass' />
      <input type='submit' />
  	</form>"
    );
  } else {
      var_dump($_POST);
      print($_POST['id']);
    };
    ?>
  </body>
</html>
