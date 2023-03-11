<?php

echo time() . '<br>'; // 1668020233
echo strtotime(date_format(date_create(), 'Y-m-d H:i:s')) . '<br>'; // 1668020233
echo strtotime(date('Y-m-d H:i:s', time())) . '<br>'; // 1668020233
echo getdate(time())[0]; // 1668020233

// Output Needed With Other Ways
// 1668020233
// 1668020233
// 1668020233
