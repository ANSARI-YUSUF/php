<html>
<body>
<?php
    $temp="mSC2024";
?>
<form name="form1" method="get" action="new.php?n1=<?php echo $temp ?>">
    First Name: <input type="text" name="fname"> <br>
    Last Name: <input type="text" name="lname"> <br>
    Course Name: <input type="text" name="course"> <br>
    <input type="submit" name="submit">
</form>

</body>    
</html>



<html>
<body>
<?php
    //$temp;
    echo $_REQUEST["n1"];
    echo "<br>";
    $a=array();
           if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(isset($_POST["fname"]))
            {
                echo $_POST["fname"];
                $a[$_POST["fname"]]=$_POST["fname"];
                
            }
            if(isset($_POST["lname"]))
            {
                echo $_POST["lname"];
                $a[$_POST["lname"]]=$_POST["lname"];
                
            }
            if(isset($_POST["course"]))
            {
                echo $_POST["course"];
                $a[$_POST["course"]]=$_POST["course"];
                
            }
            print_r($a);
        }
        
    ?>


</body>    
</html>