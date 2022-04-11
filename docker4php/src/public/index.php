<?php

use App\ToasterPro;
use App\Toaster;
use App\PaymentGateway\Stripe\Transaction;


require __DIR__ . '/../vendor/autoload.php';

$toaster = new ToasterPro();

$toaster->addSlice(sliceX: 'bread 1');
$toaster->addSlice(sliceX:'bread 2');
$toaster->addSlice(sliceX:'bread 3');
$toaster->addSlice(sliceX:'bread 4');
$toaster->addSlice(sliceX:'bread 5');

$toaster->toastBagel();