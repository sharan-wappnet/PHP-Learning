<?php
/*
File handling used for :
    -To create files& folders
    -To read files
    -Get file iformation
    -change permissions    
*/

//1st we needto create a new folder

if(!file_exists("textfiles")){ //file exist checks if the file exists
    mkdir("textfiles"); //make a directory 
}else{
    echo "Folder is already created<br/>";
}
$folder = "textfiles";

//to remole a folder/directory 
/*
if(file_exists("textfiles")){
    rmdir("textfiles"); // to remove the directory ALSO USE delete() function
}else{
    echo "Folder is not created";
}
*/

/*To rename a file 
if(file_exists("textfiles")){
    rename("textfiles","textfiles1"); // to rename the file 
    echo "File is renamed";
}else{
    echo "File Not exists";
*/

//file property related functions
$readme = "filehandle.txt";
echo "filesize of ".$readme." is ".filesize($readme)."<br>"; //size of the file
echo "filetype of ".$readme." is ".filetype($readme)."<br>"; // file type of the file
echo "filetype of ".$folder." is ".filetype("textfiles")."<br>";
echo "path of the file is ".realpath($readme)."<br>"; //full path of the file 
echo "<pre>";
print_r(pathinfo($readme)); //pathinfo dirname give us basename extension and filename
echo "</pre>";

//use pathinfo with realpath = gives [dirname] as path of the file 
$filepath = realpath($readme);
    echo "<pre>";
    print_r(pathinfo($filepath));
    echo "</pre>";

//if you only need 1 parameter then USE (filename,<attribute>) = PATHINFO_FILENAME/EXTENSION/BASENAME/DIRNAME
echo "<pre>";
print_r(pathinfo($filepath,PATHINFO_DIRNAME));
echo "</pre>";

//to get the basename we can also use 
echo "base name is ".basename($filepath,".txt");
echo "<br>base dirname is ".dirname($filepath,2); // dirname(file,Pathlevel);

readfile($filepath); // to readfile

#we can use file functions for this 

 //file opening with permissions

 $fileread = fopen("filehandle.txt", "r"); // "r" means file is in read only mode u can use "w" for write mode

echo "<br><br>".fread($fileread,100); //File name and howmany characters we print

echo "<br><br>".fgets($fileread); // Read one line of the file (s stands for single line )

echo "<br><br>".fgetc($fileread);  // to read only 1 character (c stands for character)


echo ftell($fileread); // Position of the curser

fseek($fileread,23); // change the Position of curser

echo "<br><br>".fgets($fileread); //now we get from 23 

rewind($fileread); // curser position reset

# using this we can read the file line by line 

while (! feof($fileread)){ 
    $line = fgets($fileread);
    echo "<li>".$line."</li>";
}
echo "</il>";

/*
permission: $file = fopen($filepath, "r");
    -r =read
    -r+ = replace the 1st chars(reaplce write)
    -w = write
    -w+ = replace the whole content
*/  

//To write :  fwrite($fileread,"new changes"); 

//To truncate : ftruncate($fileread,17) terminates all chars after 17 which are exists
?>