<?php

 /* Null coalescing vs Ternary operator */

/* 
 * Null coalescing Operator ?? -
 * 
 * i. ?? is like a door that only lets NULL through 
 *
 * ii. It always returns first parameter, unless first parameter to be NULL
 *
 * iii. ?? is same as (!isset() || is_null())
 *
 * iv. it does not throws e-notice if left operand does not exist.
 *
 * v. it checks if the value is not null
 * 
 */
echo '<br/>', var_dump(true ?? 'value2'); // true
echo '<br/>', var_dump(false ?? 'value2'); // false
echo '<br/>', var_dump(null ?? 'value2'); // value2
echo '<br/>', var_dump('' ?? 'value2'); // ''
echo '<br/>', var_dump(0 ?? 'value2'); // 0



/* Coalescing chaining */
echo '<br/>Username= ', var_dump($_GET['user'] ?? $_POST['user'] ?? 'nobody'); // nobody

echo '<br/>', var_dump(null ?? 'value1' ?? 'value2'); // value1
echo '<br/>', var_dump(null ?? null ?? 'value2'); // value2
echo '<br/>', var_dump(null ?? null ?? null); // NULL
echo '<br/>', var_dump(true ?? 'value1' ?? 'value2'); // true



/* Ternery Operator - ?: -
 *
 * i. ?: is like a door that lets anything falsy through - including NULL
 *
 * ii. Anything falsy: 0, empty string, NULL, false, !isset(), empty()
 *
 * iii. X ? Y : Z
 *
 * iv. throw PHP NOTICE on undefined undefined(unset or !isset())
 *
 * v. it checks if the value is true
 */
 echo '<br/><br/><br/>', var_dump(true ?: 'value2'); // true
 echo '<br/>', var_dump(false ?: 'value2'); // value2
 echo '<br/>', var_dump(null ?: 'value2'); // value2
 echo '<br/>', var_dump('' ?: 'value2'); // value2
 echo '<br/>', var_dump(0 ?: 'value2'); // value2
 echo '<br/>', var_dump(true ? 'value1': 'value2'); // value1
 echo '<br/>', var_dump(false ? 'value1' : 'value2'); // value2



 /* Ternary chaining */
 echo '<br/>', var_dump(0 ?: 1 ?: 2 ?: 3); // 1
 echo '<br/>', var_dump(1 ?: 0 ?: 3 ?: 2); // 1
 echo '<br/>', var_dump(2 ?: 1 ?: 0 ?: 3); // 2
 echo '<br/>', var_dump(3 ?: 2 ?: 1 ?: 0); // 3

 echo '<br/>', var_dump(0 ?: 1 ?: 2 ?: 3); // 1
 echo '<br/>', var_dump(0 ?: 0 ?: 2 ?: 3); // 2
 echo '<br/>', var_dump(0 ?: 0 ?: 0 ?: 3); // 3


/* Coalescing and Ternary mixed chaining */
echo '<br/>', var_dump(0 ?? 0 ?: 3); // 3
echo '<br/>', var_dump(1 ?? 0 ?: 3); // 1
echo '<br/>', var_dump(0 ?? 2 ?: 3); // 3
echo '<br/>', var_dump(1 ?? 2 ?: 3); // 1

echo '<br/>', var_dump(null ?? 0 ?: 3); // 3
echo '<br/>', var_dump(null ?? 2 ?: 3); // 2