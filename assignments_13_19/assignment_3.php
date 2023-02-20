<?php

$num = 200;
$b   = $num;
$num = 100;
$b   = &$num;

echo $b; // 100