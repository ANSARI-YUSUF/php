<?php
    require_once("conn.php");
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $course=$_POST["course"];
        $dept=$_POST["dept"];
    $query="INSERT INTO `student` (`id`, `Name`, `Course`, `Deaprtment`) VALUES (NULL, '$name', '$course', '$dept')";
        // echo $query;

    $res=mysqli_query($conn,$query);
    echo $res;
    header("Location:success.php");
    }
?>
<html>
<body>
    <a href="show.php">Show Page</a>
    <form name="form1" method="post">
        Name : <input type="text" name="name"> <br>
        Course : <input type="text" name="course"> <br>
        Department : <input type="text" name="dept"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>