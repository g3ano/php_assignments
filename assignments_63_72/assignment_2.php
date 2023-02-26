<?php

$codes = ['H', 'C', 'J'];
$means = ['HTML', 'CSS', 'JavaScript'];

echo '<pre>';
print_r(
    array_combine( // combine them into one array
        array_map( // lowercase the keys
            'strtolower',
            $codes,
        ),
        $means
    )
);
echo '</pre>';

// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )
