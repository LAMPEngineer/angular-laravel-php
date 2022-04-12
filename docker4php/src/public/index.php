<?php

use App\Toaster;
use App\ToasterPro;
use App\FancyOven;


require __DIR__ . '/../vendor/autoload.php';

$toaster = new ToasterPro();


$toaster->addSlice('bread 1');
$toaster->addSlice('bread 2');
$toaster->addSlice('bread 3');
$toaster->addSlice('bread 4');
$toaster->addSlice('bread 5');


//dependency injection for composition
$fancyOven = new FancyOven($toaster);
$fancyOven->toastBagel();