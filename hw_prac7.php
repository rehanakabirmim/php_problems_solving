<!-- Write a PHP program to check whether a character is alphabet or not. -->
<?php
$char = "m";
if(($char>="a" && $char<="z")||($char>="A" && $char<="Z")){
    echo $char . " is an alphabet character.";
}
else{
    echo $char . " is not an alphabet character.";
}





?>