<?php
//String functions 

// strlen()
$x = "stringlength";
echo "<br>".strlen($x),"<br>";

// str_replace() = to replace specigfic characters
$y = "stringreplace";
echo "<br>".str_replace("gre","reg",$y)."<br>";

// strpos()
echo "<br>".strpos($y,"g")."<br>";

// substr()
echo "<br>".substr($y,8,12);

// strtolower()=lowecase
$higher = "CAPITAL LETTER      ";
echo "<br>".strtolower($higher)."<br>";

// strtoupper()=uppercase
echo "<br>".strtoupper($higher)."<br>";

// trim()=eliminate extraspace
echo "<br>".trim($higher)."<br><br>";

// explode() = shaperate the values based on the given character to saperate into array
$fruit = "apple,banana,blueberry,chocolate,chai,biscuit";

$arrfruit = explode(",", $fruit);

var_dump($arrfruit);

// implode()

echo "<br><br>".implode(",",$arrfruit)."<br><br>";

// strrev() = reverse the string

echo "<br>".strrev($higher)."<br><br>";
// htmlspecialchars()

// str_pad()
$pad ="strpad\nvariable ";
echo "<br><br>".str_pad($pad,20,"-")."<br><br>";

// ucfirst()
echo "<br>".ucfirst($pad)."<br><br>";


// lcfirst()
echo "<br>".lcfirst($pad)."<br><br>";

// ucwords()
echo "<br>".ucwords($pad)."<br><br>";


// str_repeat()
echo "<br>".str_repeat($pad,2)."<br><br>";

// str_shuffle()
echo "<br>".str_shuffle($pad)."<br><br>";

// str_word_count()
echo "<br>".str_word_count($pad)."<br><br>";


// nl2br()
echo "<br>".nl2br($pad)."<br><br>";

// substr_replace()

echo "<br>".substr_replace($pad,"jay",7,4)."<br><br>";

// strcasecmp()
echo strcasecmp("JAY","jay")."<br><br>";

// stristr()
echo "<br>".stristr($pad,"var")."<br><br>";

// strtr()
$pad1 = ["substring variables"];
echo "<br>".strtr("var",$pad1)."<br><br>";

// strstr() it is case sensitive that;'s the only difference here


// strcoll()= It is useful for comparing strings in different languages or regions where the sorting order may vary. The comparison is done based on the collation order determined by the locale settings.

// strcspn()
$string = "Hello, World!";
$charlist = " ,!";

$length = strcspn($string, $charlist);

echo "Length of initial segment without characters from charlist: $length <br>"; // Outputs: 5

// str_getcsv() =same as explode converts into array 

// str_ireplace() = replaces the substring from the main string  which 
$input = "Hello, world!";
$search = "hello";
$replace = "Hi";

echo "<br>".str_ireplace($search, $replace, $input)."<br><br>";

// strripos() - occurence from the last index



// strspn() = how many char are matched and are same in length

// strpbrk()= get the after string of mentioned character

// money_format() not in php5

// number_format()
$num = 12345678.45;
echo number_format($num,2);

// ord() = asciivalue of character 
echo "<br><br>".ord("A")."<br>";

// chr()
echo "<br>".chr(65)."<br>";

// strchr()

// strpbrk()

// substr_compare()

// vfprintf()

// vsprintf()

// wordwrap()

?>