<?php
    include("index.php");


/*
 * Arrow Functions
 */


echo "Arrow Functions<br/>\n";

/*use case: 1*/
$array = [1,2,3,4];

$array2 = array_map(fn ($number) => $number * $number, $array);







/**use case 2: 
*  
* i. with parent scope variable - no need to use 'use' keyword
* 
* ii. arraw function uses single expression
*
*/

$array = [1,2,3,4];

$y = 5;

$array2 = array_map(fn ($number) => $number * $number * ++$y, $array);



echo '<pre>';

print_r($array);

print_r($array2);

echo '</pre>';


echo $y;