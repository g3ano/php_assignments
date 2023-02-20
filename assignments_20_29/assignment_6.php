<?php

$a = 'Elzero';
$b = 'Web';
$c = 'School';

// Method One
// $d = $a . ' ' . $b . ' ' . $c;

// Method Two
// $d .= $a;
// $d .= ' ';
// $d .= $b;
// $d .= ' ';
// $d .= $c;

// Method Three
// $d = "$a $b $c";

// Method Four
$d = <<<TEXT
$a $b $c
TEXT;

echo $d; // Elzero Web School