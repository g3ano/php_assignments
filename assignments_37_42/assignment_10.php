<?php

$help_num = 4;
$nums     = [2, 4, 5, 6, 10];

foreach ($nums as $num) {
	$result = $num + $nums[$help_num];
	$msg    = <<<MSG
	$num + $nums[$help_num] = $result
	MSG;
	echo $msg;
	echo '<br>';
	$help_num--;
}

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"