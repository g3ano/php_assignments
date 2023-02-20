<?php

function check_status($a, $b, $c)
{
	$args = func_get_args();
	foreach ($args as $arg) {
		if (is_int($arg)) {
			$age = $arg;
		} elseif (is_string($arg)) {
			$name = $arg;
		} else {
			if ($arg) {
				$state = 'you are available for hire';
			} else {
				$state = 'you are not available for hire';
			}
		}
	}
	return 'Hello ' . $name . ', your age is ' . $age . ', ' . $state;
}

// Needed Output
echo check_status('Osama', 38, true); // "Hello Osama, Your Age Is 38, you are available for hire"
echo '<br>';
echo check_status(38, 'Osama', true); // "Hello Osama, Your Age Is 38, you are available for hire"
echo '<br>';
echo check_status(true, 38, 'Osama'); // "Hello Osama, Your Age Is 38, you are available for hire"
echo '<br>';
echo check_status(false, 'Osama', 38); // "Hello Osama, Your Age Is 38, you are not available for hire"
echo '<br>';
