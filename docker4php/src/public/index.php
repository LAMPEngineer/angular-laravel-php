<?php

require __DIR__ . '/../vendor/autoload.php';

$invoice = new App\Invoice();

App\Invoice::process('static call');



