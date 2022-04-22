<?php

require __DIR__ . '/../vendor/autoload.php';

$invoice = new App\Invoice();

App\Invoice::process(1, 2, 3);

