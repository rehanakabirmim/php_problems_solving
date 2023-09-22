<!-- Write a PHP program to find maximum between three numbers. -->

<?php
$num1 =10;
$num2 =50;
$num3 =30;
if($num1>$num2 && $num1>$num3){
    echo "The max num is num1 : $num1";

}
else if($num2>$num1 && $num2>$num3){
    echo "The max num is num2 : $num2";
}
else{
    echo "The max num is num3 : $num3";
}



?>