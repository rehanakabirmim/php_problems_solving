<!-- 19.Write a PHP program to Count frequency of each element in an array -->
<?php
$arr = [10,20,20,3,4,50,50,50,50,60,60,100];
$brr = [];

$max_val = max($arr);
for($i = 0; $i <= $max_val; $i++)
{
    array_push($brr, 0);
}
for($i = 0; $i < count($arr); $i++)
{
    $brr[$arr[$i]]++;
}
for($i = 0; $i <= $max_val; $i++)
{
    if($brr[$i] != 0){
        echo $i . ": " .$brr[$i] . "<br>";
    }
}













?>