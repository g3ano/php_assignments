<?php

// first method
echo implode(
    ' ',
    array_map(
        function ($key, $value) {
            if ($key < array_key_last(file('elzero.txt'))) {
                return $value;
            }
        },
        array_keys(file('elzero.txt')),
        file('elzero.txt'),
    )
);
echo '<br>';

// second method
echo file_get_contents('elzero.txt', false, null, 0, strlen('Hello Elzero Web School'));
echo '<br>';

// third method
$handle = fopen('elzero.txt', 'r');
echo fread($handle, strlen('Hello Elzero Web School'));
echo '<br>';

// fourth method
rewind($handle);
echo fgets($handle) . fgets($handle);
fclose($handle);

// Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
