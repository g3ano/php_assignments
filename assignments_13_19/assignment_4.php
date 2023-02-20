<?php

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo php_uname();