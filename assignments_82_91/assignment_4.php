<?php

function change_permissions($filename)
{
    if (is_dir($filename)) {
        echo 'This Is Directory And Only Files Allowed' . '<br>';
    } else {
        if (pathinfo($filename, PATHINFO_EXTENSION) === 'txt') {
            chmod($filename, 0700);
            echo 'Permissions Changed';
        } else {
            echo 'File Extension Is Not Txt' . '<br>';
        }
    }
}

// Test Cases
echo change_permissions(__DIR__); // This Is Directory And Only Files Allowed
echo change_permissions('Work.docx'); // File Extension Is Not Txt
echo change_permissions('foo.txt'); // Permissions Changed
