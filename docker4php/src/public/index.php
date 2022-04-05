<?php

use App\Enums\Status;
//use App\PaymentGateway\Paddle\Transaction;
use App\PaymentGateway\Stripe\Transaction;

require __DIR__ . '/../vendor/autoload.php';



//$transaction->setStatus(Status::PAID);

var_dump(Transaction::process());