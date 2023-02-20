<?php

$a = '10';

// 1
echo (int) $a;
echo '<br>';
echo gettype((int) $a);
echo '<br>';

// 2
echo $a * 1;
echo '<br>';
echo gettype((int) $a);
echo '<br>';

// 3
echo (int) $a; // I want to use the (integer) but turn it into (int)
echo '<br>';
