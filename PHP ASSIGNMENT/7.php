<!-- 7. Write a PHP code to demonstrate continue and break. -->
<?php
$dayOfWeek = "Wednesday";
switch ($dayOfWeek) {
    case "Monday":
        echo "It's the beginning of the week!";
        break;
    case "Wednesday":
        echo "It's the middle of the week!";
        break;
    case "Friday":
        echo "It's almost the weekend!";
        break;
    default:
        echo "It's just another day.";
}
?>