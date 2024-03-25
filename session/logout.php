<?php


//logout.php<?php
//what is the sesiion
//way to store info in differnt pages
//verify user login info
//destroy session
session_start();
session_unset();
session_destroy();
echo"you have beenn logout";

?>
