<?php

$start = 0;
$mix   = [1, 2, 3, 'A', 'B', 'C', 4];

for ($start = 0; $start < count($mix); $start++) {
	$num = $mix[$start];
	if (gettype($num) === 'integer') {
		if ($num !== 1) {
			echo $num;
			echo '<br>';
		}
	}
}

// Output
// 2
// 3
// 4