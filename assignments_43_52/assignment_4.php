<?php

// Write Function Content Here
function multiply(...$numbers)
{
	$total = 1;
	foreach ($numbers as $number):
		if (is_string($number)):
			continue;
		elseif (is_float($number)):
			$number = (int) $number;
		endif;
		$total *= $number;
	endforeach;
	return $total . '<br>';
}

// Needed Output
echo multiply(10, 20); // 200
echo multiply('A', 10, 30); // 300
echo multiply(100.5, 10, 'B'); // 1000
