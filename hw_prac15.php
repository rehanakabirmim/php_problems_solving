<!-- 15.Write a PHP program to find the second largest element in an array. -->


<?php
$arr=[10,20,30,40,50,60,70,80,90];

$index =0;
for($j=0;$j<2;$j++){
    $max_val=0 ;
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]>$max_val){
            $max_val = $arr[$i];
            $index = $i;
        }
    
}
$arr[$index]=0;
}

echo $max_val;

?>