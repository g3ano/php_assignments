<?php

// Write Function Content Here
// first method
// function get_arguments(...$args)
// {
// 	$all = '';
// 	foreach ($args as $arg):
// 		$all .= $arg . ' ';
// 	endforeach;
// return $all . '<br>';
// }

// second method
function get_arguments(...$args)
{
	$all  = '';
	$args = func_get_args();
	foreach ($args as $arg):

		$all .= $arg . ' ';
	endforeach;
	return $all . '<br>';
}

// Needed Output
echo get_arguments('Hello', 'Elzero', 'Web', 'School'); // Hello Elzero Web School
echo get_arguments('I', 'Love', 'PHP'); // I Love PHP
