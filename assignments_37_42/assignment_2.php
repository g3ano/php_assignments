<?php

$index = 0;

// with for
// for ($index; $index <= 20; $index++) {
// 	if ($index === 0) {
// 		continue;
// 	}
// 	if ($index % 2 === 0) {
// 		echo $index . '<br>';
// 	}
// }

// with while
// while ($index <= 20) {
// 	if ($index === 0) {
// 		$index++;
// 		continue;
// 	}
// 	if ($index % 2 === 0) {
// 		echo $index . '<br>';
// 	}
// 	$index++;
// }

// with do while

do {
	if ($index === 0) {
		$index++;
		continue;
	}
	if ($index % 2 === 0) {
		echo $index . '<br>';
	}
	$index++;
} while ($index <= 20);