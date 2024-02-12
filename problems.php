<?php

// Problem 1 : Find the longest word from the sentence 

$problem1 = "The quick brown fox jumps over the lazy dog";
$result1 = problem1_findlongestword($problem1);

function problem1_findlongestword($problem1){
    $words1 = str_word_count($problem1,1); #split sentence into an array of words
    $longest1 = ''; //an empty string to store the longest word found.
    foreach ($words1 as $key => $value) {
        if(strlen($value) > strlen($longest1)){
            $longest1 = $value;
        }
    } return $longest1;
}

echo $result1;


//Problem 2: Reverse Words in a String.

$problem2 = "The quick brown fox jumps over the lazy dog";
$result2 = problem2_reversewords($problem2);

function problem2_reversewords($problem2){
    $word2 = explode(' ',$problem2); //saperate the words into an array 
    $result2 = implode(' ',array_reverse($word2)); // reverse the words in array and  making a string by using implode() function
    return $result2;
}

echo "<br>".$result2;

//Problem 3 :  Count Vowels in a String

$problem3 = "The quick brown fox jumps over the lazy dog";
$result3 = problem3_countvowels($problem3);

function problem3_countvowels($problem3){
    $vowels3 = array('a','e','i','o','u');
    $count3 = 0;
    foreach ($vowels3 as $key => $value) {
        if(strpos($problem3,$value)!== false){ // 
            $count3++;
        }
    } return $count3;
}

echo "<br>The vowels in the sentence are : ".$result3;

//Problem 4 : Count Words in a String.

$problem4 = "The quick brown fox jumps over the lazy dog";
$result4 = problem4_countwords($problem4);

function problem4_countwords($problem4){
    $word4 = explode(' ',$problem4); //saperate the words into an array 
    $count4 = count($word4); // count the number of words
    return $count4;
}

echo "<br>The number of words in the sentence are : ".$result4;

//problem 5 :  that checks if a given string is a palindrome (reads the same forwards and backwards).

$problem5 = "A man, a plan, a canal, Panama";
$result5 = problem5_palindrome($problem5);

function problem5_palindrome($problem5){
        // Remove non-alphanumeric characters and convert to lowercase
        $cleanStr5 = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $problem5));
        // Compare the string with its reverse
        return $cleanStr5 === strrev($cleanStr5);
}
    if(problem5_palindrome($result5)){
        echo "<br>The palindrome is : ".$result5;
    }else{
        echo "<br>The string is not a palindrome";
    }

//problem 6 :  Find the Maximum Value in an Array

$problem6 = "3,4,5,8,4,6,8";

$result6 = problem6_findmax($problem6);

function problem6_findmax($problem6){
    $numbers6 = explode(',', $problem6);
    return max($numbers6); // max() function to find the max frrom the array 
}

echo "<br>The maximum value in the array is : ".$result6;

//Problem 7 : Remove Duplicates from an Array.

$problem7 = "3,4,5,8,4,6,8,4,5,7";

$result7 = problem7_removeDuplicates($problem7);
function problem7_removeDuplicates($problem7){
    $numbers7 = explode(',', $problem7);
    return implode( ',',array_unique($numbers7)); // array_unique() function to remove duplicates from the array 
    
} 

echo "<br>The array after removing duplicates is : ".$result7;

//Problem 8 : Remove the values which repeats more than 1 time in the array

#how to filter an array

$problem8 = "3,4,5,8,4,6,8,4,5,7";
$result8 = problem8_removeRepeatedValues($problem8);
function problem8_removeRepeatedValues($problem8){
    $numbers8 = explode(',', $problem8);

    $count8 = array_count_values($numbers8); //count the occurences of each element
    
    //filter the values that are occur once
    $filter8 = array_filter($numbers8,  function($value) use ($count8){
        return $count8[$value] == 1;
    });
    return implode( ',', array_values($filter8)); //filter

}

echo "<br>The array after removing repeated values is : ".$result8;

// Problem 9 : Find the Second Largest Element in an Array

$problem9 = ["apple", "banana", "orange", "grape", "kiwi"];
$result9 = problem9_Secondlargest($problem9);

function problem9_Secondlargest($problem9){
    foreach ($problem9 as $value){

    }
    rsort($problem9);
    return $problem9[1];

}

echo "<br>The last 2nd element  : ".$result9;


$test = ["apple", "banana", "orange", "grape", "kiwi"];

foreach ($test as $key => $value){

    echo $value."<br>";

}

















?>