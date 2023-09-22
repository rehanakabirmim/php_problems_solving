<!-- 16.Write a PHP program to count the total number of even and odd elements in an array. -->
<?php 
$my_array = array( 5, 5, 0, 1, 2, 1, 1, 6, 1 );
$odd = $even = 0;

foreach ( $my_array as $number ) {
    $number % 2 == 0 ? $even++ : $odd++;
}

printf( 'Odd: %s | Even: %s', $odd, $even );
?>