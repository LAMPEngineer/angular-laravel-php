<?php

use App\ToasterPro;
use App\Toaster;
use App\PaymentGateway\Stripe\Transaction;


require __DIR__ . '/../vendor/autoload.php';

$toaster = new ToasterPro();

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');

$toaster->toast();