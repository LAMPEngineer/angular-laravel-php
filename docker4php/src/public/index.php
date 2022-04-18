<?php

require __DIR__ . '/../vendor/autoload.php';

$invoice = new App\Invoice();

$invoice->amount = 15;

echo $invoice->amount . PHP_EOL;
