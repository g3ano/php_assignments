<?php

$url1 = 'http://www.elz ero.org';
$url2 = 'http://¥elzero.org';
$url3 = 'https://elzero.org';
$url4 = 'https://elzero.o¥rg';

$urls = [$url1, $url2, $url3, $url4];

foreach ($urls as $url) {
    echo filter_var($url, FILTER_SANITIZE_URL) . '<br>';
}

// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"
