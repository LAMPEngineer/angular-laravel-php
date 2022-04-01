<?php
use \App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';


$transaction = new Transaction();

$transaction->setStatus(Transaction::STATUS_PAID);

var_dump($transaction);