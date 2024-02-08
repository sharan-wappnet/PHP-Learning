<?php
/*
Classes and objects are fundamental concepts of oop:
-Class
    A class is a blueprint or template for creating objects 
    define properties(atrributes which are variables) and methods(functions) that object of the class will have 
    --properties are declared using 'public','priavte' or  'protected' keywords
    methods are functions defined within the class 
*/
//creating a class car 
class Car{
    public $brand; //declare the attributes
    public $color;
    public $model;

    //constructor
    public function __construct($brand, $color, $model){
        $this->brand = $brand;
        $this->color = $color;
        $this->model = $model;
    }

    public function start(){ // The $this keyword refers to the current object, and is only available inside methods.
        echo $this-> brand." ". $this->model."  is starting<br>";
    } 
    public function drive(){
        echo "Driving the "." ".$this->color." ".  $this-> brand." ". $this -> model."...<br>";
    }
}
/*
-Object
    An object is an instance of a class
*/



//creating an object of car class // value for obects
$car1 = new Car("ford","red","Mustang"); //Constructor is use  to direclty put the values in $car variable   
$car2 = new Car("Honda","Blue","City");



//Call method on the object

$car1 -> start();
$car2 -> drive();



//Example with more clearity 

class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    function set_color($color) {
      $this->color = $color;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $apple = new Fruit();
  $apple->set_name('Apple');
  $apple->set_color('Red');
  echo "Name: " . $apple->get_name();
  echo "<br>";
  echo "Color: " . $apple->get_color();


?>