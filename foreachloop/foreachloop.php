<?php



echo "hellooo loop";echo"<br>";


$arr=["apple","bananan","bread","harpic","yuusug"];

for($i=0;$i<count($arr);$i++)
{
    echo "$arr[$i]"."<br> " ;
}
echo"<br>";
echo"<br>";
echo"<br>";

//better way 
foreach($arr as  $value)
{
    echo"$value"."<br>";
}

?>