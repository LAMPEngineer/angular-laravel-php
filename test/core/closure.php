<?php
    include("index.php");


echo "Variable, Anonymous, Callable, Closure & Arrow Functions<br/>\n";

/*
 * Variable, Anonymous, Callable, Closure & Arrow Functions
 */

$sum = function (int ...$numbers): int {
	       return array_sum($numbers);
        };


echo $sum(1, 2, 3, 4, 5,6)."\n";

//include("abc.php");