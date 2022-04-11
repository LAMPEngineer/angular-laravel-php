<?php

use App\ToasterPro;
use App\Toaster;
use App\PaymentGateway\Stripe\Transaction;


require __DIR__ . '/../vendor/autoload.php';

$toaster = new ToasterPro(5);

$toaster->addSlice('bread 1');
$toaster->addSlice('bread 2');
$toaster->addSlice('bread 3');
$toaster->addSlice('bread 4');
$toaster->addSlice('bread 5');

$toaster->toastBagel();