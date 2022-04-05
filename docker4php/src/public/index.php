<?php

use App\PaymentGateway\Stripe\Transaction;
use App\DB;

require __DIR__ . '/../vendor/autoload.php';



$transaction = new Transaction(25, 'Transaction 1');


$db = DB::getInstance([]);
