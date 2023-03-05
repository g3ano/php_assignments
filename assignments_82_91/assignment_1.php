<?php

echo round(disk_total_space('/') / 1024 / 1024 / 1024 / 1024, 2) . ' terabytes';
