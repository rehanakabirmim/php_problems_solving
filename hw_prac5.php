<!-- Write a PHP program to check whether a number is even or odd. -->
<?php
function check($number){

    if($number % 2 == 0){
        echo "Even";
    }
    else{
        echo "odd";  
    }
}
$number =80;
check($number);




?>