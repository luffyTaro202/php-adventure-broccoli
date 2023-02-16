<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
<?php

$input = readline("Enter a number: ");

$sum = 0;

for ($i = 0; $i < strlen($input); $i++) {
    $sum += intval($input[$i]);
}

echo "The sum of the digits of $input is $sum.\n";

?>