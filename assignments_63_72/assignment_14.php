<?php

$nums = [10, 100, -20, 50, 30];

$min  = $nums[0];
foreach ($nums as $num) {
    $min = $min > $num ? $num : $min;
}
echo $min;

// Output
// -20
