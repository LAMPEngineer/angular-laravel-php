<?php

/* Date and Time */


$currentTime = time();

echo 'CurrentTimeStemp      = ' . $currentTime . '<br />';

echo 'CurrentTimeStemp + 5D = ' .$currentTime + 5 * 24 * 60 * 60 . '<br />';

echo 'CurrentTimeStemp - 1D = ' . $currentTime - 24 * 60 * 60 . '<br />';


echo '<br />' . date('d/m/Y g:ia') . '<br />';

echo date('d/m/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';

echo date('d/m/Y g:ia', $currentTime - 24 * 60 * 60) . '<br />';


echo date_default_timezone_get() . '<br /><br />';


date_default_timezone_set('UTC');



echo date('d/m/Y g:ia') . '<br />';

echo date('d/m/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';

echo date('d/m/Y g:ia', $currentTime - 24 * 60 * 60) . '<br />';


echo date_default_timezone_get() . '<br /><br />';

/* mktime() — Get Unix timestamp for a date 
 *
 * mktime(
 * 	int $hour,
 * 	?int $minute = null,
 * 	?int $second = null,
 * 	?int $month = null,
 * 	?int $day = null,
 * 	?int $year = null,
 * ): int|false
 * 
 */


echo mktime(0, 0, 0, 4, 10, null) . '<br />';

echo date('d/m/Y g:ia', mktime(0, 0, 0, 4, 10, null)) . '<br >';







# Time zones
# Parsing dates
# mktime() - get Unix timestamp
# Datetime vs. Timestamp
