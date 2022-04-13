<?php

require __DIR__ . '/../vendor/autoload.php';

$service = new \App\DebtCollectionService();

echo $service->collectDebt(new \App\CollectionAgency()). PHP_EOL;