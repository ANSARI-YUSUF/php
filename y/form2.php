<?php

$servername="localhost";
$user="root";
$password="";
$database="ydb";

$conn=mysqli_connect($servername,$user,$password,$database);

if(!$conn)
{
    echo"cant connect";
    mysqli_connect_error();
}else {
    echo "connected";
}











?>