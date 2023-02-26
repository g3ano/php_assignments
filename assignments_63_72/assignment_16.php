<?php

$mix = ['A', 'C', 'B', 1, 100, 3, 2, 6, 5, 7];
$mix = array_filter(
    $mix,
    function ($element) {
        if (!(gettype($element) === 'string')) {
            if ($element % 2 !== 0) {
                return $element;
            }
        }
    },
);
sort($mix);
echo '<pre>';
print_r($mix);
echo '</pre>';

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )
