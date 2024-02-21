<?php

require("form2.php");

if(isset($_POST['submit']))

{
    $name=$_POST['name'];
    $cource=$_POST['cource'];
    $dept=$_POST['dept'];
$query="INSERT 
INTO `stu` ( `name`, `cource`, `dept`) 
VALUES ( '$name', '$cource', '$dept')";
$res=mysqli_query($conn,$query);
if($res)
{
header("location:succ.php");
}else{
    echo "error".mysqli_error($conn);
}

}


?>


<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        <input type="text" name="name" placeholder="enter name"><br>
        <input type="text" name="cource" placeholder="courses"><br>
        <input type="text" name="dept" placeholder="enter dept"><br>
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>