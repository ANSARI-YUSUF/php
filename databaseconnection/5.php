<?php
$servername="localhost";
$username="root";
$password="";
$database="temp";

$conn=mysqli_connect($servername,$username,$password,$database);

// $sql="CREATE TABLE `yusufphp` (`id` INT NOT NULL , `name` VARCHAR(10) NOT NULL ,
//  `pass` INT NOT NULL , `city` VARCHAR(20) NOT NULL )";

// $result=mysqli_query($conn,$sql);
// if ($result)
// echo "tablecreated";
// else {
//     echo"not created";
// }

$name="datti";
$city="surat";
$sql2="INSERT INTO `yusufphp` (`id`, `name`, `pass`, `city`)
 VALUES ('100','$name' , '82820019898', '$city')";
$result2=mysqli_query($conn,$sql2);

if($result2)
{
    echo"data insertted in table yusufphp";
}
else{
    echo"not inserted";
}


?>