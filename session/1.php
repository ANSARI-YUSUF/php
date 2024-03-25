


<?php
//what is the sesiion
//way to store info in differnt pages
//verify user login info
session_start();
$_SESSION['username']="yusuf";
$_SESSION['favcatagory']="books";
echo"we have saved your";
// <!-- <!DOCTYPE html> -->
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>hello</h1>  
</body>
</html>';

?>