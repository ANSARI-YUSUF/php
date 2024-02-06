<?php

echo"hello array";
//numeric array
$arr=array("hello ","world ","yusuf");

echo $arr[0];
echo $arr[1];
echo $arr[2];
// echo $arr[3]
echo"<br>";
foreach($arr as $value)
{
    echo "<br>$value <br>";
}

echo"<br>";
//associative
$favcolor = array('yusuf'=>'red',
            'asish'=>'yello',
            'datti'=>'green',
        8=>'white');

            echo $favcolor['asish'];
            echo"<br>";
            echo $favcolor['datti'];
            echo "<br>";
            echo $favcolor[8];
            echo"<br>";


foreach($favcolor as $key=>$value)
{
    echo"<br> fav color of $key is $value";
}
?>