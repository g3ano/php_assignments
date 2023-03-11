<?php

$date   = '1990-10-01';
$epoch  = date_create(date('Y-m-d', strtotime('0')));
$date   = date_create($date);

echo 'from epoch time till 1990-10-01 is approximately ' . date_diff($date, $epoch)->days . ' days';
echo '<br>';
echo 'from epoch time till 1990-10-01 is approximately ' . date_diff($date, $epoch)->y . ' years';

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"
