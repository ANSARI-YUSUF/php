<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn)
{
    echo"sorry condt connect:"."<br>";
    // echo"connect";
}else{
    echo"connected22"."<br>";
}

$sql="CREATE DATABASE temp";
$result=mysqli_query($conn,$sql);
// $result=mysqli_query($conn,$sql);
// if(!$result)
// {
//     echo "db created"."<br>";
// }
// else{
//     echo"not created brcause of this error->>"."<br>".mysqli_error();
// }

echo "the result is:";
echo var_dump($result);

    //create databas

    // $sql=""


?>