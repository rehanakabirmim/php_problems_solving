<!-- Write a PHP program to check whether a number is divisible by 5 and 11 or not. -->

<?php

function check($number){
if(($number % 5 == 0) && ($number % 11 ==0)){
    echo ("Number is divisible by 5 and 11");
}
else{
    printf("Number is not divisible by 5 and 11");
}
}
$number = 55;
check($number)

?>