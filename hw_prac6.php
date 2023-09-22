<!-- Write a PHP program to check whether a year is leap year or not. -->
<?php

$year = 2023;
if($year % 400 == 0){
    echo "This year is leap year";
}
else if(($year % 4 == 0) && ($year%100!=0)){

    echo "This year is leap year"; 
}
else{
    echo "This year is not leap year";  
}
?>