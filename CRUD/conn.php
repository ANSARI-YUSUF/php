<?php
    $conn=mysqli_connect("localhost","root","","demob1") 
        or die("Connection not found". mysqli_error());
    if(isset($conn)){
        echo "Connection is Successful";
    }
?>