<!-- 14.write a php program to find maximum and minimum element in an array using recursion -->

<?php

function getMax($array)
{
   $n = count($array);
   $max = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;      
}
 

function getMin($array)
{
   $n = count($array);
   $min = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;      
}
 

$array = array(1, 2, 3, 4, 5);
echo "Here is the Maximum Number is" . (getMax($array));
echo("\n");
echo "Here is the Maximum Number is" .(getMin($array));
?>

<!-- //without minimum building function -->
<?php
$arr=[10,20,30,40,50,60,70,80,90];
$min_val=10000 ;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]<$min_val){
        $min_val = $arr[$i];
    }
}


echo $min_val;

?>

<!-- //without miximum building function -->
<?php
$arr=[10,20,30,40,50,60,70,80,90];
$max_val=0 ;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]>$max_val){
        $max_val = $arr[$i];
    }
}


echo $max_val;

?>