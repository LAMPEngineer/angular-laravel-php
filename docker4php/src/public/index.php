<?php

require __DIR__ . '/../vendor/autoload.php';

$invoice = new App\Invoice();

$invoice->amount = 15;

var_dump(isset($invoice->amount));

unset($invoice->amount);
