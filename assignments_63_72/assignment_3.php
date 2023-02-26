<?php

$friends = [
    'Ahmed Gamal'   => 'AG',
    'Osama Mohamed' => 'OM',
    'Mahmoud Gamal' => 'MG',
    'Ahmed Samy'    => 'AS',
];

echo '<pre>';
print_r(
    array_flip( // flip keys with its values
        array_reverse( // reverse the array's element order
            array_map( // lowercase the keys
                'strtolower',
                $friends,
            ),
            true,
        )
    )
);
echo '</pre>';

// Output
// Array
// (
//   [as] => Ahmed Samy
//   [mg] => Mahmoud Gamal
//   [om] => Osama Mohamed
//   [ag] => Ahmed Gamal
// )
