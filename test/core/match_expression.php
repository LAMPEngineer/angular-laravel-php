<?php

/*Match Expression*/

/* The match expression branches evaluation based on 
 * an identity check of a value(similar to switch/case).
 *
 */
$food = 'cake';

$reurn_value = match($food){
	'apple' => 'This is an apple',
	'bar' => 'This food is a bar',
	'cake' => 'This food is a cake'
};

var_dump($reurn_value);


/* default value: */

$statusCode = 320;
$message = match($statusCode){
	200, 300 => null,
	400 => 'not found',
	500 => 'server error',
	default => 'unknown status code', 
};

echo '<br/> status = ', var_dump($message);