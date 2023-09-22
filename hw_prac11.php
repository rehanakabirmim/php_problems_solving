<!-- 11.write a php program to read and print elements of array using recursion -->
<?php
function display($number){
    if($number <= 10){
        echo "$number <br>";
        display($number + 1);
    }

}
display(1);







?>