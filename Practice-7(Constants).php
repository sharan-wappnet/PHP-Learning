<?php

/*constants are identifiers (names) that represent fixed values that do not change during the execution of a script

- use to store values as configuration settings, system paths, and mathematical constants.

-with using define( "nameof the constant",value{as per data type you want}, case_insensitive = true/false{fully optional incase} )

*/

/*
Predefined Constants:
    PHP also provides several predefined constants that are available in all scripts. Some commonly used predefined constants include:

    -PHP_VERSION: The version of the PHP parser.
    -PHP_OS: The operating system PHP is running on.
    -PHP_INT_MAX: The maximum integer value supported by the -current platform.

*/ 
//Example: -
echo "Constants using define() function<br>";

define("PI",3.14); // name = PI value is 3.14(float)
function maths($radios,$unit){
    echo "Area of the circle = ".$radios*PI*$radios."cm*cm<br>"; 
}

maths(5,"cm");

//constants are global.
echo "<br>Constants using const keywords<br>";

const PATH = "http://localhost/PHP-Learning/";

function runfile($filename){
    echo "File path for $filename : ".PATH."/$filename.php";
}
runfile("Practice-7(Constants)");

/*
Use const inside of a class to declare constants
define() - Works OUTSIDE of a class definition.
Const - Works INSIDE of a class definition.
*/ 




// Magic Constants: -
echo "<br><br> Magic Constants<br>";

echo "<br> __LINE__ use for => Number of lines: ".__LINE__."<br>";

echo "<br> __FILE__ use for =>  File path:".__FILE__."<br>";

echo "<br> __DIR__ use for => root directory:".__DIR__."<br>";

//__function__ use
function test(){
echo "<br> __FUNCTION__ use for => function name:".__FUNCTION__."<br>";
}
test();

//__class__ use
class testclass{
    public function __construct(){;}
    function getclass(){
        echo "<br> __CLASS__ use for => class name:".__CLASS__."<br>"; 
    }
}

echo "<br> __TRAIT__ use for => trait name:".__TRAIT__."<br>";

echo "<br> __METHOD__ use for => method name:".__METHOD__."<br>";

echo "<br> __NAMESPACE__ use for => namespace name:".__NAMESPACE__."<br>";

// ClassName::class

echo "Example for CLASSNAME::CLASS ";  
class javatpoint {    
}  
echo javatpoint::class;    //ClassName::class   

?>