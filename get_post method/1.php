<?php


$a=1000;
$b=11;
echo "$a";

function printa()
{
    // $a=1;
global $a,$b;
$a=8888;
$b=9999;
    echo "local var=$a>>>,$b";
}
printa();
echo "<br>";
echo "local var=$a>>>,$b";


echo"<br>";

//all global variable
echo var_dump($GLOBALS);


echo "<br>";
echo var_dump($a);
echo var_dump($b);

?>





