<?php

function calculate(int $num_one, int $num_two)
{
	$num_one = (float) $num_one;
	$num_two = (float) $num_two;
	return $num_one + $num_two;
}

echo calculate(20, 10); // 30
echo '<br>';
echo gettype(calculate(20, 10)); // Double
