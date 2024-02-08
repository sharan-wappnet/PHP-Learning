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
$c = 25;
$d = 15;
// updating value of $a everytime with the operations;

echo $c = $d ."<br>";

echo  $c += $d ."<br>";

echo  $c -= $d ."<br>";

echo  $c *= $d ."<br>";

echo  $c /= $d ."<br>";

echo  $c %= $d ."<br> <br>";

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
echo "<br><br>";

//Conditional Assignment Operators(?:)


$age = 18;

 echo $result = ($age >= 18) ? "is miner" : "is adult";


 echo "<br><br>Control structure<br>";

 /*Control structure in php 
 -In PHP we have the following conditional statements:
        if statement - executes some code if one condition is true
        if...else statement - executes some code if a condition is true and another code if that condition is false
        if...elseif...else statement - executes different codes for more than two conditions
        switch statement - selects one of many blocks of code to be executed*/


//if statement - executes some code if one condition is true
$aman =15;
if($aman >=18){
    echo "<br>You are a miner";
}else{
    echo "<br>You are not a miner";
}

//Logical Operators
$ab = 10;
$bc = 11;
$cd = 12;

if ($ab == $bc && $bc > $cd){
    echo "<br>Both conditions are true";
}else{
    echo "<br>Both conditions are false";
}

//The if...elseif...else Statement

$abc = "haWai";

if ($abc == 10){
    echo "<br> its true";
}elseif ($abc == 11){ 
    echo "<br>its false";
}else{
    echo "<br>come to $abc<br>";
}

//short hand if statement is just ternary operator(?:)

 echo $bcd = ($abc == "haWai")? " come to hawai": " come not to hawai";

 echo "<br><br>Nested if  statement<br>";
 //Nested if statement is 

 $age1 = 23;
 $gender = "male";
 if ($age1 >= 18){
    echo "<br> ur an adult <br>";

    if ($gender == "male"){
        echo "<br> welcome sir, <br>";
    }else{
        echo "<br> welcome ma'am <br>";
    }
 }else{
    echo "<br> you are not an adult <br>";
 }

 //Switch Statement

 switch($age >=18){
    case true:
        echo "<br> you are an adult <br>";
        break;
    case false:
        echo "<br> you are not an adult <br>";
        break;
    default:
        echo "<br> you are not an adult <br>";
        break;
 }

//  also it used for making a choice
$choice = 2;

switch($choice){
    case 1:
    case 2:
    case 3:{
        echo "<br> your choice is $choice alone <br>";
    }
    break;
    default:
    echo "<br> your group it not here <br>";
    break;
}

?>