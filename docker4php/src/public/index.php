<?php

use App\Toaster;
use App\PaymentGateway\Stripe\Transaction;


require __DIR__ . '/../vendor/autoload.php';

$toaster = new Toaster();

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');

$toaster->toast();