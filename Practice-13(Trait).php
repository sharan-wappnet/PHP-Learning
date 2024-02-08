<?php

/*trait is a mechanism for code reuse that allows developers to share methods among classes without using inheritance
   - Traits enable horizontal composition of behavior, allowing classes to include multiple traits and inherit methods from each of them.

*/
trait trait1{ 
    public function showmsg(){
        echo "thi is trait1 ";
    }
}
trait trait2{
    public function show(){
        echo "thi is trait2 ";
    }
}
// They are designed to be included in classes and provide additional behavior to those classes.
class a{
    use trait1;
}

class b{
    use trait2;
}

$a = new a();
$a -> showmsg();
// $a -> show(); we can't use this coz show is a function of class b & trait2



//Example 

trait Logger {
    public function log($message) {
        echo "Logging: $message";
    }
}

class User {
    use Logger;

    public function doSomething() {
        // Use the log method provided by the Logger trait
        $this->log("<br> User has performed an action.<br>");
    }
}

$user = new User();
$user->doSomething(); // Output: Logging: User has performed an action.

/*interface
uses keyword implements and only declare the method of the interface in the driver class
*/
//Example interface
// Define an interface for renderable objects
interface Renderable {
    public function render();
}

// Implement the interface in a class
class Button implements Renderable {
    private $label;

    public function __construct($label) {
        $this->label = $label;
    }

    public function render() {
        return "<button>{$this->label}</button>";
    }
}

// Implementing another class that implements the interface
class Link implements Renderable {
    private $url;
    private $text;

    public function __construct($url, $text) {
        $this->url = $url;
        $this->text = $text;
    }

    public function render() {
        return "<a href='{$this->url}'>{$this->text}</a>";
    }
}

// Using objects of classes that implement the interface
$button = new Button("Click Me");
echo $button->render(); // Output: <button>Click Me</button>

$link = new Link("https://example.com", "Visit Example");
echo $link->render(); // Output: <a href='https://example.com'>Visit Example</a>




// inheritance is used in claasses where child class inherits the attributes or methods of the parent class.


//Example of inheritance

class Person { //perent class
    public $name;
    public $age;

    public function __construct($name, $age) { 
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        echo "<br>Mr ".$this->name." is ";
    }
}

class info extends Person{ //using the keyword extends
    public function getage() {
        echo "He is ".$this->age." years old";
    }
}

$person = new info("prasad", 25);//using child class to get the values of perent attribute

$person->getName();
$person->getage();

//Polymorphism is achieved through method overriding, where a subclass   provides a specific implementation of a method defined in its superclass 

//Example of Polymorphism
class animal{
    public function makesound(){
        echo "<br>animal makesound <br>";
    }
}

class dog extends animal{
    public function makesound(){ //method override from the superclass
        echo "<br>dog makesound<br>";
    }
}

class cat extends animal{
    public function makesound(){
        echo "<br>cat makesound<br>";
    }
}
//Creating new object 
$animal = new Animal();
$dog = new Dog();
$cat = new Cat();

echo $animal->makesound();
echo $dog ->makesound();
echo $cat->makesound();

?>