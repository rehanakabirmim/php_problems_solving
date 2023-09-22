<!-- 18.Write a PHP program to print all unique elements in the array. -->
<?php
$arr = [1,2,2,3,4,5,5,5,5,6,6,10];
sort($arr);
$uni_val = 0;
for($i = 0;$i<count($arr);$i++){
    if($uni_val != $arr[$i]){
        echo $arr[$i] . "<br>";
        $uni_val = $arr[$i];
    }
}





?>