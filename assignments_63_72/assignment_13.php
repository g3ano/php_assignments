<?php

$nums = [10, 100, -20, 50, 30];
$max  = $nums[0];
foreach ($nums as $num) {
    $max = $max < $num ? $num : $max;
}
echo $max;

// Output
// 100
