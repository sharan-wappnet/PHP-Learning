<?php

use LDAP\Result;

echo "Array Built-in functions: -";

// array()-use to make array

// count()
$arr = ["rice","dal","sambhar"];

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

// in_array() =element exists in array or not 
$result = in_array("banana",$arr1);
echo  $result ? 'yes in the array' : 'no, not in the array';

// array_search() = returns the key assinged to the value like this 
echo '<pre>';
$search = array_search("cherry",$arr1);
print_r($search);

// array_push()= use to add items in the array

$push = array_push($arr1,"greps");
print_r($arr1);

// array_pop() = remove the last element
$pop = array_pop($arr1);
print_r($arr1);

// array_shift() =The array_shift() function removes the first element from an array and returns it. All numerical array keys will be modified to start counting from zero while literal keys won't be affected.
$shift = array_shift($arr);
print_r($arr);

// array_unshift() = will undo the effect or add new item as 1st element of the array
$unshift = array_unshift($arr,"Onigiri");
print_r($arr);

// array_merge() = use to merge two arrays;
/* $merge = array_merge($arr,$arr1);
 print_r($merge);
*/

// array_combine()
$combine = array_combine($arr,$arr1);
print_r($combine);

// array_flip() = switch <=> key with values
$flip = array_flip($combine);
print_r($flip);

// array_reverse() = reverse the elements of the array
$reverse = array_reverse($flip);
print_r($reverse);

// array_slice() = saperate into a slice of start to end 
$slice = array_slice($reverse,0,2);
print_r($slice);

// array_filter()
$filter = array_filter($combine,function($value){
    return $value < 1 ;
});
print_r($filter);

// array_map() = function applies a callback function to each element of an array and returns the modified array.
$counting = [1,2,3,4,5,6,7,8,9];
$array_map = array_map(function($value){
    return $value * 2;
},$counting);
print_r($array_map);


// array_reduce() = reduce array to singlle value element
$reduce = array_reduce($counting,function($carry,$item){
    return $carry+$item;
},0);

echo $reduce;
// array_sum() = sum the array values | only works for num array 
$sum = array_sum($counting);
print_r($sum);

// array_unique() = to get the unique elements

// array_intersect() = it gives the matching values fiom 2 or more aarays that has the same key-value pairs

// array_diff() = opposite of array_intersect()
$array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
$array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
$diff_array = array_diff($array2, $array1); //the 1st array's unique element will be published 
print_r($diff_array);

// array_key_exists() checks the key exists or not 

if(array_key_exists("b",$array1))//1st is key 2nd is
{
    echo "yes";
}else{
    echo "no";
}

// array_change_key_case()= use to change the case of the 'all' keys
$lwrcase = array_change_key_case($array1,CASE_UPPER);

print_r($lwrcase);
// array_rand() = Returns random keys from an array
$rndm = array_rand($array1,2);
print_r($rndm);


// array_column() = use for matrix array with column
$matrix = [
    ['name' => "James", 'id' => 1, 'salary' =>  330 ],
    ['name' => "Jamal", 'id' => 2, 'salary' => 340 ],
    ['name' => "Jignesh", 'id' => 3, 'salary' => 350 ]
];
$name = array_column($matrix,"name");
print_r($name);





?>