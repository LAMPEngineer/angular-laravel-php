<?php

use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';


$transaction = new Transaction();

$transaction->setStatus(Status::PAID);

var_dump($transaction);