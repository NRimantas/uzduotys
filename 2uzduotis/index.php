<?php 

$array = array(1,2,4,7,1,6,2,8);

// Sort array decreasing
rsort($array, SORT_NUMERIC);

// Start with two empty arrays
$arr1 = $arr2 = array();

// Put the next value in the array in the array with the lowest sum
foreach ($array as $value)
  if (array_sum($arr2) > array_sum($arr1)){
    $arr1[] = $value;
  } else {
      $arr2[] = $value;      
  }

echo implode(",", $arr1) . "=". array_sum($arr1) . "<br><br>";
echo implode(",", $arr2) . "=". array_sum($arr2);
