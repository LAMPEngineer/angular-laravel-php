<?php 

  
/* OPERATORS */

# 1. Arithmetic Operators (+ - * / % **)
$x = 10;
$y = 0 ;

/* var_dump($x / $y); //Fatal error: Uncaught DivisionByZeroError.
 * 
 * PHP8: fdiv($x, $y) //If $y is zero, then one of INF, -INF, 
 *  or NAN will be returned. 
 */

var_dump(fdiv($x, $y)); 
echo '<br/>';

$x1 = 10.5;
$y1 = 2.9;

var_dump($x1 % $y1); // return 0
echo '<br/>';
/* fmod() — Returns the floating point remainder (modulo) 
 * of the division of the arguments 
 */
var_dump(fmod($x1, $y1)); 
echo '<br/>';



# 2. Assignment Operators (= += -= *= /= %= **=)
$x = ($y = 10) + 5;
var_dump($x, $y);

echo '<br/>Exponent: ', $x **= 3;



# 3. String Operators (. .=)

$x = 'Hello';
 echo '<br/> ', $x .= ' World', '<br/>';



# 4. Comparison Operators (== === != !== < > <= => <=> ?? ?:)

$x = 5;
$y = '5';
var_dump($x == $y);  // return true
var_dump($x === $y); // Strict comparison: return false as value is same but data type is different

/* Spaceship operator '<=>':
 * This is a three-way comparison operator and 
 * it can perform greater than, less than and equal comparison 
 * between two operands. It returns -1, 0 or 1 when $a is 
 * respectively less than, equal to, or greater than $b
 *
 */
 // Integer
 echo '<br/>',1 <=> 1; // 0
 echo '<br/>',2 <=> 1; // 1
 echo '<br/>',1 <=> 2; // -1

 //Float
 echo '<br/>',1.5 <=> 1.5; // 0
 echo '<br/>',2.5 <=> 1.5; // 1
 echo '<br/>',1.5 <=> 2.5; // -1

 // String
 echo '<br/>','a' <=> 'a'; // 0
 echo '<br/>','b' <=> 'a'; // 1
 echo '<br/>','a' <=> 'b'; // -1


/* Null coalescing operator '??':
 *
 *  This is like a door that only lets NULL through
 *  
 *  It always returns first parameter, unless first parameter happens to be NULL
 *  
 * This means ?? is same as (!isset() || is_null())
 *
 */
 
 echo '<br/>', var_dump(false ?? 'value2'); // false
 echo '<br/>', var_dump(true ?? 'value2');  // true
 echo '<br/>', var_dump(null ?? 'value2');  // null


# 5. Error Controller Operators (@)
 $x = @file('foo.txt'); // don't use for error handling

# 6. Incremental/Decrement Operators (++ --)
 $x = 5;
 echo '<br/>', --$x;

# 7. Logical Operators (&& || ! and or xor)


# 8. Bitwise Operators (& | ^ ~ << >>)


# 9. Array Operators (+ == === != <> !==)


# 10. Execution Operators (``)


# 11. Type Operators (instanceof)


# 12. Nullsafe Operators - PHP8 (?)

