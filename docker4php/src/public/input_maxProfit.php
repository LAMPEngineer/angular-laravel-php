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
    $sum = 0;
    for($i=0; $i < $order; $i++){

        $maxs = array_keys($inventory, max($inventory));
        $highestIndex = (int)$maxs[0];
        $sum += $inventory[$highestIndex];
        $inventory[$highestIndex] = $inventory[$highestIndex] - 1;

    }

    return $sum;

}

$inventory = [10, 10, 10, 10, 10];
$order = 50;
echo 'MaxProfit= ' . maximumProfit($inventory, $order) . PHP_EOL;

/* $fptr = fopen(getenv("OUTPUT_PATH"), "w");

$inventory_count = intval(trim(fgets(STDIN)));

$inventory = array();

for ($i = 0; $i < $inventory_count; $i++) {
    $inventory_item = intval(trim(fgets(STDIN)));
    $inventory[] = $inventory_item;
}

$order = intval(trim(fgets(STDIN)));

$result = maximumProfit($inventory, $order);

fwrite($fptr, $result . "\n");

fclose($fptr); */