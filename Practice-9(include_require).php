<?php
/*
include and require are both used to include and evaluate the contents of another PHP file within the current script. 

-Include : - 
    If the file cannot be included (e.g., if the file does not exist or there are file permission issues), PHP emits a warning but continues script execution.
    when you want to include a file that is not critical to the operation of your script

-Require : - 
    if the file cannot be included (e.g., if the file does not exist or there are file permission issues), PHP emits a fatal error and halts script execution.
    when you want to include a file that is essential to the operation of your script
*/
// Using include
include 'include.html';
?>      
    <main>
        <h2>Main Content</h2>
        <p>This is the main content of the page.</p>
    </main>
</body>
<?php
require 'require.php';

?>
</html>