<?php

$mix     = [1, 2, 'A', 'B', 'C', 3, 4];
$numbers = 0;
$letters = 0;

foreach ($mix as $value) {
	if (gettype($value) === 'integer') {
		echo $value;
		echo '<br>';
		$numbers++;
	} else {
		$letters++;
		continue;
	}
}

echo "$numbers numbers are printed";
echo '<br>';
echo "$letters letters are ignored";

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"