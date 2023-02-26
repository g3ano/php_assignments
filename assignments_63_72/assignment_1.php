<?php

$friends = [
    'AG' => 'Ahmed Gamal',
    'OM' => 'Osama Mohamed',
    'MG' => 'Mahmoud Gamal',
    'AS' => 'Ahmed Samy',
    'FA' => 'Farid Ahmed',
    'SM' => 'Sayed Mohamed',
];

$arr = array_chunk( // splits the array into chunks
    array_combine( // combine the new keys with original values
        array_map( // transform the keys to lowercase
            'strtolower',
            array_keys($friends),
        ),
        $friends
    ),
    2,
    true
);

echo '<pre>';
print_r($arr);
echo '</pre>';

// Output
// Array
// (
//   [0] => Array
//     (
//       [ag] => Ahmed Gamal
//       [om] => Osama Mohamed
//     )
//   [1] => Array
//     (
//       [mg] => Mahmoud Gamal
//       [as] => Ahmed Samy
//     )
//   [2] => Array
//     (
//       [fa] => Farid Ahmed
//       [sm] => Sayed Mohamed
//     )
// )
