<?php

use App\Enums\Status;
//use App\PaymentGateway\Paddle\Transaction;
use App\PaymentGateway\Stripe\Transaction;
use App\DB;

require __DIR__ . '/../vendor/autoload.php';



//$transaction->setStatus(Status::PAID);

$transaction = new Transaction(25, 'Transaction 1');

//var_dump($transaction);

$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);