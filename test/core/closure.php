<?php
    include("index.php");


/*
 * Variable, Anonymous, Callable, Closure & Arrow Functions
 */


echo "Anonymous, Callable with array_map<br/>\n";



/*use case: 1*/
$array = [1,2,3,4];

$x = function(int $element): int {
        return $element * 2;
    };

$array2 = array_map($x, $array);



/*use case: 2*/
$array2 = array_map(function(int $element): int {
        return $element * 3;
    }, $array);




/*use case: 3, As of PHP 7.4.0: Arrow function*/

$array2 = array_map(fn(int $element): int => $element * 4, $array);


echo '<pre>';

print_r($array);

print_r($array2);

echo '</pre>';