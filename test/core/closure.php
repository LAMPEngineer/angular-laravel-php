<?php
    include("index.php");


echo "Variable, Anonymous, Callable, Closure & Arrow Functions<br/>";

/*
 * Variable, Anonymous, Callable, Closure & Arrow Functions
 */

$sum = function (int ...$numbers): int {
	       return array_sum($numbers);
        };


echo $sum(1, 2, 3, 4, 5);

include("abc.php");