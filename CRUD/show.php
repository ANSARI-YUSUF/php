<?php
    require_once("conn.php");
    $query="select * from student";
    $result=mysqli_query($conn,$query);
    //print_r(mysqli_fetch_assoc($result));
    //print_r(mysqli_fetch_assoc($result));
    echo mysqli_num_rows($result);
    echo "<table border='1'>";
    while($record=mysqli_fetch_assoc($result))
    {
       echo "<tr>";
       echo "<td>";
        echo $record["Name"]. " ";
        echo "</td>";
        echo "<td>";
        echo $record["Course"]. " ";
        echo "</td>";
        echo "<td>";
        echo $record["Deaprtment"]. " ";
        echo "</td>";
        echo "<td>";
        echo "<a href='edit.php?id=".$record["id"]."'>Edit</a>";
        echo "</td>";
        echo "<td>";
        echo "<a onClick=\"javascript: return confirm('Are you sure');\" href='delete.php?id=".$record["id"]."'>Delete</a>";
        echo "</td>";
        echo "</tr>";
       
    }
    echo "</table>";

   
?>