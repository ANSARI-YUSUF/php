<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);


$sql="CREATE DATABASE db1";

$result=mysqli_query($conn,$sql);

var_dump($result);
    if(!$conn)
    {
        die("sorry condt connect:".mysqli_connect_error());
        // echo"connect";
    }else{
        echo"connected22";
    }

    //create databas

    // $sql=""


?>