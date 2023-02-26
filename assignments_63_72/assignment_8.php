<?php

$chars = ['A', 'B', 'C'];
// 1
// $chars[] = 'D';

// 2
// array_push($chars, 'D');

// 3
// array_splice($chars, count($chars), 0, 'D');

// 4
$chars = array_merge($chars, ['D']);

echo '<pre>';
print_r($chars);
echo '</pre>';

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )
