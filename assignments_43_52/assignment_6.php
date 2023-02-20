<?php

// Write Function Content Here
function calculate($a, $b, $c = 'a')
{
	$result = 0;
	switch ($c) {
		case 's':
		case 'subtract':
			$result = $a - $b;
			break;
		case 'a':
		case 'add':
			$result = $a + $b;
			break;
		case 'm':
		case 'multiply':
			$result = $a * $b;
			break;
	}
	return $result . '<br>';
}

// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, 'a'); // 30
echo calculate(10, 20, 's'); // -10
echo calculate(10, 20, 'subtract'); // -10
echo calculate(10, 20, 'multiply'); // 200
echo calculate(10, 20, 'm'); // 200
