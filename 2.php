<?php
$string1 = "Hello";
$string2 = "world!";
function concatenate_strings($str1, $str2) {
    return $str1 . $str2;
}

$newString = concatenate_strings($string1, $string2);
echo $newString;
