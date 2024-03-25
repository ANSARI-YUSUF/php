<?php


$servername="localhost";
$username="root";
$password="";
$database="form";
// $database="temp";

$conn=mysqli_connect($servername,$username,$password,$database);

// $sql="create database form";
// $result=mysqli_query($conn,$sql);
// if($result)
// {
//     echo"database created";
// }
// else{
//     echo"not inserted";
// }

// $sql="CREATE TABLE `data` (`email` INT NOT NULL , 
//   `passowd`VARCHAR(10) )";

// $result=mysqli_query($conn,$sql);
// if ($result)
// echo "tablecreated";
// else {
//     echo"not created";
// }

echo'<html>
    <body>
    <form action ="temp.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </body>
</html>';


?>


