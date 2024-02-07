<!-- 10. Write a
PHP code to take input from user for no of row and column and generate
dynamic table. -->


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $rows = $_POST['rows'];
    $columns = $_POST['columns'];


    if (is_numeric($rows) && is_numeric($columns) && $rows > 0 && $columns > 0 &&
        $rows == (int)$rows && $columns == (int)$columns) {

      
        echo "<h3>Dynamic Table</h3>";
        echo "<table border='1'>";

        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $columns; $j++) {
                echo "<td>Row $i, Column $j</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
     
        echo "<p>Please enter positive integers for rows and columns.</p>";
    }
}
?>