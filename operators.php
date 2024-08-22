<?php
$num1 = 10;
$num2 = 40;

//arthamatic operations
$sum = $num1 + $num2;
$difference = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
$remainder = $num1 % $num2;


//output format
echo "sum :" . $sum . "</br>";
echo "difference :" . $difference . "</br>";
echo "multiplication :" . $multiplication . "</br>";
echo "division :" . $division ."</br>";
echo "remainder :" . $remainder . "</br>";


// asignment operator
$a = 50;

$a += 5;
echo "after += 5, value of a: $a \n" ;


$a -= 9;
echo "after -= 9, value of a: $a \n";

$a *= 25;
echo "after *= 25, value of a: $a \n";

$a /= 5;
echo "after /= 5, value of a: $a \n";

$a %=6;
echo "after %=6, value of a: $a \n";

//comparison operators
$result = ($num1 > $num2); // true
var_dump($result);
echo "<br>";

//logical operators
$is_true = true;
$is_false = false;
$logiacl_and =$is_true && $is_false;
$logiacl_or =$is_true || $is_false;
$logical_not = !$is_true;
var_dump($logiacl_and);
echo "</br>";
var_dump($logiacl_or);
echo "</br>";
var_dump($logical_not);
echo "</br>";

?> 
      
      
      
      

