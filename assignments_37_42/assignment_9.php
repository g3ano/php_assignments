<?php

$help_num = 3;
$nums     = [4, 5, 6, 1, 2, 3];
$names    = ['Ahmed', 'Sayed', 'Osama', 'Mahmoud', 'Gamal'];

for ($i = $help_num; $i < count($nums); $i++) {
	$index   = $nums[$i];
	$result  = count($nums) - $help_num;
	if ($index === $result) {
		break;
	}
	echo $names[$index];
	echo '<br>';
}

// Output
// "Sayed"
// "Osama"