<!-- write a php program to find sum of all array elements using recursion  -->

<?php
$example = array(10,20,30);


function sum_array($array) {


$total = 0;
foreach ($array as $element) {
    if(is_array($element)) {
        $total += sum_array($element);
    } else {
        $total += $element;
    }
}
return $total;


}

echo "Total number is: " . sum_array($example);

?>