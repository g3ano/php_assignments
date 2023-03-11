<?php

$date = '2005-10-02';

date_default_timezone_set('Africa/Cairo');
echo date_default_timezone_get();
echo '<br>';

$date = date_create($date);
date_add($date, date_interval_create_from_date_string('+15 hours +15 minutes +15 seconds'));
echo date_format($date, "Y, F, l 'dS' H:i:s");

// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:10"
