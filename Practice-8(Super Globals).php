<?php

/* Super Globals
superglobals are special arrays that are accessible from any scope in a script without the need for explicit declaration. They are called "superglobals" because they are always accessible, regardless of scope.

-The PHP superglobal variables are:
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

//$GLOBAL
echo "GLOBALS super global: -<br>";
$initial = "harry";
function globel(){
    echo  "<br> gives the value of initial variable =".$GLOBALS['initial'];
}
globel();

//$_SERVER 

echo '<pre>';

print_r($_SERVER);//will give you all server related information

echo '</pre>';

echo "FILEPATH USING PHP_SELF: ".$_SERVER['PHP_SELF'];// YOU CAN use sub variable to get the exact attribute information

//$GET and $POST 
echo "<br> With the Get method:-<br>";
echo '<pre>';

print_r($_GET); //gives us the value in URL

echo $_GET['user'];
echo '</pre>';
//----------------------------------------------------------------
echo "<br> With the post method:-<br>";

echo '<pre>';

print_r($_POST); // just give the file name in URL

echo $_POST['user'];
echo '</pre>';

// _REQUEST is used in case u forgot which method used in html u can use for any of them.


//$_FILES
echo '<pre>';
print_r($_FILES); //also can use like this 
echo '</pre>';

//TO check if the file is uploaded or not 
if(isset($_POST['Upload'])){

    $filename = $_FILES['file']['name'];
    $filetype = $_FILES['file']['type'];
    $filesize = $_FILES['file']['size'];
    $filetemp = $_FILES['file']['temp_name'];
    if(is_uploaded_file($filetemp))
    {
        echo $filename." is uploaded";
    }
    else
    {
        echo $filename." is not uploaded";
    }
}


//$_COOKIE 
//to reate cookie we use setcookie function
if(setcookie('name','Sharan Chaudhari',time()+60*60)){ //time is used for start date and expiry date of the cookie (key value timestamp)
    echo "Cookie is created";
}

echo "<br>Name : ".$_COOKIE['name']."<br>" ; //to get the name of the cookie

//$_SESSION

session_start();

echo session_id()."<br>";
$_SESSION['id'] = 12345;
$_SESSION['name'] = 'Sharan Chaudhari';

echo $_SESSION['id']."<br>";

//$_ENV = environment variables values

echo '<pre>';
print_r($_ENV);
echo '</pre>';

print_r(getenv());
?>