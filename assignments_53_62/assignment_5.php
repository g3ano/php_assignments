<?php

$str  = 'Elzero Web School';
$e    = 'e';
$o    = 'O';
$four = 4;

echo substr_count($str, $e); // 2 => first method???
echo '<br>';
echo substr_count($str, strtolower($o), -$four); // 2 => second method???
echo '<br>';
echo substr_count($str, $e, $four); // 1
