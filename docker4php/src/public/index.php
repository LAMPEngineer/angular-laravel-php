<?php

require __DIR__ . '/../vendor/autoload.php';

$invoice = new App\Invoice();

$invoice->process(1,2,3);

