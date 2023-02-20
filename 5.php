<?php
$arr = [3, 8, 1, 5, 9, 2, 7];
function findSecondLargest($arr) {
   
    $largest = $arr[0];
    $secondLargest = $arr[0];

 
    foreach ($arr as $num) {
        if ($num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } else if ($num > $secondLargest && $num < $largest) {
            $secondLargest = $num;
        }
    }
 
    return $secondLargest;
}
$secondLargest = findSecondLargest($arr);
echo "The second largest number in the array is: $secondLargest";