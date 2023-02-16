<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->

<?php

$input = readline("Enter a character: ");

if (
    $input == 'a' || $input == 'e' || $input == 'i' || $input == 'o' || $input == 'u' ||
    $input == 'A' || $input == 'E' || $input == 'I' || $input == 'O' || $input == 'U'
) {
    echo "$input is a vowel.\n";
} else {
    echo "$input is a consonant.\n";
}

?>