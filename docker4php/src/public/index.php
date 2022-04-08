<?php

use App\PaymentGateway\Stripe\Transaction;


require __DIR__ . '/../vendor/autoload.php';


$transaction = new Transaction(25);

$transaction->setAmount(125); // this changes the process

$transaction->process();
