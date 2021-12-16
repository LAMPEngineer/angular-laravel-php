<?php
    declare(strict_types=1);

    include("index.php");
    
/* Data Types & Type Casting */

# 4 Scaler Types
    # bool  - true / false
    $completed = true;

    # int   - 1, 2, 3, 0, -5 (no decimal)
    $score = 75;

    # float - 1.5, 0.1, 0.005, -15.8
    $price = 8.99;

    # string- 'Hello', "World"
    $greeting = 'Hello There';

    echo $completed . '<br/>';
    echo $score . '<br/>';
    echo $price . '<br/>';
    echo $greeting . '<br/>';


# 4 compound Types
    # array 
    $comp = [1, 2, 3, 0.5, -9.0,'A', 'b', true];
    print_r($comp);
    
    # Object  -
    # callable-
    # iterable-


# 2 Special Types
    # resource
    # null 
    $name = null;
    var_dump($name);    

echo '<br/><br/>';

/* Type Juggling (or Type Correction):
 *
 *  PHP does not require explicit type definition in variable
 *  declaration. A variable's type is determined by the context 
 *  in which the variable is used.
 *  
 */
 


function sum(float $x, float $y){
    return $x + $y;
}

$sum = sum(3, 5); // passing int values to float - no error

echo $sum, '<br />';

var_dump($sum);
