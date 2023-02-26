<?php

$arr    = ['A', 'B', 'C', 'D', 'E'];
$length = 0;

while (!is_null($arr)) {
    if (isset($arr[$length])) {
        $length++;
    } else {
        break;
    }
}
echo $length;

// Output
// 5
