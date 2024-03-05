<?php
    require_once("conn.php");
    $id=$_REQUEST["id"];
    $query="select * from student where ID=".$id;
    //echo $query;
    $res=mysqli_query($conn,$query);
    $arrres=mysqli_fetch_assoc($res);
    // if(isset($_POST["submit"])){
    //     $name=$_POST["name"];
    //     $course=$_POST["course"];
    //     $dept=$_POST["dept"];
    //     $query1="update student set Name='".$name."', Course='".$course."', Deaprtment='".$dept."'where ID=".$id;
    //     // $query1="UPDATE `student` SET `Name`='$name',`Course`='$course',`Deaprtment`='$dept' where ID=.$id.";
    //     //   //  UPDATE student SET Name = 'Hiren1' WHERE student.ID = 4
    //     echo $query1;
    //     mysqli_query($conn,$query1);
    //     echo "Done";
    // }
    if(!$arrres)
    echo "Can not be deleted data doesn't exist";
    else
    {
        $query2="DELETE FROM `student` WHERE ID=".$id; 
        echo $query2;
         mysqli_query($conn,$query2);
          echo "Done";
    
        
    }
?>