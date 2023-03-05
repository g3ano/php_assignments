<?php

echo decoct(fileperms(__DIR__));
echo '<br>';
if (!file_exists('programming')) {
    mkdir('programming/php', 0744, true); // recursive is enabled so php dir will be created under programming dir
}
if (file_exists('programming')) {
    if (rmdir('programming/php')) {
        echo 'directory programming/php removed successfuly';
        echo '<br>';
    }
    if (rmdir('programming')) {
        echo 'directory programming removed successfuly';
    }
}
