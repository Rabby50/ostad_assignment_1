<?php

//This is a comparisition of three variable wich is larger among the three...

$num1 = 4;
$num2 = 8;
$num3 = 6;

if($num1>$num2 && $num1>$num3){
    echo"Num1 is greater then Num2 and Num3";
}
elseif($num2 > $num1 && $num2> $num3){
    echo"Num2 is greater then Num1 and Num3";
}
else{
    echo"Num3 is greater then Num1 and Num2";
}




?>