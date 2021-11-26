<?php
    include("index.php");


/*
 * Variable, Anonymous, Callable, Closure & Arrow Functions
 */


echo "Anonymous, Callable & Closure<br/>\n";


$sum = function (closure $callback, int|float ...$numbers): int|float {

           return $callback(array_sum($numbers));
        };

$x = function ($element){
            return $element * 2;
        };

echo '<br>Sun = '.$sum($x, 1, 2.4, 3, 4.2, 5)."\n";





