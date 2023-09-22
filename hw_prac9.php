<!-- Write a PHP program to input any character and check whether it is alphabet, digit or special character. -->
<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Character Type Checker</title>
</head>
<body>
    <h2>Enter a character to check its type:</h2>
    <form method="POST" action="">
        <input type="text" name="character" maxlength="1">
        <input type="submit" value="Check">
    </form> -->

    <?php
 $a =$_POST['alphabet'];
 if(($a>="a" && $a<="z")||($a>="A" && $a<="Z")){
    echo "alphabet";
 }
 else if($a>=0 && $a<=9){
    echo "digit";
 }
 else{
    echo "special character";
 }
    ?>
<!-- </body>
</html> -->
