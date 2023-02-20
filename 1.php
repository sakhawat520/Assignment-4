<?php

$array = array("apple", "banana", "cherry", "date");
function sortStringsByLength($array) {
    usort($array, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $array;
}
$sortedArray = sortStringsByLength($array);
print_r($sortedArray);
