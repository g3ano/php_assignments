<?php

date_default_timezone_set('Asia/Riyadh');
echo date_default_timezone_get();
echo '<br>';
echo date_format(date_create('now', timezone_open('Asia/Riyadh')), 'D, d M y - h:i:s A');
echo '<br>';
echo date_format(date_create('now', timezone_open('Asia/Riyadh')), 'l, d F Y - h:i:s A');

// Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"
