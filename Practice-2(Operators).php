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

echo  $a %= $b ."<br> <br>";

//Increment / Decrement Operators (++$x,$x++,--$x,$x--)

echo "<br><br>Increment / Decrement Operators<br>";

$x = 10;
$y = 2;

echo ++$y; // pre-increment value =3

echo "<br>";// current value is 10

echo $x++; // post-increment value =10(no aaction bec=fore the loop ends)

echo "<br>";// current value of x=11,y=3 

echo --$y; // pre-decrement value = 2

echo "<br>";//current value is 11

echo $x--;// post-decrement value =11
// after this value is 10

echo "<br><br>Logical Operators<br>";

var_dump($a and $b);

echo "<br>";

var_dump($a or $b);

echo "<br>";

var_dump($a xor $b);

echo "<br>";

var_dump($a && $b);

echo "<br>";

var_dump($a || $b);

echo "<br>";

var_dump($a != $b);
echo "<br>";

    
?>