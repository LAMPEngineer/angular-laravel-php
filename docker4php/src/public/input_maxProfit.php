<?php

/*
 * Complete the 'maximumProfit' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY inventory
 *  2. LONG_INTEGER order
 */

function maximumProfit($inventory, $order) {
    // Write your code here

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$inventory_count = intval(trim(fgets(STDIN)));

$inventory = array();

for ($i = 0; $i < $inventory_count; $i++) {
    $inventory_item = intval(trim(fgets(STDIN)));
    $inventory[] = $inventory_item;
}

$order = intval(trim(fgets(STDIN)));

$result = maximumProfit($inventory, $order);

fwrite($fptr, $result . "\n");

fclose($fptr);