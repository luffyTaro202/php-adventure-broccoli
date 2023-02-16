<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
<?php

$input = readline("Enter a string: ");

$vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];

$output = "";

for ($i = 0; $i < strlen($input); $i++) {
    if (!in_array($input[$i], $vowels)) {
        $output .= $input[$i];
    }
}

echo "The string with all vowels removed is: $output\n";

?>