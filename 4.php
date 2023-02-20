<?php
$string = "Hello 123";
function contains_only_letters_and_whitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}

if (contains_only_letters_and_whitespace($string)) {
    echo "String {$string} contains only letters and whitespace.";
} else {
    echo "String {$string} contains other characters besides letters and whitespace.";
}


