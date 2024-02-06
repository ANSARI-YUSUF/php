



<html>

<body>
    <?php
    $temp="msccs";
    ?>
<form name="form1" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    First Name: <input type="text" name="fname"> <br>
    Last Name: <input type="text" name="lname"> <br>
    Course Name: <input type="text" name="course"> <br>
    <input type="submit" name="submit">
</form>

<?php

if(isset($_POST['submit']))
{
    echo $_POST['fname']."<br>";
    echo $_POST['lname']."<br>";
    echo $_POST['course']."<br>";

}
?>
</body>
</html>




