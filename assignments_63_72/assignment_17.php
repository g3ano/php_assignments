<?php

$nums   = [1, 2, 3, 4, 5, 6];
$result = [];
for ($i = 0; $i < count($nums); $i++) {
    $index    = rand(0, 5);
    $result[] = $nums[$index];
}
echo '<pre>';
print_r($result);
echo '</pre>';

// Output
// Every Time The Array Elements Will Be Shuffled

// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// // Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )
