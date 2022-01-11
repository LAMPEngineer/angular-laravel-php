<?php 
 require_once 'index.php';

/* ARRAY */

/* array_chunk(array $array, int $length, bool $preserveKeys = false): array
 *         - Split an array into chunks
 */          
$item = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4,  'e' => 5];
prettyPrintArray(array_chunk($item, 2, true));

