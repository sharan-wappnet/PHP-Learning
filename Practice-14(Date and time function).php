<?php
// get day
echo date("d")."<br>";  // Returns day of the month (01 to 31) (numeric representation)
echo date("D")."<br>";  // Returns day of the week (Mon to Sun) (short textual representation)
echo date("l")."<br>";  // Returns day of the week (Monday to Sunday) (long textual representation)


// get month
echo date("m")."<br>"; // Returns month of the year (01 to 12) (numeric representation)
echo date("M")."<br>"; // Returns month of the year (Jan to Dec) (short textual representation)
echo date("F")."<br>"; // Returns month of the year (January to December) (long textual representation)

// get year
echo date("Y")."<br>";  // Returns year in 4 digits
echo date("y")."<br>"; // Returns year in 2 digits

// get hours
echo date("h")."<br>"; // Returns hours - in 12 hours format
echo date("H")."<br>"; // Returns hours - in 24 hours format

// get minutes
echo date("i")."<br>";  // Returns minutes

// get seconds
echo date("s")."<br>";  // Returns seconds

echo date("a")."<br>"; // Returns am or pm
echo date("A")."<br>"; // Returns AM or PM


//time(void):int //eturns time in seconds since January 1 1970
 echo time()."<br>"; 

//Creating date using time method:
echo date("d/m/Y h:i:s A",time())."<br>";

//Calculating previous and next date:
echo date("d/m/Y h:i:s A",time() + (1*24*60*60))."<br>";
echo time()."<br>"; //current time 
echo strtotime("next Sunday"); // unix time stamp of string 

//DateTime: 
$date1 = new DateTime(); //predefined class for date functions
echo $date1->format("Y-m-d H:i:s"); // current time in formate we need

//DateTimeZone
$timezone = new DateTimeZone('America/New_York'); //represent a timezone
echo"<pre>";
print_r( $timezone);
echo "</pre>";


// date_default_timezone_set(timezoneName:string)

echo date_default_timezone_set("Asia/Kolkata");

?>