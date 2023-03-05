<?php

// first method
$handle = fopen('Elzero.txt', 'c+');
fseek($handle, strlen('Hello '));
fwrite($handle, 'Elzero', strlen('Elzero'));
fclose($handle);

// second method
// $contents = file_get_contents('Elzero.txt');
// file_put_contents('Elzero.txt', substr_replace($contents, 'Elzero', strlen('Hello '), strlen('Osamaa')));
// echo nl2br(file_get_contents('Elzero.txt'));

// elzero.txt New Content
// Hello Elzero Web
// School
