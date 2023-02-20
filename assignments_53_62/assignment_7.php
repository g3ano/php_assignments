<?php

$chars = ['E', 1, 2, 'l', 'z', 'E', 'R', 'o'];
$str   = '';
foreach ($chars as $char):
    if (is_string($char)) {
        $str .= strtolower($char);
    }
endforeach;
echo ucfirst($str);
// Output
// "Elzero"
