<?php

require __DIR__ . '/../vendor/autoload.php';

$collector = new \App\CollectionAgency();

echo $collector->collect(100) . PHP_EOL;