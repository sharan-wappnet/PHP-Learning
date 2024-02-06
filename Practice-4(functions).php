<?php



/* 2 types of functions 
    -PHP Built-in Functions
            PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

            Please check out our PHP reference for a complete overview of the PHP built-in functions.
    
    -PHP User Defined Functions
            Besides the built-in PHP functions, it is possible to create your own functions.

            A function is a block of statements that can be used repeatedly in a program.
            A function will not execute automatically when a page loads.
            A function will be executed by a call to the function.

*/
//How to make a new function

function new_function(){
    echo "This is a new function <br>";
}

new_function();

//function with arguments

function judge($name,$court){
    echo "Today's judge is ".$name." from ".$court;
}

$mumbai = judge("prasad","mumbai");

echo $mumbai."<br>";

//example

function total($sumofmarks){
    $sum = 0;
    foreach($sumofmarks as $marks){
        $sum += $marks;
    }
    return $sum;
}

$shubh = [10,20,30,40,50];
$subhmarks = total($shubh);

echo "Shubham got ".$subhmarks." out of 250<br>" ;

//Variable Number  of arguments
function sumMyNum(...$x){
    $n = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++){
        $n += $x[$i];
    }
    return $n;
}

$output1 = sumMyNum(5,10,15,20,5,4,2,1,7);

echo "sum of the numbers is ".$output1."<br>";




// built in functions
echo "<br><br> Built -in  Functions<br>";


// echo / print: Used to output data to the browser or command line.

// count(): Returns the number of elements in an array or the number of properties in an object.used in line 55
$xy = [1,2,3,4,5];
echo count($xy);

// isset(): Checks whether a variable is set and is not NULL.
$isset = "";
echo "<br>".isset($isset);

// empty(): Checks whether a variable is empty.
$empty = "";
echo "<br>".empty($empty);

// is_numeric(): Checks whether a variable is numeric.
$num = 5;
echo "<br>".is_numeric($num);

// date(): Formats a timestamp into a human-readable date string.

echo "<br><br> Date Functions<br>";
echo date("d-m-y(h:i:s)<br>");


// time(): Returns the current Unix timestamp.
echo "<br>".time();



// strtotime(): Parses any English textual datetime description into a Unix timestamp.
echo "<br>".strtotime("06 feb 2024 15:10");

// file_get_contents(): Reads an entire file into a string.
$content = file_get_contents('practice3(Loops).php');
if ($content !== false){
    echo "<br>".$content;
}else{
    echo "<br>File not found";
}




// file_put_contents(): Writes a string to a file.
$data = "Hello, world!";
$file = 'test.php';

if (file_put_contents($file, $data) !== false) {
    echo "<br>Data written to $file successfully.";
} else {
    echo "<br>Failed to write data to $file.";
}

// json_encode() / json_decode(): Encode/decode JSON data.
$data = ['name' => 'jamal shaikh', 'age' =>20, 'gender' => 'male'];

$json_string = json_encode($data);
echo "<br>".$json_string;


// mail(): Sends an email.
$to = "sharan.wappent@gmail.com";
$subject = "Test mail()";
$message = "successfull test mail";

if(mail($to, $subject, $message)){
    echo "<br>successfull test mail";
}else{
    echo "<br>failed to send mail";
}



// filter_var() / filter_input(): Filters a variable with a specified filter.

// password_hash() / password_verify(): Hashes and verifies passwords using bcrypt algorithm.

// This are the functions which are daily used in php 
// (note: this functions does not include string and array functions)
// is_file(): Checks whether a file exists.

// is_dir(): Checks whether a directory exists.

// unlink(): Deletes a file.

// header(): Send a raw HTTP header.
?>