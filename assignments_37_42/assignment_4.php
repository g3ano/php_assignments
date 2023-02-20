<?php

$start = 10;
$end   = 0;
$stop  = 3;

for ($start; $start >= $end; $start--) {
	if ($start < 10) {
		echo "0$start";
		echo '<br>';
	} else {
		echo $start;
		echo '<br>';
	}
	if ($start === 3) {
		break;
	}
}

// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03