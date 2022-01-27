<?php 
 require_once 'index.php';

/* ARRAY */

/*
 * 1. array_change_key_case(array $array, int $case = CASE_LOWER): array 
 *     - Changes the case of all keys in an array 
 */
$input_arr = ['FirSt' => 1, 'SecOnd' => 4];
echo '---- array_change_key_case ----<br />';
prettyPrintArray(array_change_key_case($input_arr, CASE_UPPER));




/* 2. array_chunk(array $array, int $length, bool $preserveKeys = false): array
 *         - Split an array into chunks
 */          
$item = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4,  'e' => 5];
echo '---- array_chunk ----<br />';
prettyPrintArray(array_chunk($item, 2, true));



/*
 * 3. array_column(array $array, 
 *              int|string|null $column_key, 
 *              int|string|null $index_key = null
 *              ): array 
 *              
 *   - returns the values from a single column of array, identified by 
 *     column_key. Optionally, index_key is to index the values in the 
 *     returned array
 */
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe'
    ),
    array(
        'id' => 2245,
        'first_name' => 'Sally',
        'last_name' => 'Smith'
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones'
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe'
    ),
);

$first_names = array_column($records, 'first_name');
echo '---- array_column ----<br />';
prettyPrintArray($first_names);

echo '---- array_column index by id ----<br />';
prettyPrintArray(array_column($records, 'last_name', 'id'));


/* 4. array_combine(array $keys, array $values): array
 *      - creates an array by using one array for keys and one another 
 *      for its values
 */
  $keys = ['a', 'b', 'c'];
  $values = [5, 10, 15];

echo '---- array_combine ----<br />';
  prettyPrintArray(array_combine($keys, $values));  


/* array_count_values(array $array): array
 *      - returns an array using values of array as keys and their
 *       frequency in array as values
 */
$array = [1, 'hello', 1, 'world', 'hello'];
echo '---- array_count_values ----<br />';
prettyPrintArray(array_count_values($array));

/* case : simple way to find number of items with specific values in 
   multidimensional array */
$list = [
    ['id' => 1, 'userId' => 5],
    ['id' => 2, 'userId' => 5],
    ['id' => 3, 'userId' => 6]
];

$userId = 5;

prettyPrintArray($list);
echo '<br />---- userId = 5 => count: ';
echo array_count_values(array_column($list, 'userId'))[$userId];



/*
 * 5. array_diff_assoc(array $array, array ...$arrays): array
 *       - Returns an array containing all values from array that 
 *         are not present in any of the other arrays
 */
$array1 = array('a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'
         );
$array2 = array('a' => 'green', 'yellow', 'red');

echo '<br /><br />---- array_diff_assoc ----<br />';
prettyPrintArray(array_diff_assoc($array1, $array2));


/*
 * 6. array_diff_key(array $array, array ...$arrays): array
 *      - Computes the difference of arrays using kays for comparison
 */
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);

echo '<br />---- array_diff_key ----<br />';
prettyPrintArray(array_diff_key($array1, $array2));


/*
 * 7. array_diff_uassoc(array $array, array ...$arrays, callable $key_compare_func): assay
 *    - Computes the difference of arrays with additional index check
 *      whick is performed by a user supplied callback function
 */
function key_compare_func($a, $b)
{
    if($a === $b)return 0;

    return ($a > $b) ? 1 : -1;
}

$array1 = array('a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red');

$array2 = array('a' => 'green', 'yellow', 'red');

echo '---- array_diff_uassoc ----<br />';
prettyPrintArray(array_diff_uassoc($array1, $array2, 'key_compare_func'));


/*
 * 8. array_diff_ukey(array $array, array ...$arrays, callable $kay_compare_func): array
 *    - Computes the difference of arrays using a callable function 
 *      on the kays for comparison
 */
function key_compare_function($key1, $key2)
{
    if($key1 === $key2) return 0;

    return ($key1 > $key2) ? 1 : -1; 
}

$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);



echo '---- array_diff_ukey ----<br />';
prettyPrintArray(array_diff_ukey($array1, $array2, 'key_compare_function'));


/*
 * 9. array_diff(array $array, array ...$arrays): array 
 *    - computes difference of arrays
 */
 $array3 = [2,5,9,130];
 $array4 = [4, 12, 17];
echo '---- array_diff ----<br />';
prettyPrintArray(array_diff($array1, $array2, $array3, $array4));




/*
 * 10. array_fill_keys(array $keys, mixed $value): array
 *    - Fill an array with values, specifying keys
 */

$keys = ['foo', 5, 10, 'bar'];
echo '---- array_fill_keys ----<br />';
prettyPrintArray(array_fill_keys($keys, 'banana'));


/*
 * 11. array_fill(int $start_index, int $count, mixed $value): array
 *    - Fill an array with values
 *
 * 
 *  If start_index is negative, first index of returned array will be
 *  start_index and following indices will start from zero
 */
 echo '---- array_fill ----<br />';
  prettyPrintArray(array_fill(5, 6, 'banana'));

  prettyPrintArray(array_fill(-2, 4, 'pear'));


/*
 * 12. array_filter(array $array, ?callback $callback = null, int $mode = 0): array
 *    - Filters elements of an array using a callback function
 */
echo '---- array_filter ----Even nos:<br />';
$array = [1,2,3,4,5,6,7,8,9,10];
prettyPrintArray(array_filter($array, fn ($number) => $number % 2 === 0, ARRAY_FILTER_USE_KEY));

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4 ];



# case 1: ARRAY_FILTER_USE_KEY
prettyPrintArray(array_filter($arr, fn ($k) => $k == 'b', ARRAY_FILTER_USE_KEY ));



# case 2: ARRAY_FILTER_USE_BOTH
prettyPrintArray(array_filter($arr, fn ($v, $k) =>
     ($k == 'b' || $v == 4)
, ARRAY_FILTER_USE_BOTH));



/*
 * 13. array_flip(array $array): array
 *    - Exchanges all keys with their associated values in an array
 */
echo '---- array_flip ----';
$arr = ['oranges', 'apples', 'pears'];
prettyPrintArray(array_flip($arr));



/*
 * 14. array_intersect_assoc(array $array, array ...arrays): array
 *    - computes the intersection of arrays with additional index check
 */
$array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
$array2 = ['a' => 'green', 'yellow', 'blue', 'red'];
echo '---- array_intersect_assoc ----<br />';
prettyPrintArray(array_intersect_assoc($array1, $array2));//['a'=>'green']



/*
 * 15. array_intersect_key(array $array, array ...$arrays):array
 *    - computes intersection of arrays using keys for comparision
 */
$array1 = ['blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4];
$array2 = ['green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8];
echo '---- array_intersect_key ----<br />';
prettyPrintArray(array_intersect_key($array1, $array2));//['blue'=>1, 'green'=>3]




/*
 * 16. array_intersect_uassoc(array $array, array ...$arrays, callback $key_compare_func): array
 *    - computes intersection of array with additional index check, compares indexes by a callback function
 */
$array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
$array2 = ['a' => 'GREEN', 'B' => 'brown', 'yellow', 'red'];
echo '---- array_intersect_uassoc ----<br />';
prettyPrintArray(array_intersect_uassoc($array1, $array2, 'strcasecmp'));//['b'=>'brown']



/*
 * 17. array_intersect_ukey(array $array, array ...$keys, $key_compare_func): array
 *    - computes intersetion of arrays using a callback function on the keys for comparision
 */
function key_compare_func1($key1, $key2)
{
    if($key1 == $key2) return 0;

    $key = ($key1 > $key2)? 1 : -1;

    return $key;
}

$array1 = ['blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4];
$array2 = ['green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8];
echo '---- array_intersect_ukey ----<br />';
prettyPrintArray(array_intersect_ukey($array1, $array2, 'key_compare_func1'));//['blue'=>1, 'green'=>3]



/*
 * 18. array_intersect(array $array, array ...$arrays): array
 *    - Computes the intersection of arrays
 */
$array1 = ['a' => 'green', 'red', 'blue'];
$array2 = ['b' => 'green', 'yellow', 'red'];
echo '---- array_intersect ----<br />';
prettyPrintArray(array_intersect($array1, $array2));



/*
 * 19. array_is_list(array $array): bool
 *    - Checks whether a given array is a list
 */
echo '---- array_is_list ----<br />';
$array = [0 => 'apple', 2, 3];
var_dump(array_is_list($array));//true

echo '<br />array does not start with 0: ';
var_dump(array_is_list([1=>'apple','orange']));//false,

echo '<br />Keys are not in correct order: ';
var_dump(array_is_list([1=>'apple',0=>'orange']));//false

echo '<br />Non-integer keys: ';
var_dump(array_is_list([0=>'apple','foo'=>'orange']));//false

echo '<br />Non-consecutive keys: ';
var_dump(array_is_list([0=>'apple',2=>'orange']));//false

/*
 * 20. array_key_exists()
 *    - 
 */


/*
 * 21. array_key_first()
 *    - 
 */



/*
 * 22. array_key_last()
 *    - 
 */


/*
 * 23. array_keys()
 *    - 
 */


/*
 * 24. array_()
 *    - 
 */



/*
 * 25. array_map()
 *    - 
 */


/*
 * 26. array_()
 *    - 
 */



/*
 * 27. array_()
 *    - 
 */


/*
 * 28. array_()
 *    - 
 */


/*
 * 29. array_()
 *    - 
 */



/*
 * 30. array_()
 *    - 
 */



# array_values
# array_keys
# array_map
# array_merge
# array_reduce
# array_search
# in_array
# array_diff
# array_diff_assoc
# array_diff_keys
# asort
# ksort
# usort
# Array destructuring
