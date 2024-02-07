<!-- 9. Write a PHP code to print multiplication table of the number entered by user.  -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the user-entered number
    $userNumber = $_POST['numbers'];

    // Validate that the input is a positive integer
    if (is_numeric($userNumber) && $userNumber > 0 && $userNumber == (int)$userNumber) {
        // Display the multiplication table
        echo "<h3>Multiplication Table for $userNumber</h3>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$userNumber x $i</td><td>=</td><td>" . ($userNumber * $i) . "</td></tr>";
        }
        echo "</table>";
    } else {
        // Display an error message for invalid input
        echo "<p>Please enter a positive integer.</p>";
    }
}
?>