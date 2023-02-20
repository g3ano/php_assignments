<?php

// Code 1
$a = @$b or die('custom error');

// Code 2
$f = @file('Not_A_File') or die('custom error');

// Code 3
(@include 'Not_A_File') or die('custom error');