<?php
    include("index.php");


/*
 * Arrow Function
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



/* use case 3: 
 *
 * character with its count in a string
 * 
 */

$string = 'alexander';

$split = str_split($string);

$result = array_map(fn ($char, $count) => compact('char', 'count'), array_unique($split), array_count_values($split));


echo '<pre>', var_dump($result), '</pre>';





/* use case 4: 
 *
 * Manipulate data from data array
 * 
 * make array with user ids
 * 
 */
$users = [['id' => 1, 'name'=> 'Alex'],['id' => 2, 'name' => 'Billy']];

$ids = array_map(fn ($user) => $user['id'], $users);


echo '<pre>', 'Data: ', print_r($users, true), 'User ids: ' , print_r($ids, true), '</pre>';