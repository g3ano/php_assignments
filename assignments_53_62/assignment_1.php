<?php

$num_one = -1;
$num_two = 2.5;

$let_one = 'o';
$let_two = 'z';

$str = 'El%er0';

// Write Your Code Here
$f_rep = $str[(int) $num_two];
$s_rep = $str[(strlen($str) + $num_one)];
$str   = str_replace([$f_rep, $s_rep], [$let_two, $let_one], $str);
echo $str; // Elzero
