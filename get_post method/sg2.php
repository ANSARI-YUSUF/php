

<html>

<body>
    <?php
    $temp="msccs";
    ?>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    First Name: <input type="text" name="fname"> <br>
    Last Name: <input type="text" name="lname"> <br>
    Course Name: <input type="text" name="course"> <br>
    <input type="submit" name="save">
</form>
</body>
</html>


<?php
if(isset ($_POST['save']))
{
    echo $_REQUEST['fname']."<br>";
    echo $_REQUEST['lname']."<br>";
    echo $_REQUEST['course']."<br>";
}

?>
