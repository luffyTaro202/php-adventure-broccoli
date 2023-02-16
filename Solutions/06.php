<!-- 
    Write a program that outputs the first n triangular numbers.
 -->
<?php

$input = readline("Enter the number of triangular numbers to output: ");

$n = intval($input);

for ($i = 1; $i <= $n; $i++) {
    $triangular_number = $i * ($i + 1) / 2;
    echo "$triangular_number\n";
}

?>