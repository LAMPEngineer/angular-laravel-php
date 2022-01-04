<?php

/*Match Expression: PHP v8 */

/* The match expression branches evaluation based on 
 * an identity check of a value(similar to switch/case).
 *
 * 1. it doesn't require a 'case' & 'break' statement
 *
 * 2. it can combine different arms into one using a comma
 *
 * 3. it returns a value, so we only have to assign value once
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



/* No type correction:
 * 
 *  'match' does strict type check instead of loose one. 
 *  its like using '===' instead of '=='.
 *  
 */

$statusCode = '200';

$message = match($statusCode){
	200 => null,
	default => 'unknown status code',
};

echo '<br/> status = ', var_dump($message); // unknown status code
