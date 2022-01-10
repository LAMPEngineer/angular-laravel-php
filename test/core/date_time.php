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


/* 
 * date_parse_from_format() - Get info about given date formatted 
 * according to the specified format
 *
 */

echo '<pre>';
print_r(date_parse_from_format('d/m/y g:ia', $date)); // error populated 
echo '</pre>';



# Datetime vs. Timestamp (MySQL)
/*
 * MySQL timestamp datatype:
 * 
 *  a. Are stored in UTC -
 *    THey are converted to UTC on storage and converted back to our
 *    time zone on retrieval. If we change time zone, the retrieved 
 *    values also change.
 *    
 *  b. Can be automatically initialised & updated -
 *     We can set their default value and/or auto update value to 
 *     CURRENT_TIMESTAMP
 *
 *  c. Have a range of 1970-01-01 00:00:01 UTC to 2038-01-19 03:14:04 UTC
 */

 /*
  * MySQL datetime datatype:
  *
  * a. What we store what we get
  *
  * b. We can store dates where day or month is zero
  *
  * c. Have a range of 1000-01-01 00:00:00 to 9999-12-31 23:59:59
  * 
  */  
 
 /*
  * 1. DATETIME and TIMESTAMP require 5 bytes and 4 bytes
  *
  * 2. TIMESTAMP is affected by timezone, but DATETIME remains constant
  *
  * 3. DATETIME can not be indexed while TIMESTAMP can be
  *
  * 4. Queries with TIMESTAMP will be cached, but it is not case with DATETIME
  * 
  */