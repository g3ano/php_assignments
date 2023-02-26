<?php

$nums = [10, 20, 30];

echo array_reduce(
    $nums,
    function ($acc, $num) {
        return $acc + $num;
    }
);
echo '<br>';
echo array_sum($nums);

// Output
// 60
// 60
