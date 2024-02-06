<?php
/*
-In PHP, we have the following loop types:
        while - loops through a block of code as long as the specified condition is true
        do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
        for - loops through a block of code a specified number of times
        foreach - loops through a block of code for each element in an array
*/


//For loop

echo "For loop: - <br>";
//(initialization; condition ; increment/decrement){ code block}
for($i = 0;$i<=10;$i++){
    echo $i."<br>";
}

//while loop
echo "<br><br>While loop: - <br>";

$j = 0;
//(condition) { code ; increment/decrement}
while($j < 100){
    $j += 10;;
    echo $j."<br>";
}$j++;


//do...while loop
echo "<br><br>Do..While loop: - <br>"; // The condition does not have to be a counter, it could be the status of an operation or any condition that evaluates to either true or false.
$k = 10;
do{
    echo $k."<br>";
    $k--;
}while($k >=0);


//foreach loop
echo "<br><br> foreach loop: - <br>"; 
$choice = [ "red", "green", "blue"];

foreach($choice as $color){
    echo $color."<br>";
}

//nested loop

echo "<br><br> Nested loop: - <br>";

foreach($choice as $color){
    foreach($choice as $color2){
        echo $color."-".$color2."<br>";
    }
}


//statements used in php are Break and Continue
// Break statement use to get exit from the loop

echo "<br><br>Break statement: - <br>";

$l = 1;
while($l <= 6){
    if($l == 3) break; //it breaks when we got $i = 3 till it will increase the value
    echo $l."<br>";
    $l++;
}

//Continue statement use to get exit from the loop

echo "<br><br>Continue statement: - <br>";

$m = 0;
while($m <= 6){
    $m++;
    if($m == 3) continue; //it continues when we got $m = 3 till it will increase the value 
    echo $m."<br>";
}
?>