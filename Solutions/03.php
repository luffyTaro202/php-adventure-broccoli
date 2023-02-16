<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php

$input = readline("Enter a string: ");

$char_count = array_count_values(str_split($input));

foreach ($char_count as $char => $count) {
    echo "$char: $count\n";
}

?>