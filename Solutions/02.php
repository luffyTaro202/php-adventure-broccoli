<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php

$input = readline("Enter a string: ");

$reversed = strrev($input);

if ($input == $reversed) {
    echo "$input is a palindrome.\n";
} else {
    echo "$input is not a palindrome.\n";
}

?>