<?php

$date = '1990-10-01';

date_default_timezone_set('Africa/Cairo');
echo date_default_timezone_get();
echo '<br>';

echo 'From Epoch Time Till 1990-10-01 Is Approximately ' . round(strtotime($date) / 60 / 60 / 24, 1) . ' Days';
echo '<br>';
echo 'From Epoch Time Till 1990-10-01 Is Approximately ' . round(strtotime($date) / 60 / 60 / 24 / 365, 1) . ' Days';

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
