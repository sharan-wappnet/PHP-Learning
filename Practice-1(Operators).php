<?php

/*
-PHP divides the operators in the following groups:
    Arithmetic operators
    Assignment operators
    Comparison operators
    Increment/Decrement operators
    Logical operators
    String operators
    Array operators
    Conditional assignment operators
*/

//1.Arithmetic Operators (+,-,*,/,%,**)
echo "Arithmetic Operators<br>";

$a = 10;
$b = 20;

//Addition
echo $a + $b;
echo "<br>"; 
//Subtraction
echo $a - $b;
echo "<br>";
//Multiplication
echo $a * $b;
echo "<br>";
//Division
echo $a / $b;
echo "<br>";
//Modulus
echo $a%$b;
echo "<br>";
//Exponentiation
echo $a**$b;
echo "<br> <br>";

//2.Assignment Operators (=,+=,-=,*=,/=,%=,**=)
echo "Assignment Operators<br>";

// updating value of $a everytime with the operations;

echo $a = $b ."<br>";

echo  $a += $b ."<br>";

echo  $a -= $b ."<br>";

echo  $a *= $b ."<br>";

echo  $a /= $b ."<br>";

echo  $a %= $b ."<br>";

//Increment / Decrement Operators



?>