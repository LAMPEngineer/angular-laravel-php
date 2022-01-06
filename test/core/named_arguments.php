<?php 

/*Named Arguments - PHP v8*/

/* Named arguments allow passing arguments to a function
 * based on the parameter name,rather than parameter position.
 *  
 */
declare(strict_types=1);
function foo(int $x, int $y): int{
	if($x % $y === 0){
		return $x / $y;
	}

	return $x;
}

$x = 6;
$y = 3;

echo foo(y:$y, x:$x);