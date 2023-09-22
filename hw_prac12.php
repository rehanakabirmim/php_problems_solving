<!-- 12.write a php program to  print all negative  elements in an array -->

<?php
$array=[-2,7,5,-9];
foreach($array as $elements){
    if($elements < 0 ){
        echo " Negative number is : $elements <br>";
        
      
    }

}



?>