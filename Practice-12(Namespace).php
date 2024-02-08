<?php

/*

Namespaces in PHP provide a way to organize code and prevent naming conflicts between classes, functions, and constants. 
    -Prevent Naming Collisions:
    -Organize Code: 
    -Improve Code Readability
    -Facilitate Autoloading
    -Encourage Reusability

*/

//example 
// Define a namespace
namespace MyNamespace;

// Define a class within the namespace
class MyClass {
    public function greet() {
        echo "Hello from MyClass!";
    }
}

// Create an object of the class
$obj = new MyClass();
$obj->greet();

/*
In the example above, MyNamespace is the namespace identifier, and MyClass is a class defined within that namespace. To use the class MyClass outside the namespace, you would either need to fully qualify the class name ($obj = new MyNamespace\MyClass();) or import the namespace using the use keyword (use MyNamespace\MyClass;).
 */
?>