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
 * 20. array_key_exists(string|int $ksy, array $array): bool
 *    - Ckecks if the given key or index exists in the array
 */
$array = ['first'=>1,'second'=>2,'third'=>3];
echo '<br /><br />---- array_key_exists ----<br />';
var_dump(array_key_exists('first', $array));


/* array_key_exists() vs isset()
 *
 * isset() does not return 'true' for array keys that correspond 
 * to a null value, while array_key_exists() does
 */
echo '<br /><br />----array_key_exists vs isset <br /> isset: ';
$array = ['first' => null, 'second' => 4];
var_dump(isset($array['first']));//false

echo '<br />array_key_exists: ';
var_dump(array_key_exists('first', $array));//true


/* Case: array_key_exists() will search for the keys in first dimension
 * only. Nested keys in multidimensional arrays will not be found 
 */

echo '<br /> array_key_exists() with multidimensional array<br/>: ';
var_dump(array_key_exists('last_name', $records));//false


/*
 * 21. array_key_first(array $array): int|string|null
 *    - Gets the first key of an array
 */
$array = ['a' => 1, 'b' => 2, 'c' => 3];
echo '<br />---- array_key_first ----<br />';
var_dump(array_key_first($array));


/*
 * 22. array_key_last(array $array): int|string|null
 *    - Gets the last key of an array
 */
echo '<br />---- array_key_last ----<br />';
var_dump(array_key_last($array));//'c'


echo '<br /> array_key_last() vs end(): ';
var_dump(end($array));//1, end() returns value


/*
 * 23. array_keys(array $array): array
 *
 * array_keys(array $array, mixed $search_value, bool $strict=false): array
 * 
 *    
 *    
 *    - returns all keys or a subset of keys of an array 
 */
$array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];
echo '<br /><br />---- array_keys ----<br />';
prettyPrintArray(array_keys($array));


# case1:
echo 'array_keys with search value:<br />';
prettyPrintArray(array_keys($array, 10));


#case2:
echo 'array_keys with search value and strict comparision:<br />';
prettyPrintArray(array_keys($array, '15', true));



/*
 * 24. array_map(?callback $callback, array $array, array ...$arrays): array
 *    - Applies callback to the elements of given arrays
 */
$array = [1,2,3,4,5,6,];
echo '<br />---- array_map ----<br />';
prettyPrintArray(array_map(fn($num) => $num * 3, $array));


/*multiple arrays*/
$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['d' => 4, 'e' => 5, 'f' => 6];
echo 'array_map with multiple arrays:<br />';
prettyPrintArray(array_map(fn($num1, $num2) => $num1 * $num2, $array1, $array2));



/*multiple arrays with uneven length*/
$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['d' => 4, 'e' => 5];
echo 'array_map with uneven length multiple arrays:<br />';
prettyPrintArray(array_map(fn($num1, $num2) => $num1 + $num2, $array1, $array2));



/* Special case:
 * It constructs an array of arrays by using 'null' as the name of 
 * callback function
 */
echo 'construct array of arrays by using \'null\' as name of callback function:<br />';
prettyPrintArray(array_map(null, $array1, $array2));



/*
 * 25. array_merge(array ...$arrays): array
 *    - Merge one or more arrays
 */
$array1 = [1,2,3];
$array2 = [4,5,6];
$array3 = [7,8,9];

echo '<br />---- array_merge ----<br />';
prettyPrintArray(array_merge($array1, $array2, $array3));



/*case1: if imput array have numeric keys, later values not overwrite 
the original values, but will append*/
$array1 = [1,2,3];
$array2 = [6 => 4, 7 => 5, 8 => 6];
$array3 = [7,8,9];

echo '<br /> imput array with numric keys:<br />';
prettyPrintArray(array_merge($array1, $array2, $array3));



/*case2: if imput array have string keys, later values will overwrite 
the original values*/
$array1 = [1,2,3];
$array2 = ['a' => 4, 'b' => 5, 'c' => 6];
$array3 = [7,8,9];

echo '<br /> imput array with string keys:<br />';
prettyPrintArray(array_merge($array1, $array2, $array3));



/*
 * 26. array_merge_recursive(array ...$arrays): array
 *    - merge one or more arrays recursively
 *
 * cases:
 * i. if input array have string keys, the values for these keys are 
 * merge together into an array, and this is done recursively
 *
 * ii. if one of the value itself is an array, the function will merge 
 * it with a corresponding entery in another array too
 *
 * iii. if array have numeric key, the later value will not overwrite 
 * the original value, but will append
 * 
 */
$arr1 = ['color' => ['favorite' => 'red'], 5];
$arr2 = [10, 'color' => ['favorite' => 'green', 'blue']];

echo '<br />---- array_merge_recursive ----<br />';
prettyPrintArray(array_merge_recursive($arr1, $arr2));
//prettyPrintArray(array_merge($arr1, $arr2));



/*
 * 27. array_multisort(
 * array &$array1,
 * mixed $array1_sort_order = SORT_ASC,
 * mixed $array1_sort_flag = SORT_REGULAR,
 * mixed ...$rest
 * ): bool
 * 
 *    - Sort multiple or multi-dimensional arrays
 */
echo '<br />---- array_multisort ----<br />';
# sorting single array
$arr = ['green','cyan','yellow','blue','orange','black'];
array_multisort($arr, SORT_ASC, SORT_STRING);
prettyPrintArray($arr);



# sorting multiple arrays
$arr1 = [10,100,100,0];
$arr2 = [1,3,2,4];
$arr3 = ['c','d','a','y'];
array_multisort($arr1, $arr2, $arr3);
prettyPrintArray($arr1);
prettyPrintArray($arr2);
prettyPrintArray($arr3);



# sorting multidimensionl array
$ar = [['10',11,100,100,'a'],[1,2,'2',3,1]];
array_multisort($ar[0], SORT_ASC, SORT_STRING,
                $ar[1], SORT_NUMERIC, SORT_DESC);
prettyPrintArray($ar);




/*
 * 28. array_pad(array $array, int $lungth, mixed $value): array
 *    - Pad array to the specified length with a value
 */
echo '<br />---- array_pad ----<br />';
$arr = [12,10,9];

# case 1:
prettyPrintArray(array_pad($arr, 5, 0));//12, 10, 9, 0, 0

# case 2:
prettyPrintArray(array_pad($arr, -7, -1));//-1, -1, -1, -1, 12, 10, 9

# case 3:
prettyPrintArray(array_pad($arr, 2, 'noop'));// not padded





/*
 * 29. array_pop(array &$array): mixed
 *    - Pop the element off the end of array
 */
echo '<br />---- array_pop ----<br />';
$stack = ['orange', 'banana', 'apple', 'raspberry'];
$fruit = array_pop($stack);
prettyPrintArray($stack);

//raspberry assign to $fruit
echo 'pop = '.$fruit;



/*
 * 30. array_push(array &$array, mixed ...$values): int
 *    - Push one or more elements onto the end array
 */
echo '<br />---- array_push ----<br />';
$stack = ['orange', 'banana'];
array_push($stack, 'apple', 'raspberry');
prettyPrintArray($stack);



/*
 * 31. array_product(array $array): int|float
 *    - Calculate the product of values in an array
 */
echo '<br />---- array_product ----<br />';
echo 'array_product='.array_product($arr);



/*
 * 32. array_rand(array $array, int $num = 1): int|string|array
 *    - Pick one or more random keys out of an array
 */
$input = array('Neo', 'Morpheus', 'Trinity', 'Cypher', 'Tank');
$rand_keys = array_rand($input, 2);
echo '<br /><br />---- array_rand ----<br />';
echo 'One= '.$input[$rand_keys[0]]. "<br />";
echo 'Two= '.$input[$rand_keys[1]]. "<br />";


/*
 * 33. array_reduce(array $array, callable $callback, mixed $initial = null) :mixed
 *    - Iteratively reduce array to a single valye using a callback funtion
 */
$invoiceItems = [
['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5'],
];

$total = array_reduce(
    $invoiceItems, 
    fn ($sum, $item) => $sum + $item['qty'] * $item['price'], 500
);

echo '<br />---- array_reduce ----<br />';
echo 'Total Invoice ='. $total; //258.9 & with initial value = 758.9


/*
 * 34. array_replace(array $array, array ...$replacements): array
 *    - Replases elements from passed arrays into the first array
 */
$base = ['orange', 'banana', 'apple', 'raspberry'];
$replace1 = [0 => 'pineapple', 4 => 'cherry'];
$replace2 = [0 => 'grape'];

$basket = array_replace($base, $replace1, $replace2);

echo '<br /><br />---- array_replace ----<br />';
prettyPrintArray($basket);

/*
 * 35. array_replace_recursive()
 *    - 
 */
$base = ['citrus' => ['orange'], 'berries' => ['blackberry', 'raspberry']];
$replace = ['citrus' => ['pineapple'], 'berries' => ['blueberry']];
$basket = array_replace_recursive($base, $replace);

echo '<br />---- array_replace_recursive ----<br />';
prettyPrintArray($basket);

/*
 * 36. array_reverse(array $array, bool $preserve_key = false): array
 *    - return an array with elements in reverse order
 */
 $input = ['php', 4.0, ['green', 'red']];
 $reversed = array_reverse($input);
 $preserved = array_reverse($input, true);

echo '<br />---- array_reverse ----<br />';
echo 'input array: ';prettyPrintArray($input);
echo 'reversed array: ';prettyPrintArray($reversed);
echo 'preserved array: ';prettyPrintArray($preserved);


/*
 * 37. array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false
 *    - Searches array for a given value and returns first corresponding key if successful
 */
$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];
$key = array_search('D', $array);

echo '<br /><br />---- array_search ----<br />'; 
var_dump($key);


/*
 * 38. in_array(mixed $needle, array $haystack, bool $strict = false): bool
 *    - Checks if a value exists in an array
 */
echo '<br /><br />---- in_array ----<br />'; 
 if(in_array('a', $array)){
    echo 'Letter found';
 }


/*
 * 39. array_shift(array &$array): mixed
 *    - Shift an element off the begining of array
 */
 $stack = ['orange', 'banana', 'apple', 'raspberry'];
 $fruit = array_shift($stack);
 echo '<br /><br />---- array_shift ----<br />'; 
 prettyPrintArray($stack);

/*
 * 40. array_slice(
 * array $array,
 * int $offset,
 * ?int $length = null,
 * bool $preserve_keys = false
 * ): array
 *    - Extract a sclice of array
 */
$input = ['a', 'b', 'c', 'd', 'e'];
echo '<br /><br />---- array_slice ----<br />'; 
prettyPrintArray(array_slice($input, 0, 3)); // [a, b, c]
prettyPrintArray(array_slice($input, -2, 1)); // [d]


/*
 * 41. array_splice(
 *  array &$input,
 *  int $offset,
 *  ?int $length = null,
 *  mixed $replacement = []
 * )
 *    - Remove a portion of array and replace it with something else
 */
$input = ['red', 'green', 'blue', 'yellow'];
array_splice($input, -1, 1, array("black", "maroon"));
echo '<br /><br />---- array_splice ----<br />'; 
prettyPrintArray($input); // [red, green, blue, black, maroon]


/*
 * 42. array_sum(array $array): int|float
 *    - returns the sum of values in an array
 */
echo '<br /><br />---- array_sum ----<br />';
 $a = [2, 4, 6, 8];

 echo "sum(a) = " . array_sum($a) . "<br />";
 $b = ['a' => 1.2, 'b' => 2.3, 'c' => 3.4];
 echo "sum(b) = ". array_sum($b);


/*
 * 43. array_udiff(array $array, array ...$arrays, callable $value_compare_func): array
 *    - computes difference of array by using a callback function for data comparison
 */

  /*case1: stdclass object*/
 $arr1 = [new stdclass, new stdclass, new stdclass, new stdclass];

 $arr2 = [new stdclass, new stdclass];
 $arr1[0]->width = 11; $arr1[0]->height = 3;
 $arr1[1]->width = 7; $arr1[1]->height = 1;
 $arr1[2]->width = 2; $arr1[2]->height = 9;
 $arr1[3]->width = 5; $arr1[3]->height = 7;

 $arr2[0]->width = 7; $arr2[0]->height = 5;
 $arr2[1]->width = 9; $arr2[1]->height = 2;

 function compare_by_area($a, $b){
    $areaA = $a->width * $a->height;
    $areaB = $b->width * $b->height;

    if ($areaA < $areaB) {
        return -1;
    } elseif ($areaA > $areaB){
        return 1;
    } else {
        return 0;
    }

 }
 
 echo '<br /><br />---- array_udiff ----<br />';
 prettyPrintArray($arr1);
 prettyPrintArray($arr2);
 echo 'Difference:';
 prettyPrintArray(array_udiff($arr1, $arr2, 'compare_by_area'));

 
 /*case2: DateTime object
  *       BookMyCalender.php script
  */
  



/*
 * 44. array_unique(array $array, int $flags = SORT_STRING): array
 *    - Removes duplicate values from an array
 */
  $arr = ['a' => 'green', 'red', 'b' => 'green', 'blue', 'red'];

  echo '<br /><br />---- array_unique ----<br />'; 
  prettyPrintArray(array_unique($arr));



/*
 * 45. array_unshift(array &$array, mixed ...$values): int
 *    - prepend one or more elements to the beginning of an array
 */
 $queue = ['orange', 'banana'];
 array_unshift($queue, 'apple', 'raspberry');

 echo '<br /><br />---- array_unshift ----<br />';
 prettyPrintArray($queue);



/*
 * 46. array_values(array $array): array
 *    - return all values of an array
 */
 echo '<br /><br />---- array_values ----<br />';  
 prettyPrintArray(array_values($arr));
 

/*
 * 47. array_walk(array|object &$array, callable $callback, mixed $arg = null): bool
 *    - apply a user supplied function to every member of an array. 
 */
  $fruits = ['d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple'];

  function test_alter(&$item1, $key, $prefix)
  {
    $item1 = "$prefix. $item1";
  }

  function test_print($item2, $key)
  {
    echo "$key. $item2 <br />";
  }

  echo '<br /><br />---- array_walk ----<br />';
  echo "Before...:<br />";
  array_walk($fruits, 'test_print');
  
  array_walk($fruits, 'test_alter', 'fruit');
  echo "<br />... and after:<br />";

  array_walk($fruits, 'test_print');
