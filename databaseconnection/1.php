<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

    if(!$conn)
    {
        die("sorry condt connect:".mysqli_connect_error());
        // echo"connect";
    }else{
        echo"connected";
    }


?>