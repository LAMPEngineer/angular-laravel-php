<?php
    include("index.php");


echo "Variable, Anonymous, Callable, Closure & Arrow Functions<br/>\n";

/*
 * Variable, Anonymous, Callable, Closure & Arrow Functions
 */

$x = 4;

$sum = function (int ...$numbers) use (&$x): int {
            $x = 15;
            echo $x ."<br/>";

	       return array_sum($numbers);
        };


echo $sum(1, 2, 3, 4)."\n";

echo '<br/>'. $x;

