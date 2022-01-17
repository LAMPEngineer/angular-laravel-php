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
 * 8. array_diff_ukey()
 *    - 
 */


/*
 * 9. array_diff() 
 *    - 
 */


/*
 * 10. array_fill_keys()
 *    - 
 */



/*
 * 11. array_diff_ukey()
 *    -
 */
# array_filter
# array_values
# array_filter - no callback
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
