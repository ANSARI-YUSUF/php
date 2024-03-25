<?php
//what is the sesiion
//way to store info in differnt pages
//verify user login info
session_start();
if(isset($_SESSION['username']))
{
echo"welcome".$_SESSION['username']="yusuf"."<br>";
echo"favcatagoryis".$_SESSION['favcatagory']="books"."<br>";
echo"we have saved your";
}else{
    echo "plese login to continue";
}
?>