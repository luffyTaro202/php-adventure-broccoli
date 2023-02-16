<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->
<?php

$input = readline("Enter a list of numbers separated by a space: ");

$numbers = explode(" ", $input);

sort($numbers);

$count = count($numbers);

$median = 0;

if ($count % 2 == 0) {
    $median = ($numbers[$count / 2 - 1] + $numbers[$count / 2]) / 2;
} else {
    $median = $numbers[($count - 1) / 2];
}

echo "The median of the numbers is: $median\n";

?>