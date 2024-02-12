<?php

// Sample array with random elements
$myArray = array(1, 2, 3, 4, 5, 2, 3, 6, 7, 7);

// Count occurrences of each element
$counts = array_count_values($myArray);

// Filter elements that occur only once
$uniqueElements = array_filter($counts, function ($value) {
    return $value == 1;
});

// Get the keys of the unique elements

$uniqueKeys = array_keys($uniqueElements);

// Print the unique elements
echo "Unique elements in the array are: ";
foreach ($uniqueKeys as $element) {
    echo $element . " ";
}

 


?>










?>