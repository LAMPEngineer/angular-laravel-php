<?php
    include("index.php");


/*
 * Variable, Anonymous, Callable, Closure & Arrow Functions
 */


echo "Anonymous, Callable <br/>\n";


$sum = function (callable $callback, int ...$numbers): int {

           return $callback(array_sum($numbers));
        };


echo '<br>Sun = '.$sum('foo', 1, 2, 3, 4, 5)."\n";


function foo($element){
    return $element * 2;
}


