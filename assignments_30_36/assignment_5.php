<?php

$name    = 'ghano';
$age     = 22;
$country = 'Kabyle';

// if ($age > 18) {
// 	echo 'The Age Is Good To Go<br>';
// 	if (gettype($name) === 'string') {
// 		echo 'The Name Is Good To Go<br>';
// 		if ($country === 'Egypt') {
// 			echo 'The Country Is Good To Go<br>';
// 		}
// 	}
// }

// or

if ($age > 18 && gettype($name) === 'string' && $country === 'Kabyle') {
	$msg = <<<MSG
  Age is good to go
  Name is good to go
  Country is good to go
  MSG;
	echo nl2br($msg);
}