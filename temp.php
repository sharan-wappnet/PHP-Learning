<?php

#Reverse a Sentence Word by Word

$string = "The quick brown fox jumps over the lazy dog";

function reverse($string){
    $ary1 = explode(' ', $string );
    $ary2 = array_reverse($ary1);
     return implode(' ', $ary2);
}
echo "<br>".reverse($string);



//  problem 6: Remove Duplicate Characters from a String.

$duplicate = "The quick brown fox jumps over the lazy dog jumps over the lazy dog .";

function removeDuplicates($duplicate){
    $ary1 = explode(' ', $duplicate);
    $ary2 = array_unique($ary1);
     return implode(' ', $ary2);
}
echo "<br>".removeDuplicates($duplicate);

//Check if Two Strings are Anagrams of Each Other.


function areAnagrams($str1, $str2) {
    // Remove spaces and convert to lowercase
    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));

    // Sort the characters in both strings
    $str1Sorted = str_split($str1);
    sort($str1Sorted);
    $str1Sorted = implode('', $str1Sorted);

    $str2Sorted = str_split($str2);
    sort($str2Sorted);
    $str2Sorted = implode('', $str2Sorted);

    // Compare the sorted strings
    return $str1Sorted === $str2Sorted;
}

// Test the function
$string1 = "listen";
$string2 = "silent";

if (areAnagrams($string1, $string2)) {
    echo "<br>".$string1." and ".$string2." are anagrams.";
} else {
    echo "<br>".$string1." and ".$string2." are not anagrams.";
}



// Convert a String to Title Case.(1st character of word in uppercase)

$title = "the quick brown fox";

function toTitleCase($title){
    $ttc = ucwords(strtolower($title));
    return $ttc;
}
//also use array mathod 
// function toTitleCase($title){
//     $ary1 = explode(' ', $title);
//     $ary2 = array_map('ucfirst', $ary1);
//      return implode(' ', $ary2);
// }

echo "<br>".toTitleCase($title);

//Check if a String Contains Only Digits.

$digits = "1234232415342342";

function containsOnlyDigits($digits) {
    return preg_match('/^[0-9]+$/', $digits);
}


// Test the function
if (containsOnlyDigits($digits)){
    echo "<br>there are only digits";
}else{
    echo "<br>there are other characters too";
}

//Replace Substring with Another String.

$rplc = "ABCDEFGHIJKLMNOPQRST";

function replaceSubstring($rplc){
    $replaced = str_replace('EFGH','hdurbkj',$rplc);
    return $replaced;
}
echo "<br>".replaceSubstring($rplc);


//remove whitespaces from string 

function removeWhitespace($string){
    $string = preg_replace('/\s+/', '', $string);
    return $string;
}
echo "<br>".removeWhitespace($string);


//Check if a String is a Pangram (Contains all Letters of the Alphabet).

$pangram = "abcdefghijklmnopqrstuvwxyz";

function isPangram($pangram) {
    return preg_match('/[a-zA-Z]/',$pangram);
}
if(isPangram($pangram)){
    echo "<br>pangram";
}else{
    echo "<br> not pangram";
}

// Find the Most Common Character in a String.

$mcc = "manava";

function mostCommonChar($mcc){
    $ary1 = str_split($mcc);
    $ary2 = array_count_values($ary1);
    arsort($ary2);
    return array_key_first($ary2);

}
 echo "<br>most common char : ".mostCommonChar($mcc);

//Create a function that returns the smaller number.

echo "<br><br><br>";

function smallerNumber($num1, $num2){
    if($num1 < $num2){
        return $num1;
    }else{
        return $num2;
    }
}
echo "<br>Smaller number is : ".smallerNumber("21","44");
echo "<br>Smaller number is : ".smallerNumber("1500","1");
echo "<br>Smaller number is : ".smallerNumber("5","5");




//convert minutes into seconds 
function mtos($minutes){
    return $minutes * 60;
}
$minutes = 5;
echo "<br> Convert (".$minutes.") -> ".mtos($minutes);




?>
