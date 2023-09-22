<!-- Write a PHP program to input any alphabet and check whether it is vowel or consonant. -->

<!DOCTYPE html>
<html>
<head>
    <title>Vowel or Consonant Checker</title>
</head>
<body>
    <h2>Enter an alphabet to check if it's a vowel or consonant:</h2>
    <form method="post" action="">
        <input type="text" name="alphabet" maxlength="1" style="text-transform: uppercase;">
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = strtoupper($_POST["alphabet"]); // Convert input to uppercase

        if (strlen($input) === 1 && ctype_alpha($input)) {
            if ($input == 'A' || $input == 'E' || $input == 'I' || $input == 'O' || $input == 'U') {
                echo "<p>$input is a vowel.</p>";
            } else {
                echo "<p>$input is a consonant.</p>";
            }
        } else {
            echo "<p>Invalid input. Please enter a single alphabet character.</p>";
        }
    }
    ?>
</body>
</html>

<?php
// Another logic
<?php
$vowels =['a','e','i','o','u'];
$input= $_post["alphabet"];
$letter= strtolower($input);
if($letter>='a' && $letter<='z'){
    if($letter == $vowels[0]||$letter == $vowels[1]||$letter == $vowels[2]||$letter == $vowels[3]||$letter == $vowels[4] ){
        echo "vowel";
    }
    else{
        echo "constant";
    }
}
?>
