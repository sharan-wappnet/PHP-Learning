<?php
/*
Regular Expressions: 
    Technique for parsing and extracting data from text. 
    
    -we use main 2 functions
        -preg_match()
        -preg_match_all()
    
    -preg_match(pattern/modifiers,string,array)  use for the 1st matching word/character 
    -preg_match_all(pattern/modifiers,string,array) use for the all matching words/characters
*/

$example = "PHP is the web php scripting language of choices. 1234567890";

$regex = preg_match("/PHP/i",$example); //without array it return true/false value & case sensitive function

if($regex){
    echo "<br>Match Found";
}else{
    echo "<br>Match Not Found";
}

$regex = preg_match_all("/php/i",$example,$expo); 

echo "<pre>";
print_r($expo);
echo "</pre>";


$regex = preg_match_all("/php|web/i",$example,$expo);  // "|" use for multiple matching words/characters

echo "<pre>";
print_r($expo);
echo "</pre>";

//single characters match without "|" we use [], "^" is use as not 
$regex = preg_match_all("/[wot]/i",$example,$expo); 
// $regex = preg_match_all("/[^wot]/i",$example,$expo); 
echo "<pre>";
print_r($expo);
echo "</pre>";


$regex = preg_match_all("/[a-d2-5]/i",$example,$expo); // range matches of characters

echo "<pre>";
print_r($expo);
echo "</pre>";

//Also usable as "/file[^1-3]/","/w[a-j]b/","/[^abc]at/"  

$regex = preg_match_all("/\w/i",$example,$expo);
echo "<pre>";
print_r($expo);
echo "</pre>";

/*
Asin uper expo we use "\w" detects alpha numerical values 
    -\W =special characters
    -\w =alpha numerical values
    -\d =digits
    -\D =non digits
    -\s =space
    -\S =non space
    -\b = border 
    .-> "." dot as anything after this ("/ph./")


*/

/*
Quantifiers:- 
    *       0 or More
    +       1 or More
    ?       0 or One
    {3}     Exact Number
    {3,5}   Range of Numbers (minimum, maximum)
    {3,}    Minimum Number to Infinite

Greedy & lszzy Matche: -
    *n      Greedy Match
    +n      Greedy Match
    *?n     Lazy Match
    +?n     Lazy Match

Assertions:-
    ?=n     Positive Lookahead
    ?!n     Negative Lookahead
    ?<=     Positive Lookbehind
    ?!=     Negative Lookbehind
    ?<!     Negative Lookbehind
*/



 



?>