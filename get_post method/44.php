<?php

echo "<pre>";
print_r($_REQUEST);

print_r($_SERVER);
echo "</pre>";

echo $_REQUEST['fname'];
echo $_REQUEST['lname'];
echo $_REQUEST['course'];
echo $_SERVER['PHP_SELF'];

?>