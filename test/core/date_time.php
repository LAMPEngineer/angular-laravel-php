<?php

/* Date and Time */


$currentTime = time();

echo 'CurrentTimeStemp      = ' . $currentTime . '<br />';

echo 'CurrentTimeStemp + 5D = ' .$currentTime + 5 * 24 * 60 * 60 . '<br />';

echo 'CurrentTimeStemp - 1D = ' . $currentTime - 24 * 60 * 60 . '<br />';


echo date('d/m/Y g:ia') . '<br />';

echo date('d/m/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';

echo date('d/m/Y g:ia', $currentTime - 24 * 60 * 60) . '<br />';









# Time zones
# Parsing dates
# mktime() - get Unix timestamp
# Datetime vs. Timestamp
