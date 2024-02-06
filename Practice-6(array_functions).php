<?php

use LDAP\Result;

echo "Array Built-in functions: -";

// array()-use to make array

// count()
$arr = ["rice","dal","sambhar","dasar","idli","vada"];

echo "<br>".count($arr)."<br>";
// sizeof()= same as count()


// end() = last element of array
echo "<br>".end($arr)."<br>";

// prev()= before element of pointer
 echo "<br>".prev($arr)."<br>";

// next() = after element of pointer
echo "<br>".next($arr)."<br>";

// reset() = reset pointer to the 1st element
 echo "<br>".reset($arr)."<br>";

// current() = current position of the pointer
echo "<br>".current($arr)."<br>";

// key() = assinging key of the pointer
 echo "<br>".key($arr)."<br>";

// array_keys() = is not supported in the current php version
// echo "<br>".array_key($arr)."<br>";

// array_values() = returns the values of the array without key
$arr1 = ["a" => "apple", "b" => "banana", "c" => "cherry"];
$arrvalue = array_values($arr1);
print_r($arrvalue);
echo "<br>";
// in_array()
$result = in_array("banana",$arr1);
echo  $result ? 'yes in the array' : 'no, not in the array';

// array_search() = returns the key assinged to the value like this 
echo '<pre>';
$search = array_search("cherry",$arr1);
print_r($search);

// array_push()= use to add items in the array

$push = array_push($arr1,"greps");
print_r($arr1);

// array_pop()
$pop = array_pop($arr1);
print_r($arr1);

// array_shift()

// array_unshift()
// array_merge()
// array_combine()
// array_flip()
// array_reverse()
// array_slice()
// array_splice()
// array_filter()
// array_map()
// array_reduce()
// array_sum()
// array_unique()
// array_intersect()
// array_diff()
// array_flip()
// array_key_exists()
// array_change_key_case()
// array_rand()
// array_reverse()
// array_column()





?>