<?php
require_once("connection.php");
$id=$_REQUEST["id"];
$query="select * from data where ID=".$id;
$result=mysqli_query($conn,$query);
$arrresult=mysqli_fetch_assoc($result);


if(!$arrresult)
echo "Can not be deleted data doesn't exist";
else
{
    $query2="DELETE FROM `data` WHERE id=".$id; 
    echo $query2;
     mysqli_query($conn,$query2);
      echo "Done";

    
}
?>


