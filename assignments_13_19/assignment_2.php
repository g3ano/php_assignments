<?php

$name  = 'elzero';
$$name = 'Web';

echo $$name; // calling by variable variables name
echo '<br>';
echo $elzero; // calling by name
echo '<br>';
echo "$elzero"; // using double quotes
echo '<br>';
echo "{$$name}"; // using expr syntax
echo '<br>';
$my_var = <<<MY_VAR
{$$name}
MY_VAR;
echo $my_var; // using heredoc
echo '<br>';