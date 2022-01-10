<?php

/* Date and Time */


$currentTime = time();

echo 'CurrentTimeStemp      = ' . $currentTime . '<br />';

echo 'CurrentTimeStemp + 5D = ' .$currentTime + 5 * 24 * 60 * 60 . '<br />';

echo 'CurrentTimeStemp - 1D = ' . $currentTime - 24 * 60 * 60 . '<br />';


echo '<br />' . date('d/m/Y g:ia') . '<br />';

echo date('d/m/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';

echo date('d/m/Y g:ia', $currentTime - 24 * 60 * 60) . '<br />';


# Time zones

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

echo date('d/m/Y g:ia', mktime(0, 0, 0, 4, 10, null)) . '<br ><br >';



/*
 * strtotime — Parse any English textual datetime description 
 *             into a Unix timestamp
 *  
 */

echo strtotime('2022-01-04 07:00:00') . '<br >';
echo date('d/m/Y g:ia', strtotime('2022-01-04 07:00:00')) . '<br >';
echo 'First day of Feb = ' .date('d/m/Y g:ia', strtotime('first day of february')) . '<br >';
echo 'Second Fri of Jan = ' .date('d/m/Y g:ia', strtotime('second friday of January')) . '<br >';





/* Parsing dates
 *
 * date_parse() - returns associative array with detailed info 
 * about given date/time
 *
 * 
 */
$date = date('d/m/Y g:ia', strtotime('second friday of January'));

echo '<pre>';
print_r(date_parse($date));
echo '</pre>';




# Datetime vs. Timestamp
