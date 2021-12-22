<?php 

  
/* OPERATORS */

# Arithmetic Operators (+ - * / % **)
$x = 10;
$y = 0 ;

/* var_dump($x / $y); //Fatal error: Uncaught DivisionByZeroError.
 * 
 * PHP8: fdiv($x, $y) //If $y is zero, then one of INF, -INF, 
 *  or NAN will be returned. 
 */

var_dump(fdiv($x, $y)); 

$x1 = 10.5;
$y1 = 2.9;

var_dump($x1 % $y1); // return 0

/* fmod() — Returns the floating point remainder (modulo) 
 * of the division of the arguments 
 */
var_dump(fmod($x1, $y1)); 

# Assignment Operators (= += -= *= /= %= **=)


# String Operators (. .=)


# Comparison Operators (== === != !== < > <= => <=> ?? ?:)


# Error Controller Operators (@)


# Incremental/Decrement Operators (++ --)


# Logical Operators (&& || ! and or xor)


# Bitwise Operators (& | ^ ~ << >>)


# Array Operators (+ == === != <> !==)


# Execution Operators (``)


# Type Operators (instanceof)


# Nullsafe Operators - PHP8 (?)

