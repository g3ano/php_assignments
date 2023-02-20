<?php

$num = 2;
while ($num < 520) {
	if ($num === 2) {
		echo '1';
		echo '<br>';
	}
	$num += $num;
	echo $num;
	echo '<br>';
	if ($num === 382) {
		break;
	}
	$num++;
}

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382