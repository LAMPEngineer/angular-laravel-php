<?php

use App\Enums\Status;
//use App\PaymentGateway\Paddle\Transaction;
use App\PaymentGateway\Stripe\Transaction;

require __DIR__ . '/../vendor/autoload.php';


// $transaction = new Transaction(25, 'Transaction 1');
// $transaction = new Transaction(25, 'Transaction 1');
// $transaction = new Transaction(25, 'Transaction 1');
// $transaction = new Transaction(25, 'Transaction 1');
// $transaction = new Transaction(25, 'Transaction 1');

//$transaction->setStatus(Status::PAID);

var_dump(Transaction::$count);