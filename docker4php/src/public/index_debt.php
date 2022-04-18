<?php

require __DIR__ . '/../vendor/autoload.php';

$service = new \App\DebtCollectionService();

echo $service->collectDebt(new \App\Rocky()). PHP_EOL;