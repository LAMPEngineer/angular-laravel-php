<?php


require __DIR__ . '/../vendor/autoload.php';

// $invoice = new App\Invoice();
// App\Invoice::process('static call');

$str = new App\Str();

/* Non statis calls */
echo ' Non statis calls: ' . PHP_EOL;
echo $str->lower('Hello') . PHP_EOL;
echo $str->upper('Hello') . PHP_EOL;
echo $str->len('Hello') . PHP_EOL;



/* Statis calls */
echo ' Statis calls: ' . PHP_EOL;
echo App\Str::lower('Hello') . PHP_EOL;
echo App\Str::upper('Hello') . PHP_EOL;
echo App\Str::len('Hello') . PHP_EOL;

