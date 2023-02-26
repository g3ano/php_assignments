<?php

$nums = [5, 10, 20, 5, 30, 40];

echo array_reduce( // calculate the sum
    array_filter( // exclude 5
        $nums,
        function ($num) {
            if ($num !== 5) {
                return $num;
            }
        }
    ),
    function ($acc, $num) {
        return $acc + $num;
    }
);

// Output
// 100
