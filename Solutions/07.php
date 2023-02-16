<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
<?php

$input = readline("Enter a list of strings separated by a space: ");

$strings = explode(" ", $input);

$longest_string = "";

foreach ($strings as $string) {
    if (strlen($string) > strlen($longest_string)) {
        $longest_string = $string;
    }
}

echo "The longest string is: $longest_string\n";

?>