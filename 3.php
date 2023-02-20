<?php
$myArray = array(1, 2, 3, 4, 5);
function remove_first_last($arr) {
    array_shift($arr);  // remove first element
    array_pop($arr);    // remove last element
    return $arr;
}

$newArray = remove_first_last($myArray);
print_r($newArray);
