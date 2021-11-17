<?php
// Report all PHP errors
error_reporting(E_ALL);

echo "Variable, Anonymous, Callable, Closure & Arrow Functions<br/>";

/*
 * Variable, Anonymous, Callable, Closure & Arrow Functions
 */

function sum(int ...$numbers): int{
	return array_sum($numbers);
}



echo sum(1, 2, 3, 4, 5);
