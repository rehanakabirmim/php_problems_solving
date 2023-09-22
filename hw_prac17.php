<!-- 17.Write a PHP program to Count total number of negative elements in an array. -->
<?php
// Sample array
$array = array(1, -2, 3, -4, 5, -6, 7, -8, 9);

// Initialize a counter for negative elements
$negativeCount = 0;

// Iterate through the array
foreach ($array as $element) {
    if ($element < 0) {
        // Increment the counter when a negative element is found
        $negativeCount++;
    }
}

// Output the total number of negative elements
echo "Total number of negative elements: " . $negativeCount;
?>
