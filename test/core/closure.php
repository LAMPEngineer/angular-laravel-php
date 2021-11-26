<?php
    include("index.php");


/*
 * Variable, Anonymous, Callable, Closure & Arrow Functions
 */


echo "Anonymous, Callable & Closure<br/>\n";


/*use case 1: callable type with normal function*/

$sum = function (callable $callback, int|float ...$numbers): int|float {

           return $callback(array_sum($numbers));
        };

  // normal function
function foo($element){
            return $element * 2;
        }

echo '<br>Sun1 = '.$sum('foo', 1, 2, 3, 4, 5)."\n";






/*use case 2: closure type with anonymous function*/

$sum = function (closure $callback, int|float ...$numbers): int|float {

           return $callback(array_sum($numbers));
        };

// anonymous function
$x = function ($element){
            return $element * 2;
        };

echo '<br>Sun2 = '.$sum($x, 1, 2.4, 3, 4.2, 5)."\n";





