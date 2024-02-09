<?php
/*
Ways to coknnect to a mysql database
1. MySQLi extension
    -procedural database
    -oops database
2. PD0(php data options))
*/

//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "phplearning";

// Create a Connection object
$conn = new mysqli($servername,$username,$password,$database); //mysqli_connect  function is use to establish the connection with myphpadmin with xampp

//die if connection was not succcessful
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());  #mysqli_error /mysqli_connect_error to see if connection has error 
}else{
    echo "Connected successfully";
}



//Create a database 

$sql = "CREATE DATABASE IF NOT EXISTS phplearning";
$result = mysqli_query($conn, $sql); //to run a sql query
echo $result;

// $sql = "DELETE DATABASE IF EXISTS test";
// $result = mysqli_query($conn, $sql); //to delete the database

//check the database creation success
if($result){
    echo "<BR>Database created successfully";
}else{
    echo "<BR>Database creation failed because :".mysqli_error($conn); 
}

//creating a new data table

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$result = mysqli_query($conn, $sql);

//check the table creation success
if($result){
    echo "<BR>table is created successfully";
}else{
    echo "<BR>table  creation failed because :".mysqli_error($conn); 
}

// Insert data into table 
// Get form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$sql = "INSERT INTO users (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}









?>