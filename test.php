<!-- Hello, world! -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Input Site</title>
    <!-- Additional meta tags, stylesheets, and scripts can be included here -->
</head>
<body>
    <form action="Practice-8(Super Globals).php" method="GET">
        For Get method enter the details <br> <br>
        Username: <br><input type="text" name="user"><br>Password<br>
        <input type="password" name="pass"><br>
        <input type="submit" value="Submit">
    </form>

    <form action="Practice-8(Super Globals).php" method="POST">
        For Post method enter the details <br> <br>
        Username: <br><input type="text" name="user"><br>Password<br>
        <input type="password" name="pass"><br>
        <input type="submit" value="Submit">
    </form>

    <form action="Practice-8(Super Globals).php" method="POST" enctype="multipart/form-data" >
        For File method enter the details <br> <br>
        image  <br><input type="file" name="file"><br> 
        <input type="submit" value="Upload" value ="Upload">
    </form>
</body>
</html>
b