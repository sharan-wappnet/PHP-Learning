<?php
/*Error handling-
    managing errors and exceptions that occur during the execution of PHP scripts. 
    1.Error Reporting:
    2.Custom Error Handling:
    3.Custom Error Handling:
    4.Logging:
    5.Displaying Errors:
*/

//1.Error handling using die() function

if (file_exists("test.html")){
    $file = fopen("test.php", "r");
    if (is_resource($file)){ // is_resource() checks 
        echo "The file is open.";
    }else{
        echo "The file is not open.";
    }
}else{
    die("Error : File not found");
}

/*2. Creating a Custom Error Handler
    -We simply create a special function that can be called when an error occurs in PHP

    -This function must be able to handle a minimum of two parameters (error level and error message) but can accept up to five parameters (optionally: file, line-number, and the error context):

    -This function takes four parameters:
        $errno: The error level.
        $errstr: The error message.
        $errfile: The filename where the error occurred.
        $errline: The line number where the error occurred.


    */
// Define custom error handler function 
function customErrorHandler($errno,$errstr,$errfile,$errline){
    echo "<b> Error : </b> [$errno] $errstr<br>";
    echo "Error on line $errline in $errfile<br>";
}

//set custom error handler

set_error_handler("customErrorHandler");

// Triggering an error to test the custom error handler
echo $undefinedVariable;

// Check if the file was opened successfully
if (!$file) {
    // If the file couldn't be opened, trigger an error
    trigger_error("Failed to open file: $filename", E_USER_ERROR);
}

// Exceptions Handling
/* try...throw...catch method 
        Try − A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown".

        Throw − This is how you trigger an exception. Each "throw" must have at least one "catch".

        Catch − A "catch" block retrieves an exception and creates an object containing the exception information.
*/

try {
    $error = 'Always throw this error';
    throw new Exception($error);
    //An exception is not executed.
    echo  'never Executed';
}catch(Exception $e){
    echo 'Caught exception: '.$e->getMessage(), "\n"; // getMessage() message of exception
}

//Continue execution
echo "Hello, World!";

function exception_handler($exception) {
    echo "Uncaught exception: " , $exception->getMessage(), "\n";
 }
  
 set_exception_handler('exception_handler');
 throw new Exception('Uncaught Exception');
 
 echo "Not Executed\n";


?>