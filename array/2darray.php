<?php
echo "2d array";

//2d aaray
$multiarray=array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11,12)
);

        echo var_dump($multiarray);

        echo"<br>";
        echo $multiarray[0][0];
        echo $multiarray[0][2];
        echo"<br>";
        //printing 2d array

        for($i=0;$i<count($multiarray);$i++)
        {
            
            echo var_dump($multiarray[$i]);
            echo"<br>";
        }

        echo"<br>";
        for($i=0;$i<count($multiarray);$i++)
        {
            for($j=0 ; $j<count($multiarray[$i]);$j++)
            {
            echo $multiarray[$i][$j];
            echo " ";
            }
            echo"<br>";
        }

        echo"<br>";
        echo"<br>";
        echo"<br>";
        //2d associative array
        $multiaa=array(
           "yusuf"=> array('a'=>1,'d'=>2,'g'=>3,'j'=>4),
           "asish"=> array('b'=>5,'e'=>6,'h'=>7,'k'=>8),
            "datti"=>array('c'=>11,'f'=>12,'i'=>10,'l'=>9)
        );
        echo"<pre>";
print_r($multiaa);
echo"<pre>";

        foreach($multiaa as $key=>$value)
        {
            echo"$key"." ";
            foreach($value as $value1)
            {
                echo"$value1"," ";
            }
           echo "<br>";
        }
        // for($i=0 ;$i<count($multiaa);$i++)
        // {
        //     for($j=0;$j<count($multiaa[$i]);$j++)
        //     {
        //         echo"$multiaa[$i][$j]";
        //     }
        //     echo"<br>";
        // }

?>