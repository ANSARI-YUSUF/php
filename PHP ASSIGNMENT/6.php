<?php

// Define a variable
$day = "Monday";

// Using a switch statement to perform different actions based on the value of $day
switch ($day) {
    case "Monday":
        echo "It's Monday. Time to start the week!";
        break;
    case "Tuesday":
        echo "It's Tuesday. Keep pushing forward!";
        break;
    case "Wednesday":
        echo "It's Wednesday. Halfway through the week!";
        break;
    case "Thursday":
        echo "It's Thursday. Almost there!";
        break;
    case "Friday":
        echo "It's Friday. Time to celebrate!";
        break;
    case "Saturday":
        echo "It's Saturday. Enjoy the weekend!";
        break;
    case "Sunday":
        echo "It's Sunday. Relax and recharge!";
        break;
    default:
        echo "Invalid day!";
}

?>
