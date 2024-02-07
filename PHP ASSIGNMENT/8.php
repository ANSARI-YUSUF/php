<!-- 8. Write a PHP code to find the factorial of the number entered by user -->


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userNumber = $_POST['number'];
    if (is_numeric($userNumber) && $userNumber >= 0 && $userNumber == (int)$userNumber) {
        $factorial = 1;
        for ($i = 1; $i <= $userNumber; $i++) {
            $factorial *= $i;
        }
        echo "<p>The factorial of $userNumber is: $factorial</p>";
    } else {
 
        echo "<p>Please enter a non-negative integer.</p>";
    }
}
?>