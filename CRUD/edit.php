<?php
    require_once("conn.php");
    $id=$_REQUEST["id"];
    $query="select * from student where ID=".$id;
    //echo $query;
    $res=mysqli_query($conn,$query);
    $arrres=mysqli_fetch_assoc($res);
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $course=$_POST["course"];
        $dept=$_POST["dept"];
        $query1="update student set Name='".$name."', Course='".$course."', Deaprtment='".$dept."'where ID=".$id;
        // $query1="UPDATE `student` SET `Name`='$name',`Course`='$course',`Deaprtment`='$dept' where ID=.$id.";
        //   //  UPDATE student SET Name = 'Hiren1' WHERE student.ID = 4
        echo $query1;
        mysqli_query($conn,$query1);
        echo "Done";
    }
?>
<html>
<body>
    <form name="form1" method="post">
        Name : <input type="text" name="name" value="<?php echo $arrres['Name']; ?>"> <br>
        Course : <input type="text" name="course" value="<?php echo $arrres['Course']; ?>"> <br>
        Department : <input type="text" name="dept" value="<?php echo $arrres['Deaprtment']; ?>"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>