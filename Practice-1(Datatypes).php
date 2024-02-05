<?php

/*Variables
  -Containers for Storing information 
  
  -Rules for PHP variables:
      A variable starts with the $ sign, followed by the name of the variable
      A variable name must start with a letter or the underscore character
      A variable name cannot start with a number
      A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
      Variable names are case-sensitive ($age and $AGE are two different variables)

  - PHP supports the following data types:
        String
        Integer
        Float (floating point numbers - also called double)
        Boolean
        Array
        Object
        NULL
        Resource

*/

// Example:-
echo $string = "hello ";  //String
echo $num = 1;  //Intege
echo $float = 2.444; //Float
echo $boolean = true; //Boolean
echo $null = null; //null value

echo "<br> <br>";

//array has 3 types of values (use var_dump to export array like variables)
// 1. Indexed array 
 var_dump($indexedarray = ["a", "b", "c", "d"]);

 echo "<br>";

//2. Associative array
 var_dump($assocaiativearray = ["a" => "b", "c" => "d"]);

 echo "<br>";

 //3. Multi dimensional array
 var_dump($multidimensionalarray = ["a" => ["b" => "c", "d" => "e"], "f" => ["g" => "h", "i" => "j"]]);


 echo "<br> <br>";

 //object 
              //define class
          class _Object {
            //properties
            public $name;
            public $color;

            //constructor
            public function __construct($name, $color)
            {
              $this->name = $name;
              $this->color = $color;
            }  
            //method
            public function obj(){
              return " the {$this->color} {$this->name} is valid.";
            }
          }
          //creating an object 
          $my_object = new _Object("jug", "red");

          echo "My object is {$my_object->name}.\n";

          //call object methods
          echo $my_object-> obj();
 
          echo "<br> <br>";

 //change the varible properties

 $x = 5;
 var_dump($x);

echo "<br>";

$x = "hello world";
var_dump($x);

echo "<br> <br>";


/* Resources Datatype 

 - The reasource data type represents a special type of vvariable that holds a reference to an external resource
 -Uses
          -database connection 
          -File handles
          -Streams
          -Image Handles
          -External Libraries
*/

//Example

//Open a file handle
$OpenFile = fopen("test.html", "r");

//Check if OpenFile is a resource or not 
if (is_resource($OpenFile)){
  echo "The file is open.\n";
}
else
{
  echo "The file is not open.\n";
}

//close the file handle
fclose($OpenFile);


?>