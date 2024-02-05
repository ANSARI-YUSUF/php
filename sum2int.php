<?php



function sum($a)
{
    $num;
    $sum=0;
    while ($a!=NULL)
    {
        $num=$a%10;
        $a=$a/10;
        $sum=$sum+$num;
    }
    return $sum;

}


?>


<?php


$firstint=sum(799);
$secondint=$firstint+sum(309);

echo"<br>";
echo"$firstint";
echo"<br>";
echo"$secondint";


?>