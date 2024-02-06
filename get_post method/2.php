<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>get and post</title>
  </head>
  <body>
    <h1>hello form</h1>
    <form action="2.php" method="GET">
        name:
        <input type="text" name="name"/>
        
        password:<input type ="password"name="password">
        <input type="submit" value="login"/>
    </form>
  </body>
</html> -->

<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>