<?php
    include("index.php");


/*
 * Variable, Anonymous, Callable, Closure & Arrow Functions
 */


echo "Anonymous, Callable with array_map<br/>\n";



/*use case: 1*/
$array = [1,2,3,4];

$array2 = array_map(function($element){
                return $element * 2;
            }, $array);

echo '<pre>';

print_r($array);

print_r($array2);

echo '</pre>';